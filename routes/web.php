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
/* Usuarios */

Route::get('/usuario', 'UserController@index');
Route::get('/usuario/nuevo', 'UserController@create');
Route::post('/usuario/nuevo', 'UserController@store');
Route::get('/usuario/{id}/editar', 'UserController@edit')->name('UserEdit');
Route::put('/usuario/{id}/editar', 'UserController@update')->name('UserUpdate');
Route::delete('/usuario/{id}', 'UserController@destroy')->name('UserDestroy');

/* Proveedores */

Route::get('/proveedores', 'ProviderController@index');
Route::get('/proveedores/nuevo', 'ProviderController@create');
Route::post('/proveedores/nuevo', 'ProviderController@store');
Route::delete('/proveedores/{id}', 'ProviderController@destroy')->name('ProviderDestroy');
Route::get('/proveedores/{id}', 'ProviderController@show')->name('ProviderShow');
Route::get('/proveedores/{id}/editar', 'ProviderController@edit')->name('ProviderEdit');
Route::put('/proveedores/{id}/editar', 'ProviderController@update')->name('ProviderUpdate');


/* Servicios */

Route::get('/extra/servicio', 'ServiceController@index');
Route::post('/extra/servicio', 'ServiceController@store')->name('ServiceStore');
Route::delete('/extra/servicio/{id}', 'ServiceController@destroy')->name('ServiceDestroy');

