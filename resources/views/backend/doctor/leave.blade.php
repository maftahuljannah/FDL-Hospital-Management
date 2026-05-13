@extends('backend.doctor.layout')

@section('body')

<div class="container-xxl grow container-p-y">

    <div class="row justify-content-center">
        <div class="col-lg-7">

            <div class="card shadow-sm">
                <div class="card-header">
                    <h4 class="mb-0">Apply for Leave</h4>
                </div>

                <div class="card-body">

                    <form method="POST" action="/leave/store">
                        @csrf

                        <!-- Hidden Doctor ID -->
                        <input type="hidden" name="doctor_id" value="{{ auth()->user()->id }}">

                        <!-- Title -->
                        <div class="mb-3">
                            <label class="form-label">Leave Title</label>
                            <input type="text" name="title" class="form-control" placeholder="e.g. Medical Leave" required>
                        </div>

                        <!-- Reason -->
                        <div class="mb-3">
                            <label class="form-label">Reason</label>
                            <textarea name="reason" class="form-control" rows="4" placeholder="Write your reason..." required></textarea>
                        </div>

                        <!-- From Date -->
                        <div class="mb-3">
                            <label class="form-label">From Date</label>
                            <input type="date" name="from_date" class="form-control" required>
                        </div>

                        <!-- To Date -->
                        <div class="mb-3">
                            <label class="form-label">To Date</label>
                            <input type="date" name="to_date" class="form-control" required>
                        </div>

                        <!-- Submit -->
                        <button type="submit" class="btn btn-primary w-100">
                            Apply Leave
                        </button>

                    </form>

                </div>
            </div>

        </div>
    </div>

</div>

@endsection