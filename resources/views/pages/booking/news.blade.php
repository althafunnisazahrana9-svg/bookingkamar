<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Hotel Template">
    <meta name="keywords" content="Hotel, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>News | Hotel Aetheria</title>

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
                            <li><a href="{{ route('booking.services') }}">Services</a></li>
                            <li><a href="{{ route('pesan.welcome') }}">Booking</a></li>
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
    <section class="hero-section set-bg" data-setbg="{{ asset('template2/img/services-bg.jpg') }}">
        <div class="hero-text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>News</h1>
                    </div>
                </div>
                <div class="page-nav">
                    <a href="{{ route('booking.rooms') }}" class="left-nav"><i class="lnr lnr-arrow-left"></i>
                        Rooms</a>
                    <a href="{{ route('booking.contact') }}" class="right-nav">Contact <i
                            class="lnr lnr-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Blog Section Begin -->
    <section class="blog-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 order-2 order-lg-1">
                    <div class="side-bar">
                        <div class="blog-text">

                            <div class="blog-widget">
                                <div class="blog-info">
                                    <img src="{{ asset('images/wisata.jpg') }}" alt="">
                                </div>
                                <h4>Wisata Baru Dekat Hotel Aetheria: Jelajahi Keindahan Alam yang Memukau!.</h4>
                                <span>September 17, 2025</span>
                            </div>
                            <p>Liburan adalah momen yang ditunggu-tunggu banyak orang. Namun, agar liburan berjalan
                                lancar ...</p>
                            <a href="{{ route('news.wisata') }}">Continue Reading <i
                                    class="lnr lnr-arrow-right"></i></a>
                        </div>
                        <div class="recent-post">
                            <h4>Recent Posts</h4>
                            <div class="single-recent-post">
                                <div class="recent-pic">
                                    <img src="{{ asset('template2/img/blog/recent-1.jpg') }}" alt="">
                                </div>
                                <div class="recent-text">
                                    <h5>
                                        <a href="{{ route('news.index') }}">Aetheria: Kemewahan dan Kedamaian dalam
                                            Satu Tempat.</a>
                                    </h5>
                                    <div class="recent-time">
                                        <i class="fa fa-clock-o"></i>
                                        <span>September 17, 2025</span>
                                    </div>
                                </div>
                            </div>
                            <div class="single-recent-post">
                                <div class="recent-pic">
                                    <img src="{{ asset('template2/img/blog/recent-2.jpg') }}" alt="">
                                </div>
                                <div class="recent-text">
                                    <h5>
                                        <a href="{{ route('news.kuliner') }}">Kuliner Istimewa untuk Setiap Momen.</a>
                                    </h5>
                                    <div class="recent-time">
                                        <i class="fa fa-clock-o"></i>
                                        <span>September 17, 2025</span>
                                    </div>
                                </div>
                            </div>
                            <div class="single-recent-post">
                                <div class="recent-pic">
                                    <img src="{{ asset('template2/img/blog/recent-3.jpg') }}" alt="">
                                </div>
                                <div class="recent-text">
                                    <h5>
                                        <a href="{{ route('news.romantisme') }}">Romantisme di Setiap Detil.</a>
                                    </h5>
                                    <div class="recent-time">
                                        <i class="fa fa-clock-o"></i>
                                        <span>September 17, 2025</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tags-item">
                            <h4>Tags</h4>
                            <div class="tag-links">
                                <a href="#">hotel</a>
                                <a href="#">Aetheria</a>
                                <a href="#">StayInStyle</a>
                                <a href="#">DreamStay</a>
                                <a href="#">PerfectGetaway</a>
                                <a href="#">accommodation</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 order-1 order-lg-2">
                    <div class="blog-post">
                        <div class="single-blog-post">
                            <div class="blog-pic">
                                <img src="{{ asset('template2/img/blog/blog-1.jpg') }}" alt="">
                            </div>
                            <div class="blog-text">
                                <h4>Yang Perlu Kamu Tahu Sebelum Berlibur.</h4>
                                <div class="blog-widget">
                                    <div class="blog-info">
                                        <img src="{{ asset('template2/img/clock.png') }}" alt="">
                                        <span>September 17, 2025</span>
                                    </div>
                                </div>
                                <p>Liburan adalah momen yang ditunggu-tunggu banyak orang. Namun, agar liburan berjalan
                                    lancar, ada
                                    beberapa
                                    hal yang perlu diperhatikan sebelum berangkat ...</p>
                                <a href="{{ route('news.holidays') }}">Continue Reading <i
                                        class="lnr lnr-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="single-blog-post">
                            <div class="blog-pic">
                                <img src="{{ asset('template2/img/blog/blog-2.jpg') }}" alt="">
                            </div>
                            <div class="blog-text">
                                <h4>Coffee Shop Baru di HOTEL</h4>
                                <div class="blog-widget">
                                    <div class="blog-info">
                                        <img src="{{ asset('template2/img/clock.png') }}" alt="">
                                        <span>September 17, 2025</span>
                                    </div>
                                </div>
                                <p>Coffee Shop baru di HOTEL menghadirkan tempat yang nyaman untuk bersantai sambil
                                    menikmati kopi premium.
                                    Desain modern dipadukan dengan nuansa hangat akan membuat pengalaman Anda semakin
                                    menyenangkan. ...</p>
                                <a href="{{ route('news.coffeeshop') }}">Continue Reading <i
                                        class="lnr lnr-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="single-blog-post">
                            <div class="blog-pic">
                                <img src="{{ asset('template2/img/blog/blog-3.jpg') }}" alt="">
                            </div>
                            <div class="blog-text">
                                <h4>Peningkatan Fasilitas Telah Dilakukan pada Master Suite HOTEL</h4>
                                <div class="blog-info">
                                    <img src="{{ asset('template2/img/clock.png') }}" alt="">
                                    <span>September 17, 2025</span>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus libero mauris,
                                    bibendum eget sapien ac, ultrices rhoncus ipsum. Donec nec sapien in urna fermentum
                                    ornare. Morbi vel ultrices leo. Sed eu turpis eu arcu vehicula fringilla ut vitae
                                    orci. ...</p>
                                <a href="{{ route('news.master') }}">Continue Reading <i
                                        class="lnr lnr-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- Blog Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-logo">
                        <a href="#"><img src="{{ asset('template2/logo.png') }}" alt=""></a>
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
