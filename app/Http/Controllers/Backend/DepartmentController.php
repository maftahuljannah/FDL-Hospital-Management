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
        $departments = Department::latest()->paginate('15');
        return view('backend.admin.department.index', compact('departments', 'editedDepartment'));
    }
    function storeDepartment(Request $request, $id = null)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'nullable|max:50', // fix double ||
        ]);

        Department::updateOrCreate(
            ['id' => $id],
            $request->all()
        );

        $msg = $id ? 'Department has been Updated Successfully!!!' : 'Department Added Successfully!!!';

        // Redirect without $id so $editedDepartment = null
        return redirect()->route('admin.department')->with('msg', [
            'type' => 'success',
            'content' => $msg
        ]);
    }
    function deleteDepartment(Request $request, $id = null)
    {
        Department::find($id)->delete($request->all());
        $msg = $id ? 'Department has been Deleted Successfully' : 'Department added Successfully';
        return back()->with('msg', [
            'type' => 'success',
            'content' => $msg
        ]);
    }
    public function status($id)
    {
        $department = Department::findOrFail($id);
        $department->status = !$department->status; // toggle
        $department->save();

        return back()->with('msg', [
            'type' => 'success',
            'content' => 'Department status updated successfully!'
        ]);
    }
}
