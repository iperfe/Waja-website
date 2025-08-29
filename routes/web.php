<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home')->name('home');
Route::view('/about-us', 'pages.about')->name('about');
Route::view('/products', 'pages.products')->name('products'); // placeholder grid like “Verticals”
Route::view('/contact', 'pages.contact')->name('contact');

