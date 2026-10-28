@extends('layouts.app')

@section('title', 'Formulir Pendaftaran')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-7 col-lg-6">
            <div class="card shadow-sm">
                <div class="card-body p-4">
                    <h2 class="mb-2">Formulir Pendaftaran</h2>
                    <p class="text-muted">
                        Silakan isi data diri dan pilih kursus yang ingin diikuti.
                    </p>

                    <form action="{{ route('enrollments.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Lengkap</label>
                            <input
                                type="text"
                                class="form-control @error('name') is-invalid @enderror"
                                id="name"
                                name="name"
                                value="{{ old('name') }}"
                                required
                            >
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input
                                type="email"
                                class="form-control @error('email') is-invalid @enderror"
                                id="email"
                                name="email"
                                value="{{ old('email') }}"
                                required
                            >
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="course_id" class="form-label">Pilih Kursus</label>
                            <select
                                class="form-select @error('course_id') is-invalid @enderror"
                                id="course_id"
                                name="course_id"
                                required
                            >
                                <option value="">-- Pilih Kursus --</option>
                                @foreach ($courses as $id => $course)
                                    <option value="{{ $id }}" @selected(old('course_id') == $id)>
                                        {{ $course['name'] }}
                                    </option>
                                @endforeach
                            </select>
                            @error('course_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        <div id="availability" class="alert alert-secondary mt-3">
                                Pilih kursus untuk melihat sisa kursi.
                        </div>

                        <button type="submit" class="btn btn-warning w-100">
                            Periksa Pendaftaran
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
