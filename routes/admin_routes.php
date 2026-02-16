<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DepartmentController;
use App\Http\Controllers\Admin\AdminDashboardController;

Route::get('/dashboard', [AdminDashboardController::class,'dashboard'])->name('dashboard')->middleware('auth');

Route::get('/department/{id?}', [DepartmentController::class,'showDepartment'])->name('department');
Route::post('/department/store/{id?}', [DepartmentController::class,'store'])->name('department.store');
// Route::post('/department/edit/{id?}', [DepartmentController::class,'edit'])->name('department.edit');
Route::post('/department/update/{id}', [DepartmentController::class, 'update'])->name('department.update');
