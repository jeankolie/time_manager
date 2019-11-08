<?php
/**
 * 
 */

namespace App\Gestion;

use App\Models\{Etudiant, Inscrire, Annee};
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class GestionEtudiant
{
	public function create($data)
	{
		$etudiant = Etudiant::create([
			'matricule' => $data->matricule,
			'nom' => $data->nom,
			'prenom' => $data->prenom,
			'password' => Hash::make($data->password)
		]);

		Inscrire::create([
			'id_etudiant' => $etudiant->id_etudiant, 
			'id_departement' => Auth::user()->departement->id_departement, 
			'id_annee' => Annee::orderBy('id_annee', 'desc')->take(1)->first()->id_annee, 
			'id_licence' => $data->licence, 
			'date_inscription' => date('Y-m-d')
		]);
	}

	public function update($data)
	{
		Etudiant::find($data->etudiant)->update([
			'matricule' => $data->matricule,
			'nom' => $data->nom,
			'prenom' => $data->prenom
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