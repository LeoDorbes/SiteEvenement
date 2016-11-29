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

/*
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');
*/


Route::get('/registrations', ['as' => 'registration_index', 'uses' => 'ApiController@index']);
Route::get('/registration/create', ['as' => 'registration_create', 'uses' => 'ApiController@create']);
Route::post('/registration', ['as' => 'registration_store', 'uses' => 'ApiController@store']);
Route::get('/registration/{id}', ['as' => 'registration_show', 'uses' => 'ApiController@show']);
Route::get('/registration/{id}/edit', ['as' => 'registration_edit', 'uses' => 'ApiController@edit']);
Route::put('/registration/{id}', ['as' => 'registration_update', 'uses' => 'ApiController@update']);
Route::delete('/registration/{id}', ['as' => 'registration_destroy', 'uses' => 'ApiController@destroy']);
