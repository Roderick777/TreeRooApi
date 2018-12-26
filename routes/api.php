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

Route::get('/tablero', 'TableroController@index');
Route::post('/tableroPost', 'TableroController@store');

Route::get('/lista', 'ListaController@index');
Route::post('/lista', 'ListaController@store');

Route::get('/tarea', 'TareaController@index');
Route::post('/tarea', 'TareaController@store');