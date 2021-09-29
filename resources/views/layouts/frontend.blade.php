<!DOCTYPE html>
<!--[if lt IE 9 ]><html class="no-js oldie" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>

    <!--- basic page needs
   ================================================== -->

    <meta charset="utf-8">
    <title>SIG Lahan Sanggau</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
   ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
   ================================================== -->
    <link rel="stylesheet" href="{{ asset('dazzle/css/base.css') }}">
    <link rel="stylesheet" href="{{ asset('dazzle/css/vendor.css') }}">
    <link rel="stylesheet" href="{{ asset('dazzle/css/main.css') }}">
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> --}}

    <!-- script
   ================================================== -->
    <script src="{{ asset('dazzle/js/modernizr.js') }}"></script>
    <script src="{{ asset('dazzle/js/pace.min.js') }}"></script>

    <!-- favicons
 ================================================== -->
    <link href={{ asset('assets/images/sanggau.png') }} rel="shortcut icon">
    <link rel="icon" href="{{ asset('dazzle/favicon.ico') }}" type="image/x-icon">

    {{-- Leafletjs --}}
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
        integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
        crossorigin="">
    </script>
    <style>
        /* Style The Dropdown Button */
        .dropbtn {
            background-color: #4CAF50;
            color: white;
            padding: 2px, 2px, 2px, 2px;
            font-size: 13px;
            border: none;
            cursor: pointer;
        }

        /* The container <div> - needed to position the dropdown content */
        .dropdown {
            position: relative;
            display: inline-block;
        }

        /* Dropdown Content (Hidden by Default) */
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 200px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        /* Links inside the dropdown */
        .dropdown-content a {
            color: black;
            padding: 0px 5px;
            text-decoration: none;
            display: block;
        }

        /* Change color of dropdown links on hover */
        .dropdown-content a:hover {
            background-color: #f1f1f1
        }

        /* Show the dropdown menu on hover */
        .dropdown:hover .dropdown-content {
            display: block;
        }

        /* Change the background color of the dropdown button when the dropdown content is shown */
        .dropdown:hover .dropbtn {
            background-color: #3e8e41;
        }

        * {
            box-sizing: border-box;
        }

        input[type=text],
        select,
        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
        }

        label {
            padding: 12px 12px 12px 0;
            display: inline-block;
        }

        input[type=submit] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        .container {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }

        .col-25 {
            float: left;
            width: 25%;
            margin-top: 6px;
        }

        .col-75 {
            float: left;
            width: 75%;
            margin-top: 6px;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {

            .col-25,
            .col-75,
            input[type=submit] {
                width: 100%;
                margin-top: 0;
            }
        }

    </style>
    @yield('header')
</head>

<body id="top">

    <!-- header 
   ================================================== -->
    <header id="header" class="row">

        <div class="header-logo">
            <a href="#">SIG LAHAN SANGGAU</a>
        </div>

        <nav id="header-nav-wrap">
            <ul class="header-main-nav">
                <li class="current"><a class="smoothscroll" href="#home" title="home">Beranda</a></li>
                <li>
                    <div class="dropdown">
                        <button class="dropbtn" type="button">Pemetaan &#9660;</button>
                        <div class="dropdown-content">
                            <a href="{{ url('/pemetaan_komoditi') }}" style="color: black;">Komoditi Panen</a>
                            <a href="{{ url('/pemetaan_potensi') }}" style="color: black">Potensi Lahan Pertanian</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="dropdown">
                        <button class="dropbtn" type="button">Grafik &#9660;</button>
                        <div class="dropdown-content">
                            @foreach ($data as $komoditi)
                                <a href="#" style="color: black;">{{ $komoditi->nama_komoditi }}</a>
                            @endforeach
                        </div>
                    </div>
                </li>
                <li><a class="smoothscroll" href="#about" title="about">Tentang</a></li>
                <li><a class="smoothscroll" href="#download" title="download">Informasi</a></li>
            </ul>

            {{-- <a href="{{ url('/login') }}" title="sign-up" class="button button-primary cta">Login</a> --}}
        </nav>

        <a class="header-menu-toggle" href="#"><span>Menu</span></a>

    </header> <!-- /header -->


    <!-- home
   ================================================== -->
    <section id="home" data-parallax="scroll" data-image-src="{{ asset('assets/images/sawah1.jpg') }}"
        data-natural-width=3000 data-natural-height=2000>

        <div class="overlay"></div>
        <div class="home-content">

            <div class="row contents">
                <div class="home-content-left">

                    <h1 data-aos="fade-up" style="margin-top: -400px">
                        @yield('heading')
                    </h1>

                </div>

            </div>

        </div> <!-- end home-content -->

        <!-- end home-social-list -->

        <div class="home-scrolldown">
            <a href="#about" class="scroll-icon smoothscroll">
                <span>Scroll Down</span>
                <i class="icon-arrow-right" aria-hidden="true"></i>
            </a>
        </div>

    </section> <!-- end home -->


    <!-- about
    ================================================== -->
    <section id="about">

        <div class="row about-intro">

            @yield('content')

        </div>

    </section> <!-- end about -->

    <!-- footer
    ================================================== -->
    <footer>

        <div class="footer-main">
            <div class="row">

                <div class="col-three md-1-3 tab-full footer-info">

                    <div class="footer-logo"></div>

                    <p>
                        Sistem Informasi Geografis pemetaan lahan dan komoditi hasil panen kabupaten Sanggau
                        merupakan sebuah sistem yang dapat memetakan komoditi hasil panen dan potensi lahan
                        pertanian di setiap kecamatan di kabupaten Sanggau.
                    </p>

                    <ul class="footer-social-list">
                        <li>
                            <a href="#"><i class="fa fa-facebook-square"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </li>
                    </ul>


                </div> <!-- end footer-info -->

                <div class="col-three md-1-3 tab-1-2 mob-full footer-contact">

                    <h4>KONTAK KAMI</h4>

                    <p>
                        Dinas Pertanian Sanggau Jl. Jend. Sudirman, Ilir Kota, Kec.<br>
                        Kapuas, Kabupaten Sanggau, <br>
                        Kalimantan Barat 78516<br>
                    </p>

                    <p>
                        distansanggau@example.com <br>
                        Phone: (0561)710282 <br>

                    </p>

                </div> <!-- end footer-contact -->

                <div class="col-two md-1-3 tab-1-2 mob-full footer-site-links">

                    <h4>Link</h4>

                    <ul class="list-links">
                        <li><a href="#">Beranda</a></li>
                        <li><a href="#">Pemetaan</a></li>
                        <li><a href="#">Grafik</a></li>
                        <li><a href="#">Informasi</a></li>
                        <li><a href="#">Tentang</a></li>
                    </ul>

                </div> <!-- end footer-site-links -->

                <div class="col-four md-1-2 tab-full footer-subscribe">

                    <h4>Kecamatan</h4>

                    <ul class="list-links">
                        @foreach ($data1 as $kecamatan)
                            <li><a href="#">{{ $kecamatan->nama_kecamatan }}</a></li>
                        @endforeach
                    </ul>


                </div> <!-- end footer-subscribe -->

            </div> <!-- /row -->
        </div> <!-- end footer-main -->


        <div class="footer-bottom">

            <div class="row">

                <div class="col-twelve">
                    <div class="copyright">
                        <span>© Copyright Arif 2021.</span>
                        <span>Design by <a href="http://www.styleshout.com/">styleshout</a></span>
                    </div>

                    <div id="go-top">
                        <a class="smoothscroll" title="Back to Top" href="#top"><i class="icon-arrow-up"></i></a>
                    </div>
                </div>

            </div> <!-- end footer-bottom -->

        </div>

    </footer>

    <div id="preloader">
        <div id="loader"></div>
    </div>

    <!-- Java Script
    ================================================== -->
    <script src="{{ asset('dazzle/js/jquery-2.1.3.min.js') }}"></script>
    <script src="{{ asset('dazzle/js/plugins.js') }}"></script>
    <script src="{{ asset('dazzle/js/main.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    @yield('footer')
</body>

</html>
