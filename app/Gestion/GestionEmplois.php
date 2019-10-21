<?php
/**
 * 
 */

namespace App\Gestion;

use App\Models\{Emplois};
use Illuminate\Support\Str;

class GestionEmplois
{
	public function create($data)
	{
		Emplois::create([
			'nom' => $data->nom,
			'slug' => Str::slug($data->nom, '-')
		]);
	}

	public function update($data)
	{
		Emplois::where('id_emplois', '=', $data->id)->update([
			'nom' => $data->nom,
			'slug' => Str::slug($data->nom, '-')
		]);
	}
}