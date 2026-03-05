<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;



Route::get('/', function () {
    return view('index');
})->name('index');

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


