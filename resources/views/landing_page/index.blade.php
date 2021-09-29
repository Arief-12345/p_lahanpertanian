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
        crossorigin=""></script>
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

    </style>
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
                            <a href="{{ url('/pemetaan_potensi_lahan') }}" style="color: black">Potensi Lahan Pertanian</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="dropdown">
                        <button class="dropbtn" type="button">Grafik &#9660;</button>
                        <div class="dropdown-content">
                            @foreach ($komoditi as $komoditi)
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

                    {{-- <h3 data-aos="fade-up">Selamat Datang di GIS Lahan Pertanian</h3> --}}

                    <h1 data-aos="fade-up" style="margin-top: -400px">
                        Selamat Datang, <br>GIS Lahan Pertanian
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

            <div class="col-four">
                <h1 class="intro-header" data-aos="fade-up">Tentang Aplikasi Kami</h1>
            </div>
            <div class="col-eight">
                <p class="lead" data-aos="fade-up">
                    Sistem Informasi Geografis pemetaan lahan dan komoditi hasil panen kabupaten Sanggau
                    merupakan sebuah sistem yang dapat memetakan komoditi hasil panen dan potensi lahan
                    pertanian di setiap kecamatan di kabupaten Sanggau.
                </p>
            </div>

        </div>

        <div class="row about-features">

            <div class="features-list block-1-3 block-m-1-2 block-mob-full group">

                <div class="bgrid feature" data-aos="fade-up">

                    <span class="icon"><i class="icon-users"></i></span>

                    <div class="service-content">

                        <h3>Gapoktani</h3>

                        <p>Gapoktani merupakan kepanjangan dari gabyungan kelompok petani yang
                            mempunyai fungsi untuk mengelola lahan pertanian yang ada di wilayah mereka,
                            gapoktani mempunyai 1 orang ketua dan beberapa anggota.
                        </p>

                    </div>

                </div> <!-- /bgrid -->

                <div class="bgrid feature" data-aos="fade-up">

                    <span class="icon"><i class="icon-leaf"></i></span>

                    <div class="service-content">
                        <h3>Komoditi Hasil Panen</h3>

                        <p>Komoditi hasil panen merupakan hasil panen yang berasal lahan pertanian
                            contoh komoditi yang paling umum adalah padi ada juga komoditi yang
                            bernama palawija seperti jagung, ubi, ketela, dan umbi-umbian.
                        </p>


                    </div>

                </div> <!-- /bgrid -->

                <div class="bgrid feature" data-aos="fade-up">

                    <span class="icon"><i class="fa fa-map-o"></i></span>

                    <div class="service-content">
                        <h3>Potensi Lahan Pertanian</h3>

                        <p>Potensi lahan pertanian merupakan peluang yang dimiliki suatu lahan kosong
                            yang dapat diubah menjadi lahan pertanian yang baru, yang dapat menghasilkan
                            komoditi panen.

                        </p>

                    </div>

                </div> <!-- /bgrid -->

            </div> <!-- end features-list -->

        </div> <!-- end about-features -->

    </section> <!-- end about -->


    <!-- pricing
    ================================================== -->
    {{-- <section id="pricing">
        <div class="row pricing-content">

            <div class="col-four pricing-intro">
                <h1 class="intro-header" data-aos="fade-up">Our Pricing Options</h1>

                <p data-aos="fade-up">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                    doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                    architecto beatae vitae dicta sunt explicabo. Sed ut perspiciatis unde omnis iste natus error sit
                    voluptatem accusantium doloremque laudantium.
                </p>
            </div>

            <div class="col-eight pricing-table">
                <div class="row">

                    <div class="col-six plan-wrap">
                        <div class="plan-block" data-aos="fade-up">

                            <div class="plan-top-part">
                                <h3 class="plan-block-title">Lite Plan</h3>
                                <p class="plan-block-price"><sup>$</sup>25</p>
                                <p class="plan-block-per">Per Month</p>
                            </div>

                            <div class="plan-bottom-part">
                                <ul class="plan-block-features">
                                    <li><span>3GB</span> Storage</li>
                                    <li><span>10GB</span> Bandwidth</li>
                                    <li><span>5</span> Databases</li>
                                    <li><span>30</span> Email Accounts</li>
                                </ul>

                                <a class="button button-primary large" href="">Get Started</a>
                            </div>

                        </div>
                    </div> <!-- end plan-wrap -->

                    <div class="col-six plan-wrap">
                        <div class="plan-block primary" data-aos="fade-up">

                            <div class="plan-top-part">
                                <h3 class="plan-block-title">Pro Plan</h3>
                                <p class="plan-block-price"><sup>$</sup>50</p>
                                <p class="plan-block-per">Per Month</p>
                            </div>

                            <div class="plan-bottom-part">
                                <ul class="plan-block-features">
                                    <li><span>5GB</span> Storage</li>
                                    <li><span>20GB</span> Bandwidth</li>
                                    <li><span>15</span> Databases</li>
                                    <li><span>70</span> Email Accounts</li>
                                </ul>

                                <a class="button button-primary large" href="">Get Started</a>
                            </div>

                        </div>
                    </div> <!-- end plan-wrap -->

                </div>
            </div> <!-- end pricing-table -->

        </div> <!-- end pricing-content -->
    </section> <!-- end pricing --> --}}


    <!-- Testimonials Section
    ================================================== -->
    {{-- <section id="testimonials">

        <div class="row">
            <div class="col-twelve">
                <h1 class="intro-header" data-aos="fade-up">What They Say About Our App.</h1>
            </div>
        </div>

        <div class="row owl-wrap">

            <div id="testimonial-slider" data-aos="fade-up">

                <div class="slides owl-carousel">

                    <div>
                        <p>
                            Your work is going to fill a large part of your life, and the only way to be truly satisfied
                            is
                            to do what you believe is great work. And the only way to do great work is to love what you
                            do.
                            If you haven't found it yet, keep looking. Don't settle. As with all matters of the heart,
                            you'll know when you find it.
                        </p>

                        <div class="testimonial-author">
                            <img src="images/avatars/user-02.jpg" alt="Author image">
                            <div class="author-info">
                                Steve Jobs
                                <span class="position">CEO, Apple.</span>
                            </div>
                        </div>
                    </div>

                    <div>
                        <p>
                            This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
                            Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem
                            nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.
                        </p>

                        <div class="testimonial-author">
                            <img src="images/avatars/user-03.jpg" alt="Author image">
                            <div class="author-info">
                                John Doe
                                <span>CEO, ABC Corp.</span>
                            </div>
                        </div>
                    </div>

                </div> <!-- end slides -->

            </div> <!-- end testimonial-slider -->

        </div> <!-- end flex-container -->

    </section> <!-- end testimonials --> --}}


    <!-- download
    ================================================== -->
    <section id="download">

        <div class="row">
            <div class="col-full">
                <h1 class="intro-header" data-aos="fade-up">Peta Dinas Pertanian Sanggau</h1>
                {{-- <div class="row" style=""> --}}
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d510695.599836033!2d110.31108543281248!3d0.12133630000000165!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31fd8e406a07d061%3A0xcebebe31addbe702!2sDinas%20Pertanian%20Sanggau!5e0!3m2!1sid!2sid!4v1632667665714!5m2!1sid!2sid"
                    width="152%" height="500" style="border:0; padding-right: 0px; margin-left: -200px"
                    allowfullscreen="" loading="lazy">
                </iframe>
                {{-- </div> --}}

            </div>
        </div>

    </section> <!-- end download -->


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
                        @foreach ($kecamatan as $kecamatan)
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

</body>

</html>
