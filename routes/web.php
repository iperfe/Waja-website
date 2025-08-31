<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home')->name('home');
Route::view('/about-us', 'pages.about')->name('about');
Route::view('/products', 'pages.products')->name('products'); // placeholder grid like “Verticals”
Route::view('/services', 'pages.services')->name('services');
Route::view('/contact', 'pages.contact')->name('contact');
Route::view('/contact.submit', 'pages.contact.submit')->name('contact.submit');
Route::view('/biomedical','pages.biomedical')->name('biomedical');
Route::view('/biomedical-about', 'pages.biomedical-about')->name('biomedical-about');
Route::view('/biomedical-mission','pages.biomedical-mission')->name('biomedical-mission');
Route::view('/education','pages.education')->name('education');
