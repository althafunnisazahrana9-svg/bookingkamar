<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Hotel Template">
    <meta name="keywords" content="Hotel, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>contact | Hotel Aetheria</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Taviraj:300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('template2/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('template2/css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('template2/css/flaticon.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('template2/css/linearicons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('template2/css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('template2/css/jquery-ui.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('template2/css/nice-select.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('template2/css/magnific-popup.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('template2/css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('template2/css/style.css') }}" type="text/css">
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('images/logo.png') }}" />
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section other-page">
        <div class="container-fluid">
            <div class="inner-header">
                <div class="logo">
                    <a href="./index.html"><img src="{{ asset('template2/img/logo.png') }}" alt=""></a>
                </div>
                <div class="top-widget">
                    <div class="top-info address">
                        <img src="{{ asset('template2/img/placeholder.png') }}" alt="">
                        <span>Jl. Lembah Aetheria No. 1525, Taman Senja, Kota Seraphine<br />Angeles, CNZ</span>
                    </div>
                    <div class="top-info phone-num">
                        <img src="{{ asset('template2/img/phone.png') }}" alt="">
                        <span>+62 (085)0510-0167</span>
                    </div>
                </div>
                <div class="container">
                    <nav class="main-menu mobile-menu">
                        <ul>
                            <li><a href="{{ route('booking.about') }}">About</a></li>
                            <li><a href="{{ route('pesan.welcome') }}">Booking</a></li>
                            <li><a href="{{ route('booking.index') }}">Daftar Booking</a></li>
                            <li><a href="{{ route('booking.rooms') }}">Rooms</a></li>
                            <li><a href="{{ route('booking.news') }}">News</a></li>
                            <li><a href="{{ route('booking.contact') }}">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Hero Section Begin -->
    <section class="hero-section set-bg" data-setbg="{{ asset('template2/img/contact-bg.jpg') }}">
        <div class="hero-text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Contact</h1>
                    </div>
                </div>
                <div class="page-nav">
                    <a href="{{ route('booking.news') }}" class="left-nav"><i class="lnr lnr-arrow-left"></i> News</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Contact Section Begin -->
    <section class="contact-section spad">
        <div class="container">
            <div class="row align-items-start">
                <!-- Kiri: Contact Information -->
                <div class="col-lg-6">
                    <div class="contact-left">
                        <div class="contact-information">
                            <h2>Contact Information</h2>
                            <ul>
                                <li>
                                    <img src="{{ asset('template2/img/placeholder-copy.png') }}" alt="">
                                    <span>Jl. Lembah Aetheria No. 1525, Taman Senja, Kota Seraphine<br>Angeles,
                                        CNZ</span>
                                </li>
                                <li>
                                    <img src="{{ asset('template2/img/phone-copy.png') }}" alt="">
                                    <span>+62 (885)0510-0167</span>
                                </li>
                                <li>
                                    <img src="{{ asset('template2/img/envelop.png') }}" alt="">
                                    <span>aetheria@mail.com</span>
                                </li>
                                <li>
                                    <img src="{{ asset('template2/img/clock-copy.png') }}" alt="">
                                    <span>Everyday: 10:00 - 22:00</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Kanan: Map -->
                <div class="col-lg-6">
                    <div class="map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d423283.4355676389!2d-118.69193052429003!3d34.02073049434915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c75ddc27da13%3A0xe22fdf6f254608f4!2sLos%20Angeles%2C%20CA%2C%20USA!5e0!3m2!1sen!2sbd!4v1568665689853!5m2!1sen!2sbd"
                            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->


    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-logo">
                        <a href="#"><img src="{{ asset('template2/img/logo.png') }}" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="row pb-50">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget">
                        <h5>Location</h5>
                        <div class="widget-text">
                            <i class="lnr lnr-map-marker"></i>
                            <p>Jl. Lembah Aetheria No. 1525, Taman Senja, Kota Seraphine<br />Angeles, CNZ</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget">
                        <h5>Reception</h5>
                        <div class="widget-text">
                            <i class="lnr lnr-phone-handset"></i>
                            <p>+62 (885)6246-5997</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget">
                        <h5>Shuttle Service</h5>
                        <div class="widget-text">
                            <i class="lnr lnr-phone-handset"></i>
                            <p>+62 (885)7010-0057</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget">
                        <h5>Restaurant</h5>
                        <div class="widget-text">
                            <i class="lnr lnr-phone-handset"></i>
                            <p>+62 (888)2251-2016</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="copyright-text">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script> Hotel Aetheria <i class="fa fa-heart-o" aria-hidden="true"></i> by <a
                        href="https://colorlib.com" target="_blank">CNZ</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="{{ asset('template2/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('template2/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('template2/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('template2/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('template2/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('template2/js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('template2/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('template2/js/main.js') }}"></script>
</body>

</html>
