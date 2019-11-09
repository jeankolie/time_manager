<?php
/**
 *
 */

namespace App\Gestion;

use App\Models\{Enseigner, Annee};
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class GestionEmplois
{
	public function create($data)
	{
		Enseigner::create([
			'jour' => $data->jour,
			'id_salle' => $data->salle,
			'professeur' => $data->professeur,
			'id_semestre' => $data->semestre,
			'id_departement' => Auth::user()->departement->id_departement,
			'id_matiere' => $data->matiere,
			'id_annee' => Annee::orderBy('id_annee', 'desc')->take(1)->first()->id_annee,
			'intervale' => $data->intervale
		]);
	}

	public function update($data, $id)
	{
		Enseigner::find($id)->update([
			'nom' => $data->nom,
			'login' => $data->login
		]);
	}

	public function delete($data)
	{
		Enseigner::whereJour($data->jours)
		->where('id_semestre', $data->semestre)
		->where('intervale', $data->intervale)
		->where('id_annee', Annee::orderBy('id_annee', 'desc')->take(1)->first()->id_annee)
		->where('id_departement', Auth::user()->departement->id_departement)
		->delete();
	}
}
