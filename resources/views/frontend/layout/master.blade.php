<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Zaman Trade | @yield('page_title')</title>

    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('frontend_assets/common/logo/favicon.png') }}" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Aclonica&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <!-- Vendor CSS Files -->


    <link href="{{ asset('frontend_assets/theme_assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend_assets/theme_assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend_assets/theme_assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend_assets/theme_assets/vendor/bootstrap-icons/bootstrap-icons.css') }}"
        rel="stylesheet">
    <link href="{{ asset('frontend_assets/theme_assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend_assets/theme_assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend_assets/theme_assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend_assets/theme_assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">



    <link href="{{ asset('frontend_assets/theme_assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend_assets/custom_css.css') }}" rel="stylesheet">

    <link href="{{ asset('frontend_assets/client-slider.css') }}" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', 'Roboto';
        }

        .section_title {
            font-family: 'Poppins', 'Roboto';
            font-size: 20px !important;
            padding-bottom: 0px !important;
        }

        .f-18 {
            font-size: 18px
        }
    </style>
    @yield('custom_css')

</head>

<body>

    <!-- ======= Top Bar ======= -->
    @include('frontend.layout.topbar')

    <!-- ======= Header ======= -->
    @include('frontend.layout.header')
    <!-- End Header -->


    @yield('content')
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('frontend.layout.footer')
    <!-- End Footer -->

    <div id="preloader"></div>
    <div style="height: 50px;width:50px;background:#25d366;position: fixed;bottom: 15px;left: 15px;color: white;border-radius: 50%;padding: 3px;z-index:1"
        class="d-flex align-items-center justify-content-center">
        <a target="_blank" href="https://api.whatsapp.com/send?phone=01678590205" style="color:#fff">
            <i class="fa-brands fa-whatsapp fa-xl"></i>
        </a>
    </div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-short"></i>
    </a>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script src="{{ asset('frontend_assets/theme_assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('frontend_assets/theme_assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend_assets/theme_assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('frontend_assets/theme_assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('frontend_assets/theme_assets/vendor/php-email-form/validate.js') }}"></script>


    <script src="{{ asset('frontend_assets/theme_assets/js/main.js') }}"></script>

    @yield('custom_js')

</body>

</html>
