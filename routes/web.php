<?php

use Illuminate\Support\Facades\Route;


Auth::routes([
    'register' => false,
    'reset' => false,
    'verify' => false,
    'confirm' => false
]);



Route::group([
 'middleware' => ['auth']
], function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('/booking', [App\Http\Controllers\BookingController::class, 'index'])->name('booking.index');
    Route::resource('/booking', App\Http\Controllers\BookingController::class)
        ->only('index', 'show', 'destroy');

    Route::resource('/admin', App\Http\Controllers\AdminController::class);
    Route::resource('/kamar', App\Http\Controllers\KamarController::class);

    
    
    Route::get('/pesan/create', [App\Http\Controllers\PesanController::class, 'create'])->name('pesan.create');
    Route::post('/pesan/store', [App\Http\Controllers\PesanController::class, 'store'])->name('pesan.store');




    Route::get('/ubah-profil', [App\Http\Controllers\ProfilController::class, 'index'])->name('ubah-profil');
    Route::post('/ubah-profil', [App\Http\Controllers\ProfilController::class, 'update'])->name('ubah-profil.update');

});
