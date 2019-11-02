<?php
/**
 * 
 */

namespace App\Gestion;

use App\Models\{Personnel};
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class GestionCompte
{
	public function create($data)
	{
		
	}

	public function update($data, $id)
	{
		Personnel::find($id)->update([
			'nom' => $data->nom,
			'login' => $data->login
		]);
	}
}