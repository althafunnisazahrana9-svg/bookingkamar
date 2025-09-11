<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\DashboardController;

Route::get('/form', [App\Http\Controllers\FormController::class, 'index'])->name('pages.form.index');
Route::post('/form', [App\Http\Controllers\FormController::class, 'store'])->name('pages.form.store');



Auth::routes([
    'register' => false,
    'reset' => false,
    'verify' => false,
    'confirm' => false
]);



Route::group([
 'middleware' => ['auth']
], function () {
    route::get('/home', function(){
        return redirect()->route('dashboard'); // mengarahkan ke dashboard
    })->name('home');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    
    Route::resource('/pesan', App\Http\Controllers\PesanController::class);
    Route::resource('/booking', App\Http\Controllers\BookingController::class);
    // Tambahan untuk konfirmasi & tolak booking
    Route::get('booking/{id}/confirm', [BookingController::class, 'confirm'])->name('booking.confirm');
    Route::get('booking/{id}/reject', [BookingController::class, 'reject'])->name('booking.reject');


    
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

});



