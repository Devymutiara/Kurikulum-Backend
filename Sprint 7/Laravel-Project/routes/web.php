<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController');

Route::get('posts', 'PostController@index');
Route::post('posts/store', 'PostController@store');
Route::get('posts/{post:slug}', 'PostController@show');

Route::patch('posts/{post:slug}/update', 'PostController@update');

Route::delete('posts/{post}/delete', 'PostController@destroy');

Route::view('contact', 'contact');
Route::view('about', 'about');