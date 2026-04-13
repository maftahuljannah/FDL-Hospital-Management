<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Department;
use Illuminate\Support\Facades\Storage;

class DoctorController extends Controller
{
    function showDoctor(){
        $doctors = Doctor::latest()->paginate('15');
        return view('backend.admin.doctors.index',compact('doctors'));
    }
        
    function addDoc($id = null){
        $editedDoctor = $id ? Doctor::find($id) : null;
        $departments = Department::where('status', true)->latest()->get();
        
        return view('backend.admin.doctors.newDoc',compact('editedDoctor', 'departments'));
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
        'profile_image' => 'nullable|mimes:jpg,png,webp',

    ]);

    $id = $id ?? $request->id;
    $oldPrevImg = Doctor::find($id)?->profile_image;
    $profileImg = $request->hasFile('profile_image') ? $request->profile_image->store('doctors', 'public') : ( $oldPrevImg ?? null);
    
    // Available Date
    $availableDates = $request->available_date ? join(  " ,", $request->available_date ) : null;
    
    // Delete Image
    if($request->hasFile('profile_image') &&  $oldPrevImg){
        if(Storage::disk('public')->exists($oldPrevImg)){
            Storage::disk('public')->delete($oldPrevImg);
        }
    }

    Doctor::updateOrCreate([
        'id' => $id
    ],[
        'department_id' => $request->department_id,
        'profile_image' => $profileImg,
        'title' => $request->title,
        'name' => $request->name,
        'designation' => $request->designation,
        'description' => $request->description,
        'gender' => $request->gender,
        'status' => $request->status,
        'availability_time' => $request->availability_time,
        'availability_date' => $availableDates,
        'joining_date' => $request->joining_date,
    ]);
    $msg = $id ? 'Doctor Information has been Updated Successfully!!!' : 'Doctor Added Successfully!!!';
    return to_route('admin.doctor')->with('msg' , [
        'type' => 'success',
        'content' => $msg
    ]);
    
    }

    function deleteDoctor(Request $request, $id = null){
        $msg = $id ? 'Table is deleted Successfully' : 'Table Deleted Successfully';

        $doctor = Doctor::find($id);
        // Delete Image
        if($doctor->profile_image){
            if(Storage::disk('public')->exists($doctor->profile_image)){
                Storage::disk('public')->delete($doctor->profile_image);
            }
        }

        $doctor->delete();

        return back()->with('msg' , [
        'type' => 'success',
        'content' => $msg
    ]);;
    }



}
