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
            // Relasi ke tabel kamar
            $table->foreignId('kamar_id')
                  ->constrained('kamar') // Pastikan tabel 'kamar' sudah ada
                  ->onDelete('cascade');

            // Kolom detail booking
            $table->string('nama_pemesan', 128);
            $table->string('email', 32);
            $table->string('telp', 16);
            $table->string('alamat', 128);
            $table->string('ktp', 32);
            $table->integer('jumlah_tamu');
            $table->date('check_in');
            $table->decimal('harga', 10, 2);
            $table->enum('status', ['kosong', 'terisi'])->default('kosong');

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