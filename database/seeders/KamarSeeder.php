<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KamarSeeder extends Seeder
{
    /**
     * Jalankan seeder.
     */
    public function run(): void
    {
        DB::table('kamar')->insert([
            [
                'nama' => 'Emerald',
                'harga' => 1000000,
                'fasilitas' => 'AC, TV, Wi-Fi, Sarapan',
                'status' => 'kosong',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Lavender',
                'harga' => 1325000,
                'fasilitas' => 'Kopi & Teh Set / Ketel Listrik',
                'status' => 'kosong',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Sky Blue',
                'harga' => 1550000,
                'fasilitas' => 'AC dan Pemanas Ruangan, Smart Mirror / Cermin Pintar',
                'status' => 'kosong',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Suite Room',
                'harga' => 2000000,
                'fasilitas' => 'AC, TV, Wi-Fi, TV Layar Datar dengan Saluran Internasional',
                'status' => 'kosong',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Family Room',
                'harga' => 1457000,
                'fasilitas' => 'AC, Balkon atau Pemandangan Langsung',
                'status' => 'kosong',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Couple Room',
                'harga' => 3000000,
                'fasilitas' => 'AC, Ranjang Nyaman dengan Linen Berkualitas, Speaker Bluetooth / Sistem Audio Mini',
                'status' => 'kosong',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Crystal',
                'harga' => 2755000,
                'fasilitas' => 'AC, Shower & Bathtub Terpisah',
                'status' => 'kosong',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Luxury Stay',
                'harga' => 4999999,
                'fasilitas' => 'AC, Mini Bar atau Kulkas Kecil, Meja Kerja dan Kursi Ergonomis',
                'status' => 'kosong',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Platinum',
                'harga' => 4443000,
                'fasilitas' => 'AC, Smart Mirror / Cermin Pintar
                    TV Layar Datar dengan Saluran Internasional',
                'status' => 'kosong',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Diamond',
                'harga' => 6999999,
                'fasilitas' => 'AC, Ranjang Nyaman dengan Linen Berkualitas
                    Shower & Bathtub Terpisah',
                'status' => 'kosong',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
