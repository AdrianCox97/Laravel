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

Auth::routes();

/*Protección a toda la página con ->middleware('auth')*/
Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
Route::resource('/categorias', 'CategoriasController');
Route::resource('/productos', 'ProductosController');



/*
MiddleWare: aplica ciertas reglas al momento de acceder a una vista y despues de que todo
haya sido correcto regirige a la vista.
*/