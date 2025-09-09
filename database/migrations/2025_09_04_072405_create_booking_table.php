<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Jalankan migrasi.
     */
    public function up(): void
    {
        Schema::create('booking', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kamar_id')->constrained('kamar')->onDelete('cascade');
            $table->string('nama_pemesan', 64);
            $table->string('email', 64)->nullable();
            $table->string('telp', 16);
            $table->string('alamat', 128)->nullable();
            $table->string('nik', 16);
            $table->integer('jumlah_tamu')->nullable();
            $table->date('tanggal_checkin');
            $table->date('tanggal_checkout');
            $table->decimal('harga', 10, 2);
            $table->string('metode_pembayaran', 128);
            $table->enum('status', ['konfirmasi', 'tidak konfirmasi', 'pending'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse migrasi.
     */
    public function down(): void
    {
        Schema::dropIfExists('booking');
    }
};