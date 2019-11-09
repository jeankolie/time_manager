<?php
/**
 *
 */

namespace App\Gestion;

use App\Models\{Enseigner};
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class GestionEnseigner
{
	public function create($data)
	{

		$priorite=2;
		if (Auth::user()->priorite == 0) {
			$priorite = 1;
		}


		Enseigner::create([
			'jour' => $data->jour,
			'id_salle' => $data->salle,
			'professeur' => $data->professeur,
			'id_licence' => $data->licence,
			'id_semestre' => $data->semestre,
			'id_departement' => Auth::user()->departement->id_departement,
			'id_matiere' => $data->matiere,
			'id_annee' => $data-> Annee::orderBy('id_annee', 'desc')->take(1)->first()->id_annee,
			'intervale' => $data->intervale;
		]);
	}

	public function update($data, $id)
	{
		Enseigner::find($id)->update([
			'nom' => $data->nom,
			'login' => $data->login
		]);
	}

	public function delete($slug)
	{
		if (Auth::user()->login == $slug) {
			return;
		}
		Enseigner::whereLogin($slug)->delete();
	}
}
