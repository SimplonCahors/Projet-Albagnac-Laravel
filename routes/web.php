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

/*
|--------------------------------------------------------------------------
| Bonnes routes
|--------------------------------------------------------------------------
*/


Route::get('posts/{post}/comments/{comment}', function ($postId, $commentId) {
    //
});


//infos-admin
Route::get('/dso/{idDso}/devis/infos-admin', 'DsorootController@index')->name('infos-admin');
Route::get('/dso/{idDso}/devis/infos-admin/create', 'DsorootController@create')->name('infos-admin_create');


// emballages
Route::get('/dso/{idDso}/emballages', 'EmballageController@index');
Route::get('/dso/{idDso}/emballages/create', 'EmballageController@create');
Route::post('/dso/{idDso}/emballages', 'EmballageController@store');
// Route::get('/dso/{idDso}/emballages', function ($idDso) {
//     return view('addPage', ['idDso' => $idDso]);
// }) -> name('addPage');

Route::get('/dso/{idDso}/emballages/{idEmballages}', 'EmballageController@show');
Route::get('/dso/{idDso}/emballages/{idEmballages}', 'EmballageController@edit');


// etiquettes
Route::get('/dso/{idDso}/etiquettes', 'EtiquetteController@index');
Route::get('/dso/{idDso}/etiquettes/create', 'EtiquetteController@create');
Route::get('/dso/{idDso}/etiquettes/{idEtiquettes}', 'EtiquetteController@show');
Route::post('/dso/{idDso}/etiquettes', 'EtiquetteController@store');


/*
|--------------------------------------------------------------------------
| routes du front à redispatcher
|--------------------------------------------------------------------------
*/

Route::get('/accueil', function () {
    return view('accueil');
});

Route::get('/archives', function () {
    return view('archives');
});

Route::get('/combinaisons', function () {
    return view('combinaisons');
});

Route::get('/etiquettes', function () {
    return view('etiquettes');
});

Route::get('/emballages', function () {
    return view('emballages');
});

Route::get('/connexion', function () {
    return view('connexion');
})->name('connexion');

Route::get('/nouveau_dso', function () {
    return view('nouveau_dso');
});

Route::get('/layout', function () {
    return view('layout');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/devis', function(){
	return view('devis');
});


/*====================================
=            Routes devis            =
====================================*/

//a
Route::get('/a', function () {
    return view('dso/devis/a/a');
});

Route::get('/b', function () {
    return view('dso/devis/b/create');
});

/*=====  End of Routes devis  ======*/




/*
|--------------------------------------------------------------------------
| route à vérifier ensemble
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    $dsoroots = \App\Dsoroot::all();
    return view('welcome')->with('dsoroots', $dsoroots);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//Gestion des utilisateurs par l'adv
Route::get('/users/index', 'CompteController@show')->name('users-index');
Route::post('/users/add', 'CompteController@create')->name('adduser');
Route::get('/users/{id}/delete', 'CompteController@destroy')->name('delete');

Route::get('/users/create', function () {
    return view('/users/create');
})->name('users-create-form');
