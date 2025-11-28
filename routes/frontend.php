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

Route::get('/course_details', function () {
    return view('Frontend.course_details');
})->name('course_details');

Route::get('/blogs', function () {
    return view('Frontend.blogs');
})->name('blogs');

Route::get('/contact', function () {
    return view('Frontend.contact');
})->name('contact');

Route::get('/events', function () {
    return view('Frontend.events');
})->name('events');

Route::get('/dashbord', function () {
    return view('Frontend.Dashbord.dashbord');
})->name('dashbord');

Route::get('/profile', function () {
    return view('Frontend.Dashbord.profile');
})->name('profile');


Route::get('/shop', function () {
    return view('Frontend.shop');
})->name('shop');

Route::get('/shop_details', function () {
    return view('Frontend.shop_details');
})->name('shop_details');

Route::get('/setting', function () {
    return view('Frontend.Dashbord.setting');
})->name('setting');

Route::get('/enrolled_courses', function () {
    return view('Frontend.Dashbord.enrolled_courses');
})->name('enrolled_courses');

Route::get('/quiz', function () {
    return view('Frontend.Dashbord.quiz');
})->name('quiz');

Route::get('/weekly_test', function () {
    return view('Frontend.Dashbord.weekly_test');
})->name('weekly_test');

Route::get('/certifications', function () {
    return view('Frontend.Dashbord.certifications');
})->name('certifications');

Route::get('/test', [HomeController::class, 'test'])->name('test');
Route::post('/submit_test', [HomeController::class, 'submitTest'])->name('submit_test');


Route::get('/thankyou', [HomeController::class, 'thankyou'])->name('thankyou');

Route::post('/contact-enquiry', [HomeController::class, 'contactEnquiry'])->name('contact-enquiry');


