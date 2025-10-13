<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Bagian ini membuat akun admin default untuk login awal.
        // Jika email 'admin@mail.com' sudah ada, maka data akan diperbarui.
        // Jika belum ada, maka akan dibuat baru.
        // user admin default
        User::updateOrCreate(
            ['email' => 'admin@mail.com'],  // kondisi pencarian user
            [
                'name' => 'Administrator', // nama user
                'password' => Hash::make('password123'), // ubah sesuai kebutuhan, password aman dengan hash
            ]
        );

        // kamar
        // Memanggil Seeder Kamar
        // Bagian ini akan menjalankan file KamarSeeder
        // yang berisi data contoh kamar hotel.
        $this->call([
            KamarSeeder::class,
        ]);

        // Memanggil Seeder Pengunjung
        // Bagian ini menjalankan file PengunjungSeeder
        // untuk menambahkan data contoh pengunjung hotel.
        $this->call([
            PengunjungSeeder::class,
        ]);
    }
}
