<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'id' => '1',
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('123456'),

        ]);

        User::create([
            'id' => '2',
            'name' => 'Admin2',
            'email' => 'admin2@example.com',
            'password' => Hash::make('123456'),

        ]);

        User::create([
            'id' => '3',
            'name' => 'Admin3',
            'email' => 'admin3@example.com',
            'password' => Hash::make('123456'),

        ]);
    }
}
