<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', function () {
  //  return view('home');
//});

//Ruta Codigo Trabajo
Route::get('/', 'TrabajoController@index');
Route::get('detail/{code}','TrabajoController@show');

