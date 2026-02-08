<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')Hospital & Diagnostic Centre</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Mahmudul Abedin">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('frontend/assets/images/favicon.png') }}">

    <!-- Apple Icon -->
    <link rel="apple-touch-icon" href="{{ asset('frontend/assets/images/apple-icon.png') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">

    <!-- Tabler Icon CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/tabler-icons.min.css') }}">

    <!-- Simplebar CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/simplebar.min.css') }}">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/all.min.css') }}">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/sign/style.css') }}" id="app-style">
</head>

<body>

    <!-- Begin Wrapper -->
    <div class="main-wrapper auth-bg position-relative overflow-hidden">

        <!-- Start Content -->
        <div class="container-fuild position-relative z-1">
            <div class="w-100 overflow-hidden position-relative flex-wrap d-block vh-100 bg-white">
                <!-- start row-->
                <div class="row">
                    <div class="col-lg-6 p-0">
                        <div
                            class="login-backgrounds login-covers bg-primary d-lg-flex align-items-center justify-content-center d-none flex-wrap p-4 position-relative h-100 z-0">
                            <div class="authentication-card w-100">
                                <div class="authen-overlay-item w-100">
                                    <div class="authen-head text-center">
                                        <h1 class="text-white fs-32 fw-bold mb-2">Seamless healthcare access <br> with
                                            smart, modern clinic</h1>
                                        <p class="text-light fw-normal text-light"> Experience efficient, secure, and
                                            user-friendly healthcare management designed for modern clinics and growing
                                            practices. </p>
                                    </div>
                                    <div class="mt-4 mx-auto authen-overlay-img">
                                        <img src="{{ asset('frontend/assets/images/cover-imgs-1.png') }}" alt="Img">
                                    </div>
                                </div>
                            </div>
                            <img src="{{ asset('frontend/assets/images/cover-imgs-2.png') }}" alt="cover-imgs-2"
                                class="img-fluid cover-img">
                        </div>
                    </div> <!-- end row-->

                    @yield('form')
                </div>
                <!-- end row-->

            </div>
        </div>
        <!-- End Content -->

    </div>
    <!-- End Wrapper -->


    <!-- jQuery -->
    <script src="{{ asset('frontend/assets/js/jquery-3.7.1.min.js') }}"
        type="text/javascript"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js') }}"
        type="text/javascript"></script>

    <!-- Main JS -->
    <script src="{{ asset('frontend/assets/js/sign/script.js') }}"
        type="text/javascript"></script>

    <script src="{{ asset('frontend/assets/js/rocket-loader.min.js') }}" data-cf-settings="eb22a49f1abb45de6d974f74-|49"
        defer=""></script>

</body>

</html>
