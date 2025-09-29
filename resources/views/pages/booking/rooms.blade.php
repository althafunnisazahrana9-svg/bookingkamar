<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Hotel Template">
    <meta name="keywords" content="Hotel, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rooms | Hotel Aetheria</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Taviraj:300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">



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
    <section class="hero-section set-bg" data-setbg="{{ asset('template2/img/rooms-bg.jpg') }}">
        <div class="hero-text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Rooms</h1>
                    </div>
                </div>
                <div class="page-nav">
                    <a href="{{ route('pesan.welcome') }}" class="left-nav"><i class="lnr lnr-arrow-left"></i>
                        Booking</a>
                    <a href="{{ route('booking.news') }}" class="right-nav">News <i
                            class="lnr lnr-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Rooms Section Begin -->
    <section class="room-section spad">
        <div class="container">
            <div class="rooms-page-item">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="room-pic-slider owl-carousel">
                            <div class="single-room-pic">
                                <img src="{{ asset('template2/img/room/rooms-1.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="room-text">
                            <div class="room-title">
                                <h2>Emerald</h2>
                                <div class="room-price">
                                    <span>From</span>
                                    <h2>Rp 1.000.000</h2>
                                    <sub>/night</sub>
                                </div>
                            </div>
                            <div class="room-desc">
                                <p>Nikmati kenyamanan penuh di Kamar Emerald, dirancang dengan sentuhan modern dan
                                    elegan.
                                    Dilengkapi Smart TV, Wi-Fi berkecepatan tinggi, AC yang sejuk, serta sarapan lezat
                                    setiap pagi.</p>
                            </div>
                            <div class="room-features">
                                <div class="row">
                                    <div class="col-md-3 col-6 mb-3">
                                        <div class="room-info d-flex flex-column align-items-center">
                                            <i class="bi bi-tv" style="font-size:40px; color:#a0843a;"></i>
                                            <span class="mt-2">Smart TV</span>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-6 mb-3">
                                        <div class="room-info d-flex flex-column align-items-center">
                                            <i class="bi bi-wifi" style="font-size:40px; color:#a0843a;"></i>
                                            <span class="mt-2">High Wi-fi</span>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-6 mb-3">
                                        <div class="room-info d-flex flex-column align-items-center">
                                            <i class="bi bi-snow" style="font-size:40px; color:#a0843a;"></i>
                                            <span class="mt-2">AC</span>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-6 mb-3">
                                        <div class="room-info d-flex flex-column align-items-center">
                                            <i class="bi bi-cup-hot" style="font-size:40px; color:#a0843a;"></i>
                                            <span class="mt-2">Sarapan</span>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="rooms-page-item">
            <div class="row">
                <div class="col-lg-6">
                    <div class="room-pic-slider owl-carousel">
                        <div class="single-room-pic">
                            <img src="{{ asset('template2/img/room/rooms-3.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="room-text">
                        <div class="room-title">
                            <h2>Lavender</h2>
                            <div class="room-price">
                                <span>From</span>
                                <h2>Rp 1.325.000</h2>
                                <sub>/night</sub>
                            </div>
                        </div>
                        <div class="room-desc">
                            <p>Kamar Lavender dirancang untuk menghadirkan suasana hangat dan menenangkan. Nikmati
                                kenyamanan beristirahat dengan fasilitas modern, dilengkapi kopi dan teh pilihan yang
                                dapat Anda seduh sendiri menggunakan ketel listrik pribadi.</p>
                        </div>
                        <div class="room-features">
                            <div class="row">
                                <div class="col-md-3 col-6 mb-3">
                                    <div class="room-info d-flex flex-column align-items-center">
                                        <i class="bi bi-cup-hot" style="font-size:40px; color:#a0843a;"></i>
                                        <span class="mt-2">Kopi</span>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 mb-3">
                                    <div class="room-info d-flex flex-column align-items-center">
                                        <i class="bi bi-cup-hot" style="font-size:40px; color:#a0843a;"></i>
                                        <span class="mt-2">Teh</span>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 mb-3">
                                    <div class="room-info d-flex flex-column align-items-center">
                                        <i class="bi bi-bucket" style="font-size:40px; color:#a0843a;"></i>
                                        <span class="mt-2">Ketel Listrik</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="rooms-page-item">
            <div class="row">
                <div class="col-lg-6">
                    <div class="room-pic-slider owl-carousel">
                        <div class="single-room-pic">
                            <img src="{{ asset('template2/img/room/rooms-4.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="room-text">
                        <div class="room-title">
                            <h2>Sky Blue</h2>
                            <div class="room-price">
                                <span>From</span>
                                <h2>Rp 1.550.000</h2>
                                <sub>/night</sub>
                            </div>
                        </div>
                        <div class="room-desc">
                            <p>Kamar Sky Blue menghadirkan pengalaman menginap modern dengan kenyamanan maksimal.
                                Dilengkapi Smart Mirror yang canggih, pemanas ruangan untuk suasana hangat, serta AC
                                untuk kesejukan sempurna.</p>
                        </div>
                        <div class="room-features">
                            <div class="row">
                                <div class="col-md-3 col-6 mb-3">
                                    <div class="room-info d-flex flex-column align-items-center">
                                        <i class="bi bi-display" style="font-size:40px; color:#a0843a;"></i>
                                        <span class="mt-2">Smart Mirror</span>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 mb-3">
                                    <div class="room-info d-flex flex-column align-items-center">
                                        <i class="bi bi-fire" style="font-size:40px; color:#a0843a;"></i>
                                        <span class="mt-2">Pemanas Ruangan</span>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 mb-3">
                                    <div class="room-info d-flex flex-column align-items-center">
                                        <i class="bi bi-snow" style="font-size:40px; color:#a0843a;"></i>
                                        <span class="mt-2">AC</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="rooms-page-item">
            <div class="row">
                <div class="col-lg-6">
                    <div class="room-pic-slider owl-carousel">
                        <div class="single-room-pic">
                            <img src="{{ asset('template2/img/room/rooms-5.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="room-text">
                        <div class="room-title">
                            <h2>Suite Room</h2>
                            <div class="room-price">
                                <span>From</span>
                                <h2>Rp 2.000.000</h2>
                                <sub>/night</sub>
                            </div>
                        </div>
                        <div class="room-desc">
                            <p>Suite Room adalah puncak kemewahan dan kenyamanan di Hotel Aetheria. Dengan desain luas
                                dan elegan, kamar ini dilengkapi Smart TV, akses Wi-Fi berkecepatan tinggi, AC yang
                                sejuk, serta saluran TV Internasional untuk menemani waktu santai Anda.</p>
                        </div>
                        <div class="room-features">
                            <div class="row">
                                <div class="col-md-3 col-6 mb-3">
                                    <div class="room-info d-flex flex-column align-items-center">
                                        <i class="bi bi-tv" style="font-size:40px; color:#a0843a;"></i>
                                        <span class="mt-2">Smart TV</span>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 mb-3">
                                    <div class="room-info d-flex flex-column align-items-center">
                                        <i class="bi bi-wifi" style="font-size:40px; color:#a0843a;"></i>
                                        <span class="mt-2">High Wi-fi</span>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 mb-3">
                                    <div class="room-info d-flex flex-column align-items-center">
                                        <i class="bi bi-snow" style="font-size:40px; color:#a0843a;"></i>
                                        <span class="mt-2">AC</span>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 mb-3">
                                    <div class="room-info d-flex flex-column align-items-center">
                                        <i class="bi bi-tv-fill" style="font-size:40px; color:#a0843a;"></i>
                                        <span class="mt-2">TV Internasional</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="rooms-page-item">
            <div class="row">
                <div class="col-lg-6">
                    <div class="room-pic-slider owl-carousel">
                        <div class="single-room-pic">
                            <img src="{{ asset('images/family.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="room-text">
                        <div class="room-title">
                            <h2>Family Room</h2>
                            <div class="room-price">
                                <span>From</span>
                                <h2>Rp 1.457.000</h2>
                                <sub>/night</sub>
                            </div>
                        </div>
                        <div class="room-desc">
                            <p>Family Room menghadirkan kenyamanan bagi seluruh keluarga. Dilengkapi balkon pribadi
                                dengan pemandangan indah, suasana menginap terasa lebih hangat dan menyenangkan.
                                Ditambah dengan AC yang sejuk.</p>
                        </div>
                        <div class="room-features">
                            <div class="row">
                                <div class="col-md-3 col-6 mb-3">
                                    <div class="room-info d-flex flex-column align-items-center">
                                        <i class="bi bi-house-door" style="font-size:40px; color:#a0843a;"></i>
                                        <span class="mt-2">Balkon</span>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 mb-3">
                                    <div class="room-info d-flex flex-column align-items-center">
                                        <i class="bi bi-tree" style="font-size:40px; color:#a0843a;"></i>
                                        <span class="mt-2">Pemandangan</span>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 mb-3 px-0">
                                    <div class="room-info d-flex flex-column align-items-center">
                                        <i class="bi bi-snow mx-auto" style="font-size:40px; color:#a0843a;"></i>
                                        <span class="mt-2">AC</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="rooms-page-item">
            <div class="row">
                <div class="col-lg-6">
                    <div class="room-pic-slider owl-carousel">
                        <div class="single-room-pic">
                            <img src="{{ asset('images/couple.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="room-text">
                        <div class="room-title">
                            <h2>Couple Room</h2>
                            <div class="room-price">
                                <span>From</span>
                                <h2>Rp 3.000.000</h2>
                                <sub>/night</sub>
                            </div>
                        </div>
                        <div class="room-desc">
                            <p>Couple Room dirancang khusus untuk menghadirkan suasana romantis dan intim. Dilengkapi
                                dengan ranjang linen yang lembut, speaker untuk menemani momen dengan musik favorit,
                                serta AC yang sejuk.</p>
                        </div>
                        <div class="room-features">
                            <div class="row">
                                <div class="col-md-3 col-6 mb-3">
                                    <div class="room-info d-flex flex-column align-items-center">
                                        <i class="bi bi-grid-3x3-gap-fill" style="font-size:40px; color:#a0843a;"></i>
                                        <span class="mt-2">Ranjang Linen</span>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 mb-3">
                                    <div class="room-info d-flex flex-column align-items-center">
                                        <i class="bi bi-speaker" style="font-size:40px; color:#a0843a;"></i>
                                        <span class="mt-2">Speacker</span>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 mb-3 px-0">
                                    <div class="room-info d-flex flex-column align-items-center">
                                        <i class="bi bi-snow mx-auto" style="font-size:40px; color:#a0843a;"></i>
                                        <span class="mt-2">AC</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="rooms-page-item">
            <div class="row">
                <div class="col-lg-6">
                    <div class="room-pic-slider owl-carousel">
                        <div class="single-room-pic">
                            <img src="{{ asset('images/crystal.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="room-text">
                        <div class="room-title">
                            <h2>Crystal</h2>
                            <div class="room-price">
                                <span>From</span>
                                <h2>Rp 2.755.000</h2>
                                <sub>/night</sub>
                            </div>
                        </div>
                        <div class="room-desc">
                            <p>Crystal Room menghadirkan kombinasi kenyamanan modern dengan sentuhan elegan. Dilengkapi
                                shower praktis, bathtub terpisah untuk relaksasi maksimal, serta AC yang menyejukkan.
                            </p>
                        </div>
                        <div class="room-features">
                            <div class="row">
                                <div class="col-md-3 col-6 mb-3">
                                    <div class="room-info d-flex flex-column align-items-center">
                                        <i class="bi bi-droplet-half" style="font-size:40px; color:#a0843a;"></i>
                                        <span class="mt-2">Shower</span>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 mb-3">
                                    <div class="room-info d-flex flex-column align-items-center">
                                        <i class="bi bi-water" style="font-size:40px; color:#a0843a;"></i>
                                        <span class="mt-2">Bathtub Terpisah</span>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 mb-3 px-0">
                                    <div class="room-info d-flex flex-column align-items-center">
                                        <i class="bi bi-snow mx-auto" style="font-size:40px; color:#a0843a;"></i>
                                        <span class="mt-2">AC</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="rooms-page-item">
            <div class="row">
                <div class="col-lg-6">
                    <div class="room-pic-slider owl-carousel">
                        <div class="single-room-pic">
                            <img src="{{ asset('images/luxury.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="room-text">
                        <div class="room-title">
                            <h2>Luxury Stay</h2>
                            <div class="room-price">
                                <span>From</span>
                                <h2>Rp 4.999.999</h2>
                                <sub>/night</sub>
                            </div>
                        </div>
                        <div class="room-desc">
                            <p>Luxury Stay dirancang untuk menghadirkan kenyamanan premium bagi tamu istimewa.
                                Dilengkapi kulkas kecil pribadi untuk menyimpan minuman favorit, meja kerja elegan bagi
                                Anda yang tetap produktif, serta AC modern untuk menjaga kesejukan.</p>
                        </div>
                        <div class="room-features">
                            <div class="row">
                                <div class="col-md-3 col-6 mb-3">
                                    <div class="room-info d-flex flex-column align-items-center">
                                        <i class="bi bi-box" style="font-size:40px; color:#a0843a;"></i>
                                        <span class="mt-2">Kulkas Kecil</span>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 mb-3">
                                    <div class="room-info d-flex flex-column align-items-center">
                                        <i class="bi bi-journal-text" style="font-size:40px; color:#a0843a;"></i>
                                        <span class="mt-2">Meja Kerja</span>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 mb-3 px-0">
                                    <div class="room-info d-flex flex-column align-items-center">
                                        <i class="bi bi-snow mx-auto" style="font-size:40px; color:#a0843a;"></i>
                                        <span class="mt-2">AC</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="rooms-page-item">
            <div class="row">
                <div class="col-lg-6">
                    <div class="room-pic-slider owl-carousel">
                        <div class="single-room-pic">
                            <img src="{{ asset('images/platinum.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="room-text">
                        <div class="room-title">
                            <h2>Platinum</h2>
                            <div class="room-price">
                                <span>From</span>
                                <h2>Rp 4.443.000</h2>
                                <sub>/night</sub>
                            </div>
                        </div>
                        <div class="room-desc">
                            <p>Platinum Room menawarkan kenyamanan modern dengan sentuhan elegan. Dilengkapi Smart
                                Mirror interaktif, AC yang menjaga kesejukan ruangan, serta TV Internasional untuk
                                hiburan kelas dunia.</p>
                        </div>
                        <div class="room-features">
                            <div class="row">
                                <div class="col-md-3 col-6 mb-3">
                                    <div class="room-info d-flex flex-column align-items-center">
                                        <i class="bi bi-display" style="font-size:40px; color:#a0843a;"></i>
                                        <span class="mt-2">Smart Miror</span>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 mb-3">
                                    <div class="room-info d-flex flex-column align-items-center">
                                        <i class="bi bi-snow mx-auto" style="font-size:40px; color:#a0843a;"></i>
                                        <span class="mt-2">AC</span>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 mb-3 px-0">
                                    <div class="room-info d-flex flex-column align-items-center">
                                        <i class="bi bi-tv-fill" style="font-size:40px; color:#a0843a;"></i>
                                        <span class="mt-2">TV Internasional</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="rooms-page-item">
            <div class="row">
                <div class="col-lg-6">
                    <div class="room-pic-slider owl-carousel">
                        <div class="single-room-pic">
                            <img src="{{ asset('images/diamond.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="room-text">
                        <div class="room-title">
                            <h2>Diamond</h2>
                            <div class="room-price">
                                <span>From</span>
                                <h2>Rp 6.999.999</h2>
                                <sub>/night</sub>
                            </div>
                        </div>
                        <div class="room-desc">
                            <p>Diamond Room adalah simbol kemewahan sejati di Hotel Aetheria. Dilengkapi ranjang linen
                                premium untuk tidur berkualitas, shower modern yang praktis, serta bathtub terpisah
                                untuk momen relaksasi.</p>
                        </div>
                        <div class="room-features">
                            <div class="row">
                                <div class="col-md-3 col-6 mb-3">
                                    <div class="room-info d-flex flex-column align-items-center">
                                        <i class="bi bi-grid-3x3-gap-fill" style="font-size:40px; color:#a0843a;"></i>
                                        <span class="mt-2">Ranjang Linen</span>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 mb-3">
                                    <div class="room-info d-flex flex-column align-items-center">
                                        <i class="bi bi-droplet-half" style="font-size:40px; color:#a0843a;"></i>
                                        <span class="mt-2">Shower</span>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 mb-3 px-0">
                                    <div class="room-info d-flex flex-column align-items-center">
                                        <i class="bi bi-water" style="font-size:40px; color:#a0843a;"></i>
                                        <span class="mt-2">Bathtub Terpisah</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- Rooms Section End -->

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
                    </script>Hotel Aetheria<i class="fa fa-heart-o" aria-hidden="true"></i> by <a
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
