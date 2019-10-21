<?php
/**
 * 
 */

namespace App\Gestion;

use App\Models\{Home};
use Illuminate\Support\Str;

class GestionHome
{
	public function create($data)
	{
		Home::create([
			'nom' => $data->nom,
			'slug' => Str::slug($data->nom, '-')
		]);
	}

	public function update($data)
	{
		Home::where('id_home', '=', $data->id)->update([
			'nom' => $data->nom,
			'slug' => Str::slug($data->nom, '-')
		]);
	}
}