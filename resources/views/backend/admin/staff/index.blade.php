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
            <th>ID</th>
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
          <tr>
            <td>1</td>
            <td>EMP-001</td>
            <td>John Smith</td>
            <td>Accountant</td>
            <td>01712345678</td>
            <td>19987654321012345</td>
            <td>Full-Time</td>
            <td>Morning</td>
            <td>Dhaka, Bangladesh</td>
            <td><img src="https://api.dicebear.com/9.x/adventurer/svg?seed=Staff1" width="50" height="50" class="rounded-circle"></td>
            <td>
              <span class="d-flex gap-2 justify-content-center">
                <a href="#" class="badge bg-success">Edit</a>
                <a href="javascript:void(0)" onclick="alert('Delete confirmed')" class="badge bg-danger">Delete</a>
              </span>
            </td>
          </tr>

          <tr>
            <td>2</td>
            <td>EMP-002</td>
            <td>Jane Doe</td>
            <td>Nurse</td>
            <td>01787654321</td>
            <td>19912345678901234</td>
            <td>Part-Time</td>
            <td>Evening</td>
            <td>Chittagong, Bangladesh</td>
            <td><img src="https://api.dicebear.com/9.x/adventurer/svg?seed=Staff2" width="50" height="50" class="rounded-circle"></td>
            <td>
              <span class="d-flex gap-2 justify-content-center">
                <a href="#" class="badge bg-success">Edit</a>
                <a href="javascript:void(0)" onclick="alert('Delete confirmed')" class="badge bg-danger">Delete</a>
              </span>
            </td>
          </tr>

          <tr>
            <td>3</td>
            <td>EMP-003</td>
            <td>Robert Brown</td>
            <td>Technician</td>
            <td>01711223344</td>
            <td>19956789012345678</td>
            <td>Visiting</td>
            <td>Night</td>
            <td>Khulna, Bangladesh</td>
            <td><img src="https://api.dicebear.com/9.x/adventurer/svg?seed=Staff3" width="50" height="50" class="rounded-circle"></td>
            <td>
              <span class="d-flex gap-2 justify-content-center">
                <a href="#" class="badge bg-success">Edit</a>
                <a href="javascript:void(0)" onclick="alert('Delete confirmed')" class="badge bg-danger">Delete</a>
              </span>
            </td>
          </tr>
        </tbody>
      </table>
    </div>

  </div>
</div>
@endsection
