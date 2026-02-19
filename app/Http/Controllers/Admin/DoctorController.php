<?php

namespace App\Http\Controllers\Admin;

use App\Models\Doctor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DoctorController extends Controller
{
    function showDoctor(){
        $doctors = Doctor::latest()->paginate('15');
        return view('backend.admin.doctors.index',compact('doctors'));
        }
        
        function addDoc($id = null){
        $editedDoctor = $id ? Doctor::find($id) : null;
        return view('backend.admin.doctors.newDoc',compact('editedDoctor'));
    }
    function storeDoc(Request $request,$id = null){
    $request->validate([
        'title' => 'required',
        'name' => 'required',
        'designation' => 'required',
        'description' => 'nullable||min:20',
        'gender' => 'required',
        'status' => 'required',
        'availability_time' => 'required',
        'joining_date' => 'nullable',
        'profile_image' => 'nullable',

    ]);
    $id = $id ?? $request->id;
    Doctor::updateOrCreate([
        'id' => $id
    ],$request->all());
    $msg = $id ? 'Doctor Information has been Updated Successfully!!!' : 'Doctor Added Successfully!!!';
    return to_route('admin.doctor')->with('msg' , [
        'type' => 'success',
        'content' => $msg
    ]);
    
    }

    function deleteDoctor(Request $request, $id = null){
        $msg = $id ? 'Table is deleted Successfully' : 'Table Deleted Successfully';
        Doctor::find($id)->delete($request->all());
        return back()->with('msg' , [
        'type' => 'success',
        'content' => $msg
    ]);;
    }



}
