<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Course::create([
            'name' => 'Curso de Laravel',
            'description' => 'Este es el curso completo de Laravel, desde cero',
            'user_id' => 1
        ]);

        Course::create([
            'name' => 'Aprendiendo VueJs',
            'description' => 'VueJS es una librería para crear interfaces de usuarios',
            'user_id' => 1
        ]);
    }
}
