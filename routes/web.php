<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
   return view('about');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/portfolio', function () {
    return view('portfolio');
});

Route::get('/elements', function () {
    return view('elements');
});

Route::get('/portfolio-details', function () {
    return view('portfolio-details');
});

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/blog-details', function () {
    return view('blog-details');
})->name('blog-details');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');
