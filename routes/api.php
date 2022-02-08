<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
    Route::get('/players', 'PlayerController@index');
    Route::get('/players/{id}', 'PlayerController@show');
    Route::post('/players', 'PlayerController@store');
    Route::post('/players/{id}/answers', 'PlayerController@answer');
    Route::delete('/players/{id}', 'PlayerController@delete');
    Route::delete('/players/{id}/answers', 'PlayerController@resetAnswers');
});
