<?php

namespace App\Http\Controllers;

use App\Models\Leave;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LeaveController extends Controller
{
    public function store(Request $request)
    {
        $doctor = Auth::user();

        Leave::create([
            'doctor_id' => $request->doctor_id,
            'department_id' => $doctor ? $doctor->department_id : null,
            'title' => $request->title,
            'reason' => $request->reason,
            'from_date' => $request->from_date,
            'to_date' => $request->to_date,
            'status' => 'pending'
        ]);

        return back()->with('success', 'Leave applied successfully!');
    }
}