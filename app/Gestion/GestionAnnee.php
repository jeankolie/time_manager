<?php
/**
 * 
 */

namespace App\Gestion;

use App\Models\{Annee};
use Illuminate\Support\Str;

class GestionAnnee
{
	public function create($data)
	{
		Annee::create([
			'nom' => $data->nom,
			'slug' => Str::slug($data->nom, '-')
		]);
	}

	public function update($data)
	{
		Annee::where('id_annee', '=', $data->id)->update([
			'nom' => $data->nom,
			'slug' => Str::slug($data->nom, '-')
		]);
	}
}