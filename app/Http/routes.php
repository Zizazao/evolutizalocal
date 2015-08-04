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


//Posts

Route::get('posts', 'postsController@showAll');

Route::get('posts/{posts}', 'postsController@show');

Route::get('create', 'postsController@create');

Route::post('store', 'postsController@store');

Route::patch('posts/{posts}', 'postsController@update');

Route::get('posts/{posts}/edit', 'postsController@edit');

Route::get('posts/{posts}/delete', 'postsController@destroy');


//Files(images)

Route::get('createimg', 'postsController@createImg');

Route::post('storeimg', 'postsController@storeImg');


//Events

Route::get('events', 'eventsController@index');

Route::get('events/create', 'eventsController@create');

Route::post('events/store', 'eventsController@store');

Route::get('events/{events}', 'eventsController@show');

Route::get('events/{events}/edit', 'eventsController@edit');

Route::patch('events/{events}/update', 'eventsController@update');

Route::get('events/{events}/destroy', 'eventsController@destroy');


//Slider

Route::get('sliders', 'sliderController@index');

Route::get('sliders/create', 'sliderController@create');

Route::post('sliders/store', 'sliderController@store');

Route::get('sliders/{sliders}/edit', 'sliderController@edit');

Route::patch('sliders/{sliders}/update', 'sliderController@update');

Route::get('sliders/{sliders}/destroy', 'sliderController@destroy');

//Footer

Route::get('footers', 'footerController@index');

//Route::get('footers/create', 'footerController@create');

//Route::post('footers/store', 'footerController@store');

//Route::get('footers/{footers}/edit', 'footerController@edit');

//Route::patch('footers/{footers}/update', 'footerController@update');

//Route::get('footers/{footers}/destroy', 'footerController@destroy');



//Guests

Route::get('/', 'guestController@index');

Route::get('guest/events/{events}', 'guestController@showEvent');

Route::get('guest/posts/{posts}', 'guestController@showPost');





Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

