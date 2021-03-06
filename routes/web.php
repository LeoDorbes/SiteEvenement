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

Route::group(['middleware' => ['web']], function () {

    /*
     * Front Routes :
     */

    Route::get('/', ['as' => 'home', 'uses' => 'FrontController@index']);
    Route::get('/inscription-validee', ['as' => 'registration_confirmed', 'uses' => 'FrontController@registrationConfirmed']);
    Route::get('inscription', ['as' => 'registration', 'uses' => 'FrontController@registration']);
    Route::post('inscription/process', ['as' => 'registration_process', 'uses' => 'FrontController@registrationProcess']);
    Route::post('login', ['as' => 'login_process', 'uses' => 'FrontController@loginProcess']);

    /*
    * Back Routes :
    */

    Route::get('admin/logout', ['as' => 'logout_process', 'uses' => 'BackController@logout']);
    Route::get('premier-utilisateur', ['as' => 'first_account', 'uses' => 'BackController@firstUser']);
    Route::get('admin', ['as' => 'login', 'uses' => 'FrontController@login']);
    Route::get('admin/index', ['as' => 'admin_home', 'uses' => 'BackController@index']);

    /*
     * Registrations related routes :
     */

    Route::get('admin/index/inscriptions', ['as' => 'admin_registrations', 'uses' => 'BackController@registrations']);
    Route::get('admin/index/inscription/{id}', ['as' => 'admin_registration', 'uses' => 'BackController@registration']);
    Route::get('admin/index/inscriptions-validees', ['as' => 'admin_validated_registrations', 'uses' => 'BackController@validatedRegistrations']);
    Route::get('admin/index/inscriptions-refusees', ['as' => 'admin_refused_registrations', 'uses' => 'BackController@refusedRegistrations']);
    Route::get('admin/validate/inscription/{id}/process', ['as' => 'admin_validate_registration_process', 'uses' => 'BackController@validateRegistration']);
    Route::get('admin/refuse/inscription/{id}/process', ['as' => 'admin_refuse_registration_process', 'uses' => 'BackController@refuseRegistration']);
    Route::get('admin/edit/inscription/{id}', ['as' => 'admin_edit_registration', 'uses' => 'BackController@editRegistration']);
    Route::post('admin/edit/inscription/{id}/process', ['as' => 'admin_edit_registration_process', 'uses' => 'BackController@editRegistrationProcess']);
    Route::get('admin/add/inscription', ['as' => 'admin_add_registration', 'uses' => 'BackController@addRegistration']);
    Route::post('admin/add/inscription/process', ['as' => 'admin_add_registration_process', 'uses' => 'BackController@addRegistrationProcess']);
    Route::get('admin/delete/inscription/{id}', ['as' => 'admin_delete_registration_process', 'uses' => 'BackController@deleteRegistrationProcess']);

    /*
     * Roles related routes :
     */

    Route::get('admin/index/roles', ['as' => 'admin_roles', 'uses' => 'BackController@roles']);
    Route::get('admin/index/ajouter-role', ['as' => 'admin_add_role', 'uses' => 'BackController@addRole']);
    Route::post('admin/index/ajouter-role/process', ['as' => 'admin_add_role_process', 'uses' => 'BackController@addRoleProcess']);
    Route::get('admin/index/editer-role/{id}', ['as' => 'admin_edit_role', 'uses' => 'BackController@editRole']);
    Route::post('admin/index/editer-role/{id}/process', ['as' => 'admin_edit_role_process', 'uses' => 'BackController@editRoleProcess']);
    Route::get('admin/index/supprimer-role/{id}/process', ['as' => 'admin_delete_role_process', 'uses' => 'BackController@deleteRoleProcess']);

    /*
     * Users related routes :
     */

    Route::get('admin/index/users', ['as' => 'admin_users', 'uses' => 'BackController@users']);

});


