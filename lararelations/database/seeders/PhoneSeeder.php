<?php

namespace Database\Seeders;

use App\Models\Phone;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PhoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Phone::create([
            'prefix' => 34,
            'phone_number' => '601234567',
            'user_id' => 1
        ]);
    }
}
