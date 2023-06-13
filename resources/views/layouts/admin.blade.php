
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="admin, dashboard" />
    <meta name="author" content="DexignZone" />
    <meta name="robots" content="index, follow" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Dompet : Payment Admin Template" />
    <meta property="og:title" content="Dompet : Payment Admin Template" />
    <meta property="og:description" content="Dompet : Payment Admin Template" />
    <meta property="og:image" content="social-image.png" />
    <meta name="format-detection" content="telephone=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- PAGE TITLE HERE -->
    <title>Admin Dashboard | @yield('title')</title>

    <!-- FAVICONS ICON -->
    @include('backend.partials.css')
    @yield('css')
</head>
<body>

<!--*******************
    Preloader start
********************-->
<div id="app">
    <div id="preloader">
        <div class="waviy">
            <span style="--i:1">C</span>
            <span style="--i:2">a</span>
            <span style="--i:3">s</span>
            <span style="--i:4">h</span>
            <span style="--i:5">a</span>
            <span style="--i:6">k</span>
            <span style="--i:8">.</span>
            <span style="--i:9">.</span>
            <span style="--i:10">.</span>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="" class="brand-logo">
                <img src="{{asset('website/img/logo1.png')}}" alt="">
            </a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->


        <!--**********************************
            Header start
        ***********************************-->
    @include('backend.partials.header')
    <!--**********************************
        Header end ti-comment-alt
    ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
    @include('backend.partials.sidebar')
    <!--**********************************
        Sidebar end
    ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
            @yield('admin')
        </div>
        <!--**********************************
            Content body end
        ***********************************-->



        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">

            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="https://tacticjo.com/" target="_blank">Tactic</a> 2022</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->




    </div>
</div>
<!--**********************************
    Main wrapper end
***********************************-->

<!--**********************************
    Scripts
***********************************-->
<!-- Required vendors -->
@include('backend.partials.js')
@stack('js')
</body>

</html>
