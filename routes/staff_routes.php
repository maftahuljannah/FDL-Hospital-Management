<?php

use App\Http\Controllers\Backend\StaffController;
use Illuminate\Support\Facades\Route;


Route::get('/staffprofile/{id?}', [StaffController::class,'showStaffProfile'])->name('staffprofile');
Route::post('/staff/store', [StaffController::class,'store'])->name('staff.store');