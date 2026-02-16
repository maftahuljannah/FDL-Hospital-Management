@extends('layouts.BackendAdmin')
@section('title','Add-Staff-Admin')

@section('content')
<div style="max-width:900px; margin:auto; margin-top:40px;">

    <div style="background:#ffffff; padding:25px; border-radius:10px; box-shadow:0 0 10px rgba(0,0,0,0.1);">

        <h3 style="margin-bottom:20px; color:#0d6efd;">
            {{ $editedStaff ? 'Update Staff Profile' : 'Add Staff Profile' }} 
        </h3>

        <form action="{{ route('admin.staff.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if ($editedStaff)
                <input type="hidden" name="id" value="{{ $editedStaff->id }}">
            @endif

            <div style="display:flex; flex-wrap:wrap; gap:15px;">

                <!-- Profile Image -->
                <div style="width:100%;">
                    <label style="font-weight:600;">Profile Image</label>
                    <input type="file" name="profile_image"
                           style="width:100%; padding:8px; border:1px solid #ccc; border-radius:6px;">
                </div>

                <!-- Name -->
                <div style="width:48%;">
                    <label style="font-weight:600;">Staff Name <span class="text-danger">*</span></label>
                    <input type="text" name="name" placeholder="Enter name"
                           value="{{ old('name', $editedStaff->name ?? null) }}"
                           style="width:100%; padding:10px; border:1px solid #ccc; border-radius:6px;">
                           @error('name')
                    <span class="text-danger fw-bold">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Employee ID -->
                <div style="width:48%;">
                    <label style="font-weight:600;">Employee ID</label>
                    <input type="text" name="employee_id" placeholder="EMP-001"
                           value="{{ old('employee_id', $editedStaff->employee_id ?? null) }}"
                           style="width:100%; padding:10px; border:1px solid #ccc; border-radius:6px;">
                           @error('employee_id')
                    <span class="text-danger fw-bold">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Department ID -->
                <div style="width:48%;">
                    <label style="font-weight:600;">Department ID</label>
                    <input type="text" name="department_id" placeholder="DEP-01"
                           value="{{ old('department_id', $editedStaff->department_id ?? null) }}"
                           style="width:100%; padding:10px; border:1px solid #ccc; border-radius:6px;">
                           @error('department_id')
                    <span class="text-danger fw-bold">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Designation -->
                <div style="width:48%;">
                    <label style="font-weight:600;">Designation <span class="text-danger">*</span></label>
                    <input type="text" name="designation" placeholder="Accountant, Nurse, etc."
                           value="{{ old('designation', $editedStaff->designation ?? null) }}"
                           style="width:100%; padding:10px; border:1px solid #ccc; border-radius:6px;">
                           @error('designation')
                    <span class="text-danger fw-bold">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Phone -->
                <div style="width:48%;">
                    <label style="font-weight:600;">Phone <span class="text-danger">*</span></label>
                    <input type="text" name="phone" placeholder="01712345678"
                           value="{{ old('phone', $editedStaff->phone ?? null) }}"
                           style="width:100%; padding:10px; border:1px solid #ccc; border-radius:6px;">
                           @error('phone')
                    <span class="text-danger fw-bold">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Emergency Contact -->
                <div style="width:48%;">
                    <label style="font-weight:600;">Emergency Contact</label>
                    <input type="text" name="emergency_contact" placeholder="01898765432"
                           value="{{ old('emergency_contact', $editedStaff->emergency_contact ?? null) }}"
                           style="width:100%; padding:10px; border:1px solid #ccc; border-radius:6px;">
                           @error('emergency_contact')
                    <span class="text-danger fw-bold">{{ $message }}</span>
                    @enderror
                </div>

                <!-- NID -->
                <div style="width:48%;">
                    <label style="font-weight:600;">NID <span class="text-danger">*</span></label>
                    <input type="text" name="nid" placeholder="19987654321012345"
                           value="{{ old('nid', $editedStaff->nid ?? null) }}"
                           style="width:100%; padding:10px; border:1px solid #ccc; border-radius:6px;">
                           @error('nid')
                    <span class="text-danger fw-bold">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Type -->
                <div style="width:48%;">
                    <label style="font-weight:600;">Type</label>
                    <select name="type" style="width:100%; padding:10px; border:1px solid #ccc; border-radius:6px;">
                       <option value="Full-Time" {{ old('type', $editedStaff->type ?? '') == 'Full-Time' ? 'selected' : '' }}>Full-Time</option>
                        <option value="Part-Time" {{ old('type', $editedStaff->type ?? '') == 'Part-Time' ? 'selected' : '' }}>Part-Time</option>
                        <option value="Visiting" {{ old('type', $editedStaff->type ?? '') == 'Visiting' ? 'selected' : '' }}>Visiting</option>

                    </select>
                    @error('type')
                    <span class="text-danger fw-bold">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Shift -->
                <div style="width:48%;">
                    <label style="font-weight:600;">Shift</label>
                    <select name="shift" style="width:100%; padding:10px; border:1px solid #ccc; border-radius:6px;">
                        @if ($editedStaff)
                        <option selected>{{ old('shift', $editedStaff->shift ?? null) }}</option>
                        @endif
                        <option selected>Morning</option>
                        <option>Evening</option>
                        <option>Night</option>
                    </select>
                    @error('shift')
                    <span class="text-danger fw-bold">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Blood Type -->
                <div style="width:48%;">
                    <label style="font-weight:600;">Blood Type</label>
                    <select name="blood_type" style="width:100%; padding:10px; border:1px solid #ccc; border-radius:6px;">
                        @if ($editedStaff)
                        <option selected>{{ old('blood_type', $editedStaff->blood_type ?? null) }}</option>
                        @endif
                        <option>A+</option>
                        <option selected>B+</option>
                        <option>O+</option>
                        <option>AB+</option>
                    </select>
                    @error('blood_type')
                    <span class="text-danger fw-bold">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Address -->
                <div style="width:100%;">
                    <label style="font-weight:600;">Address <span class="text-danger">*</span></label>
                    <textarea name="address" rows="3" style="width:100%; padding:10px; border:1px solid #ccc; border-radius:6px;">{{ old('address', $editedStaff->address ?? null) }}</textarea>
                    @error('address')
                    <span class="text-danger fw-bold">{{ $message }}</span>
                    @enderror
                </div>

            </div>

            <!-- Submit Button -->
            <div style="margin-top:20px;">
                <button type="submit"
                        style="background:#198754; color:white; padding:10px 25px; border:none; border-radius:6px; cursor:pointer;">
                    {{ $editedStaff ? 'Update Staff Info' : 'Save Staff Info' }}
                </button>
            </div>

        </form>

    </div>

</div>
@endsection
