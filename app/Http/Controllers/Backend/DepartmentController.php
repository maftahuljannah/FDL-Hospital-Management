<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    function showDepartment($id = null){
        $editedDepartment = $id ?  Department::find($id) : null;
        $departments = Department::latest()->simplePaginate(2);
       return view('backend.admin.department.index', compact('departments','editedDepartment'));
    }


    function store(Request $request, $id=null){
        $request->validate([
            'title' => 'required',
            'description' => 'nullable|max:60'
        ]);

        $department = Department::updateOrCreate([
            'id' => $id
        ],$request->all());
        $msg = $id ? 'Department has been updated!' : 'Department has been added!';
        //* Success
        return back()->with('msg', [
            'type' => 'success',
            'content' => $msg
        ]);
    }
}
