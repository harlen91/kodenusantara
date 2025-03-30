<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.layout.header')
</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
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
            <a href="index.html" class="brand-logo">
                <img class="logo-abbr" src="{{ asset('assets/img/logo EKN POLOS removebg.png') }}" alt="">
                <img class="logo-compact" src="{{ asset('backend/images/teks EKN.png') }}" alt="">
                <img class="brand-title" src="{{ asset('backend/images/teks_ekn_putih-removebg-preview.png') }}"
                    style="height: 30px; width:150px;" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>

        @include('admin.layout.navigasi')

        @include('admin.layout.sidebar')

        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">


                @yield('content')
            </div>
        </div>
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="#" target="_blank">Quixkit</a> 2019</p>
                <p>Distributed by <a href="https://themewagon.com/" target="_blank">Themewagon</a></p>
            </div>
        </div>
    </div>
    @include('admin.layout.bottom')
</body>

</html>
