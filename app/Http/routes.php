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

Route::get('/', 'WelcomeController@index');
Route::get('home', 'HomeController@index');

//Login & logout
Route::get('test', 'TestController@index');
Route::post('test/register', array('before'=>'csrf', 'uses'=>'TestController@create'));
	//login
Route::get('log_in', 'TestController@log_in');
Route::post('check', array('before'=>'csrf', 'uses'=>'TestController@check'));
	//logout
Route::get('logout', array('before'=>'csrf', 'uses'=>'TestController@destroy'));

//Post
Route::get('post', 'PostController@index');
Route::post('post/status', array('before'=>'csrf', 'uses'=>'PostController@create'));
//Upload
Route::get('upload', 'UploadController@index');
Route::post('image/create', array('before'=>'csrf', 'uses'=>'UploadController@create'));

//Auth
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
