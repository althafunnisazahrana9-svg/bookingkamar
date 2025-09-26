<?php

namespace Database\Seeders;

use App\Models\Pengunjung;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class PengunjungSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pengunjung::create([
            'name' => 'Chika',
            'email' => 'chika@mail.com',
            'no_hp' => '088888',
            'password' => Hash::make('password'), // password default
        ]);
    }
}
