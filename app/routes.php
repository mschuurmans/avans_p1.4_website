<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@homepage');
Route::get('/games', 'HomeController@games');
Route::get('/stream', 'HomeController@stream');

Route::get('/users/{id}', 'UsersController@sayHi');
Route::get('/admin/users/{id}', 'UsersController@adminSayHi');
