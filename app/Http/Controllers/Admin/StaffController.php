<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    function staff(){
        $showStaffs = Staff::latest()->paginate('15');
        return view('backend.admin.staff.index',compact('showStaffs'));
    }




    function addStaff($id = null){
        $editedStaff = $id ? Staff::find($id) : null;
        return view('backend.admin.staff.newStaff', compact('editedStaff'));
    }




    function storeStaff(Request $request , $id = null){
        $request->validate([
            'name' => 'required|min:4',
            'designation' => 'required',
            'phone' => 'required|max:11|min:10',
            'emergency_contact' => 'nullable|max:11|min:10',
            'nid' => 'required',
            'type' => 'required',
            'shift' => 'required',
            'employee_id' => 'nullable',
            'address' => 'required',
            'blood_type' => 'required',
            'profile_image' => 'nullable',
        ]);
        $id = $id ?? $request->id;
        $staff = Staff::updateOrCreate(['id' => $id],$request->all());
        $msg = $id ? 'Staff Information has been Updated Successfully!!!' : 'Staff Information Added Successfully!!!';
        // dd($staff);
        return to_route('admin.staff')->with('msg' , [
        'type' => 'success',
        'content' => $msg
        ]);
    }
    function deleteStaff(Request $request, $id = null){
        Staff::find($id)->delete($request->all());
        return to_route('admin.staff')->with('msg', [
        'type' => 'success',
        'content' => 'Table deleted successfully!'
    ]);;
    }


}
