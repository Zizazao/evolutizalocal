<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'indexController@index');

//Show Posts

Route::get('posts', 'indexController@showAll');

Route::get('posts/{posts}', 'indexController@show');

Route::get('home', 'indexController@create');

Route::post('store', 'indexController@store');

Route::patch('posts/{posts}', 'indexController@update');

Route::get('posts/{posts}/edit', 'indexController@edit');



Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

