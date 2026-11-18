<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'username' => 'admin',
                'full_name' => 'Administrator',
                'password' => Hash::make('admin123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => 'john123',
                'full_name' => 'John Smith',
                'password' => Hash::make('john123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => 'maria22',
                'full_name' => 'Maria Cruz',
                'password' => Hash::make('maria123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => 'pedro45',
                'full_name' => 'Pedro Reyes',
                'password' => Hash::make('pedro123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => 'ana2026',
                'full_name' => 'Ana Garcia',
                'password' => Hash::make('ana123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
