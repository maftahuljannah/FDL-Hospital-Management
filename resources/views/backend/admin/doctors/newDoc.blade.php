@extends('layouts.BackendAdmin')
@section('title','Add-Doctor-Admin')

@section('content')
<div style="max-width:900px; margin:auto; margin-top:40px;">

    <div style="background:#ffffff; padding:25px; border-radius:10px; box-shadow:0 0 10px rgba(0,0,0,0.1);">

        <h3 style="margin-bottom:20px; color:#0d6efd;">
            {{ $editedDoctor ? 'Update Doctor Profile' : 'Add Doctor Profile' }}
        </h3>

        <form action="{{ route('admin.doctor.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            @if($editedDoctor)
                <input type="hidden" name="id" value="{{ $editedDoctor->id }}">
            @endif

            <div style="display:flex; flex-wrap:wrap; gap:15px;">

                <!-- Profile Image -->
                <div style="width:100%;">
                    <label style="font-weight:600;">Profile Image</label>
                    <input type="file" name="profile_image"
                           style="width:100%; padding:8px; border:1px solid #ccc; border-radius:6px;">
                    @error('profile_image')
                    <span class="text-danger fw-bold">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Name -->
                <div style="width:48%;">
                    <label style="font-weight:600;">Doctor Name <span class="text-danger">*</span></label>
                    <input type="text" name="name" placeholder="Enter name"
                           value="{{ old('name', $editedDoctor->name ?? '') }}"
                           style="width:100%; padding:10px; border:1px solid #ccc; border-radius:6px;">
                    @error('name')
                    <span class="text-danger fw-bold">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Title -->
                <div style="width:48%;">
                    <label style="font-weight:600;">Title <span class="text-danger">*</span></label>
                    <input type="text" name="title" placeholder="Dr., Prof., etc."
                           value="{{ old('title', $editedDoctor->title ?? null) }}"
                           style="width:100%; padding:10px; border:1px solid #ccc; border-radius:6px;">
                    @error('title')
                    <span class="text-danger fw-bold">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Designation -->
                <div style="width:100%;">
                    <label style="font-weight:600;">Designation </label>
                    <input type="text" name="designation" placeholder="Cardiologist, Surgeon, etc."
                           value="{{ old('designation', $editedDoctor->designation ?? null) }}"
                           style="width:100%; padding:10px; border:1px solid #ccc; border-radius:6px;">
                    @error('designation')
                    <span class="text-danger fw-bold">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Gender -->
                <div style="width:48%;">
                    <label style="font-weight:600;">Gender <span class="text-danger">*</span></label>
                    <select name="gender"
                            style="width:100%; padding:10px; border:1px solid #ccc; border-radius:6px;">
                        <option value="">Select Gender</option>
                        <option value="Male" {{ (old('gender', $editedDoctor->gender ?? '') == 'Male') ? 'selected' : '' }}>Male</option>
                        <option value="Female" {{ (old('gender', $editedDoctor->gender ?? '') == 'Female') ? 'selected' : '' }}>Female</option>
                        <option value="Other" {{ (old('gender', $editedDoctor->gender ?? '') == 'Other') ? 'selected' : '' }}>Other</option>
                    </select>
                    @error('gender')
                    <span class="text-danger fw-bold">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Status -->
                <div style="width:48%;">
                    <label style="font-weight:600;">Status <span class="text-danger">*</span></label>
                    <select name="status"
                            style="width:100%; padding:10px; border:1px solid #ccc; border-radius:6px;">
                        <option value="">Select Status</option>
                        <option value="1" {{ (old('status', $editedDoctor->status ?? '') == 1) ? 'selected' : '' }}>Active</option>
                        <option value="0" {{ (old('status', $editedDoctor->status ?? '') == 0) ? 'selected' : '' }}>On Leave</option>
                    </select>
                    @error('status')
                    <span class="text-danger fw-bold">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Joining Date -->
                <div style="width:48%;">
                    <label style="font-weight:600;">Joining Date</label>
                    <input type="date" name="joining_date"
                           value="{{ old('joining_date', $editedDoctor->joining_date ?? null) }}"
                           style="width:100%; padding:10px; border:1px solid #ccc; border-radius:6px;">
                    @error('joining_date')
                    <span class="text-danger fw-bold">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Availability Time -->
                <div style="width:48%;">
                    <label style="font-weight:600;">Availability Time <span class="text-danger">*</span></label>
                    <input type="date" multiple>
                    <input type="time" name="availability_time"
                           value="{{ old('availability_time', $editedDoctor->availability_time ?? null) }}"
                           style="width:100%; padding:10px; border:1px solid #ccc; border-radius:6px;">
                    @error('availability_time')
                    <span class="text-danger fw-bold">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Description -->
                <div style="width:100%;">
                    <label style="font-weight:600;">Description <span class="text-danger">*</span></label>
                    <textarea name="description" rows="4" placeholder="Write doctor description"
                              style="width:100%; padding:10px; border:1px solid #ccc; border-radius:6px;">{{ old('description', $editedDoctor->description ?? null) }}</textarea>
                    @error('description')
                    <span class="text-danger fw-bold">{{ $message }}</span>
                    @enderror
                </div>

            </div>

            <!-- Submit Button -->
            <div style="margin-top:20px;">
                <button type="submit"
                        style="background:#198754; color:white; padding:10px 25px; border:none; border-radius:6px; cursor:pointer;">
                    {{ $editedDoctor ? 'Update Doctor Info' : 'Save Doctor Info' }}
                </button>
            </div>

        </form>

    </div>

</div>
@endsection
