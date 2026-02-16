<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    function staff(){
        return view('backend.admin.staff.index');
    }
    function addStaff(){
        return view('backend.admin.staff.newStaff');
    }
}
