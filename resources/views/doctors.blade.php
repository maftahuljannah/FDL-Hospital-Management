@extends('layouts.FrontendLayout')

@section('title', 'Doctors - ')

@section('body')

    <div class="loader-main">
        <span class="page-loader"></span>
    </div>

    <div class="main-wrapper">

        <x-frontend.header />

        <!-- ========================
                                    Start Page Content
                                ========================= -->

        <div class="page-wrapper">

            <x-frontend.breadcrumb label="Doctors" />

            <!-- doctors -->
            <div class="doctors-section position-relative section-padding">
                <div class="container">
                    <div class="d-flex align-items-center justify-content-between mb-40 flex-wrap gap-3">
                        <div class="d-flex align-items-center">
                            <h3 class="me-3">Total Doctors</h3>
                            <span class="badge badge-soft-primary border border-primary">Total Doctors : 565</span>
                        </div>
                        <div class="d-flex align-items-center flex-wrap gap-2">
                            <div class="dropdown">
                                <a href="javascript:void(0);"
                                    class="btn btn-white shadow-sm d-inline-flex align-items-center"
                                    data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="true">
                                    <i class="ti ti-filter me-2"></i> Filter
                                </a>
                              
                            </div>
                            <div class="dropdown">
                                <a href="javascript:void(0);"
                                    class="btn btn-md btn-white d-inline-flex align-items-center shadow-sm"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Sort By : <span class="ms-1">Newest</span><i class="ti ti-chevron-down ms-1"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end p-3">
                                    <li>
                                        <a href="{{ request()->url }}" class="dropdown-item rounded-1">Newest</a>
                                    </li>
                                    <li>
                                        <a href="{{ request()->url }}" class="dropdown-item rounded-1">Oldest</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row row-gap-lg-3">
                        @forelse ($doctors as $doctor)
                        <div class="col-xl-3 col-sm-6">
                            <div class="doctor-wrap border rounded-4 shadow-sm mb-4 overflow-hidden">
                                <div class="doctor-image overflow-hidden">
                                    <a href="{{ route('doctor-details') }}">
                                        <img src="{{ getImg($doctor->profile_image) }}" alt="{{ $doctor->name }}" class="w-100">
                                    </a>
                                </div>
                                <div class="doctor-content doctor-list-content">
                                    <h6 class="mb-1"><a href="{{ route('doctor-details') }}">{{ $doctor->name }}</a></h6>
                                    <p class="fs-14 mb-3">{{ $doctor->department->title }}</p>
                                    <p class="fs-14 fw-semibold text-gray-9 border-bottom pb-3 mb-3">Appointments
                                        Completed : 216</p>
                                    <div class="">
                                        <p>Available Dates: {{ $doctor->availability_date }}</p>
                                        <p>Time: {{ $doctor->availability_time }}</p>
                                        <a href="javascript:void(0);"
                                            class="btn btn-light rounded-circle border-0 booking-btn  d-flex align-items-center justify-content-center"><i
                                                class="ti ti-calendar-event"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                         @empty
                            
                        @endforelse
                       
                    </div>
                    <div class="text-center pt-3">
                        <a href="javascript:void(0);" class="btn btn-md btn-primary d-inline-flex align-items-center">View
                            All Doctors<i class="ti ti-chevron-right ms-1"></i></a>
                    </div>
                </div>
            </div>
            <!-- doctors -->

        </div>

        <!-- ========================
                                    End Page Content
                                ========================= -->

        <x-frontend.footer />

    </div>

@endsection
