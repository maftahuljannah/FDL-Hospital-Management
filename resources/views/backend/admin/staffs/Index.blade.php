@extends('layouts.partials.BackendStaffLayout')
@section('title')
    Add Staff
@endsection
@section('content')


  <div class="container">
    <h2 class="my-4">Add Staff</h2>
    <div class="row">
        
        <div class="col-lg-4 mx-auto mt-5">
            <div class="card">
                <div class="card-header"><h5>Staff Profile</h5></div>
                <div class="card-body">
                    <form action="{{route('staff.store')}}" method="POST">
                        @csrf
                        <div class="my-2">
                            <input type="text" class="form-control" name="name" placeholder="Name">
                            @error('name')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="my-2">
                            <input type="text" class="form-control" name="department_id" placeholder="Department ID">
                            @error('department_id')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                         <div class="my-2">
                            <input type="text" class="form-control" name="designation" placeholder="Designation">
                            @error('designation')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                         <div class="mb-3">
                        <label>Shift</label>
                        <select name="shift" class="form-control">
                            <option>Morning</option>
                            <option>Evening</option>
                            <option>Night</option>
                         </select>
                        </div>
                        <div class="my-2">
                            <input type="text" class="form-control" name="phone" placeholder="Phone Number">
                            @error('phone')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="my-2">
                            <textarea class="form-control" name="description" placeholder="Description"></textarea>
                            @error('description')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="card-footer">
                            <a class="btn btn-sm btn-warning my-1" href="#">Edit</a>
                            <a class="btn btn-sm btn-danger my-1" href="#">Delete</a>
                        </div>
                        <button class="btn btn-primary">Submit</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>  


@endsection