<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', ['as' => 'auth.login', 'uses' => 'Auth\LoginController@showLoginForm']);
Route::post('/', ['as' => 'auth.login.post', 'uses' => 'Auth\LoginController@login']);
Route::get('logout', ['as' => 'auth.logout', 'uses' => 'Auth\LoginController@logout']);

Route::group(['middleware' => ['auth']], function () {
	Route::get('home', ['as' => 'app.home', 'uses' => 'HomeController@index']);
});