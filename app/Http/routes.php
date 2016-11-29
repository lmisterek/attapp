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

    Route::get('/', function () {
        return view('home');
    });

    Route::get('/show', function () {
        return view('show');
    });

    Route::get('/home', function () {
        return view('home');
    });

    Route::get('/dashboard', function () {
        return view('dashboard');
    });




    Route::resource('courses', 'CourseController');


    Route::controllers([
        'auth' => 'Auth\AuthController',
        'password' => 'Auth\PasswordController',
    ]);



    Route::auth();

    Route::get('/home', 'HomeController@index');
