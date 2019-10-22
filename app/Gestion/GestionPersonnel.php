<?php
/**
 * 
 */

namespace App\Gestion;

use App\Models\{Personnel};
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class GestionPersonnel
{
	public function create($data)
	{
		Personnel::create([
			'nom' => $data->nom,
			'login' => $data->login,
			'password' => Hash::make($data->password),
			'id_departement' => $data->departement
		]);
	}

	public function update($data, $id)
	{
		Personnel::find($id)->update([
			'nom' => $data->nom,
			'login' => $data->login
		]);
	}
}