<?php
/**
 * 
 */

namespace App\Gestion;

use App\Models\{Matiere};
use Illuminate\Support\Str;

class GestionMatiere
{
	public function create($data)
	{
		Matiere::create([
			'nom' => $data->nom,
			'slug' => Str::slug($data->nom, '-')
		]);
	}

	public function update($data)
	{
		Matiere::where('id_matiere', '=', $data->id)->update([
			'nom' => $data->nom,
			'slug' => Str::slug($data->nom, '-')
		]);
	}
}