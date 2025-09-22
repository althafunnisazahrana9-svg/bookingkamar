<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top w-100 shadow-sm">
    <div class="container-fluid px-4">
        {{-- Logo --}}
        <a class="navbar-brand fw-bold text-white" href="#">HOTEL</a>

        {{-- Toggle button (mobile) --}}
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        {{-- Menu --}}
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item"><a class="nav-link" href="{{ route('booking.about') }}">About</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('booking.services') }}">Services</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('booking.rooms') }}">Rooms</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('booking.news') }}">News</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('booking.contact') }}">Contact</a></li>
            </ul>

            {{-- Right section --}}
            <ul class="navbar-nav d-flex align-items-center">

                {{-- Alamat --}}
                <li class="nav-item d-flex align-items-center text-white me-3">
                    <i class="bi bi-geo-alt-fill me-1"></i>
                    <small>1525 Laine, Los Angeles, CA</small>
                </li>

                {{-- Notifikasi --}}
                <li class="nav-item dropdown mx-2">
                    <a class="nav-link position-relative" href="#" id="notificationDropdown"
                        data-bs-toggle="dropdown">
                        <i class="bi bi-bell fs-5"></i>
                        @php
                            $count = \App\Models\Booking::where('status', 'pending')->count();
                        @endphp
                        @if ($count > 0)
                            <span class="badge bg-danger rounded-pill"
                                style="position: absolute; top: 0; right: 0; font-size: 11px; padding: 2px 6px;">
                                {{ $count }}
                            </span>
                        @endif
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li class="dropdown-header">Notifikasi</li>
                        @foreach ($notifikasi as $notif)
                            <li>
                                <a class="dropdown-item @if ($notif->status == 'pending') fw-bold @endif"
                                    href="{{ route('booking.show', $notif->id) }}">
                                    Booking: {{ $notif->kamar->nama ?? 'Kamar' }}
                                    oleh {{ $notif->nama_pemesan }}
                                    <small class="text-muted d-block">{{ $notif->created_at->diffForHumans() }}</small>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>

                {{-- User / Admin --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle d-flex align-items-center" href="#"
                        data-bs-toggle="dropdown">
                        <img src="{{ asset('images/admin1.jpg') }}" alt="Admin" class="rounded-circle me-2"
                            width="35" height="35">
                        <span class="text-white">{{ Auth::user()->name }}</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a class="dropdown-item" href="{{ route('ubah-profil') }}">
                                <i class="bi bi-person me-2"></i> Ubah Profil
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <form id="logout-form" method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button class="dropdown-item text-danger" type="submit">
                                    <i class="bi bi-box-arrow-right me-2"></i> Logout
                                </button>
                            </form>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
    </div>
</nav>

{{-- Tambahkan padding biar konten tidak ketutup navbar --}}
<div style="padding-top: 80px;"></div>
