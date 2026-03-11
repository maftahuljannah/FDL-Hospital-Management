<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Department;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function homepage(){
        $departments = Department::where('featured' ,true)->latest()->withCount('doctors')->take(12)->get();
        
        return view('index', compact('departments'));
    }
}
