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
    return view('home');
});


Route::get('/schedule', 'ScheduleController@index');
Route::get('/signup', 'SignupController@index');
Route::post('/signup', 'FormController@signup');
Route::get('/signin', 'SigninController@index');
Route::get('/instructors', 'InstructorController@index');
Route::get('/admin', 'AdminController@index');
Route::get('/email', 'EmailController@index');


Auth::routes();
Route::get('/', 'HomeController@index');
