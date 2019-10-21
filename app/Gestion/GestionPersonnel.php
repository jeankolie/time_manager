<?php
/**
 * 
 */

namespace App\Gestion;

use App\Models\{Personnel};
use Illuminate\Support\Str;

class GestionPersonnel
{
	public function create($data)
	{
		Personnel::create([
			'nom' => $data->nom,
			'slug' => Str::slug($data->nom, '-')
		]);
	}

	public function update($data)
	{
		Personnel::where('id_personnel', '=', $data->id)->update([
			'nom' => $data->nom,
			'slug' => Str::slug($data->nom, '-')
		]);
	}
}