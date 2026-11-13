<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\ParticipantController;

Route::get('/', [HomeController::class, 'index'])
    ->name('home');

// Route pendaftaran kursus
Route::resource('enrollments', EnrollmentController::class)
    ->only(['index', 'create', 'store']);

// Route ketersediaan kursus
Route::get('/courses/{course}/availability', function (int $course) {
    $availability = [
        1 => [
            'course' => 'Web Dasar',
            'remaining' => 12,
        ],
        2 => [
            'course' => 'PHP Dasar',
            'remaining' => 8,
        ],
        3 => [
            'course' => 'Laravel Dasar',
            'remaining' => 4,
        ],
    ];

    abort_unless(isset($availability[$course]), 404);

    return response()->json($availability[$course]);
})->name('courses.availability');

// CRUD kursus
Route::resource('courses', CourseController::class);

// Data Participant
Route::get('/participants', [ParticipantController::class, 'index'])
    ->name('participants.index');