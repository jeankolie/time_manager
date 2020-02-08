<?php
/**
 * 
 */

namespace App\Gestion;

use App\Models\{Personnel};
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Mail\SendCredential;
use Illuminate\Support\Facades\Mail;

class GestionPersonnel
{
	public function create($data)
	{

		$priorite=2;
		if (Auth::user()->priorite == 0) {
			$priorite = 1;
		}

		$password = $this->generateNumericOTP();

		$user = Personnel::create([
			'nom' => $data->nom,
			'login' => $data->login,
			'password' => Hash::make($password),
			'id_departement' => $data->departement,
			'priorite' => $priorite
		]);

		try {
			Mail::to($user->login)->send(new SendCredential($user, $password));
		} catch (Exception $e) {
			
		}
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
		if (Auth::user()->login == $slug) {
			return;
		}
		Personnel::whereLogin($slug)->delete();
	}

	public function generateNumericOTP($n = 6) {  
	    $generator = "1357902468";
	  
	    $result = ""; 
	  
	    for ($i = 1; $i <= $n; $i++) { 
	        $result .= substr($generator, (rand()%(strlen($generator))), 1); 
	    } 
	    // Return result 
	    return $result; 
	}
}