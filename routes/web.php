<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/job-details', function () {
    return view('job.job-details');
})->name('job.details');

Route::get('/contact-details', function () {
    return view('job.contact-details');
})->name('job.contact');

Route::get('/review-submit', function () {
    return view('job.review-submit');
})->name('job.review');



Route::get('/businesses', function () {
    return view('businesses.index');
})->name('businesses.index');


