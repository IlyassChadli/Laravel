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
Route::get('/welcome', function () {
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
Route::get('/zona_admin', function () {
    return view('zona_admin');
});
Route::get('/home', function () {
    return view('home');
});

Route::resource('Medico','MedicoController');
Route::resource('Paciente','PacienteController');
Route::resource('PersonalLab','Personal_LaboratorioController');
Route::resource('Laboratorio','LaboratoriosController');
Route::resource('Citas','CitaController');
Route::resource('Consulta','ConsultaController');
Route::resource('Administrador','AdministradorController');
Route::resource('Prueba','PruebaController');
Route::resource('Centro','CentroController');



Auth::routes();


