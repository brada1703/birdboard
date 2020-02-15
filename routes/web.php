<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/projects', 'ProjectsController@index');

Route::get('/projects/{project}', 'ProjectsController@show');

Route::post('/projects', 'ProjectsController@store');
