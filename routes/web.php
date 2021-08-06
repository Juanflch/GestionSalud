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

// ruta de las vistas

Route::get('/', 'PagesController@home');

Route::get('/conocenos', 'PagesController@conocenos');

Route::get('/contacto', 'PagesController@contacto');

Route::get('/ayuda', 'PagesController@ayuda');

Route::get('/login', 'PagesController@login');

Route::get('/registro', 'PagesController@registro');

// ruta al controlador de usuario 

//Route::post('/registro','usuarioController@create');

Route::resource('usuario','usuarioController');







