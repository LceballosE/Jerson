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
    return view('home');
});
Route::get('/crearmazo', 'CartasController@infoCartastodo');


Route::get('/paladin', 'CartasController@infoCartas');
Route::get('/mago','CartasController@infoCartasmago' );
Route::get('/brujo', 'CartasController@infoCartasbrujo');
Route::get('/druida', 'CartasController@infoCartasdruida');
Route::get('/guerrero','CartasController@infoCartasguerrero');
Route::get('/sacerdote','CartasController@infoCartassacerdote');
Route::get('/chaman', 'CartasController@infoCartaschaman');
Route::get('/picaro', 'CartasController@infoCartaspicaro');
Route::get('/cazador', 'CartasController@infoCartascazador');

Route::get('/naxxramas','CartasController@infoCartasnaxxramas');
Route::get('/blackmountain','CartasController@infoCartasblackmountain');
Route::get('/theoldgods','CartasController@infoCartastheoldgods');
Route::get('/gadjetzan','CartasController@infoCartasgadjetzan' );
Route::get('/karazan', 'CartasController@infoCartaskarazan');
Route::get('/ungoro', 'CartasController@infoCartasungoro');
Route::get('/kft', 'CartasController@infoCartaskft');


Route::get('/descripcionjuego', function () {
    return view('descripcionjuego');
});

/*Route::get('/crearmazo', function () {
    return view('crearmazo');
});*/

Route::get('/heroes', function () {
    return view('heroes');
});


Route::get('/tiposmazos', function () {
    return view('tiposmazos');
});


Route::get('/descripcioninicial', function () {
    return view('descripcioninicial');
});

Route::get('/expansiones', function () {
    return view('expansiones');
});


Route::get('/grafica', function () {
    return view('grafica');
});
Route::get('/dorsos', 'DorsosController@dorsosfuncion');

/*Route::get('/dorsos', 'DorsosController@dorsos');*/






