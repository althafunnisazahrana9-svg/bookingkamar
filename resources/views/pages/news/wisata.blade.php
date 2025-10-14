@extends('layouts.auth')

@section('title', 'Wisata Baru Dekat Hotel Aetheria')

@section('content')
    <div class="container mt-4">
        <div class="card shadow-sm border-0">
            {{-- Gambar utama --}}
            <img src="{{ asset('images/wisata1.jpg') }}" class="card-img-top rounded-top"
                alt="Wisata Baru Dekat Hotel Aetheria">

            <div class="card-body p-4">
                <h2 class="card-title mb-3 fw-bold text-brown">
                    Wisata Baru Dekat Hotel Aetheria: Jelajahi Keindahan Alam yang Memukau!
                </h2>

                <p class="text-muted mb-4">
                    Dipublikasikan pada: {{ now()->format('d F Y') }}
                </p>

                <p>
                    Kabar gembira bagi para wisatawan! Kini, hanya lima menit dari
                    <strong>Hotel Aetheria</strong>, telah dibuka destinasi wisata baru bernama
                    <em>“Taman Bukit Emas”</em> yang menawarkan pemandangan alam memukau dan udara segar pegunungan.
                </p>

                <p>
                    Lokasi ini menjadi favorit baru bagi tamu hotel yang ingin menikmati suasana tenang
                    dan spot foto yang instagramable. Dengan rute yang mudah dijangkau dari Hotel Aetheria,
                    pengunjung dapat berkeliling taman, bersantai di area piknik, atau mencoba kafe baru
                    yang menyajikan kopi lokal khas daerah ini.
                </p>

                <p>
                    Pemerintah daerah setempat juga berencana menggelar festival budaya tahunan di lokasi ini.
                    Hal ini tentu menjadi daya tarik tambahan bagi wisatawan yang menginap di Hotel Aetheria,
                    karena bisa menikmati pengalaman liburan yang lengkap — mulai dari akomodasi nyaman,
                    kuliner lezat, hingga wisata alam yang menenangkan.
                </p>

                <p class="fw-bold text-brown mt-4">
                    Jadi tunggu apa lagi? Rencanakan liburanmu bersama Hotel Aetheria dan rasakan keindahan
                    alam sekitar yang belum pernah kamu temukan sebelumnya!
                </p>
                <div class="text-center mb-5">
                    <a href="{{ route('booking.news') }}" class="btn btn-secondary">
                        <i class="bi bi-arrow-left-circle me-2"></i> Kembali
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
