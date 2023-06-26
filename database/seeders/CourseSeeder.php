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
        $courses = [
            ['name' => 'Mathematics'],
            ['name' => 'Science'],
            ['name' => 'English'],
            ['name' => 'Hindi'],

        ];
        Course::insert($courses);
    }
}
