<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController');

Route::get('posts', 'PostController@index');
Route::post('posts/store', 'PostController@store');
Route::get('posts/{post:slug}', 'PostController@show');

Route::patch('posts/{post:slug}/update', 'PostController@update');

Route::delete('posts/{post}/delete', 'PostController@destroy');
//----------------------------------------------------------------------------------
Route::get('authors', 'AuthorController@index');
Route::post('authors/store', 'AuthorController@store'); 
Route::get('authors/{author}', 'AuthorController@show');

Route::patch('authors/{author}/update', 'AuthorController@update');

Route::delete('authors/{author}/delete', 'AuthorController@destroy');
//----------------------------------------------------------------------------------
Route::get('identities', 'IdentityController@index');
Route::post('identities/store', 'IdentityController@store');
Route::get('identities/{identity}', 'IdentityController@show');

Route::patch('identities/{identity}/update', 'IdentityController@update');

Route::get('identities/{identity}/delete', 'IdentityController@destroy');
//----------------------------------------------------------------------------------
Route::view('contact', 'contact');
Route::view('about', 'about');

// pada bagian console, perhatikan ada tulisan '$ is undefined'
// artiny cdn jquery nya belum digunakan dengan benar

// perbaiki sndiri bisa? ok saya tunggu
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
