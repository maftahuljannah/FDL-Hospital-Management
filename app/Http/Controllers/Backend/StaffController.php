<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
  function showStaffProfile($id = null){
       $editedStaffProfile = $id? Staff::find($id) : null;        
       $staffs = Staff::latest()->paginate(10);
        
       return view('backend.admin.staffs.index',compact('staffs', 'editedStaffProfile'));
    } 
}
