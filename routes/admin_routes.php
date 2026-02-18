<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Backend\DepartmentController;
use App\Http\Controllers\Backend\StaffController;
use Illuminate\Support\Facades\Route;





Route::get('/dashboard', [AdminDashboardController::class,'dashboard'])->name('dashboard')->middleware('auth');
Route::get('/department/{id?}', [DepartmentController::class,'showDepartment'])->name('department');

Route::post('/department/store', [DepartmentController::class,'store'])->name('department.store');

Route::get('/staffprofile', [StaffController::class,'showStaffProfile'])->name('staffprofile');
Route::get('/staffs', [StaffController::class,'showAllStaffs'])->name('staffs');

Route::post('/store', [StaffController::class,'storeStaffInfo'])->name('staff.store');