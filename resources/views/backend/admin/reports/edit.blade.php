@extends('layouts.BackendAdmin')
@section('title','Reports')

@section('content')

<div class="container my-3">
    <form action="{{ route('admin.reports.store', $report->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div class="row g-3">
                <div class="col-md-12">
                    <label class="form-label small fw-bold">Report Name</label>
                    <input type="text" class="form-control @error('report_name') is-invalid @enderror"
                        name="report_name" value="{{ $report->report_name }}" placeholder="e.g. MRI Scan">
                    @error('report_name')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label class="form-label small fw-bold">Customer</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                        value="{{ $report->report_holder }}">
                    @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label class="form-label small fw-bold">Customer Phone</label>
                    <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone"
                        value="{{ $report->customer->phone }}">
                    @error('phone')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label class="form-label small fw-bold">Delivery Date</label>
                    <input type="date" class="form-control @error('delivery_date') is-invalid @enderror"
                        name="delivery_date" value="{{ $report->delivery_date }}">
                    @error('delivery_date')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label class="form-label small fw-bold">Amount ($)</label>
                    <input type="number" step="0.01" class="form-control @error('amount') is-invalid @enderror"
                        name="amount" value="{{ $report->amount }}">
                    @error('amount')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-12">
                    <label class="form-label small fw-bold">Doctor Reference (Optional)</label>
                    <input type="text" class="form-control @error('doctor_ref') is-invalid @enderror" name="doctor_ref"
                        value="{{ $report->doctor_ref }}">
                    @error('doctor_ref')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-12">
                    <label class="form-label small fw-bold">Description</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" name="description"
                        rows="2">{{ $report->description }}</textarea>
                    @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-12">
                    <label class="form-label small fw-bold">Upload Documents</label>
                    <input type="file" class="form-control @error('report_documents') is-invalid @enderror"
                        name="report_documents[]" multiple>
                    @error('report_documents')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                    @error('report_documents.*')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-6">
                    <div class="form-check form-switch mt-2">
                        <input class="form-check-input @error('is_paid') is-invalid @enderror" type="checkbox"
                            id="is_paid" name="is_paid" {{ $report->is_paid ? 'checked' : '' }} value="{{ 1 }}">
                        <label class="form-check-label" for="is_paid">Mark as Paid</label>
                    </div>
                    @error('is_paid')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>
        <div class="card-footer border-0 bg-transparent">
            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary px-4">Save Report</button>
        </div>
    </form>
</div>

@endsection