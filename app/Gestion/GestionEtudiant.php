<?php
/**
 * 
 */

namespace App\Gestion;

use App\Models\{Etudiant, Inscrire};
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
			'id_annee' => $data->annee, 
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
	}
}