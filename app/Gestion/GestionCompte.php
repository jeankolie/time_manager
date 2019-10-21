<?php
/**
 * 
 */

namespace App\Gestion;

use App\Models\{Compte};
use Illuminate\Support\Str;

class GestionCompte
{
	public function create($data)
	{
		Compte::create([
			'nom' => $data->nom,
			'slug' => Str::slug($data->nom, '-')
		]);
	}

	public function update($data)
	{
		Compte::where('id_compte', '=', $data->id)->update([
			'nom' => $data->nom,
			'slug' => Str::slug($data->nom, '-')
		]);
	}
}