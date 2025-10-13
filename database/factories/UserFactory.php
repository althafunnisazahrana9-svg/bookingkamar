<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 *  * Factory ini digunakan untuk menghasilkan data dummy (contoh data)
 * pada model User secara otomatis saat melakukan seeding database.
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     * Variabel statis untuk menyimpan password yang sedang digunakan.
     * Tujuannya agar password tidak terus di-hash ulang setiap kali
     * factory membuat user baru, cukup sekali saja.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     * Fungsi utama untuk mendefinisikan data default setiap kali
     * User dibuat melalui factory.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // Nama pengguna akan diisi secara acak oleh Faker
            'name' => fake()->name(),
            // Email unik untuk setiap pengguna
            'email' => fake()->unique()->safeEmail(),
            // Tanggal verifikasi email diset ke waktu sekarang
            'email_verified_at' => now(),
            // Password default adalah 'password', di-hash menggunakan bcrypt
            // Disimpan di variabel statis agar tidak di-hash berulang kali
            'password' => static::$password ??= Hash::make('password'),
            // Token untuk fitur "remember me" saat login
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
