<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

# Home routes
Route::get('/', [
	'uses' => '\App\Http\Controllers\HomeController@index',
	'as'   => 'home'
]);

# Authentication routes
Route::get('/signup', [
	'uses' => '\App\Http\Controllers\AuthController@getSignUp',
	'as'   => 'auth.signup'
]);

Route::post('/signup', [
	'uses' => '\App\Http\Controllers\AuthController@postSignUp'
]);