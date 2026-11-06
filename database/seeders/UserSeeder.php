<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'username' => 'admin',
                'full_name' => 'Administrator',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => 'john123',
                'full_name' => 'John Smith',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => 'maria22',
                'full_name' => 'Maria Cruz',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => 'pedro45',
                'full_name' => 'Pedro Reyes',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => 'ana2026',
                'full_name' => 'Ana Garcia',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
