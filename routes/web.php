<?php

use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::get('/', [HomeController::class,'homepage'])->name('index');

Route::get('/specialities', function () {
    return view('specialities');
})->name('specialities');

Route::get('/doctors', function () {
    return view('doctors');
})->name('doctors');

Route::get('/doctor-details', function () {
    return view('doctor-details');
})->name('doctor-details');

Route::get('/signin', function () {
    return view('signin');
})->name('signin');

Route::get('/signup', function () {
    return view('signup');
})->name('signup');

Auth::routes();


