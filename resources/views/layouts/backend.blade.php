<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>@yield('title')</title>
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('Argon/assets/img/brand/favicon.png') }}" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('Argon/assets/vendor/nucleo/css/nucleo.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('Argon/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}"
        type="text/css">
    <!-- Page plugins -->
    <!-- Argon CSS -->
    <link rel="stylesheet" href="{{ asset('Argon/assets/css/argon.css?v=1.2.0') }}" type="text/css">

    <script src="sweetalert2/dist/sweetalert2.all.min.js"></script>
</head>

<body>
    <!-- Sidenav -->
    @include('home.sidemenue')
    <!-- Main content -->
    <div class="main-content" id="panel">
        <!-- Topnav -->
        @include('home.navbar')
        <!-- Header -->
        @include('home.header')
        <!-- Page content -->
        <div class="container-fluid mt-6">
            @yield('content')
            <!-- Footer -->
            @include('home.footer')
        </div>
    </div>
    <!-- Argon Scripts -->
    <!-- Core -->
    <script src="{{ asset('Argon/assets/vendor/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('Argon/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('Argon/assets/vendor/js-cookie/js.cookie.js') }}"></script>
    <script src="{{ asset('Argon/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
    <script src="{{ asset('Argon/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>
    <!-- Optional JS -->
    <script src="{{ asset('Argon/assets/vendor/chart.js/dist/Chart.min.js') }}"></script>
    <script src="{{ asset('Argon/assets/vendor/chart.js/dist/Chart.extension.js') }}"></script>
    <!-- Argon JS -->
    <script src="{{ asset('Argon/assets/js/argon.js?v=1.2.0') }}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>

</html>
