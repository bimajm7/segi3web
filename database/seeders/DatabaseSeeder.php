<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Menambahkan data user admin ke database
        User::create([
            'firstname' => "admin",
            'lastname' => "lastname",
            'role'=>"admin",
            'email' => "segitigamotor024@gmail.com",
            'email_verified_at' => now(),  // Menggunakan now() untuk verifikasi email
            'password' => "segitigamotoraja",

        ]);
    }
}
