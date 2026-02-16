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
                                <th>Name</th>
                                <th>Description</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($departments as $index=>$department)
                            <tr>
                                <td>{{ ++$index }}</td>
                                <td>{{ $department->title }}</td>
                                <td>{{ $department->description ?? '---' }}</td>
                                <td><span class="badge bg-success">{{ $department->status ? 'Active'  : 'Inactive' }}</span></td>
                                <td>
                                    <a href="{{ route('admin.department', $department->id) }}">Edit</a>
                                    <a href="#">Delete</a>
                                </td>
                            </tr>    
                            @endforeach
                            
                        </tbody>
                    </table>
                    <nav class="my-2 px-3">
                        {{ $departments->links() }}
                    </nav>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">{{ $editedDepartment ? 'Update' : 'Add' }} Department</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.department.store', $editedDepartment ? $editedDepartment->id : null) }}">
                            @csrf
                            <div class="my-2">
                                <input name="title" type="text" placeholder="Department Name" class="form-control" value="{{ $editedDepartment->title ?? null }}">
                                @error('title')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="my-2">
                                <textarea name="description" class="form-control" placeholder="Department Description">{{ $editedDepartment->description ?? null }}</textarea>
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
        icon: `{{ session('msg')['type'] ?? 'success' }}`,
        title:`{{ session('msg')['content'] ?? 'success' }}`
      });
    </script>
@endif
@endpush