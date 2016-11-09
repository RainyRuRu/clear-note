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
    return view('test');
});

Route::get('/about', function () {
    return view('index');
});

Route::get('/help', 'HelpController@showHelp');

Route::post('/register', 'Auth\RegisterController@register');
Route::get('/activeUser/{id}/{token}', 'Auth\RegisterController@activeUser');
Route::post('/register/profile', 'Auth\RegisterController@registerProfile');

