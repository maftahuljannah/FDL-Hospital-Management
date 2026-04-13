<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Doctor;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function homepage(){
        $departments = Department::where('status' ,true)->latest()->withCount('doctors')->get();
        $doctors = Doctor::where('status', true)->latest()->select('id', 'name')->take(15)->get();
        return view('index', compact('departments', 'doctors'));
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


    function showDoctorsAjaxList(Request $request){
        if($request->docId){
            $doctors = Doctor::where('id', $request->docId)->where('status', true)->select('id','department_id', 'name','status','availability_date','availability_time')->first();
        } else{
            $doctors = Doctor::where('department_id', $request->dept_id)->where('status', true)->select('id','department_id', 'name','status','availability_date','availability_time')->get();
        }
        return response()->json($doctors);
    }
}
