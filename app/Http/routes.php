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

Route::get('/', 'guestController@index');

//Posts

Route::get('posts', 'indexController@showAll');

Route::get('posts/{posts}', 'indexController@show');

Route::get('create', 'indexController@create');

Route::post('store', 'indexController@store');

Route::patch('posts/{posts}', 'indexController@update');

Route::get('posts/{posts}/edit', 'indexController@edit');

Route::get('posts/{posts}/delete', 'indexController@destroy');

//Files(images)

Route::get('createimg', 'indexController@createImg');

Route::post('storeimg', 'indexController@storeImg');


//Events

Route::get('events', 'eventsController@index');

Route::get('events/create', 'eventsController@create');

Route::post('events/store', 'eventsController@store');

Route::get('events/{events}', 'eventsController@show');

Route::get('events/{events}/edit', 'eventsController@edit');

Route::patch('events/{events}/update', 'eventsController@update');

Route::get('events/{events}/destroy', 'eventsController@destroy');

//Guests

Route::get('guest/events/{events}', 'guestController@showEvent');

Route::get('guest/posts/{posts}', 'guestController@showPost');





Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

