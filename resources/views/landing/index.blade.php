<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta Tags -->
    <meta name="description" content="Your description">
    <meta name="author" content="Your name">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:site_name" content="" /> <!-- website name -->
    <meta property="og:site" content="" /> <!-- website link -->
    <meta property="og:title" content="" /> <!-- title shown in the actual shared post -->
    <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
    <meta property="og:type" content="article" />

    <!-- Webpage Title -->
    <title>My Blog</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">

    <link href="{{ asset('Zenith/assets/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('Zenith/assets/css/fontawesome-all.css') }}" rel="stylesheet">
    <link href="{{ asset('Zenith/assets/css/swiper.css') }}" rel="stylesheet">
    <link href="{{ asset('Zenith/assets/css/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('Zenith/assets/css/styles.css') }}" rel="stylesheet">

    <!-- Favicon  -->
    <link rel="icon" href="{{ asset('Zenith/assets/images/favicon.png') }}">
</head>

<body data-spy="scroll" data-target=".fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark">
        <div class="container">

            <!-- Text Logo - Use this if you don't have a graphic logo -->
            <a class="navbar-brand logo-text page-scroll" href="#">My Blog</a>

            <!-- Image Logo -->
            {{-- <a class="navbar-brand logo-image" href="index.html"><img
                    src="{{ asset('Zenith/assets/images/logo.svg') }}" alt="alternative"></a> --}}

            <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#services">SERVICES <span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#details">DETAILS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#contact">CONTACT</a>
                    </li>
                    @if (Route::has('login'))

                        @auth

                            <li class="nav-item">
                                <a class="nav-link page-scroll" href="{{ url('/home') }}">HOME</a>
                            </li>
                        @else

                            <li class="nav-item">
                                <a class="nav-link page-scroll" href="{{ route('login') }}">LOGIN</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link page-scroll" href="{{ route('register') }}">SIGN UP</a>
                                </li>
                            @endif
                        @endauth

                    @endif


                </ul>
            </div> <!-- end of navbar-collapse -->
        </div> <!-- end of container -->
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->


    <!-- Header -->
    @include('landing.header')
    <!-- end of header -->


    <!-- Services -->
    @include('landing.services')
    <!-- end of services -->


    <!-- Details -->
    @include('landing.details')
    <!-- end of details  -->


    <!-- Contact -->
    @include('landing.contact')
    <!-- end of contact -->


    <!-- Copyright -->
    @include('layouts.copyright')
    <!-- end of copyright -->


    <!-- Scripts -->
    <script src="{{ asset('Zenith/assets/js/jquery.min.js') }}"></script>
    <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="{{ asset('Zenith/assets/js/bootstrap.min.js') }}"></script> <!-- Bootstrap framework -->
    <script src="{{ asset('Zenith/assets/js/jquery.easing.min.js') }}"></script>
    <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="{{ asset('Zenith/assets/js/swiper.min.js') }}"></script> <!-- Swiper for image and text sliders -->
    <script src="{{ asset('Zenith/assets/js/jquery.magnific-popup.js') }}"></script>
    <!-- Magnific Popup for lightboxes -->
    <script src="{{ asset('Zenith/assets/js/morphext.min.js') }}"></script>
    <!-- Morphtext rotating text in the header -->
    <script src="{{ asset('Zenith/assets/js/scripts.js') }}"></script> <!-- Custom scripts -->
</body>

</html>
