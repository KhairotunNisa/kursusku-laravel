<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    public function run(): void
    {
        $courses = [
            [
                'code' => 'WEB-101',
                'name' => 'Web Dasar',
                'description' => 'Pengenalan dasar pengembangan web.',
                'fee' => 200000,
                'quota' => 20,
                'start_date' => '2026-11-10',
                'status' => 'open',
            ],
            [
                'code' => 'PHP-101',
                'name' => 'PHP Dasar',
                'description' => 'Belajar pemrograman PHP dasar.',
                'fee' => 250000,
                'quota' => 20,
                'start_date' => '2026-11-12',
                'status' => 'open',
            ],
        ];

        foreach ($courses as $course) {
            Course::updateOrCreate(
                ['code' => $course['code']],
                $course
            );
        }
    }
}
