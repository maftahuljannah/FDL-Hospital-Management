@extends('layouts.BackendAdmin')
@section('title','Reports')

@section('content')

<div class="container my-3">
    <div class="text-end"><a href="{{ route('admin.reports.create') }}" class="btn btn-primary btn-sm">+ Create
            Report</a></div>


    <div class="card border-0 shadow-sm">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="bg-light">
                        <tr>
                            <th class="ps-4">Report Name</th>
                            <th>Customer ID</th>
                            <th>Delivery Date</th>
                            <th>Amount</th>
                            <th>Payment</th>
                            <th>Status</th>
                            <th class="text-end pe-4">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($reports as $report)
                        <tr>
                            <td class="ps-4">
                                <span class="fw-bold">{{ $report->report_name }}</span>
                                <small class="text-muted d-block">{{ $report->doctor_ref }}</small>
                            </td>
                            <td>#{{ $report->customer_id }}</td>
                            <td>{{ Carbon\Carbon::parse($report->delivery_date)->format('d M, Y') }}</td>
                            <td>{{ number_format($report->amount, 2) }} BDT</td>
                            <td><span class="badge rounded-pill bg-{{ $report->is_paid ? "success" : 'danger' }}">{{ $report->is_paid ? "Paid" : 'Unpaid' }}</span></td>
                            <td><span class="badge bg-{{ $report->status  ? "success" : 'warning' }} text-dark">{{ $report->status  ? "Completed" : 'Processing' }}</span></td>
                            <td class="text-end pe-4">
                                <button class="btn btn-sm btn-outline-secondary">View</button>
                                <a href="{{ route('admin.reports.edit', $report->id) }}" class="btn btn-sm btn-outline-primary">Edit</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>

@endsection