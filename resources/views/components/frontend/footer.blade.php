<!-- footer start -->
<footer class="footer position-relative bg-dark">
    <div class="footer-top">
        <img src="{{ asset('frontend/assets/images/bg-footer-01.svg') }}" alt="img"
            class="footer-bg-01 position-absolute d-lg-inline-flex d-none">
        <img src="{{ asset('frontend/assets/images/bg-footer-02.svg') }}" alt="img"
            class="footer-bg-02 position-absolute d-lg-inline-flex d-none">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6 footer-links mb-4">
                    <h6 class="text-white pb-20 mb-20 position-relative">Contact Info</h6>
                    <div class="mb-40">
                        <a href="{{ route('index') }}"><img src="{{ asset('frontend/assets/images/logo-white.svg') }}"
                                alt="img"></a>
                    </div>
                    <ul>
                        <li class="mb-4 text-white"><span
                                class="p-2 d-inline-flex align-items-center bg-white rounded-2 text-gray-9 me-2"><i
                                    class="ti ti-map-pin-up"></i></span>2281 Valley, Eagleville, 19403</li>
                        <li class="mb-4 text-white">
                            <span class="p-2 d-inline-flex align-items-center bg-white rounded-2 text-gray-9 me-2"><i
                                    class="ti ti-phone"></i>
                            </span>
                            <a href="tel:+8801991947893">+880 1991947893</a>
                        </li>
                        <li class="text-white mb-0">
                            <span class="p-2 d-inline-flex align-items-center bg-white rounded-2 text-gray-9 me-2"><i
                                    class="ti ti-mail"></i>
                            </span>
                            <a href="mailto:mahmudulabedinctg@gmail.com">info@example.com</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-sm-6 footer-links mb-4">
                    <h6 class="text-white pb-20 mb-20 position-relative">Explore Pages</h6>
                    <ul>
                        <li class="d-flex align-items-center"><i
                                class="ti ti-circle-filled fs-8 text-secondary me-2"></i><a href="{{ route('index') }}">Home</a>
                        </li>
                        <li class="d-flex align-items-center"><i
                                class="ti ti-circle-filled fs-8 text-secondary me-2"></i><a
                                href="{{ route('specialities') }}">Specialities</a></li>
                        <li class="d-flex align-items-center"><i
                                class="ti ti-circle-filled fs-8 text-secondary me-2"></i><a
                                href="{{ route('doctors') }}">Doctors</a></li>
                        <li class="d-flex align-items-center"><i
                                class="ti ti-circle-filled fs-8 text-secondary me-2"></i><a
                                href="services.html">Services</a></li>
                        <li class="d-flex align-items-center"><i
                                class="ti ti-circle-filled fs-8 text-secondary me-2"></i><a href="blogs.html">Blogs</a>
                        </li>
                        <li class="mb-0 d-flex align-items-center"><i
                                class="ti ti-circle-filled fs-8 text-secondary me-2"></i><a
                                href="contact-us.html">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-sm-6 footer-links mb-4">
                    <h6 class="text-white pb-20 mb-20 position-relative">Useful Links</h6>
                    <ul>
                        <li class="d-flex align-items-center"><i
                                class="ti ti-circle-filled fs-8 text-secondary me-2"></i><a
                                href="terms-and-conditions.html">Terms & Conditions</a></li>
                        <li class="d-flex align-items-center"><i
                                class="ti ti-circle-filled fs-8 text-secondary me-2"></i><a
                                href="privacy-policy.html">Privacy Policy</a></li>
                        <li class="d-flex align-items-center"><i
                                class="ti ti-circle-filled fs-8 text-secondary me-2"></i><a
                                href="refund-policy.html">Refund Policy</a></li>
                        <li class="d-flex align-items-center"><i
                                class="ti ti-circle-filled fs-8 text-secondary me-2"></i><a
                                href="testimonials.html">Testimonials</a></li>
                        <li class="d-flex align-items-center"><i
                                class="ti ti-circle-filled fs-8 text-secondary me-2"></i><a href="faq.html">FAQ</a></li>
                        <li class="mb-0 d-flex align-items-center"><i
                                class="ti ti-circle-filled fs-8 text-secondary me-2"></i><a
                                href="javascript:void(0);">Dashboard</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-sm-6 mb-4 subscribe">
                    <h6 class="text-white pb-20 mb-20 position-relative">Subscribe For Newsletter</h6>
                    <form>
                        <label class="form-label text-white">Enter Email</label>
                        <input class="form-control mb-2" type="email">
                        <button
                            class="btn btn-primary w-100 d-inline-flex align-items-center justify-content-center">Subscribe<i
                                class="ti ti-chevron-right ms-1"></i></button>
                    </form>
                    <p class="text-white mb-2">Accepted Payment Method</p>
                    <div class="d-flex align-items-center">
                        <div class="me-3">
                            <img src="{{ asset('frontend/assets/images/stripe.svg') }}" alt="img">
                        </div>
                        <div class="me-3">
                            <img src="{{ asset('frontend/assets/images/visa-logo.svg') }}" alt="img">
                        </div>
                        <div class="me-3">
                            <img src="{{ asset('frontend/assets/images/paypal.svg') }}" alt="img">
                        </div>
                        <div>
                            <img src="{{ asset('frontend/assets/images/mastercard.svg') }}" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom bg-dark">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="copy-right">
                        <a href="https://github.com/mahmudulabedinctg/" target="_blank" class="text-white"
                            rel="noopener noreferrer">
                            Copyright © 2026 Mahmudul Abedin
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="social-icons">
                        <a href="javascript:void(0);" class="me-2 rounded-circle"><i
                                class="ti ti-brand-instagram"></i></a>
                        <a href="javascript:void(0);" class="me-2 rounded-circle"><i class="ti ti-brand-x"></i></a>
                        <a href="javascript:void(0);" class="me-2 rounded-circle"><i
                                class="ti ti-brand-facebook"></i></a>
                        <a href="javascript:void(0);" class="rounded-circle"><i class="ti ti-brand-linkedin"></i></a>
                        <a href="javascript:void(0);" class="rounded-circle"><i class="ti ti-brand-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer end -->

<div class="back-to-top">
    <a class="back-to-top-icon align-items-center justify-content-center d-flex" href="#top"><i class="ti ti-upload"
            aria-hidden="true"></i></a>
</div>
