<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\Auth\CustomerAuthController;
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


// Customer Auth
Route::get('/sign-in',[CustomerAuthController::class, 'showLoginForm'])->name('signin');
Route::post('/sign-in',[CustomerAuthController::class, 'login'])->name('signin.confirm');
Route::get('/sign-up', [CustomerAuthController::class, 'showRegisterForm'])->name('signup');

Auth::routes();


