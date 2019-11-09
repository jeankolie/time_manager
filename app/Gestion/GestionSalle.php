<?php
/**
 *
 */

namespace App\Gestion;

use App\Models\{Annee};
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class GestionSalle
{
	public function create($data)
	{
		Salle::create([
			'nom' => $data->nom,
			'slug' => Str::slug($data->nom, '-')
		]);
	}

	public function update($data)
	{
		Salle::where('id_salle', '=', $data->id)->update([
			'nom' => $data->nom
		]);
	}

	public function delete($slug)
	{
		Salle::find($slug)->delete();
	}
}
