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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    $dsoroots = \App\Dsoroot::all();
    return view('welcome')->with('dsoroots', $dsoroots);
});

// Route::get('/dso/{idDso}/devis/infos-admin', 'DsorootController@index')->name('infos-admin');
Route::get('/dso/{idDso}/devis/infos-admin/create', 'DsorootController@create')->name('infos-admin_create');
