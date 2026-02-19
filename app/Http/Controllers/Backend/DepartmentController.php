<?php

namespace App\Http\Controllers\Backend;

use App\Models\Department;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DepartmentController extends Controller
{
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
        $request->validate([
            'title' => 'required',
            'description' => 'nullable|max:50',
        ]);

        Department::updateOrCreate(
            ['id' => $id],
            $request->only(['title','description'])
        );

        $msg = $id 
            ? 'Department has been Updated Successfully!' 
            : 'Department Added Successfully!';

        return redirect()->route('admin.department')->with('msg', [
            'type' => 'success',
            'content' => $msg
        ]);
    }

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
}
