<!DOCTYPE html>
<!-- saved from url=(0050)https://kohost.themetags.com/index-top-navbar.html -->
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--favicon icon-->
    <link rel="icon" href="assets/img/favicon.png" type="image/png" sizes="16x16">

    <!--title-->
    <title>Sistem Informasi Pembayaran BPP FIKOM UMI</title>

    <!--build:css-->
    <link rel="stylesheet" href="{{asset('homepage_files/assets/css/main.css')}}">
    <!-- endbuild -->
</head>

<body data-new-gr-c-s-check-loaded="14.1026.0" data-gr-ext-installed="">

    <!--preloader start-->
    <div id="preloader" style="display: none;">
        <div class="preloader-wrap">
            <img src="{{asset('homepage_files/logo-color.png')}}" alt="logo" class="img-fluid-logo'">
            <div class="preloader">
                <i>.</i>
                <i>.</i>
                <i>.</i>
            </div>
        </div>
    </div>
    <!--preloader end-->
    <header id="header" class="header-main position-relative">
        <!--main header menu start-->
        <div id="logoAndNav" class="main-header-menu-wrap bg-transparent fixed-top">
            <div class="container">
                <nav class="js-mega-menu navbar navbar-expand-md header-nav hs-menu-initialized hs-menu-horizontal">

                    <!--logo start-->
                    <a class="navbar-brand pt-0" href="/"><img
                            src="{{asset('homepage_files/logo-white.png')}}" alt="logo" class="img-fluid-logo"></a>
                    <!--logo end-->

                    <!--responsive toggle button start-->
                    <button type="button" class="navbar-toggler btn" aria-expanded="false" aria-controls="navBar"
                        data-toggle="collapse" data-target="#navBar">
                        <span id="hamburgerTrigger">
                            <span class="ti-menu"></span>
                        </span>
                    </button>
                    <!--responsive toggle button end-->

                    <!--main menu start-->
                    <div id="navBar" class="collapse navbar-collapse">
                        <ul class="navbar-nav ml-auto main-navbar-nav">

                            <!--about start-->
                            <li class="nav-item hs-has-mega-menu custom-nav-item position-relative"
                                data-position="center">
                                <a id="aboutMegaMenu" class="nav-link custom-nav-link main-link-toggle"
                                    href="JavaScript:Void(0);" aria-haspopup="true" aria-expanded="false">Fakultas</a>

                                <!--about submenu start-->
                                <div class="hs-mega-menu main-sub-menu animated hs-position-center"
                                    style="width: 320px; display: none;" aria-labelledby="aboutMegaMenu">
                                    <!--menu title with subtitle and icon item start-->
                                    <div class="title-with-icon-item">
                                        <a class="title-with-icon-link"
                                            href="https://fikom.umi.ac.id/informasi-akademik/">
                                            <div class="media align-items-center">
                                                <img class="menu-titile-icon" src="{{asset('homepage_files/chat-mobile.svg')}}"
                                                    alt="SVG">
                                                <div class="media-body">
                                                    <span class="u-header__promo-title">Informasi Akademik</span>
                                                    <small class="u-header__promo-text">Informasi Tentang Akademik Fakultas
                                                    </small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!--menu title with subtitle and icon item end-->

                                    <!--menu title with subtitle and icon item start-->
                                    <div class="title-with-icon-item">
                                        <a class="title-with-icon-link"
                                            href="https://fikom.umi.ac.id/jadwal-kegiatan-akademik/">
                                            <div class="media align-items-center">
                                                <img class="menu-titile-icon" src="{{asset('homepage_files/community.svg')}}"
                                                    alt="SVG">
                                                <div class="media-body">
                                                    <span class="u-header__promo-title">Jadwal Kegiatan Akademik</span>
                                                    <small class="u-header__promo-text">Informasi Tentang Jadwal Akademik
                                                    </small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!--menu title with subtitle and icon item end-->

                                    <!--menu title with subtitle and icon item start-->
                                    <div class="title-with-icon-item">
                                        <a class="title-with-icon-link"
                                            href="https://fikom.umi.ac.id/informasi-kkn-ta-2020-2021/">
                                            <div class="media align-items-center">
                                                <img class="menu-titile-icon" src="{{asset('homepage_files/partner.svg')}}"
                                                    alt="SVG">
                                                <div class="media-body">
                                                    <span class="u-header__promo-title">Kuliah Kerja Nyata 2020-2021</span>
                                                    <small class="u-header__promo-text">Informasi Tentang KKN 2020-2021
                                                    </small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!--menu title with subtitle and icon item end-->

                                    <!--menu title with subtitle and icon item start-->
                                    <div class="title-with-icon-item">
                                        <a class="title-with-icon-link"
                                            href="https://fikom.umi.ac.id/profil/rencana-dan-program-kerja-tahunan/">
                                            <div class="media align-items-center">
                                                <img class="menu-titile-icon" src="{{asset('homepage_files/network.svg')}}"
                                                    alt="SVG">
                                                <div class="media-body">
                                                    <span class="u-header__promo-title">Rencana & Program Kerja Mingguan</span>
                                                    <small class="u-header__promo-text">Semua rencana dan program kerja FIKOM
                                                    </small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!--menu title with subtitle and icon item end-->
                                </div>
                                <!--about submenu end-->
                            </li>
                            <!--about end-->

                        @auth
                            <li class="nav-item custom-nav-item">
                                <a class="nav-link custom-nav-link"
                                    href="dashboard">Dashboard</a>
                            </li>
                        @endauth
                        @guest
                            <li class="nav-item custom-nav-item">
                                <a class="nav-link custom-nav-link"
                                    href="login">Login</a>
                            </li>
                        @endguest

                            <!--button start-->
                            <li class="nav-item header-nav-last-item d-flex align-items-center">
                                <a class="btn btn-brand-03 animated-btn"
                                    href="#carimahasiswa">
                                    <span class="fa fa-user pr-2"></span> Cek Tagihan
                                </a>
                            </li>
                            <!--button end-->
                        </ul>
                    </div>
                    <!--main menu end-->
                </nav>
            </div>
        </div>
        <!--main header menu end-->
    </header>
    <!--header section end-->

    <div class="main">

        <!--hero section start-->
        <section class="ptb-100 overflow-hidden hero-equal-height dark-bg">
            <div class="container">
                <div
                    class="row align-items-center justify-content-lg-between justify-content-md-center justify-content-sm-center">
                    <div class="col-md-12 col-lg-6">
                        <div class="hero-slider-content text-white py-5">
                            <div class="headline mb-4">
                                <p class="mb-0"><i class="fas fa-bell rounded-circle mr-2"></i> <span
                                        class="font-weight-bold">Pembayaran</span> Terakhir</p>
                            </div>
                            <h1 class="text-white">Sistem Informasi Pembayaran BPP Mahasiswa FIKOM UMI</h1>
                            <p class="lead">Periksa Pembayaran BPP Mahasiswa FIKOM UMI</p>

                            <div class="action-btns mt-4">
                                <a id="carimahasiswa" href="#carimahasiswa"
                                    class="btn btn-brand-03 btn-lg">Cek Tagihan</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-lg-6">
                        <div class="img-wrap">
                            <img src="{{asset('homepage_files/hero-img-new.svg')}}" alt="hosting" class="img-fluid">
                        </div>
                    </div>
                </div>
                <!--end of row-->
            </div>
            <!--end of container-->
        </section>
        <!--hero section end-->

        <!--domain search promo start-->
        <section class="position-relative zindex-2">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-8 col-12">
                        <div class="domain-search-wrap border gray-light-bg">
                            <h4 class="text-center">Cek Pembayaran Mahasiswa</h4>
                            <form action="mhs" method="GET"
                                class="domain-search-form my-4">
                                @csrf
                                <input type="text" name="nama_mhs" id="domain" class="form-control" onkeyup="this.value = this.value.toUpperCase();"
                                    placeholder="Nama Mahasiswa">

                                <div class="select-group">
                                    <input type="number" name="nim" id="domain" class="form-control"
                                    placeholder="NIM" style="">
                                    <button style="margin: 10px" type="submit" class="btn btn-brand-01">
                                        Cari</button>
                                </div>
                                @if (session()->get('notfound'))
                                    <p style="color : #ff7675" class="text-center">{{session('notfound')}}</p>
                                @endif

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--domain search promo end-->

        <!--application hosting promo start-->
        <section class="appliction-hosting ptb-100 ">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-8">
                        <div class="section-heading text-center mb-5">
                            <h2>Pembayaran Lebih Mudah dicek &amp; dipantau</h2>
                            <p class="lead">Mahasiswa Kini dapat memeriksa Pembayaran BPP dengan instan, serta dari
                                Orang Tua Mahasiswa dapat memantau Pembayaran dari SMS yang diberikan.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="application-hosting-wrap">
                            <ul class="app-list">
                                <li><a href="http://siakad.umi.ac.id/"
                                        class="bg-white shadow text-dark"><img
                                            src="{{asset('homepage_files/logo-umi.png')}}" alt="icon">
                                        <span>Siakad</span></a></li>
                                <li><a href="http://kalam.umi.ac.id/"
                                        class="bg-white shadow text-dark"><img
                                            src="{{asset('homepage_files/logo-umi.png')}}" alt="icon">
                                        <span>Kalam</span></a></li>
                                <li><a href="https://apps.fikom.umi.ac.id/"
                                        class="bg-white shadow text-dark"><img
                                            src="{{asset('homepage_files/logo-umi.png')}}" alt="icon">
                                        <span>Apps FIKOM</span></a></li>
                                <li><a href="https://fikom.umi.ac.id/"
                                        class="bg-white shadow text-dark"><img
                                            src="{{asset('homepage_files/logo-umi.png')}}" alt="icon">
                                        <span>FIKOM UMI</span></a></li>
                                <li><a href="http://mail.google.com/a/umi.ac.id"
                                        class="bg-white shadow text-dark"><img
                                            src="{{asset('homepage_files/logo-umi.png')}}" alt="icon">
                                        <span>WEBMAIL UMI</span></a></li>
                                <li><a href="http://repository.fikom.umi.ac.id/"
                                        class="bg-white shadow text-dark"><img
                                            src="{{asset('homepage_files/logo-umi.png')}}" alt="icon">
                                        <span>REPOSITORY</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--application hosting promo end-->
