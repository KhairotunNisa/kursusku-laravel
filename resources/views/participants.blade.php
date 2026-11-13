@extends('layouts.app')

@section('title', 'Data Participant - KursusKu')

@section('content')
<div class="container py-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2>Data Participant</h2>
            <p class="text-muted">
                Daftar peserta yang terdaftar di KursusKu.
            </p>
        </div>

        <a href="{{ route('enrollments.create') }}" class="btn btn-dark">
            + Tambah Participant
        </a>
    </div>

    <div class="card shadow-sm">
        <div class="card-body table-responsive">

            <table class="table table-bordered table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Nomor Telepon</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($participants as $participant)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $participant->name }}</td>
                        <td>{{ $participant->email }}</td>
                        <td>{{ $participant->phone ?? '-' }}</td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" class="text-center">
                            Belum ada data participant.
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>

        </div>
    </div>

</div>
@endsection