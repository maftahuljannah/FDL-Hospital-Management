<?php


use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\DoctorController;
use App\Http\Controllers\Admin\StaffController;
use App\Http\Controllers\Backend\DepartmentController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', [AdminDashboardController::class,'dashboard'])->name('dashboard')->middleware('auth');

Route::get('/department/{id?}', [DepartmentController::class,'showDepartment'])->name('department');
Route::post('/department/store/{id?}', [DepartmentController::class,'store'])->name('department.store');
Route::get('/department/delete/{id}', [DepartmentController::class, 'deleteDepartment'])->name('department.delete');
Route::get('/department/status/{id}', [DepartmentController::class, 'status'])->name('department.status');


// DoctorController
Route::get('/doctor', [DoctorController::class, 'showDoctor'])->name('doctor');
Route::get('/doctor/adddoc/{id?}', [DoctorController::class, 'addDoc'])->name('doctor.adddoc');
Route::post('/doctor/adddoc/store/{id?}', [DoctorController::class, 'storeDoc'])->name('doctor.store');
Route::get('/doctor/delete/{id}', [DoctorController::class, 'deleteDoctor'])->name('doctor.delete');


//Staff
Route::get('/staff', [StaffController::class, 'staff'])->name('staff');
Route::get('/staff/addstaff/{id?}', [StaffController::class, 'addStaff'])->name('staff.addstaff');
Route::post('/staff/addstaff/store/{id?}', [StaffController::class, 'storeStaff'])->name('staff.store');
Route::get('/staff/delete/{id}', [StaffController::class, 'deleteStaff'])->name('staff.delete');
