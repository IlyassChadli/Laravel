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
Route::get('/objetivos', function () {
    return view('objetivos');
});
Route::get('/autores', function () {
    return view('autores');
});
Route::get('/registro', function () {
    return view('registro');
});

<<<<<<< HEAD
=======
Route::resource('medicos','MedicoController');
>>>>>>> origin/master

Route::post('/registro', 'Auth\RegisterController@register');

Auth::routes();

Route::get('/home', 'HomeController@index');
