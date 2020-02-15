<?php

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/projects', 'ProjectsController@index');

Route::get('/projects/{project}', 'ProjectsController@show');

Route::post('/projects', 'ProjectsController@store')->middleware('auth');

Route::get('/home', 'HomeController@index')->name('home');
