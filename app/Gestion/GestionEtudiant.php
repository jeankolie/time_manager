<?php
/**
 * 
 */

namespace App\Gestion;

use App\Models\{Etudiant, Inscrire, Annee};
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Mail\{SendNotification};
use Illuminate\Support\Facades\Mail;

class GestionEtudiant
{
	public function create($data)
	{

		$password = generateOTP();

		$etudiant = Etudiant::create([
			'matricule' => $data->matricule,
			'nom' => $data->nom,
			'prenom' => $data->prenom,
			'email' => $data->email,
			'telephone' => $data->telephone,
			'password' => Hash::make($password)
		]);

		$etudiant->sha = sha1($etudiant->id_etudiant);
		$etudiant->save();

		Inscrire::create([
			'id_etudiant' => $etudiant->id_etudiant, 
			'id_departement' => Auth::user()->departement->id_departement, 
			'id_annee' => Annee::orderBy('id_annee', 'desc')->take(1)->first()->id_annee, 
			'id_licence' => $data->licence, 
			'date_inscription' => date('Y-m-d')
		]);

		$url = "https://www.time-manager.eviltech.org";
		$msg = "Consulter votre emploi sur $url, vos identifiants sont: $data->matricule et votre mot de passe: $password";

		try {
			sendSMS($data->telephone, $msg);
			Mail::to($data->email)->send(new SendNotification($msg));
		} catch (Swift_TransportException $e) {
			return;
		}
			
	}

	public function update($data)
	{
		Etudiant::find($data->etudiant)->update([
			'matricule' => $data->matricule,
			'nom' => $data->nom,
			'prenom' => $data->prenom,
			'email' => $data->email,
			'telephone'=>$data->telephone

		]);

		$annee = Annee::orderBy('id_annee', 'desc')->take(1)->first()->id_annee;

		Inscrire::where('id_etudiant', $data->etudiant)->where('id_annee', $annee)->update([
			'id_licence' => $data->licence
		]);
	}

	public function delete($matricule)
	{
		$etudiant = Etudiant::whereMatricule($matricule)->first()->id_etudiant;
		$annee = Annee::orderBy('id_annee', 'desc')->take(1)->first()->id_annee;
		Inscrire::where('id_etudiant', $etudiant)->where('id_annee', $annee)->delete();
	}
}