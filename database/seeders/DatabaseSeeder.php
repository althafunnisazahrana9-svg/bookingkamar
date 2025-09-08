<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
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
            ['email' => 'admin@mail.com'], // cek email dulu
            [
                'name' => 'Administrator',
                'password' => Hash::make('password123'), // ubah sesuai kebutuhan
            ]
        );
    }
}
