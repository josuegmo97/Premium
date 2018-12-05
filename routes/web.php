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

/* Route::get('/', function () {

    $user = premium\Role::findOrFail(1);

    return $user->user;

}); */


/* Usuarios */

Route::get('/usuario', 'UserController@index');
Route::get('/usuario/nuevo', 'UserController@create');
Route::post('/usuario/nuevo', 'UserController@store');
Route::get('/usuario/{id}/editar', 'UserController@edit')->name('UserEdit');
Route::put('/usuario/{id}/editar', 'UserController@update')->name('UserUpdate');
