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
Route::get('/accueil', function () {
    return view('accueil');
});

Route::get('/archives', function(){
	return view('archives');
});

Route::get('/combinaisons', function(){
	return view('combinaisons');
});

Route::get('/etiquettes', function(){
	return view('etiquettes');
});

Route::get('/emballages', function(){
	return view('emballages');
});

Route::get('/connexion', function () {
    return view('connexion');
})->name('connexion');

Route::get('/nouveau_dso', function(){
	return view('nouveau_dso');
}); 

Route::get('/layout', function(){
	return view('layout');
}); 

Route::get('/', function(){
	return view('welcome');
});

// Route::get('/dso/{idDso}/devis/infos-admin', 'DsorootController@index')->name('infos-admin');
// Route::get('/dso/{idDso}/devis/infos-admin/create', 'DsorootController@create')->name('infos-admin_create');
