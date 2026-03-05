@extends('layouts.FrontendLayout')

@section('body')

    <div class="loader-main">
        <span class="page-loader"></span>
    </div>

    <div class="main-wrapper">

        <x-frontend.header />

        <!-- hero secion start -->
        <div class="hero-section position-relative section-padding bg-light">
            <img src="{{ asset('frontend/assets/images/bg-01.svg') }}" alt="img"
                class="banner-bg-01 position-absolute d-lg-inline-flex d-none">
            <img src="{{ asset('frontend/assets/images/bg-02.svg') }}" alt="img"
                class="banner-bg-02 position-absolute d-lg-inline-flex d-none">
            <img src="{{ asset('frontend/assets/images/bg-03.svg') }}" alt="img"
                class="banner-bg-03 position-absolute d-lg-inline-flex d-none">
            <img src="{{ asset('frontend/assets/images/bg-04.svg') }}" alt="img"
                class="banner-bg-04 position-absolute d-lg-inline-flex d-none">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 pe-xl-5">
                        <div class="banner-content pe-xl-2 aos" data-aos="fade-right">
                            <span
                                class="shadow-md border rounded-pill text-dark p-2 px-3 bg-white mb-20 d-inline-flex align-items-center"><i
                                    class="ti ti-heart-filled text-danger me-2"></i>#1 Medical Clinic in your
                                Location</span>
                            <h1 class="mb-3 display-2">Bringing <span class="text-primary">Quality Healthcare</span>
                                Services To You</h1>
                            <p class="text-gray-9 mb-40">Delivering Comprehensive Health Support through our innovative
                                platform that Seamlessly Connects your terms</p>
                            <div class="d-inline-flex align-items-center flex-wrap gap-2">
                                <a href="doctors.html" class="btn btn-md btn-dark d-inline-flex align-items-center">View
                                    All Doctors<i class="ti ti-chevron-right ms-1"></i></a>
                                <a href="contact-us.html" class="btn btn-md btn-white d-inline-flex align-items-center">Get
                                    Started<i class="ti ti-chevron-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <form>
                            <div class="appointment-form text-start rounded-4 border shadow-sm bg-white">
                                <h5 class="mb-4">Appointment Form</h5>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Department<span class="text-danger ms-1">*</span></label>
                                        <select class="select form-control">
                                            <option>Select</option>
                                            <option>General Medicine</option>
                                            <option>Dentistry</option>
                                            <option>Ophthalmology</option>
                                            <option>Radiology</option>
                                            <option>Physiotherapy</option>
                                            <option>Cardiology</option>
                                            <option>Dermatology</option>
                                            <option>Pathology</option>
                                            <option>ENT</option>
                                            <option>Nutrition</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Services<span class="text-danger ms-1">*</span></label>
                                        <select class="select form-control">
                                            <option>Select</option>
                                            <option>General Consultation</option>
                                            <option>Dental Cleaning</option>
                                            <option>Eye Checkup</option>
                                            <option>X-Ray</option>
                                            <option>Physiotherapy Sessiony</option>
                                            <option>Cardiac Screening</option>
                                            <option>Skin Allergy Test</option>
                                            <option>Blood Test</option>
                                            <option>ENT Consultation</option>
                                            <option>Nutrition Counseling</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label class="form-label">Doctors<span class="text-danger ms-1">*</span></label>
                                        <select class="select form-control">
                                            <option>Select</option>
                                            <option>Dr. Michael Thompson</option>
                                            <option>Dr. Barbara Longo</option>
                                            <option>Dr. Alexander Hampton</option>
                                            <option>Dr. Lauren Brown</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Date<span class="text-danger ms-1">*</span></label>
                                        <div class="input-group position-relative mb-3">
                                            <input type="text" class="form-control datetimepicker rounded-end"
                                                placeholder="25 Mar 2025">
                                            <span class="input-icon-addon fs-16 text-gray-9">
                                                <i class="ti ti-calendar"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Time<span class="text-danger ms-1">*</span></label>
                                        <div class="input-icon-end position-relative">
                                            <input type="text" class="form-control timepicker" placeholder="-- : --  --">
                                            <span class="input-icon-addon">
                                                <i class="ti ti-clock text-gray-9"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-4">
                                        <label class="form-label">Comments<span class="text-danger ms-1">*</span></label>
                                        <textarea class="form-control" placeholder="Description"></textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-dark btn-md w-100">Book an
                                            Appointment</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- hero secion end -->

        <!-- departments start -->
        <div class="departments-section section-padding">
            <div class="container">
                <div class="section-header pb-20 text-center position-relative" data-aos="fade-up">
                    <h3 class="mb-2">Trending Specialities</h3>
                    <p>Explore a Wide Range of Specialities</p>
                </div>
                <div class="departments-slider lazy">
                    @foreach($departments as $department)
                    <div data-aos="flip-left">
                        <div class="departments-item border rounded-4 p-3 text-center">
                            <span class="avatar avatar-xl rounded-pill bg-light d-inline-flex mb-3">
                                <img class="mx-auto w-auto h-auto" src="{{ asset('frontend/assets/images/icon-01.svg') }}"
                                    alt="img">
                            </span>
                            <h6 class="mb-1"><a href="javascript:void(0);">{{ $department->title }}</a></h6>
                            <p class="fs-14 text-truncate">{{ $department->doctors_count }} Doctors Available</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- departments end -->

        <!-- about start -->
        <div class="about-section bg-light position-relative section-padding">
            <img src="{{ asset('frontend/assets/images/bg-05.svg') }}" alt="img"
                class="about-bg1 position-absolute d-lg-inline-flex d-none">
            <img src="{{ asset('frontend/assets/images/bg-06.png') }}" alt="img"
                class="about-bg2 position-absolute d-lg-inline-flex d-none">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-images position-relative">
                            <img src="{{ asset('frontend/assets/images/features-01.svg') }}" alt="img"
                                class="about-img1 shadow-md rounded-4" data-aos="fade-right">
                            <img src="{{ asset('frontend/assets/images/features-02.svg') }}" alt="img"
                                class="about-img2 position-absolute shadow-md rounded-4" data-aos="fade-up">
                            <div
                                class="exp-wrap d-inline-flex align-items-center border-3 bg-white rounded-4 shadow-md p-3 border-end border-secondary">
                                <h3 class="me-2 text-primary">25+</h3>
                                <p class="text-gray-9 fs-14">Years of experience in Healthcare</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 ps-xl-5">
                        <h2 class="display-3 mb-4" data-aos="fade-up">Accessible & Reliable <span
                                class="text-primary">Healthcare Simplified</span></h2>
                        <p class="mb-4" data-aos="fade-up">We provide comprehensive, high-quality healthcare for
                            patients of all ages. Our clinic is home to a range of specialized departments, ensuring
                            that all your medical needs are met under one roof. Whether you need a routine checkup or
                            specialized treatment, our experienced team is here to help.</p>
                        <div class="mb-4" data-aos="fade-up">
                            <div class="row">
                                <div class="col-md-6" data-aos="fade-up">
                                    <ul>
                                        <li class="mb-3 text-gray-9 d-flex align-items-center"><i
                                                class="ti ti-circle-check-filled me-2 text-success"></i>Routine
                                            check-ups</li>
                                        <li class="mb-3 text-gray-9 d-flex align-items-center"><i
                                                class="ti ti-circle-check-filled me-2 text-success"></i>State-of-the-Art
                                            Facilities</li>
                                        <li class="mb-3 text-gray-9 d-flex align-items-center"><i
                                                class="ti ti-circle-check-filled me-2 text-success"></i>Convenient
                                            Location</li>
                                    </ul>
                                </div>
                                <div class="col-md-6" data-aos="fade-up">
                                    <ul>
                                        <li class="mb-3 text-gray-9 d-flex align-items-center"><i
                                                class="ti ti-circle-check-filled me-2 text-success"></i>Comprehensive
                                            Care</li>
                                        <li class="mb-3 text-gray-9 d-flex align-items-center"><i
                                                class="ti ti-circle-check-filled me-2 text-success"></i>Minor outpatient
                                            procedures</li>
                                        <li class="mb-3 text-gray-9 d-flex align-items-center"><i
                                                class="ti ti-circle-check-filled me-2 text-success"></i>Experienced
                                            Healthcare Providers</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <a data-aos="fade-up" href="javascript:void(0);"
                            class="btn btn-md btn-primary d-inline-flex align-items-center">Know More<i
                                class="ti ti-chevron-right ms-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- about end -->

        <!-- doctors -->
        <div class="doctors-section position-relative section-padding">
            <div class="container">
                <div class="section-header pb-20 text-center position-relative" data-aos="fade-up">
                    <h3 class="mb-2">Featured Doctors</h3>
                    <p>Meet your trusted team of medical experts and specialists</p>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-sm-6">
                        <div class="doctor-wrap border rounded-4 shadow-sm mb-4 overflow-hidden">
                            <div class="doctor-image overflow-hidden">
                                <a href="javascript:void(0);">
                                    <img src="{{ asset('frontend/assets/images/doctor-01.png') }}" alt="img" class="w-100">
                                </a>
                            </div>
                            <div class="doctor-content doctor-list-content">
                                <h6 class="mb-1"><a href="javascript:void(0);">Dr. Michael Thompson</a></h6>
                                <p class="fs-14 mb-3">Cardiologist</p>
                                <p class="fs-14 fw-semibold text-gray-9 border-bottom pb-3 mb-3">Appointments Completed
                                    : 216</p>
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
                                <a href="javascript:void(0);">
                                    <img src="{{ asset('frontend/assets/images/doctor-02.png') }}" alt="img" class="w-100">
                                </a>
                            </div>
                            <div class="doctor-content doctor-list-content">
                                <h6 class="mb-1"><a href="javascript:void(0);">Dr. Sarah Johnson</a></h6>
                                <p class="fs-14 mb-3">Orthopedic Surgeon</p>
                                <p class="fs-14 fw-semibold text-gray-9 border-bottom pb-3 mb-3">Appointments Completed
                                    : 137</p>
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
                                <a href="javascript:void(0);">
                                    <img src="{{ asset('frontend/assets/images/doctor-08.png') }}" alt="img" class="w-100">
                                </a>
                            </div>
                            <div class="doctor-content doctor-list-content">
                                <h6 class="mb-1"><a href="javascript:void(0);">Dr. Avan Davis</a></h6>
                                <p class="fs-14 mb-3">Endocrinologist</p>
                                <p class="fs-14 fw-semibold text-gray-9 border-bottom pb-3 mb-3">Appointments Completed
                                    : 179</p>
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
                                <a href="javascript:void(0);">
                                    <img src="{{ asset('frontend/assets/images/doctor-10.png') }}" alt="img" class="w-100">
                                </a>
                            </div>
                            <div class="doctor-content doctor-list-content">
                                <h6 class="mb-1"><a href="javascript:void(0);">Dr. Patricia Brown</a></h6>
                                <p class="fs-14 mb-3">Pulmonologist</p>
                                <p class="fs-14 fw-semibold text-gray-9 border-bottom pb-3 mb-3">Appointments Completed
                                    : 275</p>
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
                </div>
                <div class="text-center pt-3">
                    <a data-aos="fade-up" href="doctors.html"
                        class="btn btn-md btn-primary d-inline-flex align-items-center">View All Doctors<i
                            class="ti ti-chevron-right ms-1"></i></a>
                </div>
            </div>
        </div>
        <!-- doctors -->

        <!-- counter -->
        <div class="counter-section position-relative bg-dark text-center">
            <img src="{{ asset('frontend/assets/images/bg-07.svg') }}" alt="img"
                class="counter-bg1 position-absolute d-lg-inline-flex d-none">
            <img src="{{ asset('frontend/assets/images/bg-08.svg') }}" alt="img"
                class="counter-bg2 position-absolute d-lg-inline-flex d-none">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6 mb-4" data-aos="fade-up">
                        <div class="p-3 border-end border-gray-9 counter-box">
                            <div class="mb-20">
                                <img src="{{ asset('frontend/assets/images/icon-07.svg') }}" alt="img">
                            </div>
                            <h2 class="text-white mb-2 d-inline-flex align-items-center"><span
                                    class="counterUp">10000</span>+</h2>
                            <p>Happy People</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="p-3 border-end border-0 border-gray-9 counter-box">
                            <div class="mb-20">
                                <img src="{{ asset('frontend/assets/images/icon-08.svg') }}" alt="img">
                            </div>
                            <h2 class="text-white mb-2 d-inline-flex align-items-center"><span
                                    class="counterUp">8954</span>+</h2>
                            <p>Appointment Completed</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                        <div class="p-3 border-end border-gray-9 counter-box">
                            <div class="mb-20">
                                <img src="{{ asset('frontend/assets/images/icon-09.svg') }}" alt="img">
                            </div>
                            <h2 class="text-white mb-2 d-inline-flex align-items-center"><span
                                    class="counterUp">1000</span>+</h2>
                            <p>Expert Doctors & Team</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 mb-4" data-aos="fade-up" data-aos-delay="500">
                        <div class="p-3 counter-box">
                            <div class="mb-20">
                                <img src="{{ asset('frontend/assets/images/icon-10.svg') }}" alt="img">
                            </div>
                            <h2 class="text-white mb-2 d-inline-flex align-items-center"><span
                                    class="counterUp">9658</span>+</h2>
                            <p>Total Patients Enrolled</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- counter -->

        <!-- improve health -->
        <div class="improve-health-section position-relative section-padding">
            <img src="{{ asset('frontend/assets/images/bg-09.svg') }}" alt="img"
                class="improve-health-bg1 position-absolute d-lg-inline-flex d-none">
            <img src="{{ asset('frontend/assets/images/bg-09.svg') }}" alt="img"
                class="improve-health-bg2 position-absolute d-lg-inline-flex d-none">
            <div class="container">
                <div class="section-header pb-20 text-center position-relative" data-aos="fade-up">
                    <h3 class="mb-2">Your Reliable Route to Improved Health</h3>
                    <p>Our Solutions offer tailored and strategies to meet your unique goals, from and risk management.
                    </p>
                </div>
                <div class="row row-gap-4">
                    <div class="col-xl-3 col-sm-6" data-aos="fade-up">
                        <div
                            class="improve-health-item overflow-hidden position-relative bg-white border rounded-4 p-3 text-center shadow-sm">
                            <span class="avatar rounded-pill d-inline-flex mb-3">
                                <img class="mx-auto w-auto h-auto" src="{{ asset('frontend/assets/images/icon-11.svg') }}"
                                    alt="img">
                            </span>
                            <h6 class="mb-2">General Medicine</h6>
                            <p class="text-truncate line-clamb-3">Our General Medicine department offers a wide range of
                                primary care services to patients of all ages.</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6" data-aos="fade-up" data-aos-delay="300">
                        <div
                            class="improve-health-item overflow-hidden position-relative bg-white border rounded-4 p-3 text-center shadow-sm">
                            <span class="avatar rounded-pill d-inline-flex mb-3">
                                <img class="mx-auto w-auto h-auto" src="{{ asset('frontend/assets/images/icon-12.svg') }}"
                                    alt="img">
                            </span>
                            <h6 class="mb-2">Surgery</h6>
                            <p class="text-truncate line-clamb-3">Our Surgery department offers a range of surgical
                                procedures, from minor outpatient surgeries.</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6" data-aos="fade-up" data-aos-delay="400">
                        <div
                            class="improve-health-item overflow-hidden position-relative bg-white border rounded-4 p-3 text-center shadow-sm">
                            <span class="avatar rounded-pill d-inline-flex mb-3">
                                <img class="mx-auto w-auto h-auto" src="{{ asset('frontend/assets/images/icon-13.svg') }}"
                                    alt="img">
                            </span>
                            <h6 class="mb-2">Laboratory Services</h6>
                            <p class="text-truncate line-clamb-3">Our Laboratory Services department ensures fast and
                                accurate testing for a variety.</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6" data-aos="fade-up" data-aos-delay="500">
                        <div
                            class="improve-health-item overflow-hidden position-relative bg-white border rounded-4 p-3 text-center shadow-sm">
                            <span class="avatar rounded-pill d-inline-flex mb-3">
                                <img class="mx-auto w-auto h-auto" src="{{ asset('frontend/assets/images/icon-14.svg') }}"
                                    alt="img">
                            </span>
                            <h6 class="mb-2">Pediatrics</h6>
                            <p class="text-truncate line-clamb-3">The Pediatrics department is focused on the healthcare
                                needs of children from infancy.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- improve health -->

        <!-- testimonials -->
        <div class="testimonials-section position-relative section-padding bg-light">
            <img src="{{ asset('frontend/assets/images/bg-13.svg') }}" alt="img"
                class="testimonials-bg1 position-absolute d-lg-inline-flex d-none">
            <img src="{{ asset('frontend/assets/images/bg-14.svg') }}" alt="img"
                class="testimonials-bg2 position-absolute d-lg-inline-flex d-none">
            <div class="container position-relative">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="pe-xl-4" data-aos="fade-right">
                            <h2 class="display-3 mb-3"><span class="text-primary">Real User Reviews</span> of Our AI
                                Chatbot Assistant</h2>
                            <p>Read what users who have experienced the power of our AI chatbot assistant have to say.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="testimonials-slider lazy">
                            <div data-aos="fade-left">
                                <div class="testimonials-item border rounded-4 bg-white text-center shadow-sm">
                                    <div class="mb-20 text-center">
                                        <img src="{{ asset('frontend/assets/images/quote.svg') }}" alt="img"
                                            class="mx-auto">
                                    </div>
                                    <span class="avatar mb-20 rounded-pill border border-primary border-2"><img
                                            class="rounded-pill" src="{{ asset('frontend/assets/images/avatar-02.svg') }}"
                                            alt="img"></span>
                                    <h6 class="mb-1"><a href="javascript:void(0);">Andrew Fletcher</a></h6>
                                    <p class="mb-20">Nevada, USA</p>
                                    <p class="mb-20 text-truncate line-clamb-3">I’ve been coming here for years, and I
                                        always feel heard. The doctors take their time and actually explained.</p>
                                    <div>
                                        <i class="ti ti-star-filled text-warning"></i>
                                        <i class="ti ti-star-filled text-warning"></i>
                                        <i class="ti ti-star-filled text-warning"></i>
                                        <i class="ti ti-star-filled text-warning"></i>
                                        <i class="ti ti-star-filled text-warning"></i>
                                    </div>
                                </div>
                            </div>
                            <div data-aos="fade-left" data-aos-delay="300">
                                <div class="testimonials-item border rounded-4 bg-white text-center shadow-sm">
                                    <div class="mb-20 text-center">
                                        <img src="{{ asset('frontend/assets/images/quote.svg') }}" alt="img"
                                            class="mx-auto">
                                    </div>
                                    <span class="avatar mb-20 rounded-pill border border-primary border-2"><img
                                            class="rounded-pill" src="{{ asset('frontend/assets/images/avatar-03.svg') }}"
                                            alt="img"></span>
                                    <h6 class="mb-1"><a href="javascript:void(0);">Karen Granger</a></h6>
                                    <p class="mb-20">California, USA</p>
                                    <p class="mb-20 text-truncate line-clamb-3">“From the consultation to my new smile,
                                        the experience was incredible. The tech they use is super modern</p>
                                    <div>
                                        <i class="ti ti-star-filled text-warning"></i>
                                        <i class="ti ti-star-filled text-warning"></i>
                                        <i class="ti ti-star-filled text-warning"></i>
                                        <i class="ti ti-star-filled text-warning"></i>
                                        <i class="ti ti-star-filled text-warning"></i>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="testimonials-item border rounded-4 bg-white text-center shadow-sm">
                                    <div class="mb-20 text-center">
                                        <img src="{{ asset('frontend/assets/images/quote.svg') }}" alt="img"
                                            class="mx-auto">
                                    </div>
                                    <span class="avatar mb-20 rounded-pill border border-primary border-2"><img
                                            class="rounded-pill" src="{{ asset('frontend/assets/images/avatar-04.jpg') }}"
                                            alt="img"></span>
                                    <h6 class="mb-1"><a href="javascript:void(0);">John Doe</a></h6>
                                    <p class="mb-20">New York</p>
                                    <p class="mb-20 text-truncate line-clamb-3">From the first appointment to the final
                                        result, everything exceeded my expectations. The technology they use is
                                        cutting-edge and made the whole process smooth and comfortable.</p>
                                    <div>
                                        <i class="ti ti-star-filled text-warning"></i>
                                        <i class="ti ti-star-filled text-warning"></i>
                                        <i class="ti ti-star-filled text-warning"></i>
                                        <i class="ti ti-star-filled text-warning"></i>
                                        <i class="ti ti-star-filled text-warning"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- testimonials -->

        <!-- articles start-->
        <div class="articles-section section-padding">
            <div class="container">
                <div class="section-header pb-20 text-center position-relative" data-aos="fade-up">
                    <h3 class="mb-2">Latest Articles</h3>
                    <p>Expert-written content on health, wellness & care</p>
                </div>
                <div class="mb-40">
                    <div class="row row-gap-4 justify-content-center">
                        <div class="col-lg-4 col-md-6" data-aos="fade-up">
                            <div class="article-item overflow-hidden position-relative">
                                <img src="{{ asset('frontend/assets/images/blog-01.svg') }}" alt="img"
                                    class="img-fluid rounded-2 w-100">
                                <div class="article-content">
                                    <p class="d-inline-flex align-items-center text-white mb-2 fs-13 fw-medium"><i
                                            class="ti ti-calendar-event me-1"></i>21 May 2025</p>
                                    <h6><a href="javascript:void(0);">How to Maintain Your Mental Health During
                                            Stressful Times</a></h6>
                                </div>
                                <span class="badge badge-info">Health Issue</span>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                            <div class="article-item overflow-hidden position-relative">
                                <img src="{{ asset('frontend/assets/images/blog-02.svg') }}" alt="img"
                                    class="img-fluid rounded-2 w-100">
                                <div class="article-content">
                                    <p class="d-inline-flex align-items-center text-white mb-2 fs-13 fw-medium"><i
                                            class="ti ti-calendar-event me-1"></i>21 May 2025</p>
                                    <h6><a href="javascript:void(0);">Understanding the Importance of Regular Health
                                            Checkups</a></h6>
                                </div>
                                <span class="badge badge-success">Regular Checkup</span>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                            <div class="article-item overflow-hidden position-relative">
                                <img src="{{ asset('frontend/assets/images/blog-03.svg') }}" alt="img"
                                    class="img-fluid rounded-2 w-100">
                                <div class="article-content">
                                    <p class="d-inline-flex align-items-center text-white mb-2 fs-13 fw-medium"><i
                                            class="ti ti-calendar-event me-1"></i>21 May 2025</p>
                                    <h6><a href="javascript:void(0);">Tips for Staying Healthy While Working Long
                                            Hours</a></h6>
                                </div>
                                <span class="badge badge-warning">Diet Tips</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center" data-aos="fade-up">
                    <a href="blogs.html" class="btn btn-md btn-primary d-inline-flex align-items-center">View All
                        Articles<i class="ti ti-chevron-right ms-1"></i></a>
                </div>
            </div>
        </div>
        <!-- articles end -->

        <!-- booking -->
        <div class="container">
            <div class="booking-section position-relative bg-primary overflow-hidden rounded-4">
                <img data-aos="fade-up" data-aos-delay="500" src="{{ asset('frontend/assets/images/avatar-01.svg') }}"
                    alt="img" class="booking-bg1 position-absolute d-lg-inline-flex d-none">
                <img data-aos="fade-left" data-aos-delay="600" src="{{ asset('frontend/assets/images/bg-11.svg') }}"
                    alt="img" class="booking-bg2 position-absolute d-lg-inline-flex d-none">
                <img data-aos="fade-left" data-aos-delay="700" src="{{ asset('frontend/assets/images/bg-12.svg') }}"
                    alt="img" class="booking-bg3 position-absolute d-lg-inline-flex d-none">
                <div class="row">
                    <div class="col-xxl-6 col-lg-7" data-aos="fade-right">
                        <h2 class="text-white mb-20 display-3">Schedule Your <span class="text-secondary">Appointment</span>
                            With Us</h2>
                        <p class="mb-20 text-light">Our Surgery department offers a range of surgical procedures, from
                            minor outpatient surgeries to more complex operations.</p>
                        <a href="doctors.html"
                            class="btn btn-md btn-white d-inline-flex align-items-center border-white">View All
                            Doctors<i class="ti ti-chevron-right ms-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- booking -->

        <x-frontend.footer />

    </div>

@endsection
