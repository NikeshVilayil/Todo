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


Route::get('/', 'Auth\AuthController@index');
Route::post('/', 'Auth\AuthController@logincheck');
Route::get('/logout', 'Auth\AuthController@logout');
		

Route::get('/test-url', function() {
	echo "This is a test URL";
});

Route::get('/home',function(){
	return \View::make('userhome'); 
});
Route::get('/signup', 'Auth\AuthController@signup');
Route::post('/signup', 'Auth\AuthController@signup_newuser');