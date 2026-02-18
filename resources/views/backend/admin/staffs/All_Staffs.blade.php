@extends('layouts.partials.BackendStaffLayout')
@section('title')
    All Staffs
@endsection
@section('content')


     <div class="container">
        <h2 class="my-2">All Staffs</h2>
        <div class="row">
            <div class="col-lg-10 mx-auto mt-5">
                <form action="" method="POST">
                    @csrf
<table class="table table-responsive table-striped table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>name</th>
                    <th>department_id</th>
                    <th>designation</th>
                    <th>shift</th>
                    <th>phone</th>
                    <th>description</th>
                    
                </tr>
            </thead>

            <tbody>
                @foreach ($staffs as $staff)
                  <tr>
                <td>#</td>
                <td>{{ $staff->name }}</td>
                <td>{{ $staff->department_id }}</td>
                <td>{{ $staff->designation }}</td>
                <td>{{ $staff->shift }}</td>
                <td>{{ $staff->phone }}</td>
                <td>{{ $staff->description }}</td>
                <!-- <td>
                   <a class="btn btn-sm btn-warning my-1" href="#">Edit</a>
                   <a class="btn btn-sm btn-danger my-1" href="#">Delete</a>
                </td> -->
             </tr>   
                @endforeach
            
            </tbody>
         </table>
                </form>
            </div>

        </div>
     </div>
        
         
        </div>
</div>

       
    
   


@endsection