<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Doctor;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function homepage(){
        $departments = Department::where('featured' ,true)->latest()->withCount('doctors')->take(12)->get();
        return view('index', compact('departments'));
    }

    function showDepartment(){
        $departments = Department::latest()->withCount('doctors')->paginate(20);
        $departmentCount = Department::count();
        
        return view('specialities', compact('departments', 'departmentCount'));
    }

    function showDoctorList(Request $request){
        $doctors = Doctor::query();

        if($request->department){
            $doctors->where('department_id', $request->department);
        }
        

       $doctors =  $doctors->where('status', true)->orderBy('joining_date', 'desc')->select('id','department_id', 'name','status','availability_date','availability_time', 'profile_image')->with('department:id,title')->get();

        
        return view('doctors', compact('doctors'));
    }
}
