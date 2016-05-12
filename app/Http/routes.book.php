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

	Route::get('/admin/books/addBook', 'BookController@addBook');
	Route::post('/admin/books/addBook', 'BookController@storeBook');

	Route::post('/admin/books/{book}', 'BookController@editBook');
});
