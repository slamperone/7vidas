<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/get-marcas/{cat}', 'MarcasController@show')->name('get.marcas');

Route::get('/get-subs/{cat}', 'MarcasController@showSub')->name('get.subs');

Route::get('/get-prov/{cat,nuevo}', 'ReferenciasController@show')->name('get.provs');