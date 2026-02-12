<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    function showDepartment($id = null){
       $editedDepartment = $id? Department::find($id) : null;        
       $departments = Department::latest()->paginate(10);
        
       return view('backend.admin.department.index',compact('departments', 'editedDepartment'));
    }

    function store(Request $request){
       $request->validate([
        'title'=> 'required',
        'description'=> 'nullable|max:60'
       ]);

      $department= Department::create($request->all());
       
    // *success
    return back()->with('msg',[
        'type'=>'success',
        'content'=>'Department has been added'
    ]);
    }
}
