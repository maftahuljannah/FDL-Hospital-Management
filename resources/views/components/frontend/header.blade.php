<!-- header top start -->
<div class="header-top bg-dark position-relative d-lg-block d-none py-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <span class="fs-14 me-3 text-light d-inline-flex align-items-center">
                    <i class="ti ti-mail me-1 text-white"></i>
                    <a href="mailto:mahmudulabedinctg@gmail.com" class="text-white">info@example.com</a>
                </span>
                <span class="fs-14 text-light d-inline-flex align-items-center">
                    <i class="ti ti-phone me-1 text-white"></i>
                    <a href="tel:+8801991947893" class="text-white">+880 1991947893</a>
                </span>
            </div>
            <div class="col-lg-6 text-end">
                <span class="fs-14 text-light d-inline-flex align-items-center">
                    <i class="ti ti-clock me-1 text-white"></i>
                    Monday - Friday, 8 AM to 10 PM
                </span>
            </div>
        </div>
    </div>
</div>
<!-- header top end -->

<!-- Header start -->
<header class="header">
    <div class="container">
        <nav class="navbar navbar-expand-lg header-nav">
            <div class="navbar-header">
                <a id="mobile_btn" href="#">
                    <span class="bar-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </a>
                <a href="{{ route('index') }}" class="navbar-brand logo">
                    <img src="{{ asset('frontend/assets/images/logo.svg') }}" class="img-fluid" alt="Logo">
                </a>
                <a href="{{ route('index') }}" class="navbar-brand logo-small">
                    <img src="{{ asset('frontend/assets/images/logo.svg') }}" class="img-fluid" alt="Logo">
                </a>
            </div>
            <div class="main-menu-wrapper">
                <div class="menu-header">
                    <a href="{{ route('index') }}" class="menu-logo">
                        <img src="{{ asset('frontend/assets/images/logo.svg') }}" class="img-fluid" alt="Logo">
                    </a>
                    <a id="menu_close" class="menu-close" href="#"> <i class="fas fa-times"></i></a>
                </div>
                <ul class="main-nav navbar-nav" id="scroll-nav">
                    <li class="nav-item"><a href="{{ route('index') }}" class="nav-link {{ getActiveLink('index') }}">Home</a></li>
                    <li class="nav-item"><a href="{{ route('specialities') }}" class="nav-link {{ getActiveLink('specialities') }}">Specialities</a></li>
                    <li class="nav-item"><a href="{{ route('doctors') }}" class="nav-link">Doctors</a></li>
                    <li class="nav-item"><a href="blogs.html" class="nav-link">Blogs</a></li>
                    <li class="nav-item"><a href="testimonials.html" class="nav-link">Testimonials</a></li>
                    <li class="nav-item"><a href="faq.html" class="nav-link">FAQ</a></li>
                    <li class="nav-item border-0"><a href="contact-us.html" class="nav-link">Contact Us</a></li>
                </ul>
                <div class="nav d-lg-none mt-auto mb-0 position-fixed bottom-0 w-100 p-3">
                    <div class="w-100">
                        <a href="{{ route('signin') }}"
                            class="btn btn-primary d-flex align-items-center justify-content-center mb-2"><i
                                class="ti ti-lock me-1"></i>Sign In</a>
                        <a href="{{ route('signup') }}"
                            class="btn btn-dark d-flex align-items-center justify-content-center"><i
                                class="ti ti-users me-1"></i>Sign Up</a>
                    </div>
                </div>
            </div>
            <div class="nav header-navbar-rht">
                <a href="{{ route('signin') }}" class="btn btn-primary d-flex align-items-center me-2"><i
                        class="ti ti-lock me-1"></i>Sign In</a>
                <a href="{{ route('signup') }}" class="btn btn-dark d-flex align-items-center"><i
                        class="ti ti-users me-1"></i>Sign Up</a>
            </div>
        </nav>
    </div>
</header>
<!-- Header end -->
