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

Route::group(['middleware' => ['guest']], function () {
	Route::get('/', ['as' => 'auth.login', 'uses' => 'Auth\LoginController@showLoginForm']);
	Route::post('/', ['as' => 'auth.login.post', 'uses' => 'Auth\LoginController@login']);
});

Route::get('logout', ['as' => 'auth.logout', 'uses' => 'Auth\LoginController@logout']);

Route::group(['middleware' => ['auth'], 'as' => 'app.'], function () {
	Route::get('home', ['as' => 'home', 'uses' => 'HomeController@index']);

	Route::group(['middleware' => ['admin']], function () {
		Route::get('guru', ['as' => 'guru.index', 'uses' => 'GuruController@index']);
		Route::post('guru', ['as' => 'guru.save', 'uses' => 'GuruController@save']);
		Route::get('guru/delete/{id}', ['as' => 'guru.delete', 'uses' => 'GuruController@delete']);

		Route::get('pelajaran', ['as' => 'pelajaran.index', 'uses' => 'PelajaranController@index']);
		Route::post('pelajaran', ['as' => 'pelajaran.save', 'uses' => 'PelajaranController@save']);
		Route::get('pelajaran/delete/{id}', ['as' => 'pelajaran.delete', 'uses' => 'PelajaranController@delete']);

		Route::get('siswa', ['as' => 'siswa.index', 'uses' => 'SiswaController@index']);
		Route::post('siswa', ['as' => 'siswa.save', 'uses' => 'SiswaController@save']);
		Route::get('siswa/delete/{id}', ['as' => 'siswa.delete', 'uses' => 'SiswaController@delete']);
	});
});