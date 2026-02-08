@extends('layouts.signcover')

@section('title', 'Sign Up - ')

@section('form')
    <div class="col-lg-6 col-md-12 col-sm-12">
        <div class="row justify-content-center align-items-center overflow-auto flex-wrap vh-100 py-4">
            <div class="col-md-8 mx-auto">
                <form action="" class="d-flex justify-content-center align-items-center">
                    <div class="d-flex flex-column justify-content-lg-center p-4 p-lg-0 pb-0 flex-fill">
                        <div class=" mx-auto mb-4 text-center">
                            <a href="{{ route('index') }}"><img src="{{ asset('frontend/assets/images/logo.svg') }}"
                                    class="img-fluid" alt="Logo"></a>
                        </div>
                        <div class="card border-1 p-lg-3 shadow-md rounded-3">
                            <div class="card-body">
                                <div class="text-center mb-3">
                                    <h5 class="mb-1 fs-20 fw-bold">Register</h5>
                                    <p class="mb-0">Please enter your details to create account</p>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Full Name</label>
                                    <div class="input-group">
                                        <span class="input-group-text border-end-0 bg-white">
                                            <i class="ti ti-user fs-14 text-dark"></i>
                                        </span>
                                        <input type="text" value="" class="form-control border-start-0 ps-0"
                                            placeholder="Enter Name">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Email Address</label>
                                    <div class="input-group">
                                        <span class="input-group-text border-end-0 bg-white">
                                            <i class="ti ti-mail fs-14 text-dark"></i>
                                        </span>
                                        <input type="text" value="" class="form-control border-start-0 ps-0"
                                            placeholder="Enter Email Address">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Password</label>
                                    <div class="position-relative">
                                        <div class="pass-group input-group position-relative border rounded">
                                            <span class="input-group-text bg-white border-0">
                                                <i class="ti ti-lock text-dark fs-14"></i>
                                            </span>
                                            <input type="password" class="pass-input form-control ps-0 border-0"
                                                placeholder="****************">
                                            <span class="input-group-text bg-white border-0 cursor-pointer">
                                                <i class="ti toggle-password ti-eye-off text-dark fs-14"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Confirm Password</label>
                                    <div class="position-relative">
                                        <div class="pass-group input-group position-relative border rounded">
                                            <span class="input-group-text bg-white border-0">
                                                <i class="ti ti-lock text-dark fs-14"></i>
                                            </span>
                                            <input type="password" class="pass-inputs form-control ps-0 border-0"
                                                placeholder="****************">
                                            <span class="input-group-text bg-white border-0 cursor-pointer">
                                                <i class="ti toggle-passwords ti-eye-off text-dark fs-14"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <div class="d-flex align-items-center">
                                        <div class="form-check form-check-md mb-0">
                                            <input class="form-check-input" id="remember_me" type="checkbox">
                                            <label for="remember_me" class="form-check-label mt-0 text-dark">I agree to the
                                                <a href="terms-and-conditions.html"
                                                    class="text-decoration-underline text-primary">
                                                    Terms of Service</a> & <a href="privacy-policy.html"
                                                    class="text-decoration-underline text-primary">Privacy
                                                    Policy </a></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <button type="submit" class="btn bg-primary text-white w-100">Register</button>
                                </div>
                                <div class="login-or position-relative mb-3">
                                    <span class="span-or">OR</span>
                                </div>
                                <div class="mb-3">
                                    <div class="d-flex align-items-center justify-content-center flex-wrap">
                                        <div class="text-center me-2 flex-fill">
                                            <a href="javascript:void(0);"
                                                class="br-10 p-1 btn btn-outline-light border d-flex align-items-center justify-content-center">
                                                <img class="img-fluid m-1"
                                                    src="{{ asset('frontend/assets/images/facebook-logo.svg') }}"
                                                    alt="Facebook">
                                            </a>
                                        </div>
                                        <div class="text-center me-2 flex-fill">
                                            <a href="javascript:void(0);"
                                                class="br-10 p-1 btn btn-outline-light border d-flex align-items-center justify-content-center">
                                                <img class="img-fluid m-1"
                                                    src="{{ asset('frontend/assets/images/google-logo.svg') }}"
                                                    alt="Google">
                                            </a>
                                        </div>
                                        <div class="text-center me-2 flex-fill">
                                            <a href="javascript:void(0);"
                                                class="br-10 p-1 btn btn-outline-light border d-flex align-items-center justify-content-center">
                                                <img class="img-fluid m-1"
                                                    src="{{ asset('frontend/assets/images/apple-logo.svg') }}" alt="apple">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <h6 class="fw-normal fs-14 text-dark mb-0">Already have an account
                                        yet?
                                        <a href="{{ route('signin') }}" class="hover-a"> Login</a>
                                    </h6>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div>
                </form>
                <p class="fs-14 text-dark text-center mt-4">
                    <a href="https://github.com/mahmudulabedinctg/" target="_blank" rel="noopener noreferrer">
                        Copyright © 2026 - Mahmudul Abedin
                    </a>
                </p>
            </div> <!-- end row-->
        </div>

    </div>
@endsection
