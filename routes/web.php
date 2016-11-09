<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('index');
})->middleware('login');

Route::get('/help', 'HelpController@showHelp');

Route::post('/register', 'Auth\RegisterController@register');
Route::get('/activeUser/{id}/{token}', 'Auth\RegisterController@activeUser');
Route::post('/register/profile', 'Auth\RegisterController@registerProfile');
Route::post('/login', 'Auth\LoginController@login');
Route::get('/logout', 'Auth\LoginController@logout');

