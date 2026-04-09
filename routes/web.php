<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::get('/', [HomeController::class,'homepage'])->name('index');

Route::get('/specialities', [HomeController::class, 'showDepartment'])->name('specialities');

Route::get('/doctors', [HomeController::class, 'showDoctorList'])->name('doctors');
Route::get('/doctors-ajax', [HomeController::class, 'showDoctorsAjaxList'])->name('doctors.ajax');


// Appointment
Route::post('/store-appointment', [AppointmentController::class, 'storeAppointment'])->name('appointment.store');



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


