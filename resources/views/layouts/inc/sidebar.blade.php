{{-- style untuk bg collor --}}
<aside id="layout-menu" class="layout-menu menu-vertical text-white d-flex flex-column p-3"
    style="min-height: 100vh; background: linear-gradient(180deg, #D2B48C);">
    <div class="app-brand demo p-3">
        <a href="{{ route('home') }}" class="app-brand-link d-flex align-items-center text-white">
            <span class="app-brand-logo">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="rounded-circle" width="65"
                    height="65">
            </span>
            <span class="app-brand-text fw-bold">Hotel Aetheria</span>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    @auth
        {{-- Jika login sebagai Admin --}}
        @if (Auth::user()->role === 'admin')
            <ul class="menu-inner py-1 list-unstyled">
                <li class="menu-item">
                    <a href="{{ route('home') }}" class="menu-link d-block py-2 px-3 rounded text-white">
                        <i class="menu-icon tf-icons ti ti-home me-2"></i> Dashboard
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('booking.index') }}" class="menu-link d-block py-2 px-3 rounded text-white">
                        <i class="menu-icon tf-icons ti ti-users-group me-2"></i> Daftar Booking
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('kamar.index') }}" class="menu-link d-block py-2 px-3 rounded text-white">
                        <i class="menu-icon tf-icons ti ti-apps-off me-2"></i> Data Kamar
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('pesan.welcome') }}" class="menu-link d-block py-2 px-3 rounded text-white">
                        <i class="menu-icon tf-icons ti ti-message me-2"></i> Pesan Kamar
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('booking.about') }}" class="menu-link d-block py-2 px-3 rounded text-white">
                        <i class="menu-icon tf-icons ti ti-building-skyscraper me-2"></i> Detail Hotel
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('admin.index') }}" class="menu-link d-block py-2 px-3 rounded text-white">
                        <i class="menu-icon tf-icons ti ti-users me-2"></i> Admin
                    </a>
                </li>
            </ul>

            {{-- Jika login sebagai Pengunjung --}}
        @elseif (Auth::user()->role === 'pengunjung')
            <ul class="menu-inner py-1 list-unstyled">
                <li class="menu-item">
                    <a href="{{ route('booking.index') }}" class="menu-link d-block py-2 px-3 rounded text-white">
                        <i class="menu-icon tf-icons ti ti-users-group me-2"></i> Daftar Booking
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('booking.about') }}" class="menu-link d-block py-2 px-3 rounded text-white">
                        <i class="menu-icon tf-icons ti ti-building-skyscraper me-2"></i> Detail Hotel
                    </a>
                </li>
            </ul>
        @endif
    @else
        {{-- Jika belum login (guest) --}}
        <ul class="menu-inner py-1 list-unstyled">
            <li class="menu-item">
                <a href="{{ route('booking.about') }}" class="menu-link d-block py-2 px-3 rounded text-white">
                    <i class="menu-icon tf-icons ti ti-building-skyscraper me-2"></i> Tentang Hotel
                </a>
            </li>
            <li class="menu-item">
                <a href="{{ route('booking.services') }}" class="menu-link d-block py-2 px-3 rounded text-white">
                    <i class="menu-icon tf-icons ti ti-star me-2"></i> Layanan
                </a>
            </li>
            <li class="menu-item">
                <a href="{{ route('booking.contact') }}" class="menu-link d-block py-2 px-3 rounded text-white">
                    <i class="menu-icon tf-icons ti ti-phone me-2"></i> Kontak
                </a>
            </li>
        </ul>
    @endauth
</aside>
