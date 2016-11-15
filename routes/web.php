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
Route::get('/', ['as' => 'home', 'uses' => 'FrontController@index']);
Route::get('inscription', ['as' => 'registration', 'uses' => 'FrontController@registration']);
Route::post('inscription/process', ['as' => 'registration_process', 'uses' => 'FrontController@registrationProcess']);

/*
* Back Routes :
*/

Route::post('login', ['as' => 'login_process', 'uses' => 'FrontController@loginProcess']);
Route::get('premier-utilisateur', ['as' => 'first_account', 'uses' => 'BackController@firstUser']);
Route::get('admin', ['as' => 'login', 'uses' => 'FrontController@login']);
Route::get('admin/index', ['as' => 'admin_home', 'uses' => 'BackController@index']);

Route::get('admin/index/inscriptions', ['as' => 'admin_registrations', 'uses' => 'BackController@registrations']);
Route::get('admin/edit/inscription/{id}', ['as' => 'admin_edit_registration', 'uses' => 'BackController@editRegistration']);
Route::post('admin/edit/inscription/{id}/process', ['as' => 'admin_edit_registration_process', 'uses' => 'BackController@editRegistrationProcess']);
Route::get('admin/add/inscription', ['as' => 'admin_add_registration', 'uses' => 'BackController@addRegistration']);
Route::post('admin/add/inscription/process', ['as' => 'admin_add_registration_process', 'uses' => 'BackController@addRegistrationProcess']);
Route::get('admin/delete/inscription/{id}', ['as' => 'admin_delete_registration_process', 'uses' => 'BackController@deleteRegistrationProcess']);
