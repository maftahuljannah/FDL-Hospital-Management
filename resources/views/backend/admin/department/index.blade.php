@extends('layouts.BackendAdmin')
@section('title','Department-Admin')

@section('content')
<div class="container mt-5">
    <div class="row">
        <h2 class="mb-4 text-center text-primary">Department Information</h2>

        {{-- ================= TABLE ================= --}}
        <div
            class="col-lg-8 deptDetails"
            style="
        transition: all 0.4s ease;
        opacity: {{ $editedDepartment ? '0.4' : '1' }};
        filter: {{ $editedDepartment ? 'blur(1px)' : 'none' }};
        pointer-events: {{ $editedDepartment ? 'none' : 'auto' }};
      ">
            <div class="table-responsive card">
                <table class="table table-bordered align-middle text-center">
                    <thead class="table-primary">
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($departments as $key => $department)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{ $department->title }}</td>
                            <td>{{ $department->description ?? '------' }}</td>

                            {{-- ================= STATUS (read-only) ================= --}}
                            <td>
                                <span class="badge bg-{{ $department->status ? 'success' : 'danger' }}">
                                    {{ $department->status ? 'Active' : 'Inactive' }}
                                </span>
                            </td>

                            {{-- ================= ACTION ================= --}}
                            <td>
                                <span class="d-flex gap-2 justify-content-center">
                                    <a href="{{ route('admin.department', $department->id) }}" class="badge bg-success">Edit</a>
                                    <a href="javascript:void(0)"
                                        onclick="confirmDelete('{{ route('admin.department.delete',$department->id)}}')"
                                        class="badge bg-danger">
                                        Delete
                                    </a>
                                </span>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                <nav class="my-2 p-2">
                    {{ $departments->links() }}
                </nav>
            </div>
        </div>

        {{-- ================= FORM ================= --}}
        <div class="col-lg-4 addDept">
            <div
                class="card shadow-lg border-0 rounded-4"
                style="
          transition: all 0.4s ease;
          transform: {{ $editedDepartment ? 'scale(1.06) translateY(-10px)' : 'scale(1)' }};
          box-shadow: {{ $editedDepartment ? '0 20px 40px rgba(0,0,0,0.25)' : '' }};
        ">
                <div class="card-header bg-gradient-primary text-white rounded-top-4">
                    <h4 class="mb-0">
                        <i class="bi bi-building"></i>
                        {{ $editedDepartment ? 'Update Department' : 'Add New Department' }}
                    </h4>
                </div>

                <div class="card-body p-4">
                    <form method="POST" action="{{ route('admin.department.store', $editedDepartment ? $editedDepartment->id : null) }}">
                        @csrf

                        {{-- NAME --}}
                        <div class="mb-3">
                            <label class="fw-bold">Department Name <span class="text-danger">*</span></label>
                            <input
                                type="text"
                                name="title"
                                value="{{ $editedDepartment->title ?? '' }}"
                                class="form-control form-control-lg"
                                placeholder="Enter department name">
                            @error('title')
                            <span class="text-danger fw-bold">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- DESCRIPTION --}}
                        <div class="mb-4">
                            <label class="fw-bold">Description</label>
                            <textarea
                                name="description"
                                rows="3"
                                class="form-control form-control-lg"
                                placeholder="Enter department description">{{ $editedDepartment->description ?? '' }}</textarea>
                        </div>

                        {{-- STATUS DROPDOWN --}}
                        <div class="mb-4">
                            <label class="fw-bold d-block mb-2">Department Status</label>
                            <select name="status" class="form-control form-control-lg">
                                <option value="1" {{ ($editedDepartment->status ?? true) ? 'selected' : '' }}>Active</option>
                                <option value="0" {{ isset($editedDepartment->status) && !$editedDepartment->status ? 'selected' : '' }}>Inactive</option>
                            </select>
                        </div>

                        {{-- SUBMIT --}}
                        <button type="submit" class="btn btn-{{ $editedDepartment ? 'warning' : 'success' }} btn-lg w-100">
                            {{ $editedDepartment ? 'Update Department' : 'Add Department' }}
                        </button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>

{{-- DELETE CONFIRMATION TEMPLATE --}}
<template id="confirm-template">
    <swal-title>Are you sure?</swal-title>
    <swal-icon type="warning" color="red"></swal-icon>
    <swal-html>
        You won't be able to revert this!
    </swal-html>
    <swal-button type="confirm">
        Yes, delete it!
    </swal-button>
    <swal-button type="cancel">
        Cancel
    </swal-button>
</template>

@endsection

@push('scripts')
<script>
    @if(session()->has('msg'))
    Toast.fire({
        icon: "{{ session('msg')['type'] ?? 'success' }}",
        title: "{{ session('msg')['content'] ?? 'Action successful' }}"
    });
    @endif

    // Delete confirmation
    function confirmDelete(url) {
        Swal.fire({
            template: '#confirm-template',
            backdrop: true,
            allowOutsideClick: false,
            customClass: {
                popup: 'high-z-index'
            }
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = url;
            }
        });
    }
</script>
<style>
    .high-z-index {
        z-index: 999999999 !important;
    }

    .swal2-container {
        z-index: 999999999 !important;
    }
</style>

@endpush