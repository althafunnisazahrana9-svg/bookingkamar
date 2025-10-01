@extends('layouts.auth')

@section('title', 'HOTEL - Master Suite Upgrade')

@section('content')
    <div class="container my-5">

        <!-- Judul -->
        <h1 class="text-center mb-5">Peningkatan Fasilitas Telah Dilakukan pada Master Suite HOTEL</h1>

        <!-- Section 1: Gambar di kiri, teks di kanan -->
        <div class="row align-items-center mb-5">
            <div class="col-md-6">
                <img src="{{ asset('images/master1.jpg') }}" class="img-fluid rounded" alt="Master Suite HOTEL">
            </div>
            <div class="col-md-6">
                <h3>Kenyamanan Mewah yang Lebih Tinggi</h3>
                <p>
                    Master Suite di HOTEL kini telah mengalami peningkatan fasilitas untuk menghadirkan pengalaman menginap
                    yang lebih nyaman dan mewah.
                    Setiap sudut kamar dirancang dengan perhatian pada detail, menghadirkan suasana elegan yang memanjakan
                    para tamu.
                </p>
            </div>
        </div>

        <!-- Section 2: Gambar di kanan, teks di kiri -->
        <div class="row align-items-center mb-5">
            <div class="col-md-6 order-md-2">
                <img src="{{ asset('images/master2.jpg') }}" class="img-fluid rounded" alt="Interior Master Suite">
            </div>
            <div class="col-md-6 order-md-1">
                <h3>Fasilitas Modern & Premium</h3>
                <p>
                    Setiap Master Suite kini dilengkapi dengan fasilitas modern seperti Smart TV, sistem audio berkualitas
                    tinggi,
                    dan tempat tidur king-size dengan linen premium untuk memastikan tidur Anda lebih nyenyak.
                </p>
            </div>
        </div>

        <!-- Section 3: Gambar di kiri, teks di kanan -->
        <div class="row align-items-center mb-5">
            <div class="col-md-6">
                <img src="{{ asset('images/master3.jpg') }}" class="img-fluid rounded" alt="Pemandangan dari Master Suite">
            </div>
            <div class="col-md-6">
                <h3>Pemandangan Eksklusif</h3>
                <p>
                    Master Suite kini menawarkan pemandangan eksklusif yang memukau, baik menghadap kolam renang, taman,
                    maupun kota.
                    Tempat yang sempurna untuk bersantai, menikmati kopi pagi, atau sekadar menikmati keindahan sekitarnya.
                </p>
            </div>
        </div>

        <!-- Tombol Kembali -->
        <div class="text-center mb-5">
            <a href="{{ route('booking.news') }}" class="btn btn-secondary">
                <i class="bi bi-arrow-left-circle me-2"></i> Kembali
            </a>
        </div>
    </div>
@endsection
