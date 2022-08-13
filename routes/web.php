<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
Route::get('/', 'PostController@show')->name('home');

Route::get('/onePost/{id}', 'PostController@showOne')->name('one');
Route::get('/aboutAuthor/{id}/{post_id}', 'PostController@aboutAuthor')->name('about');
Route::get('/search', 'PostController@search')->name('search');