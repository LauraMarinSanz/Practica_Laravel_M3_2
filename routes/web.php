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

Route::get('/Administradores', function () {
    return view('Administradores.welcome_administradores');
});

Route::get('/Direccion_de_Empleados', function () {
    return view('Direccion_de_Empleados.welcome_direccion_empleados');
});

Route::get('/Publico_General', function () {
    return view('Publico_General.welcome_publico_general');
});
