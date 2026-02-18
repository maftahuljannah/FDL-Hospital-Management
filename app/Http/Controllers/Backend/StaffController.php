<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    function showStaffProfile(){
       
        return view('backend.admin.staffs.Index');
    }

    function showAllStaffs(){
        $staffs = Staff::latest()->get();
        return view('backend.admin.staffs.All_Staffs', compact('staffs'));
    }

    function storeStaffInfo(Request $req){
        $req->validate([
            'name' => 'required|string',
            'department_id' => 'required|string',
            'designation' => 'required|string',
            'shift' => 'nullable|string',
            'phone'=> 'required',
            'description'=> 'nullable|max:100'
        ]);
        $staff = Staff::create($req->all());
        return to_route('staffs')->with('msg',[
            'type'=> 'success',
            'content'=> 'Staff added successfully'
        ]);
    }




}
