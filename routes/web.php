<?php

Route::resource('posts', 'PostsController');

Route::post('posts/{post}/comments', 'CommentController@create');

Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');
Route::get('/login', 'SessionsController@create');
Route::get('/logout', 'SessionsController@destroy');
