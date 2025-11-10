<nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
    id="layout-navbar" style="background: linear-gradient(90deg, #D2B48C);
            backdrop-filter: blur(10px);">
    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
            <i class="ti ti-menu-2 ti-md"></i>
        </a>
    </div>

    {{-- Bagian kanan navbar --}}
    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">

        <ul class="navbar-nav flex-row align-items-center ms-auto">

            <!-- Notifikasi -->
            @auth('web')
                <li class="nav-item dropdown">
                    <a class="nav-link position-relative text-white" href="#" id="notificationDropdown"
                        data-bs-toggle="dropdown">
                        <i class="bi bi-bell text-white" style="font-size: 20px;"></i>
                        @php
                            $notifikasi = \App\Models\Pembayaran::whereIn('status', ['menunggu_konfirmasi'])
                                ->whereHas('booking', function ($query) {
                                    $query->whereIn('metode_pembayaran', ['cod', 'transfer']);
                                })
                                ->latest()
                                ->get();

                            $count = $notifikasi->count();
                        @endphp

                        @if ($count > 0)
                            <span class="badge bg-danger rounded-pill"
                                style="position: absolute; top: 2px; right: 2px; font-size: 11px; padding: 2px 6px;">
                                {{ $count }}
                            </span>
                        @endif
                    </a>
                    {{-- Dropdown daftar notifikasi --}}
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li class="dropdown-header">Notifikasi Pembayaran</li>

                        @foreach ($notifikasi as $notif)
                            @php
                                $booking = $notif->booking; // relasi ke booking
                            @endphp

                            <li>
                                <a class="dropdown-item 
                                    @if ($notif->status == 'menunggu_konfirmasi' || $notif->status == 'belum_bayar') fw-bold @endif"
                                    href="{{ $booking ? route('booking.show', $booking->id) : '#' }}">
                                    Pembayaran untuk Booking: {{ $booking->kamar->nama ?? 'Kamar Tidak Ditemukan' }}<br>
                                    <small class="text-muted">{{ $notif->created_at->diffForHumans() }}</small>
                                </a>
                            </li>
                        @endforeach

                    </ul>
                </li>
            @endauth
            <!-- Notifikasi -->

            <!-- User (Profile & Logout) -->
            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                {{-- Avatar/profil + nama user --}}
                <a class="nav-link dropdown-toggle hide-arrow p-0 text-white" href="javascript:void(0);"
                    data-bs-toggle="dropdown">
                    <div class="d-flex align-items-center gap-1">
                        <div class="avatar avatar-online">
                            <img src="{{ asset('images/admin1.jpg') }}" alt class="rounded-circle" />
                        </div>
                        {{-- tampilan nama administrator --}}
                        @if (Auth::check())
                            <span>{{ Auth::user()->name }}</span>
                            {{-- admin --}}
                        @endif
                        {{-- bikin guard pengunjung di config/auth.php --}}
                        {{-- tampilan nama Pengunjung (chika) --}}
                        @if (Auth::guard('pengunjung')->check())
                            <span>{{ Auth::guard('pengunjung')->user()->name }}</span>
                        @endif
                        {{-- pengunjung --}}
                    </div>
                </a>
                {{-- Dropdown menu user --}}
                <ul class="dropdown-menu dropdown-menu-end">

                    {{-- Link Ubah Profil --}}
                    <li>
                        @auth('web')
                            <a class="dropdown-item" href="{{ route('ubah-profil') }}">
                                <i class="ti ti-user me-3 ti-md"></i>
                                <span class="align-middle">Ubah Profil</span>
                            </a>
                        @endauth
                    </li>
                    <li>
                        <div class="d-grid px-2 pt-2 pb-1">
                            @if (Auth::check())
                                {{-- Logout untuk Admin --}}
                                <a class="btn btn-sm btn-danger d-flex"
                                    onclick="event.preventDefault(); document.getElementById('logout-form-admin').submit();"
                                    href="javascript:void(0);">
                                    <small class="align-middle">Logout</small>
                                    <i class="ti ti-logout ms-2 ti-14px"></i>
                                </a>

                                <form id="logout-form-admin" method="POST" action="{{ route('logout') }}">
                                    @csrf
                                </form>
                                {{-- logout pengunjung --}}
                            @elseif (Auth::guest())
                                {{-- Logout untuk Pengunjung --}}
                                <a class="btn btn-sm btn-danger d-flex"
                                    onclick="event.preventDefault(); document.getElementById('logout-form-pengunjung').submit();"
                                    href="javascript:void(0);">
                                    <small class="align-middle">Logout</small>
                                    <i class="ti ti-logout ms-2 ti-14px"></i>
                                </a>

                                <form id="logout-form-pengunjung" method="POST"
                                    action="{{ route('logout.pengunjung') }}">
                                    @csrf
                                </form>
                            @endif
                        </div>
                    </li>

                </ul>
            </li>
            <!--/ User -->
        </ul>
    </div>

    <!-- Search Small Screens -->
    <div class="navbar-search-wrapper search-input-wrapper d-none">
        <input type="text" class="form-control search-input container-xxl border-0" placeholder="Search..."
            aria-label="Search..." />
        <i class="ti ti-x search-toggler cursor-pointer"></i>
    </div>
</nav>
