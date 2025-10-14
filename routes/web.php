<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\PengunjungController;
use App\Http\Controllers\PesanController;
use Illuminate\Support\Facades\Route;

// route untuk booking untuk admin dan pengunjung di luar middleware auth
Route::resource('/booking', App\Http\Controllers\BookingController::class);

// route untuk login pengunjung
Route::get('/pengunjung/login', [PengunjungController::class, 'index'])->name('pengunjung.login');
Route::post('/pengunjung/login', [PengunjungController::class, 'login'])->name('pengunjung.login.post');

// logout pengunjung
Route::post('/logout-pengunjung', function () {
    session()->flush(); // hapus semua session pengunjung

    return redirect()->route('pengunjung.login'); // arahkan ke halaman login pengunjung
})->name('logout.pengunjung');

Route::middleware(['pengunjung.auth'])->group(function () {

    Route::get('/form', [App\Http\Controllers\FormController::class, 'index'])->name('pages.form.index');
    Route::post('/form', [App\Http\Controllers\FormController::class, 'store'])->name('pages.form.store');

    Route::get('/pengunjung/ubah-profil', [PengunjungController::class, 'edit'])->name('pengunjung.ubah-profil');
    Route::post('/pengunjung/ubah-profil', [PengunjungController::class, 'update'])->name('pengunjung.ubah-profil.update');

    // about
    Route::get('/about', [BookingController::class, 'about'])->name('booking.about');
    Route::post('/about', [BookingController::class, 'about'])->name('booking.about');

    // services
    Route::get('/services', [BookingController::class, 'services'])->name('booking.services');
    Route::post('/services', [BookingController::class, 'services'])->name('booking.services');

    // rooms
    Route::get('/rooms', [BookingController::class, 'rooms'])->name('booking.rooms');
    Route::post('/rooms', [BookingController::class, 'rooms'])->name('booking.rooms');

    // news
    Route::get('/news', [BookingController::class, 'news'])->name('booking.news');
    Route::post('/news', [BookingController::class, 'news'])->name('booking.news');

    // contact
    Route::get('/contact', [BookingController::class, 'contact'])->name('booking.contact');
    Route::post('/contact', [BookingController::class, 'contact'])->name('booking.contact');

    // pesan welcome
    Route::get('/welcome', [PesanController::class, 'welcome'])->name('pesan.welcome');

    // struk
    Route::get('/booking/{id}/struk', [BookingController::class, 'struk'])->name('booking.struk');

    // untuk halaman transfer bank
    Route::get('/pembayaran/transfer-bank/{booking}', [PembayaranController::class, 'transfer'])->name('pembayaran.transfer');

    // upload bukti transfer
    Route::post('/pembayaran/{booking}/upload-bukti-transfer',
        [PembayaranController::class, 'storeKonfirmasi'])->name('pembayaran.uploadBuktiTransfer');

    // untuk halaman pembayaran di tempat
    Route::get('/pembayaran/cod/{booking}', [PembayaranController::class, 'cod'])
        ->name('pembayaran.cod');

    // news kemewahan
    Route::get('news/Kemewahan-dan-Kedamaian-alam-Satu-Tempat', [NewsController::class, 'index'])->name('news.index');
    Route::post('news/Kemewahan-dan-Kedamaian-alam-Satu-Tempat', [NewsController::class, 'index'])->name('news.index');

    // news kuliner
    Route::get('news/Kuliner-Istimewa-untuk-Setiap-Momen', [NewsController::class, 'kuliner'])->name('news.kuliner');
    Route::post('news/Kuliner-Istimewa-untuk-Setiap-Momen', [NewsController::class, 'kuliner'])->name('news.kuliner');

    // news kuliner
    Route::get('news/Romantisme-di-Setiap-Detil', [NewsController::class, 'romantisme'])->name('news.romantisme');
    Route::post('news/Romantisme-di-Setiap-Detil', [NewsController::class, 'romantisme'])->name('news.romantisme');

    // news holidays
    Route::get('news/Yang-Perlu-Kamu-Tahu-Sebelum-Berlibur', [NewsController::class, 'holidays'])->name('news.holidays');
    Route::post('news/Yang-Perlu-Kamu-Tahu-Sebelum-Berlibur', [NewsController::class, 'holidays'])->name('news.holidays');

    // news coffe
    Route::get('news/Coffee-Shop-Baru', [NewsController::class, 'coffeeshop'])->name('news.coffeeshop');
    Route::post('news/Coffee-Shop-Baru', [NewsController::class, 'coffeeshop'])->name('news.coffeeshop');

    // news master
    Route::get('news/Peningkatan-Fasilitas-Telah-Dilakukan-pada-Master-Suite-HOTEL', [NewsController::class, 'master'])->name('news.master');
    Route::post('news/Peningkatan-Fasilitas-Telah-Dilakukan-pada-Master-Suite-HOTEL', [NewsController::class, 'master'])->name('news.master');

    // news wisata
    Route::get('news/Wisata-Baru-Dekat-Hotel-Aetheria-:-Jelajahi-Keindahan-Alam-yang-Memukau!', [NewsController::class, 'wisata'])->name('news.wisata');
    Route::post('news/Wisata-Baru-Dekat-Hotel-Aetheria-:-Jelajahi-Keindahan-Alam-yang-Memukau!', [NewsController::class, 'wisata'])->name('news.wisata');

    // success
    Route::get('/booking/success/{id}', [\App\Http\Controllers\BookingController::class, 'success'])
        ->name('booking.success');

    // konfirmasi pembayaran
    Route::get('/pembayaran/konfirmasi/{booking}', [PembayaranController::class, 'konfirmasi'])
        ->name('pembayaran.konfirmasi');
    Route::post('/pembayaran/konfirmasi/{booking}', [PembayaranController::class, 'storeKonfirmasi'])
        ->name('pembayaran.konfirmasi.store');
    Route::post('/pembayaran/{id}', [PembayaranController::class, 'storeKonfirmasi'])
        ->name('pembayaran.storeKonfirmasi');
});

