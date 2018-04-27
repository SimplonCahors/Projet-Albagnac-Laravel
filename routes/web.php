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
// login
Auth::routes();

// affichage liste dso sur accueil
Route::get('/accueil', 'DsorootController@index')->name('accueil');



Route::post('/dso/{idDso}/valide', 'DsorootController@dsovalide')->name('valide');
Route::post('/dso/{idDso}/termine', 'DsorootController@dsotermine')->name('termine');

//archives
Route::get('/archives', 'ArchivesController@index')->name('archives');

// nouveau dso
Route::get('/nouveau-dso', 'DsorootController@create')->name('dso-create');
Route::post('/nouveau-dso', 'DsorootController@store');
Route::get('/edit/{idDso}', 'DsorootController@edit')->name('dso-edit');
Route::post('/edit/{$idDso}', 'DsorootController@update');


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



Route::get('/etiquettes/liste', function () {
    return view('dso/etiquettes/index');
});

Route::get('/emballages/liste', function () {
    return view('dso/emballages/index');
});


/*====================================
=            Routes devis            =
====================================*/
//Devis A

Route::get('/dso/{idDso}/devis/a/edit', 'DevisAController@edit')->name('devis-a-edit');
Route::post('/dso/{idDso}/devis/a/', 'DevisAController@update')->name('devis-a-update');

//Devis B

Route::get('/dso/{idDso}/devis/b/edit', 'DevisBController@edit')->name('devis-b-edit');
Route::post('/dso/{idDso}/devis/b/', 'DevisBController@update')->name('devis-b-update');

//Devis C

Route::get('/dso/{idDso}/devis/c/edit', 'DevisCController@edit')->name('devis-c-edit');
Route::post('/dso/{idDso}/devis/c/', 'DevisCController@update')->name('devis-c-update');

//Devis D

Route::get('/dso/{idDso}/devis/d/edit', 'DevisDController@edit')->name('devis-d-edit');
Route::post('/dso/{idDso}/devis/d/', 'DevisDController@update')->name('devis-d-update');

//Devis E

Route::get('/dso/{idDso}/devis/e/edit', 'DevisEController@edit')->name('devis-e-edit');
Route::post('/dso/{idDso}/devis/e/', 'DevisEController@update')->name('devis-e-update');

//Devis F

Route::get('/dso/{idDso}/devis/f/edit', 'DevisFController@edit')->name('devis-f-edit');
Route::post('/dso/{idDso}/devis/f/', 'DevisFController@update')->name('devis-f-update');

/*=====  End of Routes devis  ======*/






/*
|--------------------------------------------------------------------------
| route à vérifier ensemble
|--------------------------------------------------------------------------
*/


// Route qui permet de sécurisé le site -> demande de connexion si user non connecté
Route::get('/', function () {
    if (Auth::check()) {
        return view('home');
    } else {
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
