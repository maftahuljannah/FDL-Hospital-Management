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
                            <div class="dropdown">
                                <a href="javascript:void(0);"
                                    class="btn btn-md btn-white d-inline-flex align-items-center shadow-sm"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Sort By : <span class="ms-1">Newest</span><i class="ti ti-chevron-down ms-1"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end p-3">
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">Newest</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">Oldest</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row row-gap-lg-3">
                        <div class="col-xl-3 col-sm-6">
                            <div class="doctor-wrap border rounded-4 shadow-sm mb-4 overflow-hidden">
                                <div class="doctor-image overflow-hidden">
                                    <a href="{{ route('doctor-details') }}">
                                        <img src="{{ asset('frontend/assets/images/doctor-01.png') }}" alt="img" class="w-100">
                                    </a>
                                </div>
                                <div class="doctor-content doctor-list-content">
                                    <h6 class="mb-1"><a href="{{ route('doctor-details') }}">Dr. Michael Thompson</a></h6>
                                    <p class="fs-14 mb-3">Cardiologist</p>
                                    <p class="fs-14 fw-semibold text-gray-9 border-bottom pb-3 mb-3">Appointments
                                        Completed : 216</p>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <p class="fs-13 mb-1">Starts From</p>
                                            <h5>$499</h5>
                                        </div>
                                        <a href="javascript:void(0);"
                                            class="btn btn-light rounded-circle border-0 booking-btn fs-24 d-flex align-items-center justify-content-center"><i
                                                class="ti ti-calendar-event"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6">
                            <div class="doctor-wrap border rounded-4 shadow-sm mb-4 overflow-hidden">
                                <div class="doctor-image overflow-hidden">
                                    <a href="{{ route('doctor-details') }}">
                                        <img src="{{ asset('frontend/assets/images/doctor-02.png') }}" alt="img" class="w-100">
                                    </a>
                                </div>
                                <div class="doctor-content doctor-list-content">
                                    <h6 class="mb-1"><a href="{{ route('doctor-details') }}">Dr. Sarah Johnson</a></h6>
                                    <p class="fs-14 mb-3">Orthopedic Surgeon</p>
                                    <p class="fs-14 fw-semibold text-gray-9 border-bottom pb-3 mb-3">Appointments
                                        Completed : 137</p>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <p class="fs-13 mb-1">Starts From</p>
                                            <h5>$249</h5>
                                        </div>
                                        <a href="javascript:void(0);"
                                            class="btn btn-light rounded-circle border-0 booking-btn fs-24 d-flex align-items-center justify-content-center"><i
                                                class="ti ti-calendar-event"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6">
                            <div class="doctor-wrap border rounded-4 shadow-sm mb-4 overflow-hidden">
                                <div class="doctor-image overflow-hidden">
                                    <a href="{{ route('doctor-details') }}">
                                        <img src="{{ asset('frontend/assets/images/doctor-08.png') }}" alt="img" class="w-100">
                                    </a>
                                </div>
                                <div class="doctor-content doctor-list-content">
                                    <h6 class="mb-1"><a href="{{ route('doctor-details') }}">Dr. Avan Davis</a></h6>
                                    <p class="fs-14 mb-3">Endocrinologist</p>
                                    <p class="fs-14 fw-semibold text-gray-9 border-bottom pb-3 mb-3">Appointments
                                        Completed : 179</p>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <p class="fs-13 mb-1">Starts From</p>
                                            <h5>$399</h5>
                                        </div>
                                        <a href="javascript:void(0);"
                                            class="btn btn-light rounded-circle border-0 booking-btn fs-24 d-flex align-items-center justify-content-center"><i
                                                class="ti ti-calendar-event"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6">
                            <div class="doctor-wrap border rounded-4 shadow-sm mb-4 overflow-hidden">
                                <div class="doctor-image overflow-hidden">
                                    <a href="{{ route('doctor-details') }}">
                                        <img src="{{ asset('frontend/assets/images/doctor-10.png') }}" alt="img" class="w-100">
                                    </a>
                                </div>
                                <div class="doctor-content doctor-list-content">
                                    <h6 class="mb-1"><a href="{{ route('doctor-details') }}">Dr. Patricia Brown</a></h6>
                                    <p class="fs-14 mb-3">Pulmonologist</p>
                                    <p class="fs-14 fw-semibold text-gray-9 border-bottom pb-3 mb-3">Appointments
                                        Completed : 275</p>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <p class="fs-13 mb-1">Starts From</p>
                                            <h5>$299</h5>
                                        </div>
                                        <a href="javascript:void(0);"
                                            class="btn btn-light rounded-circle border-0 booking-btn fs-24 d-flex align-items-center justify-content-center"><i
                                                class="ti ti-calendar-event"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6">
                            <div class="doctor-wrap border rounded-4 shadow-sm mb-4 overflow-hidden">
                                <div class="doctor-image overflow-hidden">
                                    <a href="{{ route('doctor-details') }}">
                                        <img src="{{ asset('frontend/assets/images/doctor-07.png') }}" alt="img" class="w-100">
                                    </a>
                                </div>
                                <div class="doctor-content doctor-list-content">
                                    <h6 class="mb-1"><a href="{{ route('doctor-details') }}">Dr. Maya Collins</a></h6>
                                    <p class="fs-14 mb-3">Cardiologist</p>
                                    <p class="fs-14 fw-semibold text-gray-9 border-bottom pb-3 mb-3">Appointments
                                        Completed : 135</p>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <p class="fs-13 mb-1">Starts From</p>
                                            <h5>$349</h5>
                                        </div>
                                        <a href="javascript:void(0);"
                                            class="btn btn-light rounded-circle border-0 booking-btn fs-24 d-flex align-items-center justify-content-center"><i
                                                class="ti ti-calendar-event"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6">
                            <div class="doctor-wrap border rounded-4 shadow-sm mb-4 overflow-hidden">
                                <div class="doctor-image overflow-hidden">
                                    <a href="{{ route('doctor-details') }}">
                                        <img src="{{ asset('frontend/assets/images/doctor-03.png') }}" alt="img" class="w-100">
                                    </a>
                                </div>
                                <div class="doctor-content doctor-list-content">
                                    <h6 class="mb-1"><a href="{{ route('doctor-details') }}">Dr. Emily Carter</a></h6>
                                    <p class="fs-14 mb-3">Pediatrician</p>
                                    <p class="fs-14 fw-semibold text-gray-9 border-bottom pb-3 mb-3">Appointments
                                        Completed : 245</p>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <p class="fs-13 mb-1">Starts From</p>
                                            <h5>$999</h5>
                                        </div>
                                        <a href="javascript:void(0);"
                                            class="btn btn-light rounded-circle border-0 booking-btn fs-24 d-flex align-items-center justify-content-center"><i
                                                class="ti ti-calendar-event"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6">
                            <div class="doctor-wrap border rounded-4 shadow-sm mb-4 overflow-hidden">
                                <div class="doctor-image overflow-hidden">
                                    <a href="{{ route('doctor-details') }}">
                                        <img src="{{ asset('frontend/assets/images/doctor-06.png') }}" alt="img" class="w-100">
                                    </a>
                                </div>
                                <div class="doctor-content doctor-list-content">
                                    <h6 class="mb-1"><a href="{{ route('doctor-details') }}">Dr. John Smith</a></h6>
                                    <p class="fs-14 mb-3">Neurologist</p>
                                    <p class="fs-14 fw-semibold text-gray-9 border-bottom pb-3 mb-3">Appointments
                                        Completed : 194</p>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <p class="fs-13 mb-1">Starts From</p>
                                            <h5>$199</h5>
                                        </div>
                                        <a href="javascript:void(0);"
                                            class="btn btn-light rounded-circle border-0 booking-btn fs-24 d-flex align-items-center justify-content-center"><i
                                                class="ti ti-calendar-event"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6">
                            <div class="doctor-wrap border rounded-4 shadow-sm mb-4 overflow-hidden">
                                <div class="doctor-image overflow-hidden">
                                    <a href="{{ route('doctor-details') }}">
                                        <img src="{{ asset('frontend/assets/images/doctor-11.png') }}" alt="img" class="w-100">
                                    </a>
                                </div>
                                <div class="doctor-content doctor-list-content">
                                    <h6 class="mb-1"><a href="{{ route('doctor-details') }}">Dr. Rachel Green</a></h6>
                                    <p class="fs-14 mb-3">Urologist</p>
                                    <p class="fs-14 fw-semibold text-gray-9 border-bottom pb-3 mb-3">Appointments
                                        Completed : 158</p>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <p class="fs-13 mb-1">Starts From</p>
                                            <h5>$449</h5>
                                        </div>
                                        <a href="javascript:void(0);"
                                            class="btn btn-light rounded-circle border-0 booking-btn fs-24 d-flex align-items-center justify-content-center"><i
                                                class="ti ti-calendar-event"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6">
                            <div class="doctor-wrap border rounded-4 shadow-sm mb-4 overflow-hidden">
                                <div class="doctor-image overflow-hidden">
                                    <a href="{{ route('doctor-details') }}">
                                        <img src="{{ asset('frontend/assets/images/doctor-15.png') }}" alt="img" class="w-100">
                                    </a>
                                </div>
                                <div class="doctor-content doctor-list-content">
                                    <h6 class="mb-1"><a href="{{ route('doctor-details') }}">Dr. Oliver King</a></h6>
                                    <p class="fs-14 mb-3">Orthopedist</p>
                                    <p class="fs-14 fw-semibold text-gray-9 border-bottom pb-3 mb-3">Appointments
                                        Completed : 354</p>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <p class="fs-13 mb-1">Starts From</p>
                                            <h5>$399</h5>
                                        </div>
                                        <a href="javascript:void(0);"
                                            class="btn btn-light rounded-circle border-0 booking-btn fs-24 d-flex align-items-center justify-content-center"><i
                                                class="ti ti-calendar-event"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6">
                            <div class="doctor-wrap border rounded-4 shadow-sm mb-4 overflow-hidden">
                                <div class="doctor-image overflow-hidden">
                                    <a href="{{ route('doctor-details') }}">
                                        <img src="{{ asset('frontend/assets/images/doctor-04.png') }}" alt="img" class="w-100">
                                    </a>
                                </div>
                                <div class="doctor-content doctor-list-content">
                                    <h6 class="mb-1"><a href="{{ route('doctor-details') }}">Dr. David Lee</a></h6>
                                    <p class="fs-14 mb-3">Gynecologist</p>
                                    <p class="fs-14 fw-semibold text-gray-9 border-bottom pb-3 mb-3">Appointments
                                        Completed : 293</p>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <p class="fs-13 mb-1">Starts From</p>
                                            <h5>$799</h5>
                                        </div>
                                        <a href="javascript:void(0);"
                                            class="btn btn-light rounded-circle border-0 booking-btn fs-24 d-flex align-items-center justify-content-center"><i
                                                class="ti ti-calendar-event"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6">
                            <div class="doctor-wrap border rounded-4 shadow-sm mb-4 overflow-hidden">
                                <div class="doctor-image overflow-hidden">
                                    <a href="{{ route('doctor-details') }}">
                                        <img src="{{ asset('frontend/assets/images/doctor-09.png') }}" alt="img" class="w-100">
                                    </a>
                                </div>
                                <div class="doctor-content doctor-list-content">
                                    <h6 class="mb-1"><a href="{{ route('doctor-details') }}">Dr. Kenny Clark</a></h6>
                                    <p class="fs-14 mb-3">Dermatologist</p>
                                    <p class="fs-14 fw-semibold text-gray-9 border-bottom pb-3 mb-3">Appointments
                                        Completed : 184</p>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <p class="fs-13 mb-1">Starts From</p>
                                            <h5>$439</h5>
                                        </div>
                                        <a href="javascript:void(0);"
                                            class="btn btn-light rounded-circle border-0 booking-btn fs-24 d-flex align-items-center justify-content-center"><i
                                                class="ti ti-calendar-event"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6">
                            <div class="doctor-wrap border rounded-4 shadow-sm mb-4 overflow-hidden">
                                <div class="doctor-image overflow-hidden">
                                    <a href="{{ route('doctor-details') }}">
                                        <img src="{{ asset('frontend/assets/images/doctor-16.png') }}" alt="img" class="w-100">
                                    </a>
                                </div>
                                <div class="doctor-content doctor-list-content">
                                    <h6 class="mb-1"><a href="{{ route('doctor-details') }}">Dr. Martin Lisa</a></h6>
                                    <p class="fs-14 mb-3">Surgeon</p>
                                    <p class="fs-14 fw-semibold text-gray-9 border-bottom pb-3 mb-3">Appointments
                                        Completed : 285</p>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <p class="fs-13 mb-1">Starts From</p>
                                            <h5>$599</h5>
                                        </div>
                                        <a href="javascript:void(0);"
                                            class="btn btn-light rounded-circle border-0 booking-btn fs-24 d-flex align-items-center justify-content-center"><i
                                                class="ti ti-calendar-event"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
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
