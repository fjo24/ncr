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

Route::get('/inicio', function () {
    return view('inicio');
});

Route::resource('/tablon', 'TablonesController');

Route::get('caracteres/form',  'TablonesController@caracteres')->name('caracteres');
Route::post('rcaracteres',  'TablonesController@rcaracteres')->name('rcaracteres');

//Ejercicio 3

Route::get('resumen',  'ResumenController@index')->name('resumen');

//Ejercicio 4

Route::get('diagramas/secuencia', function () {
    return view('diagramas/secuencia');
});

//Ejercicio 5

Route::get('diagramas/clase', function () {
    return view('diagramas/clase');
});