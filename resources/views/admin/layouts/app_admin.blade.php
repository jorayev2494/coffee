<!doctype html>
<html class="no-js" lang="ru">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>{{ $title }}</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- favicon ============================================ -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('admin') }}/img/favicon.ico">

        <!-- Google Fonts ============================================ -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">

        <!-- Bootstrap CSS ============================================ -->
        <link rel="stylesheet" href="{{ asset('admin') }}/css/bootstrap.min.css">

        <!-- Bootstrap CSS ============================================ -->
        <link rel="stylesheet" href="{{ asset('admin') }}/css/font-awesome.min.css">

        <!-- owl.carousel CSS ============================================ -->
        <link rel="stylesheet" href="{{ asset('admin') }}/css/owl.carousel.css">
        <link rel="stylesheet" href="{{ asset('admin') }}/css/owl.theme.css">
        <link rel="stylesheet" href="{{ asset('admin') }}/css/owl.transitions.css">

        <!-- meanmenu CSS ============================================ -->
        <link rel="stylesheet" href="{{ asset('admin') }}/css/meanmenu/meanmenu.min.css">

        <!-- animate CSS ============================================ -->
        <link rel="stylesheet" href="{{ asset('admin') }}/css/animate.css">

        <!-- normalize CSS ============================================ -->
        <link rel="stylesheet" href="{{ asset('admin') }}/css/normalize.css">

        <!-- Range Slider CSS ============================================ -->
        <link rel="stylesheet" href="{{ asset('admin') }}/css/themesaller-forms.css">

        <!-- mCustomScrollbar CSS ============================================ -->
        <link rel="stylesheet" href="{{ asset('admin') }}/css/scrollbar/jquery.mCustomScrollbar.min.css">

        <!-- jvectormap CSS ============================================ -->
        <link rel="stylesheet" href="{{ asset('admin') }}/css/jvectormap/jquery-jvectormap-2.0.3.css">

        <!-- notika icon CSS ============================================ -->
        <link rel="stylesheet" href="{{ asset('admin') }}/css/notika-custom-icon.css">

        <!-- wave CSS ============================================ -->
        <link rel="stylesheet" href="{{ asset('admin') }}/css/wave/waves.min.css">

        <!-- main CSS ============================================ -->
        <link rel="stylesheet" href="{{ asset('admin') }}/css/main.css">

        <!-- cropper CSS ============================================ -->
        <link rel="stylesheet" href="{{ asset('admin') }}/css/cropper/cropper.min.css">

        <!-- style CSS ============================================ -->
        <link rel="stylesheet" href="{{ asset('admin') }}/style.css">

        <!-- responsive CSS ============================================ -->
        <link rel="stylesheet" href="{{ asset('admin') }}/css/responsive.css">

        <!-- animate CSS ============================================ -->
        <link rel="stylesheet" href="{{ asset('admin') }}/css/animate.css">
        <link rel="stylesheet" href="{{ asset('admin') }}/css/animation/animation-custom.css">



        <!-- modernizr JS ============================================ -->
        <script src="{{ asset('admin') }}/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>

    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Start Header Top Area -->
            {{-- Подключение Header --}}
            {{-- @include("admin.includes.header") --}}
        <!-- End Header Top Area -->

        <!-- Mobile Menu start -->
            {{-- Подключение Мобильный Меню --}}
            @include("admin.includes.mobile_menu_start")
        <!-- Mobile Menu end -->

        <!-- Main Menu area start-->
            {{-- Подключение Навигацию сайта --}}
            @include("admin.includes.navigation", $navigations)
        <!-- Main Menu area End-->

        <!-- Start Status area -->
            {{-- Подключение статус странице --}}
            @if (Route::currentRouteName() == "admin.dashboard")
                @include("admin.includes.home_status")
            @else
                @yield("status")
            @endif
        <!-- End Status area-->

        <div class="normal-table-area">
            <div class="container">
                <div class="row">
                    @include("includes.session")
                    {{-- Тело сайта --}}
                    @yield('content')
                </div>
            </div>
        </div>

    </body>

    <!-- jquery
        ============================================ -->
    <script src="{{ asset('admin') }}/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
        ============================================ -->
    <script src="{{ asset('admin') }}/js/bootstrap.min.js"></script>
    <!-- wow JS
        ============================================ -->
    <script src="{{ asset('admin') }}/js/wow.min.js"></script>
    <!-- price-slider JS
        ============================================ -->
    <script src="{{ asset('admin') }}/js/jquery-price-slider.js"></script>
    <!-- owl.carousel JS
        ============================================ -->
    <script src="{{ asset('admin') }}/js/owl.carousel.min.js"></script>
    <!-- scrollUp JS
        ============================================ -->
    <script src="{{ asset('admin') }}/js/jquery.scrollUp.min.js"></script>
    <!-- meanmenu JS
        ============================================ -->
    <script src="{{ asset('admin') }}/js/meanmenu/jquery.meanmenu.js"></script>
    <!-- counterup JS
        ============================================ -->
    <script src="{{ asset('admin') }}/js/counterup/jquery.counterup.min.js"></script>
    <script src="{{ asset('admin') }}/js/counterup/waypoints.min.js"></script>
    <script src="{{ asset('admin') }}/js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
        ============================================ -->
    <script src="{{ asset('admin') }}/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- jvectormap JS
        ============================================ -->
    <script src="{{ asset('admin') }}/js/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="{{ asset('admin') }}/js/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="{{ asset('admin') }}/js/jvectormap/jvectormap-active.js"></script>
    <!-- sparkline JS
        ============================================ -->
    <script src="{{ asset('admin') }}/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="{{ asset('admin') }}/js/sparkline/sparkline-active.js"></script>
    <!-- sparkline JS
        ============================================ -->
    <script src="{{ asset('admin') }}/js/flot/jquery.flot.js"></script>
    <script src="{{ asset('admin') }}/js/flot/jquery.flot.resize.js"></script>
    <script src="{{ asset('admin') }}/js/flot/curvedLines.js"></script>
    <script src="{{ asset('admin') }}/js/flot/flot-active.js"></script>
    <!-- knob JS
        ============================================ -->
    <script src="{{ asset('admin') }}/js/knob/jquery.knob.js"></script>
    <script src="{{ asset('admin') }}/js/knob/jquery.appear.js"></script>
    <script src="{{ asset('admin') }}/js/knob/knob-active.js"></script>
    <!--  wave JS
        ============================================ -->
    <script src="{{ asset('admin') }}/js/wave/waves.min.js"></script>
    <script src="{{ asset('admin') }}/js/wave/wave-active.js"></script>


    <script src="{{ asset('admin') }}/js/jasny-bootstrap.min.js"></script>
    <script src="{{ asset('admin') }}/js/icheck/icheck.min.js"></script>
    <script src="{{ asset('admin') }}/js/icheck/icheck-active.js"></script>


    <!--  todo JS
        ============================================ -->
    <script src="{{ asset('admin') }}/js/todo/jquery.todo.js"></script>
    <!-- plugins JS
        ============================================ -->
    <script src="{{ asset('admin') }}/js/plugins.js"></script>
    <!--  Chat JS
        ============================================ -->
    <script src="{{ asset('admin') }}/js/chat/moment.min.js"></script>
    <script src="{{ asset('admin') }}/js/chat/jquery.chat.js"></script>
    <!-- main JS
        ============================================ -->
    <script src="{{ asset('admin') }}/js/main.js"></script>
    <!-- tawk chat JS
        ============================================ -->
    <script src="{{ asset('admin') }}/js/tawk-chat.js"></script>

    <!-- bootstrap select JS ============================================ -->
    <script src="{{ asset('admin') }}/js/bootstrap-select/bootstrap-select.js"></script>

    <!--  animation JS ============================================ -->
    <script src="{{ asset('admin') }}/js/animation/animation-active.js"></script>

</html>
