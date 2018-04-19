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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//Gestion des utilisateurs par l'adv
Route::get('/users/gestion', 'CompteController@show')->name('admin');
Route::post('/users/add', 'CompteController@create')->name('adduser');
Route::get('/users/{id}/delete', 'CompteController@destroy')->name('delete');

Route::get('/users/ajouter', function () {
    return view('/users/ajouter');
})->name('adv-add-form');;


