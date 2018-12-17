<!DOCTYPE html>
<html lang="ru" class="no-js">
    <head>
        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Favicon-->
        <link rel="shortcut icon" href="{{ asset('coffee') }}/img/fav.png">
        <!-- Author Meta -->
        <meta name="author" content="{{ asset('coffee') }}/codepixer">
        <!-- Meta Description -->
        <meta name="description" content="">
        <!-- Meta Keyword -->
        <meta name="keywords" content="">
        <!-- meta character set -->
        <meta charset="UTF-8">
        <!-- Site Title -->
        <title>Coffee</title>

        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
        <!--
        CSS
        ============================================= -->
        <link rel="stylesheet" href="{{ asset('coffee') }}/css/linearicons.css">
        <link rel="stylesheet" href="{{ asset('coffee') }}/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{ asset('coffee') }}/css/bootstrap.css">
        <link rel="stylesheet" href="{{ asset('coffee') }}/css/magnific-popup.css">
        <link rel="stylesheet" href="{{ asset('coffee') }}/css/nice-select.css">
        <link rel="stylesheet" href="{{ asset('coffee') }}/css/animate.min.css">
        <link rel="stylesheet" href="{{ asset('coffee') }}/css/owl.carousel.css">
        <link rel="stylesheet" href="{{ asset('coffee') }}/css/main.css">

        <style>
            .banner-area {
                background: url( "{{ $header->getBackground() }}" ) center;
                background-size: cover;
            }

            .footer-area {
                color: #fff;
                padding-top: 220px;
                background: url( "{{ $footer->getBackground() }}" ) center;
                background-size: cover;
            }
        </style>

    </head>
    <body>

        <header id="header" id="home">

            {{--  <div class="header-top">
                <div class="container">
                    <div class="row justify-content-end">
                        <div class="col-lg-8 col-sm-4 col-8 header-top-right no-padding">
                            <ul>
                                <li>
                                    Mon-Fri: 8am to 2pm
                                </li>
                                <li>
                                    Sat-Sun: 11am to 4pm
                                </li>
                                <li>
                                    <a href="tel:(012) 6985 236 7512">(012) 6985 236 7512</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>  --}}

            <div class="container">
                <div class="row align-items-center justify-content-between d-flex">

                    <div id="logo">
                        <a href="#home">
                            <img src="{{ asset('coffee') . config('settings.logo') }}" alt="Logo" title="Logo"/>
                        </a>
                    </div>

                    <nav id="nav-menu-container">
                        <ul class="nav-menu">

                            @foreach ($navigates as $navigate)
                                <li class="menu-active">
                                    <a href="#{{ $navigate->slug }}">{{ $navigate->title }}</a>
                                </li>
                            @endforeach

                            {{--  <li>
                                <a href="#blog">Blog</a>
                                </li>

                                <li class="menu-has-children">
                                <a href="">Pages</a>
                                <ul>
                                    <li><a href="generic.html">Generic</a></li>
                                    <li><a href="elements.html">Elements</a></li>
                                </ul>
                            </li>  --}}

                        </ul>
                    </nav><!-- #nav-menu-container -->

                </div>
            </div>

        </header><!-- #header -->

        @yield('content')

        <!-- start footer Area -->
        @include("includes.footer")
        <!-- End footer Area -->

    </body>

    <script src="{{ asset('coffee') }}/js/vendor/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="{{ asset('coffee') }}/js/vendor/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
    <script src="{{ asset('coffee') }}/js/easing.min.js"></script>
    <script src="{{ asset('coffee') }}/js/hoverIntent.js"></script>
    <script src="{{ asset('coffee') }}/js/superfish.min.js"></script>
    <script src="{{ asset('coffee') }}/js/jquery.ajaxchimp.min.js"></script>
    <script src="{{ asset('coffee') }}/js/jquery.magnific-popup.min.js"></script>
    <script src="{{ asset('coffee') }}/js/owl.carousel.min.js"></script>
    <script src="{{ asset('coffee') }}/js/jquery.sticky.js"></script>
    <script src="{{ asset('coffee') }}/js/jquery.nice-select.min.js"></script>
    <script src="{{ asset('coffee') }}/js/parallax.min.js"></script>
    <script src="{{ asset('coffee') }}/js/waypoints.min.js"></script>
    <script src="{{ asset('coffee') }}/js/jquery.counterup.min.js"></script>
    <script src="{{ asset('coffee') }}/js/mail-script.js"></script>
    <script src="{{ asset('coffee') }}/js/main.js"></script>

</html>



