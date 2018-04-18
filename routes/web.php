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
Route::get('/adv/gestion', 'CompteController@show')->name('admin');
Route::post('/adv/add', 'CompteController@create')->name('adduser');
Route::get('/adv/{id}/delete', 'CompteController@destroy')->name('delete');

Route::get('/adv/ajouter', function () {
    return view('/adv/ajouter');
})->name('adv-add-form');;


