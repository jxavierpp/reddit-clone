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
    //return view('welcome', ['nombre' => 'Xavier']);
    //return view('welcome')->with('nombre', 'Xavier');
    return view('welcome')->withNombre('Xaviersito');
}); 

// /hola/<nombre>
Route::get('/hola/{nombre}', 'HolaController@hola');
