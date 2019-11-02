<?php
/**
 * 
 */

namespace App\Gestion;

use App\Models\{Personnel};
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class GestionCompte
{
	public function create($data)
	{
		
	}

	public function update($data, $id)
	{
		if ($data->operation == 'compte') {
			Personnel::find($id)->update([
				'nom' => $data->nom,
				'login' => $data->login
			]);
		}else{
			Personnel::find($id)->update([
				'password' => Hash::make($data->password)
			]);
		}
			
	}
}