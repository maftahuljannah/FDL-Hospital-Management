@extends('layouts.FrontendLayout')

@section('title', 'Departments - ')

@section('body')

    <!-- Begin Wrapper -->
    <div class="main-wrapper">

        <x-frontend.header />

        <!-- ========================
                            Start Page Content
                        ========================= -->

        <div class="page-wrapper">

            <x-frontend.breadcrumb label="Specialities" />

            <!-- Start Content -->
            <div class="content">

                <div class="container">

                    <!-- start Filter -->
                    <div class="d-flex align-items-center justify-content-between mb-40 flex-wrap gap-3">
                        <div class="d-flex align-items-center">
                            <h3 class="me-3">Total Specialities</h3>
                            <span class="badge badge-soft-primary border border-primary">Total Specialities : {{ $departmentCount }}</span>
                        </div>
                        <div class="d-flex align-items-center flex-wrap gap-2">
                            <div class="dropdown">
                                <a href="javascript:void(0);"
                                    class="btn btn-white shadow-sm d-inline-flex align-items-center"
                                    data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="true">
                                    <i class="ti ti-filter me-2"></i> Filter
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg p-3 dropdown-filter">
                                    <li>
                                        <div class="mb-2">
                                            <div class="input-icon-start position-relative">
                                                <span class="input-icon-addon">
                                                    <i class="ti ti-search"></i>
                                                </span>
                                                <input type="text" class="form-control" placeholder="Search">
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <label class="dropdown-item px-2 d-flex align-items-center rounded-1">
                                            <input class="form-check-input m-0 me-2" type="checkbox">
                                            Cardiologist
                                        </label>
                                    </li>
                                    <li>
                                        <label class="dropdown-item px-2 d-flex align-items-center rounded-1">
                                            <input class="form-check-input m-0 me-2" type="checkbox">
                                            Orthopedic Surgeon
                                        </label>
                                    </li>
                                    <li>
                                        <label class="dropdown-item px-2 d-flex align-items-center rounded-1">
                                            <input class="form-check-input m-0 me-2" type="checkbox">
                                            Pediatrician
                                        </label>
                                    </li>
                                    <li>
                                        <label class="dropdown-item px-2 d-flex align-items-center rounded-1">
                                            <input class="form-check-input m-0 me-2" type="checkbox">
                                            Gynecologist
                                        </label>
                                    </li>
                                    <li>
                                        <label class="dropdown-item px-2 d-flex align-items-center rounded-1">
                                            <input class="form-check-input m-0 me-2" type="checkbox">
                                            Psychiatrist
                                        </label>
                                    </li>
                                    <li>
                                        <label class="dropdown-item px-2 d-flex align-items-center rounded-1">
                                            <input class="form-check-input m-0 me-2" type="checkbox">
                                            Neurosurgeon
                                        </label>
                                    </li>
                                    <li>
                                        <label class="dropdown-item px-2 d-flex align-items-center rounded-1">
                                            <input class="form-check-input m-0 me-2" type="checkbox">
                                            Oncologist
                                        </label>
                                    </li>
                                    <li>
                                        <label class="dropdown-item px-2 d-flex align-items-center rounded-1">
                                            <input class="form-check-input m-0 me-2" type="checkbox">
                                            Pulmonologist
                                        </label>
                                    </li>
                                    <li>
                                        <label class="dropdown-item px-2 d-flex align-items-center rounded-1">
                                            <input class="form-check-input m-0 me-2" type="checkbox">
                                            Urologist
                                        </label>
                                    </li>
                                    <li>
                                        <label class="dropdown-item px-2 d-flex align-items-center rounded-1">
                                            <input class="form-check-input m-0 me-2" type="checkbox">
                                            Dermatologist
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End filter -->

                    <!-- start row -->
                    <div class="row justify-content-center departments-section">
                        @forelse ($departments as $department)
                             <div class="col-md-4 col-lg-3">
                            <div class="department-item">
                                <div class="department-item-img">
                                    <img src="{{ getImg(null) }}" alt="img" class="img-fluid">
                                </div>
                                <div class="department-item-content">
                                    <div>
                                        <h6><a href="{{ route('doctors') }}?department={{ $department->id }}">{{ $department->title }}</a></h6>
                                        <p>Available Doctors : {{ $department->doctors_count }}</p>
                                    </div>
                                    <a href="javascript:void(0);" class="department-item-btn"><i
                                            class="ti ti-arrow-up-right"></i></a>
                                </div>
                            </div><!-- end card -->
                        </div><!-- end col -->
                        @empty
                             <div class="col-lg-12">
                            <div class="d-flex align-items-center text-center justify-content-center">
                                <b>No Departments found!</b>
                            </div>
                        </div>
                        @endforelse
                        
                        {{-- Pagination --}}
                        <nav>{{ $departments->links() }}</nav>
                       
                       

                    </div>
                    <!-- end row -->

                </div>

            </div>
            <!-- End Content -->

            <x-frontend.footer />

        </div>

        <!-- ========================
                            End Page Content
                        ========================= -->

    </div>
    <!-- End Wrapper -->

@endsection
