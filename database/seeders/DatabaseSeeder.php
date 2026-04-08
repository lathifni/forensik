<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::create([
            'name' => 'Admin Forensik',
            'email' => 'admin@djamil.com',
            'password' => bcrypt('password123'), // Ganti sesuai keinginan
        ]);
    }
}
