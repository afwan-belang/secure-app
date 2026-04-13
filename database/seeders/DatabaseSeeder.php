<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Crypt; // Jangan lupa import ini

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'username' => 'admin',
            'email' => Crypt::encryptString('admin@secure.com'), // Email admin juga dienkripsi
            'password' => 'admin123', // Akan otomatis di-hash oleh Model
            'role' => 'admin'
        ]);
    }
}