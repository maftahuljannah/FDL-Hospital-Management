<?php

namespace App\Http\Controllers\Backend;

use App\Models\Department;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DepartmentController extends Controller
{
<<<<<<< HEAD
    function showDepartment($id = null)
    {
        $editedDepartment = $id ? Department::find($id) : null;
        $departments = Department::latest()->paginate(15);

        return view('backend.admin.department.index', 
            compact('departments', 'editedDepartment')
        );
    }

    function store(Request $request, $id = null)
    {
=======

    function showDepartment($id = null){
        $editDepartment =  $id ? Department::find($id) : null;
        $departments = Department::latest()->simplePaginate(2);
        return view('backend.admin.department.index', compact('departments','editDepartment'));
    }

    function store(Request $request){
>>>>>>> 039df06fbec1313a134b934c67b0328032d8d0d3
        $request->validate([
            'title' => 'required',
            'description' => 'nullable|max:50',
        ]);

<<<<<<< HEAD
        Department::updateOrCreate(
            ['id' => $id],
            $request->only(['title','description'])
        );

        $msg = $id 
            ? 'Department has been Updated Successfully!' 
            : 'Department Added Successfully!';

        return redirect()->route('admin.department')->with('msg', [
=======
        Department::create($request->all());

        return back()->with('msg', [
>>>>>>> 039df06fbec1313a134b934c67b0328032d8d0d3
            'type' => 'success',
            'content' => 'Department has been added!'
        ]);
    }
<<<<<<< HEAD

    function deleteDepartment($id)
    {
        Department::findOrFail($id)->delete();

        return back()->with('msg', [
            'type' => 'success',
            'content' => 'Department has been Deleted Successfully'
        ]);
    }

    public function status($id)
    {
        $department = Department::findOrFail($id);
        $department->status = !$department->status;
        $department->save();

        return back()->with('msg', [
            'type' => 'success',
            'content' => 'Department status updated successfully!'
        ]);
    }
=======
    function update(Request $request, $id){

        Department::find($id)->update($request->all());

        return back()->with('msg', [
            'type' => 'success',
            'content' => 'Department has been updated!'
        ]);
    }

>>>>>>> 039df06fbec1313a134b934c67b0328032d8d0d3
}
