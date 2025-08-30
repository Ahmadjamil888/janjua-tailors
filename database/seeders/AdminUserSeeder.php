<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeder.
     */
    public function run(): void
    {
        // Create admin user only if it doesn't exist
        if (!User::where('email', 'janjuatailors@gmail.com')->exists()) {
            User::create([
                'name' => 'Janjua Tailors Admin',
                'email' => 'janjuatailors@gmail.com',
                'password' => Hash::make('JanjuaTailors@4590'),
                'role' => 'admin',
                'phone' => '+92-300-1234567',
                'address' => 'Gujranwala, Pakistan',
            ]);
        }
    }
}