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

Route::get('about', 'SiteController@index');

Route::get('typebooks', 'TypeBooksController@index'); // for to show all data in database

Route::get('typebooks/destroy/{id}', 'TypeBooksController@destroy'); // for delete data by id from url

Route::resource('books', 'BooksController');

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');
