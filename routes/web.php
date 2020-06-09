<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'dashboard');

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
