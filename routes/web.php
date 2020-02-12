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

Route::post('/valuacion-express-step-3', 'ValuacionesController@step3')->name('express3');

Route::post('/valuacion-express-step-31/{id}', 'ValuacionesController@step31')->name('express31');

Route::get('/valuacion-express-step-4/{id}', 'ValuacionesController@step4')->name('express4');


Route::get('/valuacion-historico', 'ValuacionesController@historia')->name('historia');

Route::get('/abiertos', 'ValuacionesController@pendientes')->name('pendientes');


Route::get('/ver-factores', 'FactoresController@index')->name('verFactores');

Route::get('/nuevo-cuestionario', function(){
    return view('cuestionarios.add');
	})->name('addQuest');

Route::get('/todos-cuestionarios', 'CuestionariosController@index')->name('allQuest');