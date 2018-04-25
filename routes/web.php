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


//infos-admin
Route::get('/dso/{idDso}/devis/infos-admin', 'DsorootController@index')->name('infos-admin');
Route::get('/dso/{idDso}/devis/infos-admin/create', 'DsorootController@create')->name('infos-admin_create');


// emballages
Route::get('/dso/{idDso}/emballages', 'EmballageController@index')->name('emballage-index');
Route::get('/dso/{idDso}/emballages/create', 'EmballageController@create')->name('emballage-create');
Route::post('/dso/{idDso}/emballages', 'EmballageController@store')->name('emballage-store');
Route::get('/dso/{idDso}/emballages/{idEmballage}', 'EmballageController@show')->name('emballage-show');
Route::get('/dso/{idDso}/emballages/{idEmballage}/edit', 'EmballageController@edit')->name('emballage-edit');
Route::post('/dso/{idDso}/emballages/{idEmballage}/edit', 'EmballageController@update')->name('emballage-update');
Route::get('/dso/{idDso}/emballages/{idEmballage}/destroy', 'EmballageController@destroy')->name('emballage-destroy');

// etiquettes
Route::get('/dso/{idDso}/etiquettes', 'EtiquetteController@index')->name('etiquette-index');
Route::get('/dso/{idDso}/etiquettes/create', 'EtiquetteController@create')->name('etiquette-create');
Route::post('/dso/{idDso}/etiquettes', 'EtiquetteController@store')->name('etiquette-store');
Route::get('/dso/{idDso}/etiquettes/{idEtiquette}', 'EtiquetteController@show')->name('etiquette-show');
Route::get('/dso/{idDso}/etiquettes/{idEtiquette}/edit', 'EtiquetteController@edit')->name('etiquette-edit');
Route::post('/dso/{idDso}/etiquettes/{idEtiquette}/edit', 'EtiquetteController@update')->name('etiquette-update');
Route::get('/dso/{idDso}/etiquettes/{idEtiquette}/destroy', 'EtiquetteController@destroy')->name('etiquette-destroy');

// nouveau dso
Route::get('/{idUser}/nouveau-dso', 'DsorootController@create')->name('nouveau-dso');
Route::post('/{idUser}/nouveau-dso', 'DsorootController@store');
Route::get('/{idUser}/edit/{idDso}', 'DsorootController@edit');
Route::post('/{$idUser}/edit/{$idDso}', 'DsorootController@update');

// affichage liste dso sur acceuil
Route::get('/accueil', 'DsorootController@index')->name('accueil');



// Route qui permet de sécurisé le site -> demande de connexion si user non connecté
Route::get('/', function () {
    if (Auth::check()) {
    return view('home');
    }
    else{
        return view('layouts.app');
    }
});

//Gestion des utilisateurs par l'adv
Route::get('/users/index', 'CompteController@show')->name('users-index');
Route::post('/users/add', 'CompteController@create')->name('adduser');
Route::get('/users/{id}/delete', 'CompteController@destroy')->name('delete');

Route::get('/users/create', function () {
    return view('/users/create');
})->name('users-create-form');


Route::get('/home', 'HomeController@index')->name('home');
