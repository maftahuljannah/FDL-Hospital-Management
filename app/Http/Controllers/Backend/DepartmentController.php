<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{

    function showDepartment($id = null){
        $editDepartment =  $id ? Department::find($id) : null;
        $departments = Department::latest()->simplePaginate(2);
        return view('backend.admin.department.index', compact('departments','editDepartment'));
    }

    function store(Request $request){
        $request->validate([
            'title' => 'required',
            'description' => 'nullable|max:60'
        ]);

        Department::create($request->all());

        return back()->with('msg', [
            'type' => 'success',
            'content' => 'Department has been added!'
        ]);
    }
    function update(Request $request, $id){

        Department::find($id)->update($request->all());

        return back()->with('msg', [
            'type' => 'success',
            'content' => 'Department has been updated!'
        ]);
    }

}
