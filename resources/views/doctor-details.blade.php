@extends('layouts.FrontendLayout')

@section('title', 'Doctor Details - ')

@section('body')

    <div class="loader-main">
        <span class="page-loader"></span>
    </div>

    <!-- Start Wrapper -->
    <div class="main-wrapper">

        <x-frontend.header />

        <!-- ========================
                Start Page Content
            ========================= -->

        <div class="page-wrapper">

            <x-frontend.breadcrumb label="Doctor Details" />

            <!-- Doctor Details -->
            <div class="content">
                <div class="container">

                    <!-- start row -->
                    <div class="row">
                        <div class="col-lg-11 mx-auto">

                            <div class="card">
                                <div
                                    class="card-body bg-light d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                                    <div class="d-flex align-items-center flex-sm-nowrap flex-wrap row-gap-3">
                                        <div class="me-3 doctor-profile-img"><a href="doctor-details.html"><img
                                                    src="{{ asset('frontend/assets/images/doctor-06.png') }}" class="rounded" alt=""></a></div>
                                        <div class="flex-fill">
                                            <p class="mb-0 fs-16 text-primary">#DT2002</p>
                                            <h5 class="mb-1">Dr. John Smith</h5>
                                            <span class="d-block mb-3 fs-16">MBBS, M.D, Cardiology</span>
                                            <div class="d-flex align-items-center">
                                                <p class="mb-0 fs-16"><i class="ti ti-building-hospital me-1"></i>Clinic
                                                    : Downtown Medical Clinic</p>
                                                <span class="badge badge-soft-success fw-medium ms-2"><i
                                                        class="ti ti-point-filled me-1 text-success"></i>Available</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <p class="mb-1">Consultation Charge</p>
                                        <h6 class="fs-20 fw-bold mb-4">$499 <span class="fw-normal text-body fs-14"> /
                                                30 Min</span></h6>
                                        <a href="javascript:void(0);" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#book-appointment"><i class="ti ti-calendar-event me-1"></i>Book
                                            Apppointment</a>
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                            <!-- Profile End -->

                            <div class="card">
                                <div class="card-body">
                                    <h5 class="fw-bold mb-3">Availability</h5>
                                    <ul class="nav nav-tabs nav-bordered nav-border-bottom mb-3">
                                        <li class="nav-item flex-fill"><a class="nav-link text-center active fw-semibold"
                                                href="javascript:void(0);" data-bs-toggle="tab"
                                                data-bs-target="#available-tab-1">Monday</a></li>
                                        <li class="nav-item flex-fill"><a class="nav-link text-center fw-semibold"
                                                href="javascript:void(0);" data-bs-toggle="tab"
                                                data-bs-target="#available-tab-2">Tuesday</a></li>
                                        <li class="nav-item flex-fill"><a class="nav-link text-center fw-semibold"
                                                href="javascript:void(0);" data-bs-toggle="tab"
                                                data-bs-target="#available-tab-3">Wednesday</a></li>
                                        <li class="nav-item flex-fill"><a class="nav-link text-center fw-semibold"
                                                href="javascript:void(0);" data-bs-toggle="tab"
                                                data-bs-target="#available-tab-4">Thursday</a></li>
                                        <li class="nav-item flex-fill"><a class="nav-link text-center fw-semibold"
                                                href="javascript:void(0);" data-bs-toggle="tab"
                                                data-bs-target="#available-tab-5">Friday</a></li>
                                    </ul>
                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade active show" id="available-tab-1" role="tabpanel">

                                            <!-- start row -->
                                            <div class="row align-items-center row-gap-3">
                                                <div class="col-md-4 col-lg-3">
                                                    <a href="#"
                                                        class="d-flex align-items-center bg-light rounded flex-fill text-center justify-content-center p-1 text-dark">11:30
                                                        AM - 12:30 PM</a>
                                                </div><!-- end col -->
                                                <div class="col-md-4 col-lg-3">
                                                    <a href="#"
                                                        class="d-flex align-items-center bg-light rounded flex-fill text-center justify-content-center p-1 text-dark">12:30
                                                        PM - 01:30 PM</a>
                                                </div><!-- end col -->
                                                <div class="col-md-4 col-lg-3">
                                                    <a href="#"
                                                        class="d-flex align-items-center bg-light rounded flex-fill text-center justify-content-center p-1 text-dark">02:30
                                                        PM - 03:30 PM</a>
                                                </div><!-- end col -->
                                                <div class="col-md-4 col-lg-3">
                                                    <a href="#"
                                                        class="d-flex align-items-center bg-light rounded flex-fill text-center justify-content-center p-1 text-dark">04:30
                                                        PM - 05:30 PM</a>
                                                </div><!-- end col -->
                                                <div class="col-md-4 col-lg-3">
                                                    <a href="#"
                                                        class="d-flex align-items-center bg-light rounded flex-fill text-center justify-content-center p-1 text-dark">06:00
                                                        PM - 07:30 PM</a>
                                                </div><!-- end col -->
                                                <div class="col-md-4 col-lg-3">
                                                    <a href="#"
                                                        class="d-flex align-items-center bg-light rounded flex-fill text-center justify-content-center p-1 text-dark">07:00
                                                        PM - 08:30 PM</a>
                                                </div><!-- end col -->
                                                <div class="col-md-4 col-lg-3">
                                                    <a href="#"
                                                        class="d-flex align-items-center bg-light rounded flex-fill text-center justify-content-center p-1 text-dark">09:00
                                                        PM - 11:00 PM</a>
                                                </div><!-- end col -->
                                                <div class="col-md-4 col-lg-3">
                                                    <a href="#"
                                                        class="d-flex align-items-center bg-light rounded flex-fill text-center justify-content-center p-1 text-dark">11:00
                                                        PM - 11:30 PM</a>
                                                </div><!-- end col -->
                                            </div>
                                            <!-- end row -->

                                        </div>
                                        <div class="tab-pane fade" id="available-tab-2" role="tabpanel">

                                            <!-- start row -->
                                            <div class="row align-items-center row-gap-3">
                                                <div class="col-md-4 col-lg-3">
                                                    <a href="#"
                                                        class="d-flex align-items-center bg-light rounded flex-fill text-center justify-content-center p-1 text-dark">11:30
                                                        AM - 12:30 PM</a>
                                                </div><!-- end col -->
                                                <div class="col-md-4 col-lg-3">
                                                    <a href="#"
                                                        class="d-flex align-items-center bg-light rounded flex-fill text-center justify-content-center p-1 text-dark">12:30
                                                        PM - 01:30 PM</a>
                                                </div><!-- end col -->
                                                <div class="col-md-4 col-lg-3">
                                                    <a href="#"
                                                        class="d-flex align-items-center bg-light rounded flex-fill text-center justify-content-center p-1 text-dark">02:30
                                                        PM - 03:30 PM</a>
                                                </div><!-- end col -->
                                                <div class="col-md-4 col-lg-3">
                                                    <a href="#"
                                                        class="d-flex align-items-center bg-light rounded flex-fill text-center justify-content-center p-1 text-dark">04:30
                                                        PM - 05:30 PM</a>
                                                </div><!-- end col -->
                                                <div class="col-md-4 col-lg-3">
                                                    <a href="#"
                                                        class="d-flex align-items-center bg-light rounded flex-fill text-center justify-content-center p-1 text-dark">06:00
                                                        PM - 07:30 PM</a>
                                                </div><!-- end col -->
                                                <div class="col-md-4 col-lg-3">
                                                    <a href="#"
                                                        class="d-flex align-items-center bg-light rounded flex-fill text-center justify-content-center p-1 text-dark">07:00
                                                        PM - 08:30 PM</a>
                                                </div><!-- end col -->
                                                <div class="col-md-4 col-lg-3">
                                                    <a href="#"
                                                        class="d-flex align-items-center bg-light rounded flex-fill text-center justify-content-center p-1 text-dark">09:00
                                                        PM - 11:00 PM</a>
                                                </div><!-- end col -->
                                                <div class="col-md-4 col-lg-3">
                                                    <a href="#"
                                                        class="d-flex align-items-center bg-light rounded flex-fill text-center justify-content-center p-1 text-dark">11:00
                                                        PM - 11:30 PM</a>
                                                </div><!-- end col -->
                                            </div>
                                            <!-- end row -->

                                        </div>
                                        <div class="tab-pane fade" id="available-tab-3" role="tabpanel">

                                            <!-- start row -->
                                            <div class="row align-items-center row-gap-3">
                                                <div class="col-md-4 col-lg-3">
                                                    <a href="#"
                                                        class="d-flex align-items-center bg-light rounded flex-fill text-center justify-content-center p-1 text-dark">11:30
                                                        AM - 12:30 PM</a>
                                                </div><!-- end col -->
                                                <div class="col-md-4 col-lg-3">
                                                    <a href="#"
                                                        class="d-flex align-items-center bg-light rounded flex-fill text-center justify-content-center p-1 text-dark">12:30
                                                        PM - 01:30 PM</a>
                                                </div><!-- end col -->
                                                <div class="col-md-4 col-lg-3">
                                                    <a href="#"
                                                        class="d-flex align-items-center bg-light rounded flex-fill text-center justify-content-center p-1 text-dark">02:30
                                                        PM - 03:30 PM</a>
                                                </div><!-- end col -->
                                                <div class="col-md-4 col-lg-3">
                                                    <a href="#"
                                                        class="d-flex align-items-center bg-light rounded flex-fill text-center justify-content-center p-1 text-dark">04:30
                                                        PM - 05:30 PM</a>
                                                </div><!-- end col -->
                                                <div class="col-md-4 col-lg-3">
                                                    <a href="#"
                                                        class="d-flex align-items-center bg-light rounded flex-fill text-center justify-content-center p-1 text-dark">06:00
                                                        PM - 07:30 PM</a>
                                                </div><!-- end col -->
                                                <div class="col-md-4 col-lg-3">
                                                    <a href="#"
                                                        class="d-flex align-items-center bg-light rounded flex-fill text-center justify-content-center p-1 text-dark">07:00
                                                        PM - 08:30 PM</a>
                                                </div><!-- end col -->
                                                <div class="col-md-4 col-lg-3">
                                                    <a href="#"
                                                        class="d-flex align-items-center bg-light rounded flex-fill text-center justify-content-center p-1 text-dark">09:00
                                                        PM - 11:00 PM</a>
                                                </div><!-- end col -->
                                                <div class="col-md-4 col-lg-3">
                                                    <a href="#"
                                                        class="d-flex align-items-center bg-light rounded flex-fill text-center justify-content-center p-1 text-dark">11:00
                                                        PM - 11:30 PM</a>
                                                </div><!-- end col -->
                                            </div>
                                            <!-- end row -->

                                        </div>
                                        <div class="tab-pane fade" id="available-tab-4" role="tabpanel">

                                            <!-- start row -->
                                            <div class="row align-items-center row-gap-3">
                                                <div class="col-md-4 col-lg-3">
                                                    <a href="#"
                                                        class="d-flex align-items-center bg-light rounded flex-fill text-center justify-content-center p-1 text-dark">11:30
                                                        AM - 12:30 PM</a>
                                                </div><!-- end col -->
                                                <div class="col-md-4 col-lg-3">
                                                    <a href="#"
                                                        class="d-flex align-items-center bg-light rounded flex-fill text-center justify-content-center p-1 text-dark">12:30
                                                        PM - 01:30 PM</a>
                                                </div><!-- end col -->
                                                <div class="col-md-4 col-lg-3">
                                                    <a href="#"
                                                        class="d-flex align-items-center bg-light rounded flex-fill text-center justify-content-center p-1 text-dark">02:30
                                                        PM - 03:30 PM</a>
                                                </div><!-- end col -->
                                                <div class="col-md-4 col-lg-3">
                                                    <a href="#"
                                                        class="d-flex align-items-center bg-light rounded flex-fill text-center justify-content-center p-1 text-dark">04:30
                                                        PM - 05:30 PM</a>
                                                </div><!-- end col -->
                                                <div class="col-md-4 col-lg-3">
                                                    <a href="#"
                                                        class="d-flex align-items-center bg-light rounded flex-fill text-center justify-content-center p-1 text-dark">06:00
                                                        PM - 07:30 PM</a>
                                                </div><!-- end col -->
                                                <div class="col-md-4 col-lg-3">
                                                    <a href="#"
                                                        class="d-flex align-items-center bg-light rounded flex-fill text-center justify-content-center p-1 text-dark">07:00
                                                        PM - 08:30 PM</a>
                                                </div><!-- end col -->
                                                <div class="col-md-4 col-lg-3">
                                                    <a href="#"
                                                        class="d-flex align-items-center bg-light rounded flex-fill text-center justify-content-center p-1 text-dark">09:00
                                                        PM - 11:00 PM</a>
                                                </div><!-- end col -->
                                                <div class="col-md-4 col-lg-3">
                                                    <a href="#"
                                                        class="d-flex align-items-center bg-light rounded flex-fill text-center justify-content-center p-1 text-dark">11:00
                                                        PM - 11:30 PM</a>
                                                </div><!-- end col -->
                                            </div>
                                            <!-- end row -->

                                        </div>
                                        <div class="tab-pane fade" id="available-tab-5" role="tabpanel">

                                            <!-- start row -->
                                            <div class="row align-items-center row-gap-3">
                                                <div class="col-md-4 col-lg-3">
                                                    <a href="#"
                                                        class="d-flex align-items-center bg-light rounded flex-fill text-center justify-content-center p-1 text-dark">11:30
                                                        AM - 12:30 PM</a>
                                                </div><!-- end col -->
                                                <div class="col-md-4 col-lg-3">
                                                    <a href="#"
                                                        class="d-flex align-items-center bg-light rounded flex-fill text-center justify-content-center p-1 text-dark">12:30
                                                        PM - 01:30 PM</a>
                                                </div><!-- end col -->
                                                <div class="col-md-4 col-lg-3">
                                                    <a href="#"
                                                        class="d-flex align-items-center bg-light rounded flex-fill text-center justify-content-center p-1 text-dark">02:30
                                                        PM - 03:30 PM</a>
                                                </div><!-- end col -->
                                                <div class="col-md-4 col-lg-3">
                                                    <a href="#"
                                                        class="d-flex align-items-center bg-light rounded flex-fill text-center justify-content-center p-1 text-dark">04:30
                                                        PM - 05:30 PM</a>
                                                </div><!-- end col -->
                                                <div class="col-md-4 col-lg-3">
                                                    <a href="#"
                                                        class="d-flex align-items-center bg-light rounded flex-fill text-center justify-content-center p-1 text-dark">06:00
                                                        PM - 07:30 PM</a>
                                                </div><!-- end col -->
                                                <div class="col-md-4 col-lg-3">
                                                    <a href="#"
                                                        class="d-flex align-items-center bg-light rounded flex-fill text-center justify-content-center p-1 text-dark">07:00
                                                        PM - 08:30 PM</a>
                                                </div><!-- end col -->
                                                <div class="col-md-4 col-lg-3">
                                                    <a href="#"
                                                        class="d-flex align-items-center bg-light rounded flex-fill text-center justify-content-center p-1 text-dark">09:00
                                                        PM - 11:00 PM</a>
                                                </div><!-- end col -->
                                                <div class="col-md-4 col-lg-3">
                                                    <a href="#"
                                                        class="d-flex align-items-center bg-light rounded flex-fill text-center justify-content-center p-1 text-dark">11:00
                                                        PM - 11:30 PM</a>
                                                </div><!-- end col -->
                                            </div>
                                            <!-- end row -->

                                        </div>
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                            <!-- Availability End -->

                            <div class="card">
                                <div class="card-body">
                                    <h5 class="fw-bold mb-3">Short Bio</h5>
                                    <p>Dr. John Smith has been practicing family medicine for over 10 years. She has
                                        extensive experience in managing chronic illnesses, preventive care, and
                                        treating a wide range of medical conditions for patients of all ages.</p>
                                    <div>
                                        <div class="more-menu">
                                            <p>Dr. Smith is dedicated to providing patient-centered care and emphasizes
                                                building long-term relationships with her patients.</p>
                                        </div>
                                        <div class="view-all mt-2">
                                            <a href="javascript:void(0);"
                                                class="viewall-button text-primary fw-medium"><span>See More</span><i
                                                    class="ti ti-chevron-down fs-10 ms-2"></i></a>
                                        </div>
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                            <!-- Short Bio End -->

                            <div class="card">
                                <div class="card-body">
                                    <h5 class="fw-bold mb-3">Education Information</h5>
                                    <ul class="activity-feed rounded">
                                        <li class="feed-item timeline-item">
                                            <h6 class="fw-bold mb-2">Boston Medicine Institutuion - MD</h6>
                                            <p>25 May 1990 - 29 Jan 1992</p>
                                        </li>
                                        <li class="feed-item timeline-item">
                                            <h6 class="fw-bold mb-2">Harvard Medical School, Boston - MBBS</h6>
                                            <p>25 May 1985 - 29 Jan 1990</p>
                                        </li>
                                    </ul>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                            <!-- Education Information End -->

                            <div class="card">
                                <div class="card-body">
                                    <h5 class="fw-bold mb-3">Awards & Recognition</h5>
                                    <div class="mb-3">
                                        <div class="d-flex align-items-center mb-2">
                                            <span class="me-2"><i class="ti ti-award"></i></span>
                                            <h6 class="mb-0 fw-bold">Top Doctor Award (2023)</h6>
                                        </div>
                                        <p>Recognized by U.S. News & World Report for outstanding achievements in family
                                            medicine.</p>
                                    </div>
                                    <div>
                                        <div class="d-flex align-items-center mb-2">
                                            <span class="me-2"><i class="ti ti-award"></i></span>
                                            <h6 class="mb-0 fw-bold">Patient Choice Award (2022)</h6>
                                        </div>
                                        <p>Awarded by Vitals.com for consistently receiving high patient ratings in
                                            satisfaction and care.</p>
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                            <!-- Awards & Recognition End -->

                            <div class="card">
                                <div class="card-body">
                                    <h5 class="fw-bold mb-3">Certifications</h5>
                                    <div class="mb-3">
                                        <div class="d-flex align-items-center mb-2">
                                            <span class="me-2"><i class="ti ti-award"></i></span>
                                            <h6 class="mb-0 fw-bold">Certification by the American Board of Family
                                                Medicine (ABFM), 2015</h6>
                                        </div>
                                        <p>Demonstrates mastery of comprehensive, ongoing care for individuals and
                                            families, across all ages and genders.</p>
                                    </div>
                                    <div>
                                        <div class="d-flex align-items-center mb-2">
                                            <span class="me-2"><i class="ti ti-award"></i></span>
                                            <h6 class="mb-0 fw-bold">American Heart Association, 2024</h6>
                                        </div>
                                        <p>Certification in performing life-saving techniques, including CPR and
                                            emergency cardiac care for adults and children.</p>
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                            <!-- Certifications End -->
                        </div><!-- end col -->
                    </div>
                    <!-- end row -->

                </div>
            </div>
            <!-- Doctor Details -->

        </div>

        <!-- ========================
                End Page Content
            ========================= -->

        <x-frontend.footer />

        <!-- Start Book Appointment Modal  -->
        <div class="modal fade" id="book-appointment">
            <div class="modal-dialog modal-dialog-centered modal-md">
                <div class="modal-content">
                    <div class="modal-header bg-white border-bottom">
                        <h5 class="fs-18">Appointment</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Services<span class="text-danger ms-1">*</span></label>
                            <select class="select">
                                <option>Select</option>
                                <option>Cardiologist</option>
                                <option>Orthopedic Surgeon</option>
                                <option>Pediatrician</option>
                                <option>Gynecologist</option>
                                <option>Psychiatrist</option>
                                <option>Neurosurgeon</option>
                                <option>Oncologist</option>
                                <option>Pulmonologist</option>
                                <option>Urologist</option>
                                <option>Dermatologist</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label mb-1 text-dark fs-14 fw-medium">Date<span
                                    class="text-danger ms-1">*</span></label>
                            <div class="input-icon-end position-relative">
                                <input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
                                <span class="input-icon-addon">
                                    <i class="ti ti-calendar"></i>
                                </span>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label mb-1 text-dark fs-14 fw-medium">Time<span
                                    class="text-danger ms-1">*</span></label>
                            <div class="input-icon-end position-relative me-2">
                                <input type="text" class="form-control timepicker">
                                <span class="input-icon-addon">
                                    <i class="ti ti-clock text-gray-7"></i>
                                </span>
                            </div>
                        </div>
                        <div class="mb-0">
                            <label class="form-label mb-1 text-dark fs-14 fw-medium">Comments</label>
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer bg-white">
                        <button type="button" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Book Appointment</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Book Appointment Modal  -->

    </div>
    <!-- End Wrapper -->

@endsection
