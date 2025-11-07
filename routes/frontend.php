<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;



Route::get('/', function () {
    return view('Frontend.home');
})->name('home');

Route::get('/about', function () {
    return view('Frontend.about');
})->name('about');

Route::get('/courses', function () {
    return view('Frontend.courses');
})->name('courses');

Route::get('/blogs', function () {
    return view('Frontend.blogs');
})->name('blogs');

Route::get('/contact', function () {
    return view('Frontend.contact');
})->name('contact');

Route::get('/events', function () {
    return view('Frontend.events');
})->name('events');


Route::get('/thankyou', [HomeController::class, 'thankyou'])->name('thankyou');


