<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Illuminate\Support\Facades\Hash;
use App\Models\{Etudiant, Inscrire, Annee};

Auth::routes();

Route::get('/update/database', function() {
	$etudiants = Etudiant::all();
	foreach ($etudiants as $etudiant) {
		$etudiant->sha = sha1($etudiant->id_etudiant);
		$etudiant->save();
	}

	return redirect('/'); 
});

Route::get('/emplois-du-temps/{etudiant}', 'EtudiantController@monEmplois');

Route::post('/login-etudiant', 'EtudiantController@login');

Route::group(['middleware' => ['auth']], function () {

	Route::get('/reset/{email}', function ($email){

		$otp = time();

		\App\Models\Personnel::whereLogin($email)->update([
			'password' => Hash::make($otp)
		]);
		return view('reset', [
			'otp' => $otp,
			'email'  => $email
		]);
	})->middleware('admin');
	
    Route::get('/', 'HomeController@index');

    Route::get('/portail', 'EtudiantController@portail')->middleware('etudiant');

	Route::resource('departements', 'DepartementController');

	Route::resource('matieres', 'MatiereController')->middleware('admin');

	Route::resource('annees', 'AnneeController')->middleware('admin');

	Route::resource('emplois', 'EmploisController')->middleware('dep');

	Route::post('/envoyer-message', 'EmploisController@envoyerMessage')->middleware('dep');

	Route::resource('salles', 'SalleController');

	Route::resource('mon-compte', 'CompteController');

	Route::resource('personnels', 'PersonnelController');

	Route::resource('etudiants', 'EtudiantController')->middleware('dep');

	Route::get('/personnel/departement/{departement}', 'PersonnelController@show');

	Route::get('/home', 'HomeController@index')->name('home');


	Route::get('/licence/{licence}/semestre', function($licence) {
	      return App\Models\Licence::find($licence)->semestres->toJson();
	});
});

	
