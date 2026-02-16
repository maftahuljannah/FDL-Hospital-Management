@extends('layouts.BackendAdmin')
@section('title','Doctor - Admin')

@section('content')
<div class="container mt-5">
  <div class="row">

    <div class="newDept d-flex flex-row-reverse">
      <a href="{{ route('admin.doctor.adddoc') }}">
        <button type="button" class="btn btn-primary align-text-botton">
          Add new Doctor
        </button>
      </a>
    </div>

    <h2 class="mb-4 text-center text-primary">Doctor Information</h2>

    <div class="table-responsive col-lg-12">
      <table class="table table-bordered align-middle text-center">
        <thead class="table-primary align-middle">
          <tr>
            <th>ID</th>
            <th>Employee ID</th>
            <th>Profile</th>
            <th>Name</th>
            <th>Title</th>
            <th>Designation</th>
            <th>Department ID</th>
            <th>Description</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>

        <tbody>
          @foreach ($doctors as $key =>$doctor)
          <tr>
            <td>{{ ++$key }}</td>
            <td>EMP-{{ $key }}</td>
            <td>
              <img src="https://api.dicebear.com/9.x/adventurer/svg?seed=Brian"
                   alt="avatar"
                   class="rounded-circle"
                   width="50" height="50">
            </td>
            <td>{{ $doctor->name }}</td>
            <td>{{ $doctor->title }}</td>
            <td>{{ $doctor->designation }}</td>
            <td>DEP-01</td>
            <td>{{ $doctor->description }}</td>

            <td>
              @if($doctor->status == 1)
                <span class="badge bg-success text-white px-3 py-2">Active</span>
              @else
                <span class="badge bg-danger text-white px-3 py-2">Inactive</span>
              @endif
            </td>

            <td>
              <span class="d-flex gap-2 justify-content-center">
                <a href="{{ route('admin.doctor.adddoc' , $doctor->id) }}" class="badge bg-success">
                  Edit
                </a>

                <a href="javascript:void(0)"
                   onclick="confirmDelete('{{ route('admin.doctor.delete', $doctor->id) }}')"
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
        {{ $doctors->links() }}
      </nav>
    </div>

  </div>
</div>

{{-- DELETE CONFIRMATION TEMPLATE --}}
<template id="confirm-template">
  <swal-title>Are you sure?</swal-title>
  <swal-icon type="warning" color="red"></swal-icon>
  <swal-html>
    This doctor will be permanently deleted!
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
