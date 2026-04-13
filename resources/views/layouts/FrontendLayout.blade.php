<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')Hospital & Diagnostic Centre</title>
    <meta name="author" content="Mahmudul Abedin">
    <meta name="description" content="Hospital & Diagnostic Centre">
    <meta name="keywords"
        content="Hospital & Diagnostic Centre, hospital management, admin template, dashboard, doctors dashboard, patients dashboard, hospital dashboard, medical dashboard, clinic dashboard, clinic management, medical management">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('frontend/assets/images/favicon.png') }}">

    <!-- Apple Icon -->
    <link rel="apple-touch-icon" href="{{ asset('frontend/assets/images/apple-icon.png') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">

    <!-- Datetimepicker CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap-datetimepicker.min.css') }}">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/all.min.css') }}">

    <!-- Slick CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/slick-theme.css') }}">

    <!-- Aos CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/aos.css') }}">

    <!-- Tabler Icon CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/tabler-icons.min.css') }}">

    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/select2.min.css') }}">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
    @stack('css')

</head>

<body>
    @yield('body')
    <!-- jQuery -->
    <script data-cfasync="false" src="{{ asset('frontend/assets/js/email-decode.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery-3.7.1.min.js') }}"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js') }}"
        type="64ee54b8d26a017d654c3164-text/javascript"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap-scrollspy.js') }}"
        type="64ee54b8d26a017d654c3164-text/javascript"></script>

    <!-- Aos -->
    <script src="{{ asset('frontend/assets/js/aos.js') }}" type="64ee54b8d26a017d654c3164-text/javascript"></script>

    <!-- Slick Slider -->
    <script src="{{ asset('frontend/assets/js/slick.js') }}" type="64ee54b8d26a017d654c3164-text/javascript"></script>
    <script src="{{ asset('frontend/assets/js/slick.min.js') }}" type="64ee54b8d26a017d654c3164-text/javascript">
    </script>

    <!-- counterup JS -->
    <script src="{{ asset('frontend/assets/js/jquery.waypoints.js') }}" type="64ee54b8d26a017d654c3164-text/javascript">
    </script>
    <script src="{{ asset('frontend/assets/js/jquery.counterup.min.js') }}"
        type="64ee54b8d26a017d654c3164-text/javascript"></script>

    <!-- MeanMenu Js -->
    <script src="{{ asset('frontend/assets/js/jquery.meanmenu.min.js') }}"
        type="64ee54b8d26a017d654c3164-text/javascript"></script>

    <!-- Datetimepicker JS -->
    <script src="{{ asset('frontend/assets/js/moment.js') }}" type="64ee54b8d26a017d654c3164-text/javascript"></script>
    <script src="{{ asset('frontend/assets/js/moment.min.js') }}" type="64ee54b8d26a017d654c3164-text/javascript">
    </script>
    <script src="{{ asset('frontend/assets/js/bootstrap-datetimepicker.min.js') }}"
        type="64ee54b8d26a017d654c3164-text/javascript"></script>

    <!-- Select2 JS -->
    <script src="{{ asset('frontend/assets/js/select2.min.js') }}" type="64ee54b8d26a017d654c3164-text/javascript">
    </script>

    <!-- Custom JS -->
    <script src="{{ asset('frontend/assets/js/script.js') }}" type="64ee54b8d26a017d654c3164-text/javascript"></script>
    @stack('js')
    <script src="{{ asset('frontend/assets/js/rocket-loader.min.js') }}" data-cf-settings="64ee54b8d26a017d654c3164-|49"
        defer></script>


</body>

</html>