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

    {{-- ✅ Efek hover & active --}}
    <style>
        .menu-link {
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .menu-link:hover {
            background-color: #b58c67 !important;
            color: #fff !important;
        }

        .menu-link.active {
            background-color: #8b5e3c !important;
            color: #fff !important;
            font-weight: 600;
        }
    </style>

    <div class="menu-inner-shadow"></div>

    {{-- ✅ Sidebar ADMIN --}}
    @auth('web')
        <ul class="menu-inner py-1 list-unstyled">
            <li class="menu-item">
                <a href="{{ route('dashboard') }}"
                    class="menu-link d-block py-2 px-3 rounded text-white {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                    <i class="menu-icon tf-icons ti ti-home me-2"></i> Dashboard
                </a>
            </li>

            <li class="menu-item">
                <a href="{{ route('booking.index') }}"
                    class="menu-link d-block py-2 px-3 rounded text-white {{ request()->routeIs('booking.index') ? 'active' : '' }}">
                    <i class="menu-icon tf-icons ti ti-users-group me-2"></i> Daftar Booking
                </a>
            </li>

            <li class="menu-item">
                <a href="{{ route('kamar.index') }}"
                    class="menu-link d-block py-2 px-3 rounded text-white {{ request()->routeIs('kamar.index') ? 'active' : '' }}">
                    <i class="menu-icon tf-icons ti ti-apps-off me-2"></i> Data Kamar
                </a>
            </li>

            <li class="menu-item">
                <a href="{{ route('admin.index') }}"
                    class="menu-link d-block py-2 px-3 rounded text-white {{ request()->is('admin/admin*') ? 'active' : '' }}">
                    <i class="menu-icon tf-icons ti ti-users me-2"></i> Admin
                </a>
            </li>
        </ul>
    @endauth

    {{-- ✅ Sidebar PENGUNJUNG --}}
    @auth('pengunjung')
        <ul class="menu-inner py-1 list-unstyled">
            <li class="menu-item">
                <a href="{{ route('booking.index') }}"
                    class="menu-link d-block py-2 px-3 rounded text-white {{ request()->routeIs('booking.index') ? 'active' : '' }}">
                    <i class="menu-icon tf-icons ti ti-users-group me-2"></i> Daftar Booking
                </a>
            </li>

            <li class="menu-item">
                <a href="{{ route('booking.about') }}"
                    class="menu-link d-block py-2 px-3 rounded text-white {{ request()->routeIs('booking.about') ? 'active' : '' }}">
                    <i class="menu-icon tf-icons ti ti-building-skyscraper me-2"></i> Detail Hotel
                </a>
            </li>
        </ul>
    @endauth
</aside>
