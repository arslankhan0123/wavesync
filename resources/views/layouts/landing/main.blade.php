<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Wavesync</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="{{ asset('landingPage/assets/img/logo/logo5.png') }}" rel="icon">
    <link href="{{ asset('landingPage/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('landingPage/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('landingPage/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('landingPage/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('landingPage/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('landingPage/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('landingPage/assets/css/main.css') }}" rel="stylesheet">

    <style>
        .header .logo img {
            width: 150px;
            max-height: 90px;
        }

        .footer .footer-about .logo img {
            width: 150px;
            max-height: 90px;
        }

        .img-fluid-our-story {
            width: 100% !important;
            height: 700px !important;
        }

        i {
            color: white !important;
            font-size: 20px;
        }

        a:hover {
            color: white !important;
        }
    </style>
    <!-- =======================================================
  * Template Name: Instant
  * Template URL: https://bootstrapmade.com/newtemplate-bootstrap-website-template/
  * Updated: Jun 11 2025 with Bootstrap v5.3.6
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">
    @include('layouts.landing.header')
    <main class="main">
        @yield('content')
    </main>

    @include('layouts.landing.footer')

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('landingPage/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('landingPage/assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('landingPage/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('landingPage/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('landingPage/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('landingPage/assets/vendor/typed.js/typed.umd.js') }}"></script>
    <script src="{{ asset('landingPage/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('landingPage/assets/js/main.js') }}"></script>

</body>

</html>