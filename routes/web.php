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
    Route::resource('/booking', App\Http\Controllers\BookingController::class);

    Route::resource('/admin', App\Http\Controllers\AdminController::class);
    Route::resource('/kamar', App\Http\Controllers\KamarController::class);

<<<<<<< HEAD
    Route::resource('/pesan', App\Http\Controllers\PesanController::class);
=======
    Route::get('/ubah-profil', [App\Http\Controllers\ProfilController::class, 'index'])->name('ubah-profil');
    Route::post('/ubah-profil', [App\Http\Controllers\ProfilController::class, 'update'])->name('ubah-profil.update');
>>>>>>> d7adedcf60e17ad8f85996693dd3e1a377a6b7ef

});
