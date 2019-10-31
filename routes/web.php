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

Route::get('/', 'HomeController@index');

Route::resource('departements', 'DepartementController');

Route::resource('matieres', 'MatiereController');

Route::resource('emplois', 'EmploisController');

Route::resource('mon-compte', 'CompteController');

Route::resource('personnels', 'PersonnelController');

Route::get('/personnel/departement/{departement}', 'PersonnelController@show');
