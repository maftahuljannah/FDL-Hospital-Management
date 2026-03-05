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
                            <span class="badge badge-soft-primary border border-primary">Total Specialities : 565</span>
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

                        <div class="col-md-4 col-lg-3">
                            <div class="department-item">
                                <div class="department-item-img">
                                    <img src="{{ asset('frontend/assets/images/department-img-01.jpg') }}" alt="img" class="img-fluid">
                                </div>
                                <div class="department-item-content">
                                    <div>
                                        <h6><a href="javascript:void(0);">Cardiologist</a></h6>
                                        <p>Available Doctors : 50</p>
                                    </div>
                                    <a href="javascript:void(0);" class="department-item-btn"><i
                                            class="ti ti-arrow-up-right"></i></a>
                                </div>
                            </div><!-- end card -->
                        </div><!-- end col -->

                        <div class="col-md-4 col-lg-3">
                            <div class="department-item">
                                <div class="department-item-img">
                                    <img src="{{ asset('frontend/assets/images/department-img-02.jpg') }}" alt="img" class="img-fluid">
                                </div>
                                <div class="department-item-content">
                                    <div>
                                        <h6><a href="javascript:void(0);">Pediatrics</a></h6>
                                        <p>Available Doctors : 60</p>
                                    </div>
                                    <a href="javascript:void(0);" class="department-item-btn"><i
                                            class="ti ti-arrow-up-right"></i></a>
                                </div>
                            </div><!-- end card -->
                        </div><!-- end col -->

                        <div class="col-md-4 col-lg-3">
                            <div class="department-item">
                                <div class="department-item-img">
                                    <img src="{{ asset('frontend/assets/images/department-img-03.jpg') }}" alt="img" class="img-fluid">
                                </div>
                                <div class="department-item-content">
                                    <div>
                                        <h6><a href="javascript:void(0);">Gynaecology</a></h6>
                                        <p>Available Doctors : 50</p>
                                    </div>
                                    <a href="javascript:void(0);" class="department-item-btn"><i
                                            class="ti ti-arrow-up-right"></i></a>
                                </div>
                            </div><!-- end card -->
                        </div><!-- end col -->

                        <div class="col-md-4 col-lg-3">
                            <div class="department-item">
                                <div class="department-item-img">
                                    <img src="{{ asset('frontend/assets/images/department-img-04.jpg') }}" alt="img" class="img-fluid">
                                </div>
                                <div class="department-item-content">
                                    <div>
                                        <h6><a href="javascript:void(0);">Neurologist</a></h6>
                                        <p>Available Doctors : 50</p>
                                    </div>
                                    <a href="javascript:void(0);" class="department-item-btn"><i
                                            class="ti ti-arrow-up-right"></i></a>
                                </div>
                            </div><!-- end card -->
                        </div><!-- end col -->

                        <div class="col-md-4 col-lg-3">
                            <div class="department-item">
                                <div class="department-item-img">
                                    <img src="{{ asset('frontend/assets/images/department-img-05.jpg') }}" alt="img" class="img-fluid">
                                </div>
                                <div class="department-item-content">
                                    <div>
                                        <h6><a href="javascript:void(0);">Pulmonologist</a></h6>
                                        <p>Available Doctors : 50</p>
                                    </div>
                                    <a href="javascript:void(0);" class="department-item-btn"><i
                                            class="ti ti-arrow-up-right"></i></a>
                                </div>
                            </div><!-- end card -->
                        </div><!-- end col -->

                        <div class="col-md-4 col-lg-3">
                            <div class="department-item">
                                <div class="department-item-img">
                                    <img src="{{ asset('frontend/assets/images/department-img-06.jpg') }}" alt="img" class="img-fluid">
                                </div>
                                <div class="department-item-content">
                                    <div>
                                        <h6><a href="javascript:void(0);">Endocrinologist</a></h6>
                                        <p>Available Doctors : 60</p>
                                    </div>
                                    <a href="javascript:void(0);" class="department-item-btn"><i
                                            class="ti ti-arrow-up-right"></i></a>
                                </div>
                            </div><!-- end card -->
                        </div><!-- end col -->

                        <div class="col-md-4 col-lg-3">
                            <div class="department-item">
                                <div class="department-item-img">
                                    <img src="{{ asset('frontend/assets/images/department-img-07.jpg') }}" alt="img" class="img-fluid">
                                </div>
                                <div class="department-item-content">
                                    <div>
                                        <h6><a href="javascript:void(0);">Oncologist</a></h6>
                                        <p>Available Doctors : 50</p>
                                    </div>
                                    <a href="javascript:void(0);" class="department-item-btn"><i
                                            class="ti ti-arrow-up-right"></i></a>
                                </div>
                            </div><!-- end card -->
                        </div><!-- end col -->

                        <div class="col-md-4 col-lg-3">
                            <div class="department-item">
                                <div class="department-item-img">
                                    <img src="{{ asset('frontend/assets/images/department-img-08.jpg') }}" alt="img" class="img-fluid">
                                </div>
                                <div class="department-item-content">
                                    <div>
                                        <h6><a href="javascript:void(0);">Otolaryngologist</a></h6>
                                        <p>Available Doctors : 50</p>
                                    </div>
                                    <a href="javascript:void(0);" class="department-item-btn"><i
                                            class="ti ti-arrow-up-right"></i></a>
                                </div>
                            </div><!-- end card -->
                        </div><!-- end col -->

                        <div class="col-md-4 col-lg-3">
                            <div class="department-item">
                                <div class="department-item-img">
                                    <img src="{{ asset('frontend/assets/images/department-img-09.jpg') }}" alt="img" class="img-fluid">
                                </div>
                                <div class="department-item-content">
                                    <div>
                                        <h6><a href="javascript:void(0);">Geriatrician</a></h6>
                                        <p>Available Doctors : 50</p>
                                    </div>
                                    <a href="javascript:void(0);" class="department-item-btn"><i
                                            class="ti ti-arrow-up-right"></i></a>
                                </div>
                            </div><!-- end card -->
                        </div><!-- end col -->

                        <div class="col-md-4 col-lg-3">
                            <div class="department-item">
                                <div class="department-item-img">
                                    <img src="{{ asset('frontend/assets/images/department-img-10.jpg') }}" alt="img" class="img-fluid">
                                </div>
                                <div class="department-item-content">
                                    <div>
                                        <h6><a href="javascript:void(0);">Gastroenterologist</a></h6>
                                        <p>Available Doctors : 60</p>
                                    </div>
                                    <a href="javascript:void(0);" class="department-item-btn"><i
                                            class="ti ti-arrow-up-right"></i></a>
                                </div>
                            </div><!-- end card -->
                        </div><!-- end col -->

                        <div class="col-md-4 col-lg-3">
                            <div class="department-item">
                                <div class="department-item-img">
                                    <img src="{{ asset('frontend/assets/images/department-img-11.jpg') }}" alt="img" class="img-fluid">
                                </div>
                                <div class="department-item-content">
                                    <div>
                                        <h6><a href="javascript:void(0);">Rheumatologist</a></h6>
                                        <p>Available Doctors : 50</p>
                                    </div>
                                    <a href="javascript:void(0);" class="department-item-btn"><i
                                            class="ti ti-arrow-up-right"></i></a>
                                </div>
                            </div><!-- end card -->
                        </div><!-- end col -->

                        <div class="col-md-4 col-lg-3">
                            <div class="department-item">
                                <div class="department-item-img">
                                    <img src="{{ asset('frontend/assets/images/department-img-12.jpg') }}" alt="img" class="img-fluid">
                                </div>
                                <div class="department-item-content">
                                    <div>
                                        <h6><a href="javascript:void(0);">Neurosurgeon</a></h6>
                                        <p>Available Doctors : 50</p>
                                    </div>
                                    <a href="javascript:void(0);" class="department-item-btn"><i
                                            class="ti ti-arrow-up-right"></i></a>
                                </div>
                            </div><!-- end card -->
                        </div><!-- end col -->

                        <div class="col-md-4 col-lg-3">
                            <div class="department-item">
                                <div class="department-item-img">
                                    <img src="{{ asset('frontend/assets/images/department-img-13.jpg') }}" alt="img" class="img-fluid">
                                </div>
                                <div class="department-item-content">
                                    <div>
                                        <h6><a href="javascript:void(0);">Dermatologist</a></h6>
                                        <p>Available Doctors : 50</p>
                                    </div>
                                    <a href="javascript:void(0);" class="department-item-btn"><i
                                            class="ti ti-arrow-up-right"></i></a>
                                </div>
                            </div><!-- end card -->
                        </div><!-- end col -->

                        <div class="col-md-4 col-lg-3">
                            <div class="department-item">
                                <div class="department-item-img">
                                    <img src="{{ asset('frontend/assets/images/department-img-14.jpg') }}" alt="img" class="img-fluid">
                                </div>
                                <div class="department-item-content">
                                    <div>
                                        <h6><a href="javascript:void(0);">Radiologist</a></h6>
                                        <p>Available Doctors : 60</p>
                                    </div>
                                    <a href="javascript:void(0);" class="department-item-btn"><i
                                            class="ti ti-arrow-up-right"></i></a>
                                </div>
                            </div><!-- end card -->
                        </div><!-- end col -->

                        <div class="col-md-4 col-lg-3">
                            <div class="department-item">
                                <div class="department-item-img">
                                    <img src="{{ asset('frontend/assets/images/department-img-15.jpg') }}" alt="img" class="img-fluid">
                                </div>
                                <div class="department-item-content">
                                    <div>
                                        <h6><a href="javascript:void(0);">Neonatologist</a></h6>
                                        <p>Available Doctors : 50</p>
                                    </div>
                                    <a href="javascript:void(0);" class="department-item-btn"><i
                                            class="ti ti-arrow-up-right"></i></a>
                                </div>
                            </div><!-- end card -->
                        </div><!-- end col -->

                        <div class="col-md-4 col-lg-3">
                            <div class="department-item">
                                <div class="department-item-img">
                                    <img src="{{ asset('frontend/assets/images/department-img-16.jpg') }}" alt="img" class="img-fluid">
                                </div>
                                <div class="department-item-content">
                                    <div>
                                        <h6><a href="javascript:void(0);">Psychiatrist</a></h6>
                                        <p>Available Doctors : 50</p>
                                    </div>
                                    <a href="javascript:void(0);" class="department-item-btn"><i
                                            class="ti ti-arrow-up-right"></i></a>
                                </div>
                            </div><!-- end card -->
                        </div><!-- end col -->

                        <div class="col-lg-12">
                            <div class="d-flex align-items-center justify-content-center">
                                <a href="javascript:void(0);" class="btn btn-primary d-inline-flex align-items-center">View
                                    All Doctors<i class="ti ti-chevron-right ms-1"></i></a>
                            </div>
                        </div>

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
