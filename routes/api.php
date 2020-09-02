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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// /api/post
Route::post('post', 'MuralController@criarPost');
Route::put('post/{id}', 'MuralController@editarPost');
Route::delete('post/{post}', 'MuralController@deletar');
Route::get('post', 'MuralController@listar');