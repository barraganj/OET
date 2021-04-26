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
Route::get('/', 'homeController@index')->name('informes');

Auth::routes();

Route::resource('conductores','ConductoreController');
Route::resource('propietarios','PropietarioController');
Route::resource('vehiculos','VehiculoController');



Route::get('home', 'homeController@index')->name('informes');