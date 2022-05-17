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

Route::get('/', function () {
    return view('layouts.master');
});

Route::get('service', function () {
    return view('layouts.service');
})->name('service');

Route::get('portfolio', function () {
    return view('layouts.portfolio');
})->name('portfolio');

Route::get('team', function () {
    return view('layouts.team');
})->name('team');

Route::get('price', function () {
    return view('layouts.price');
})->name('price');

Route::get('blog', function () {
    return view('layouts.blog');
})->name('blog');

Route::get('about', function () {
    return view('layouts.about');
})->name('about');

Route::get('contact', function () {
    return view('layouts.contact');
})->name('contact');