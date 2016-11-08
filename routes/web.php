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

    /*
     * Front Routes :
     */
    Route::get('/' , ['as' => 'home' , 'uses' => 'FrontController@index']);
    Route::get('inscription' , ['as' => 'registration' , 'uses' => 'FrontController@registration']);
    Route::post('inscription/process' , ['as' => 'registration_process' , 'uses' => 'FrontController@registrationProcess']);

    /*
    * Back Routes :
    */

    Route::post('login' , ['as' => 'login_process' , 'uses' => 'BackController@loginProcess']);
    Route::get('premier-utilisateur' , ['as' => 'first_account' , 'uses' => 'BackController@firstUser']);
    Route::get('admin' , ['as' => 'login' , 'uses' => 'BackController@login']);



