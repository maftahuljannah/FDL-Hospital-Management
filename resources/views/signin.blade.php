@extends('layouts.signcover')

@section('title', 'Sign In - ')

@section('form')
    <div class="col-lg-6 col-md-12 col-sm-12">
        <div class="row justify-content-center align-items-center overflow-auto flex-wrap vh-100">
            <div class="col-md-8 mx-auto">
                <form action="" class="d-flex justify-content-center align-items-center">
                    <div class="d-flex flex-column justify-content-lg-center p-4 p-lg-0 pb-0 flex-fill">
                        <div class=" mx-auto mb-4 text-center">
                            <a href="{{ route('index') }}"><img src="{{ asset('frontend/assets/images/logo.svg') }}"
                                    class="img-fluid" alt="Logo"></a>
                        </div>
                        <div class="card border-1 p-lg-3 shadow-md rounded-3 m-0">
                            <div class="card-body">
                                <div class="text-center mb-3">
                                    <h5 class="mb-1 fs-20 fw-bold">Sign In</h5>
                                    <p class="mb-0">Please enter below details to access the dashboard
                                    </p>
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
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <div class="d-flex align-items-center">
                                        <div class="form-check form-check-md mb-0">
                                            <input class="form-check-input" id="remember_me" type="checkbox">
                                            <label for="remember_me" class="form-check-label mt-0 text-dark">Remember
                                                Me</label>
                                        </div>
                                    </div>
                                    <div class="text-end">
                                        <a href="forgot-password-cover.html" class="text-danger">Forgot
                                            Password?</a>
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <button type="submit" class="btn bg-primary text-white w-100">Login</button>
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
                                    <h6 class="fw-normal fs-14 text-dark mb-0">Don’t have an account
                                        yet?
                                        <a href="{{ route('signup') }}" class="hover-a"> Register</a>
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
