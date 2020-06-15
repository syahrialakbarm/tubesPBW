<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::view('news', 'news');
Route::view('review', 'review');
Route::view('about', 'about');
