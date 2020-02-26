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

Route::get('/usuarios','UserController@index')->name('users');

Route::get('/usuarios/{user}','UserController@show')->where('user','[0-9]+')->name('users.show');

Route::get('/usuarios/nuevos','UserController@create')->name('users.create');

Route::get('/usuarios/{user}/editar','UserController@edit')->name('edit');

Route::put('/usuarios/{user}', 'UserController@update');

Route::post('/usuarios','UserController@store');

Route::get('/saludo/{name}/{nickname?}','WelcomeUserController@welcome');

Route::delete('/usuarios/{user}', 'UserController@destroy')->name('destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::get('/equipo','UserController@index2')->name('equipo');

Route::get('/equipo/{equipo}','UserController@show2')->where('equipo','[0-9]+')->name('equipo.show');

Route::get('/equipo/nuevos','UserController@create2')->name('equipo.create');

Route::get('/equipo/{equipo}/editar','UserController@edit2')->name('edit2');

Route::put('/equipo/{equipo}', 'UserController@update2');

Route::post('/equipo','UserController@store2');

Route::get('/saludo/{name}/{nickname?}','WelcomeUserController@welcome');

Route::delete('/equipo/{equipo}', 'UserController@destroy2')->name('destroy2');






Route::get('/ligas','UserController@index3')->name('ligas');

Route::get('/ligas/{ligas}','UserController@show3')->where('ligas','[0-9]+')->name('ligas.show');

Route::get('/ligas/nuevos','UserController@create3')->name('ligas.create');

Route::get('/ligas/{ligas}/editar','UserController@edit3')->name('edit3');

Route::put('/ligas/{ligas}', 'UserController@update3');

Route::post('/ligas','UserController@store3');

Route::get('/saludo/{name}/{nickname?}','WelcomeUserController@welcome');

Route::delete('/ligas/{ligas}', 'UserController@destroy3')->name('destroy3');

