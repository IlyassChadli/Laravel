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
    return view('inicio');
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
Route::get('/zona_admin', function () {
    return view('zona_admin');
});

Route::resource('/registerMedico','MedicoController');




Auth::routes();

Route::get('/home', 'HomeController@index');
