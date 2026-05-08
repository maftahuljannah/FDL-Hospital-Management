<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppointmentController;

Route::get('/', function () {
    return view('backend.doctor.login');
})->name('login');

Route::get('/dashboard', function () {
    return view('backend.doctor.dashboard');
})->name('dashboard');

Route::get('/appointments', function () {
    return view('backend.doctor.appointments');
})->name('appointments');

Route::get('/schedule', function () {
    return view('backend.doctor.schedule');
})->name('schedule');

Route::get('/patients', function () {
    return view('backend.doctor.patients');
})->name('patients');

Route::get('/leave', function () {
    return view('backend.doctor.leave');
})->name('leave');

//Calender Routes
Route::get('/calendar/events', [AppointmentController::class, 'calendarEvents']);
Route::post('/calendar/store', [AppointmentController::class, 'storeFromCalendar']);
Route::post('/calendar/update/{id}', [AppointmentController::class, 'updateFromCalendar']);
Route::delete('/calendar/delete/{id}', [AppointmentController::class, 'deleteFromCalendar']);