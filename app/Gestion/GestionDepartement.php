<?php
/**
 * 
 */

namespace App\Gestion;

use App\Models\{Departement};
use Illuminate\Support\Str;

class GestionDepartement
{
	public function create($data)
	{
		Departement::create([
			'nom' => $data->nom,
			'slug' => Str::slug($data->nom, '-')
		]);
	}

	public function update($data)
	{
		Departement::where('id_departement', '=', $data->id)->update([
			'nom' => $data->nom,
			'slug' => Str::slug($data->nom, '-')
		]);
	}
}