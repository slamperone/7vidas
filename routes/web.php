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

Route::post('/valuacion-express-step-2', 'ValuacionesController@step2')->name('express2');

Route::get('/valuacion-express-step-2/{id}', 'ValuacionesController@show')->name('express2Get');

Route::get('/valuacion-historico', 'ValuacionesController@historia')->name('historia');


Route::get('/valuacion-express-step-3', function () {
    return view('express3');
})->name('express3');