<!--testimonial and review section start-->
<section class="review-section ptb-100 gray-light-bg">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 col-lg-4">
                <div class="section-heading">
                    <h2>Cara Melakukan Pembayaran</h2>
                    <p>Ikuti Prosedur Berikut Untuk Melakukan Pembayaran Biaya Penyelenggaraan Pendidikan</p>
                    <a href="#" class="btn btn-outline-brand-01 btn-sm">Ibu Murni</a> &nbsp;
                    <a href="#" class="btn btn-outline-brand-01 btn-sm">Ibu Nurmila</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-8">
                <div class="owl-carousel owl-theme client-testimonial-2 dot-bottom-center custom-dot">
                    <div class="item">
                        <div class="border  bg-white p-4 m-3">
                            <div class="review-body">
                                <h5>1. Lakukan Konfirmasi Ke Bagian Keuangan</h5>
                                <p>Mahasiswa menghubungi Bagian Keuangan (Ibu Nurmila/ Ibu Murni) untuk konfirmasi pembayaran BPP.</p>
                            </div>

                        </div>
                    </div>
                    <div class="item">
                        <div class="border  bg-white p-4 m-3">
                            <div class="review-body">
                                <h5>2. Menerima Informasi Pembayaran</h5>
                                <p>Bagian Keuangan memberikan informasi jumlah pembayaran BPP + Tunggakan bila ada, disertai No. Rekening Bank Yayasan</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="border  bg-white p-4 m-3">
                            <div class="review-body">
                                <h5>3. Melakukan Pembayaran Sesuai Prosedur</h5>
                                <p>Pembayaran harus melalui Teller Bank yang telah ditentukan (dapat menggunakan VA bila ada) dengan menambahkan di kolom keterangan pada blanko pembayaran bank : STB, Nama, Fakultas, Jenis Pembayaran</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="border  bg-white p-4 m-3">
                            <div class="review-body">
                                <h5>4. Mengirimkan Bukti Pembayaran</h5>
                                <p>Mahasiswa mengirimkan foto / scan bukti pembayaran ke Bagian Keuangan. Bagian Keuangan mengecek keabsahan Bukti Pembayaran yang telah di scan.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--testimonial and review section end-->
    </div>

    <!--footer section start-->
    <footer class="footer-1 ptb-60 gradient-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-4 mb-4 mb-md-4 mb-sm-4 mb-lg-0">
                    <a href="/" class="navbar-brand mb-2">
                        <img src="{{asset('homepage_files/logo-white.png')}}" alt="logo" class="img-fluid-logo">
                    </a>
                    <br>
                    <p>Fakultas Ilmu Komputer memiliki dua pilihan program studi, yaitu Teknik Informatika dan Sistem Informasi. Kenali lebih dekat mengenai kedua program studi untuk lebih meyakinkan pilihan Anda.</p>
                    <ul class="list-inline social-list-default background-color social-hover-2 mt-2">
                        <li class="list-inline-item"><a class="twitter"
                                href="https://twitter.com/fikomumimksr" target="_blank"><i
                                    class="fab fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a class="youtube"
                                href="https://www.youtube.com/c/KabamaFikomUMI/featured" target="_blank"><i
                                    class="fab fa-youtube"></i></a></li>
                        <li class="list-inline-item"><a class="instagram"
                                href="https://www.instagram.com/fikom.umi/" target="_blank"><i
                                    class="fab fa-instagram"></i></a></li>
                        <li class="list-inline-item"><a class="facebook"
                                href="https://id-id.facebook.com/Fak.Ilmu.Komputer.Umi/" target="_blank"><i
                                    class="fab fa-facebook"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!--end of container-->
    </footer>

    <!--footer bottom copyright start-->
    <div class="footer-bottom py-3 gray-light-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-7">
                    <div class="copyright-wrap small-text">
                        <p class="mb-0">© 2021 - Fakultas Ilmu Komputer Universitas Muslim Indonesia</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--footer bottom copyright end-->
    <!--footer section end-->
    <!--scroll bottom to top button start-->
    <div class="scroll-top scroll-to-target primary-bg text-white" data-target="html">
        <span class="fas fa-hand-point-up"></span>
    </div>
    <!--scroll bottom to top button end-->
    <!--build:js-->
    <script src="{{asset('homepage_files/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('homepage_files/popper.min.js')}}"></script>
    <script src="{{asset('homepage_files/bootstrap.min.js')}}"></script>
    <script src="{{asset('homepage_files/bootstrap-slider.min.js')}}"></script>
    <script src="{{asset('homepage_files/jquery.easing.min.js')}}"></script>
    <script src="{{asset('homepage_files/owl.carousel.min.js')}}"></script>
    <script src="{{asset('homepage_files/countdown.min.js')}}"></script>
    <script src="{{asset('homepage_files/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('homepage_files/jquery.rcounterup.js')}}"></script>
    <script src="{{asset('homepage_files/magnific-popup.min.js')}}"></script>
    <script src="{{asset('homepage_files/validator.min.js')}}"></script>
    <script src="{{asset('homepage_files/hs.megamenu.js')}}"></script>
    <script src="{{asset('homepage_files/app.js')}}"></script>
    <script>
        $(document).on('click', 'a[href^="#"]', function (event) {
    event.preventDefault();

    $('html, body').animate({
        scrollTop: $($.attr(this, 'href')).offset().top
    }, 500);
});
    </script>
    <!--endbuild-->
</body>
<grammarly-desktop-integration data-grammarly-shadow-root="true"></grammarly-desktop-integration>

</html>
