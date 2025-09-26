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
        // user admin default
        User::updateOrCreate(
            ['email' => 'admin@mail.com'],
            [
                'name' => 'Administrator',
                'password' => Hash::make('password123'), // ubah sesuai kebutuhan
            ]
        );

        // kamar
        $this->call([
            KamarSeeder::class,
        ]);

        $this->call([
            PengunjungSeeder::class,
        ]);
    }
}
