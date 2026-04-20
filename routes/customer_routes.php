<?php

use Illuminate\Support\Facades\Route;


Route::get('/dashboard', function (){
    return "Welcome to dashboard " . auth('customer')->user()->name;
})->name('dashboard');