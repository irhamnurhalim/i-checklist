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
    return redirect('/home');
});

// Authentication Routes...
$this->name('auth.login')->get('login', 'Auth\LoginController@showLoginForm');
$this->name('auth.login')->post('login', 'Auth\LoginController@login');
$this->name('auth.logout')->post('logout', 'Auth\LoginController@logout');

// Registration Routes...
$this->name('auth.register')->get('register', 'Auth\RegisterController@showRegistrationForm');
$this->name('auth.register')->post('register', 'Auth\RegisterController@register');

//Auth::routes();

Route::group(['middleware' => 'auth'], function() {
	Route::get('/home', 'HomeController@index');
	Route::resource('/roles', 'RolesController');
	Route::post('roles_mass_destroy', ['uses' => 'RolesController@massDestroy', 'as' => 'roles.mass_destroy']);
    Route::resource('users', 'UsersController');
    Route::post('users_mass_destroy', ['uses' => 'UsersController@massDestroy', 'as' => 'users.mass_destroy']);
    Route::resource('permissions', 'PermissionsController');
    Route::post('permissions_mass_destroy', ['uses' => 'PermissionsController@massDestroy', 'as' => 'permissions.mass_destroy']);
});