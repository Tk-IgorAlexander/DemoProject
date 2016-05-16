<?php

/*
|--------------------------------------------------------------------------
| User Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for users.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::group(['middleware' => ['auth', 'admin']], function () {
	Route::get('/admin/users', 'UserController@showUsers');
	Route::post('/admin/users/{user}', 'UserController@approveUser');
});

Route::get('/user/notVerified', 'UserController@showVerificationRequire');