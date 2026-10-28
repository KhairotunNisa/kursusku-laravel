<?php

namespace App\Http\Controllers;

use App\Models\Enrollment;
use Illuminate\Http\Request;

class EnrollmentController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'min:3', 'max:100'],
            'email' => ['required', 'email'],
            'course_id' => ['required', 'integer', 'in:1,2,3'],
        ]);

        Enrollment::create($validated);

        return redirect()
            ->route('enrollments.create')
            ->with('success', 'Pendaftaran berhasil disimpan ke database!');
    }
}