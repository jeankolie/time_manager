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

Route::resource('matieres', 'MatiereController');

Route::resource('departements', 'DepartementController');

Route::resource('emplois', 'EmploisController');

Route::resource('comptes', 'CompteController');

Route::resource('personnels', 'PersonnelController');
