@extends('backend.admin.layouts.master')

@section('content')

<div class="container mt-4">

    <h3>Edit Department</h3>

    <form action="{{ route('department.update',$department->id) }}" method="POST">
        @csrf

        <div class="mb-3">
            <label>Department Title</label>
            <input type="text" name="title" class="form-control"
                value="{{ old('title',$department->title) }}">
        </div>

        <div class="mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control">{{ old('description',$department->description) }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">
            Update Department
        </button>

        <a href="{{ route('department.show') }}" class="btn btn-secondary">
            Back
        </a>

    </form>

</div>

@endsection
