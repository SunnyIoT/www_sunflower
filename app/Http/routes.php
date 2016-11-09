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

// AuthController
Route::get('/', 'Auth\AuthController@index');
// Route::get('/login', 'Auth\AuthController@getLogin');
Route::get('/login', 'Auth\AuthController@index');
Route::get('/register', 'Auth\AuthController@getRegister');
Route::post('/register', 'Auth\AuthController@postRegister');
Route::post('/login', 'Auth\AuthController@postLogin');
Route::get('/logout', ['as'=>'logout','uses' => 'Auth\AuthController@logout']);

// AdminController
Route::get('/admin', 'AdminController@index');

// UserController
Route::get('/home', 'UserController@index');
Route::get('/food', 'UserController@getFood');

// Request from esp8266
Route::get('/device_lost_connect/{serial}', 'Auth\AuthController@getDataLogger');
// Route::get('/device_lost_connect/{serial}', 'UserController@getDataLogger');
