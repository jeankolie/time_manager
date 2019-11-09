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
Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index');

	Route::resource('departements', 'DepartementController');

	Route::resource('matieres', 'MatiereController')->middleware('admin');

	Route::resource('annees', 'AnneeController')->middleware('admin');

	Route::resource('emplois', 'EmploisController')->middleware('dep');

	Route::resource('mon-compte', 'CompteController');

	Route::resource('personnels', 'PersonnelController');

	Route::resource('etudiants', 'EtudiantController')->middleware('dep');

	Route::get('/personnel/departement/{departement}', 'PersonnelController@show');

	Route::get('/home', 'HomeController@index')->name('home');


  Route::get('/licence/{licence}/semestre', function($licence) {
      return App\Models\Licence::find($licence)->semestres->toJson();
  });

});
