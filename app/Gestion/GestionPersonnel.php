<?php
/**
 * 
 */

namespace App\Gestion;

use App\Models\{Personnel};
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class GestionPersonnel
{
	public function create($data)
	{

		$priorite=2;
		if (Auth::user()->priorite == 0) {
			$priorite = 1;
		}


		Personnel::create([
			'nom' => $data->nom,
			'login' => $data->login,
			'password' => Hash::make($data->password),
			'id_departement' => $data->departement,
			'priorite' => $priorite
		]);
	}

	public function update($data, $id)
	{
		Personnel::find($id)->update([
			'nom' => $data->nom,
			'login' => $data->login
		]);
	}

	public function delete($slug)
	{
		if (Auth::user()->login = $slug) {
			return;
		}
		Personnel::whereLogin($slug)->delete();
	}
}