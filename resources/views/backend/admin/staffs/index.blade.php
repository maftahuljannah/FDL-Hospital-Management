@extends('layouts.BackendAdmin')

@section('content')
    <div class="container my-5">
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <table class="table table-responsive table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Photo</th>
                            <th>Name</th>
                            <th>Designation</th>
                            <th>Duty</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($staffs as $index=> $staff )
                         <tr>
                        <td>{{++$index}}</td>
                        <td>{{$staff->photo}}</td>
                        <td>{{$staff->name}}</td>
                        <td>{{$staff->designation ?? '....'}}</td>
                        <td>{{$staff->duty_title ?? '....'}}</td>
                        <td>{{$staff->duty_description ?? '....'}}</td>
                        <td><span class="badge bg-success">{{$staff->status ? 'Active' : 'Inactive'}}</span></td>
                        <td>
                            <a href="{{route('staffprofile',$staff->id)}}">Edit</a>
                            <a href="#">Delete</a>
                        </td>
                     </tr>   
                        @endforeach
                        
                    </tbody>
                </table>
                <nav class="my-2 px-3">
                    {{ $staffs->links() }}
                </nav>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">{{$editedStaffProfile ? 'Update':'Add'}} Staff</div>
                    <div class="card-body">
                        <form method="POST" action="{{route('admin.staff.store')}}">
                            @csrf
                            <div class="my-2">
                                <input name="name" type="text" placeholder="staff Name" class="form-control" value="{{ $editedDepartment -> title ?? null }}">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="my-2">
                                <textarea name="description" placeholder="Department Description" class="form-control">{{ $editedDepartment -> description ?? null }}</textarea>
                                @error('description')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <button class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

    @push('scripts')
    @if (session()->has('msg'))

    <script>
        Toast.fire({
        icon: `{{ session('msg')['type'] ?? 'success'}}`,
        title: `{{ session('msg')['content'] ?? 'success'}}`
        });
    </script>
    @endif
    @endpush