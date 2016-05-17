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


Route::group(['middleware' => ['auth', 'admin']], function () {
	Route::get('/admin/books', 'BookController@showBooks');

	Route::get('/admin/books/addBook', ['as' => 'addBook', 'uses' => 'BookController@addBook']);
	Route::post('/admin/books/addBook', ['as' => 'storeBook', 'uses' => 'BookController@storeBook']);

	Route::get('/admin/books/{book}', ['as' => 'editBook', 'uses' => 'BookController@editBook']);

	Route::post('/admin/books/{book}/confirm', ['as' => 'modBook', 'uses' => 'BookController@modBook']);
});

Route::group(['middleware' => ['auth']], function () {
	
	Route::get('/user/books', 'BookController@searchBooks');
	Route::post('/user/books', ['as' => 'findBook', 'uses' => 'BookController@findBook']);
	Route::get('/user/books/{book}', ['as' => 'viewBook', 'uses' => 'BookController@viewBook']);
	Route::post('/user/books/{book}', ['as' => 'checkAvailability', 'uses' => 'BookController@checkAvailability']);

});
