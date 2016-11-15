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

Route::post('login', ['as' => 'login_process', 'uses' => 'BackController@loginProcess']);
Route::get('premier-utilisateur', ['as' => 'first_account', 'uses' => 'BackController@firstUser']);
Route::get('admin', ['as' => 'login', 'uses' => 'BackController@login']);
Route::get('admin/index', ['as' => 'admin_home', 'uses' => 'BackController@index']);

Route::get('admin/index/subscriptions', ['as' => 'admin_subscriptions', 'uses' => 'BackController@subscriptions']);
Route::get('admin/edit/subscription/{id}', ['as' => 'admin_edit_subscription', 'uses' => 'BackController@editSubscription']);
Route::post('admin/edit/subscription/{id}/process', ['as' => 'admin_edit_subscription_process', 'uses' => 'BackController@editSubscriptionProcess']);
Route::get('admin/add/subscription', ['as' => 'admin_add_subscription', 'uses' => 'BackController@addSubscription']);
Route::post('admin/add/subscription/process', ['as' => 'admin_add_subscription_process', 'uses' => 'BackController@addSubscriptionProcess']);
Route::get('admin/delete/subscription/{id}', ['as' => 'admin_delete_subscription_process', 'uses' => 'BackController@deleteSubscriptionProcess']);



