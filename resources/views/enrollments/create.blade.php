@extends('layouts.app')

@section('title', 'Formulir Pendaftaran')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-7 col-lg-6">
        <div class="card shadow-sm">
            <div class="card-body p-4">
                <h2 class="mb-2">Formulir Pendaftaran</h2>
                <p class="text-muted">
                    Pilih peserta dan kursus yang ingin diikuti.
                </p>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('enrollments.store') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="participant_id" class="form-label">
                            Pilih Peserta
                        </label>
                        <select
                            class="form-select @error('participant_id') is-invalid @enderror"
                            id="participant_id"
                            name="participant_id"
                            required
                        >
                            <option value="">-- Pilih Peserta --</option>
                            @foreach ($participants as $participant)
                                <option
                                    value="{{ $participant->id }}"
                                    @selected(old('participant_id') == $participant->id)
                                >
                                    {{ $participant->name }} ({{ $participant->email }})
                                </option>
                            @endforeach
                        </select>
                        @error('participant_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="course_id" class="form-label">
                            Pilih Kursus
                        </label>
                        <select
                            class="form-select @error('course_id') is-invalid @enderror"
                            id="course_id"
                            name="course_id"
                            required
                        >
                            <option value="">-- Pilih Kursus --</option>
                            @foreach ($courses as $course)
                                <option
                                    value="{{ $course->id }}"
                                    @selected(old('course_id') == $course->id)
                                >
                                    {{ $course->name }} - {{ $course->code }}
                                </option>
                            @endforeach
                        </select>
                        @error('course_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-warning w-100">
                        Daftarkan Peserta
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection