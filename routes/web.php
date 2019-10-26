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
    return view('auth/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/valuacion-express', 'ValuacionesController@index')->name('express');

Route::get('/valuacion-express-step2', function () {
    return view('express2');
})->name('express2');

Route::get('/valuacion-express-step3', function () {
    return view('express3');
})->name('express3');

Route::get('/get-marcas/{cat}', 'MarcasController@show')->name('get.marcas');
Route::get('/get-subs/{cat}', 'MarcasController@showSub')->name('get.subs');
