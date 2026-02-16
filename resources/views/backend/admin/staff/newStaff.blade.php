@extends('layouts.BackendAdmin')
@section('title','Add-Staff-Admin')

@section('content')
<div style="max-width:900px; margin:auto; margin-top:40px;">

    <div style="background:#ffffff; padding:25px; border-radius:10px; box-shadow:0 0 10px rgba(0,0,0,0.1);">

        <h3 style="margin-bottom:20px; color:#0d6efd;">
            Add Staff Profile
        </h3>

        <form action="#" method="POST" enctype="multipart/form-data">
            @csrf

            <div style="display:flex; flex-wrap:wrap; gap:15px;">

                <!-- Profile Image -->
                <div style="width:100%;">
                    <label style="font-weight:600;">Profile Image</label>
                    <input type="file" name="profile_image"
                           style="width:100%; padding:8px; border:1px solid #ccc; border-radius:6px;">
                </div>

                <!-- Name -->
                <div style="width:48%;">
                    <label style="font-weight:600;">Staff Name</label>
                    <input type="text" name="name" placeholder="Enter name"
                           value="John Smith"
                           style="width:100%; padding:10px; border:1px solid #ccc; border-radius:6px;">
                </div>

                <!-- Employee ID -->
                <div style="width:48%;">
                    <label style="font-weight:600;">Employee ID</label>
                    <input type="text" name="employee_id" placeholder="EMP-001"
                           value="EMP-001"
                           style="width:100%; padding:10px; border:1px solid #ccc; border-radius:6px;">
                </div>

                <!-- Department ID -->
                <div style="width:48%;">
                    <label style="font-weight:600;">Department ID</label>
                    <input type="text" name="department_id" placeholder="DEP-01"
                           value="DEP-01"
                           style="width:100%; padding:10px; border:1px solid #ccc; border-radius:6px;">
                </div>

                <!-- Designation -->
                <div style="width:48%;">
                    <label style="font-weight:600;">Designation</label>
                    <input type="text" name="designation" placeholder="Accountant, Nurse, etc."
                           value="Accountant"
                           style="width:100%; padding:10px; border:1px solid #ccc; border-radius:6px;">
                </div>

                <!-- Phone -->
                <div style="width:48%;">
                    <label style="font-weight:600;">Phone</label>
                    <input type="text" name="phone" placeholder="01712345678"
                           value="01712345678"
                           style="width:100%; padding:10px; border:1px solid #ccc; border-radius:6px;">
                </div>

                <!-- Emergency Contact -->
                <div style="width:48%;">
                    <label style="font-weight:600;">Emergency Contact</label>
                    <input type="text" name="emergency_contact" placeholder="01898765432"
                           value="01898765432"
                           style="width:100%; padding:10px; border:1px solid #ccc; border-radius:6px;">
                </div>

                <!-- NID -->
                <div style="width:48%;">
                    <label style="font-weight:600;">NID</label>
                    <input type="text" name="nid" placeholder="19987654321012345"
                           value="19987654321012345"
                           style="width:100%; padding:10px; border:1px solid #ccc; border-radius:6px;">
                </div>

                <!-- Type -->
                <div style="width:48%;">
                    <label style="font-weight:600;">Type</label>
                    <select name="type" style="width:100%; padding:10px; border:1px solid #ccc; border-radius:6px;">
                        <option selected>Full-Time</option>
                        <option>Part-Time</option>
                        <option>Visiting</option>
                    </select>
                </div>

                <!-- Shift -->
                <div style="width:48%;">
                    <label style="font-weight:600;">Shift</label>
                    <select name="shift" style="width:100%; padding:10px; border:1px solid #ccc; border-radius:6px;">
                        <option selected>Morning</option>
                        <option>Evening</option>
                        <option>Night</option>
                    </select>
                </div>

                <!-- Blood Type -->
                <div style="width:48%;">
                    <label style="font-weight:600;">Blood Type</label>
                    <select name="blood_type" style="width:100%; padding:10px; border:1px solid #ccc; border-radius:6px;">
                        <option>A+</option>
                        <option selected>B+</option>
                        <option>O+</option>
                        <option>AB+</option>
                    </select>
                </div>

                <!-- Address -->
                <div style="width:100%;">
                    <label style="font-weight:600;">Address</label>
                    <textarea name="address" rows="3" style="width:100%; padding:10px; border:1px solid #ccc; border-radius:6px;">Dhaka, Bangladesh</textarea>
                </div>

            </div>

            <!-- Submit Button -->
            <div style="margin-top:20px;">
                <button type="submit"
                        style="background:#198754; color:white; padding:10px 25px; border:none; border-radius:6px; cursor:pointer;">
                    Save Staff Info
                </button>
            </div>

        </form>

    </div>

</div>
@endsection