Auth::routes([
    'register' => false,
    'reset' => false,
    'verify' => false,
    'confirm' => false,
]);

Route::group([
    'middleware' => ['auth'],
], function () {
    Route::get('/', function () {
        return redirect()->Route('dashboard'); // mengarahkan ke dashboard
    })->name('home');

    // Halaman lain khusus admin
    Route::middleware(['auth', 'role:admin'])->prefix('admin')->group(function () {

        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::post('/admin/bookings/update-status', [AdminController::class, 'updateStatus'])->name('admin.booking.updateStatus');
        // Tambahan untuk konfirmasi & tolak booking
        Route::get('booking/{id}/confirm', [BookingController::class, 'confirm'])->name('booking.confirm');
        Route::post('booking/{id}/reject', [BookingController::class, 'reject'])->name('booking.reject');
        // status pembayaran
        Route::post('/booking/{id}/lunas', [BookingController::class, 'setLunas'])->name('booking.setLunas');
        Route::post('/booking/{id}/belum-lunas', [BookingController::class, 'setBelumLunas'])->name('booking.setBelumLunas');
        // Booking CRUD (biasa, sudah ada dari resource)
        Route::resource('/admin', App\Http\Controllers\AdminController::class);
        // Tambahan khusus admin
        Route::get('/admin/booking', [App\Http\Controllers\AdminController::class, 'bookingIndex'])
            ->name('admin.booking');
        Route::post('/admin/booking/update-status', [App\Http\Controllers\AdminController::class, 'updateStatus'])
            ->name('admin.booking.updateStatus');
        Route::resource('/kamar', App\Http\Controllers\KamarController::class);
        Route::get('/ubah-profil', [App\Http\Controllers\ProfilController::class, 'index'])->name('ubah-profil');
        Route::post('/ubah-profil', [App\Http\Controllers\ProfilController::class, 'update'])->name('ubah-profil.update');
        Route::get('/logout', [AdminController::class, 'logout'])->name('logout');
        Route::post('/logout', [AdminController::class, 'logout'])->name('logout');

    });
});
