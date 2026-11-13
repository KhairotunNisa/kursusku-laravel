@extends('layouts.app')

@section('title', 'Data Pendaftaran')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2>Data Pendaftaran Kursus</h2>
            <p class="text-muted">Daftar peserta yang telah mendaftar kursus.</p>
        </div>

        <a href="{{ route('enrollments.create') }}" class="btn btn-warning">
            + Tambah Pendaftaran
        </a>
    </div>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card shadow-sm">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle">
                    <thead class="table-warning">
                        <tr>
                            <th>No.</th>
                            <th>Nama Peserta</th>
                            <th>Email</th>
                            <th>Nama Kursus</th>
                            <th>Tanggal Mulai</th>
                            <th>Status</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($enrollments as $enrollment)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $enrollment->participant->name }}</td>
                                <td>{{ $enrollment->participant->email }}</td>
                                <td>{{ $enrollment->course->name }}</td>
                                <td>
                                    {{ $enrollment->course->start_date->format('d/m/Y') }}
                                </td>
                                <td>
                                    <span class="badge bg-success">
                                        {{ ucfirst($enrollment->status) }}
                                    </span>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center text-muted">
                                    Belum ada data pendaftaran.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection