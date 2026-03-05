@extends('layouts.BackendAdmin')
@section('title','Staff - Admin')

@section('content')
<div class="container mt-5">
  <div class="row">

    <div class="newDept d-flex flex-row-reverse">
      <a href="{{ route('admin.staff.addstaff') }}">
        <button type="button" class="btn btn-primary align-text-botton">
          Add new Staff
        </button>
      </a>
    </div>

    <h2 class="mb-4 text-center text-primary">Staff Information</h2>

    <div class="table-responsive col-lg-12">
      <table class="table table-bordered align-middle text-center">
        <thead class="table-primary align-middle">
          <tr>
            <th>#</th>
            <th>Employee ID</th>
            <th>Name</th>
            <th>Designation</th>
            <th>Phone</th>
            <th>NID</th>
            <th>Type</th>
            <th>Shift</th>
            <th>Address</th>
            <th>Photo</th>
            <th>Action</th>
          </tr>
        </thead>

        <tbody>
          @foreach ($showStaffs as $key=>$showStaff)
          <tr>
            <td>{{++$key}}</td>
            <td>EMP-{{$showStaff->employee_id}}</td>
            <td>{{$showStaff->name }}</td>
            <td>{{$showStaff->designation }}</td>
            <td>{{$showStaff->phone }}</td>
            <td>{{$showStaff->nid }}</td>
            <td>{{$showStaff->type }}</td>
            <td>{{$showStaff->shift }}</td>
            <td>{{$showStaff->address }}</td>
            <td><img src="https://api.dicebear.com/9.x/adventurer/svg?seed=Staff1" width="50" height="50" class="rounded-circle"></td>
            <td>
              <span class="d-flex gap-2 justify-content-center">
                <a href="{{ route('admin.staff.addstaff', $showStaff->id) }}" class="badge bg-success">Edit</a>
                <a href="javascript:void(0)" 
                  onclick="confirmDelete('{{ route('admin.staff.delete', $showStaff->id) }}')" 
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
        {{ $showStaffs->links() }}
      </nav>
    </div>

  </div>
</div>




{{-- DELETE CONFIRMATION TEMPLATE --}}
<template id="confirm-template">
  <swal-title>Are you sure?</swal-title>
  <swal-icon type="warning" color="red"></swal-icon>
  <swal-html>
    This staff will be permanently deleted!
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

@if (session()->has('msg'))
Toast.fire({
  icon: "{{ session('msg')['type'] ?? 'success' }}",
  title: "{{ session('msg')['content'] ?? 'Action successful' }}"
});
@endif


function confirmDelete(url){
    Swal.fire({
        template: '#confirm-template',
        backdrop: true,
        allowOutsideClick: false,
        customClass: {
            popup: 'high-z-index'
        }
    }).then((result) => {
        if(result.isConfirmed){
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
