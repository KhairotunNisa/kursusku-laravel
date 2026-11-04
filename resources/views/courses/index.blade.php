@extends('layouts.app')

@section('content')
<style>

/* ==========================================
   KURSUSKU - DASHBOARD DESIGN
   Yellow | White | Black
========================================== */

.course-index-page,
.course-index-page * {
    box-sizing: border-box;
}

.course-index-page {
    width: 100%;
    min-height: 100vh;
    padding: 35px 30px 60px;
    background: #f5f6f8;
    color: #262626;
    font-family: 'Segoe UI', Arial, sans-serif;
}

.course-index-wrapper {
    width: 100%;
    max-width: 1000px;
    margin: 0 auto;
}

/* ==========================================
   HEADER KECIL
========================================== */

.course-index-eyebrow {
    display: inline-block;
    margin-bottom: 12px;
    color: #927300;
    font-size: 12px;
    font-weight: 700;
    letter-spacing: .5px;
}

/* ==========================================
   JUDUL DAN HEADER
========================================== */

.course-index-heading {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 25px;
    padding: 32px 35px;
    margin-bottom: 25px;
    border: 1px solid #f0d66b;
    border-radius: 20px;
    background: linear-gradient(120deg, #fff2a6, #ffdf55, #ffc928);
    box-shadow: 0 8px 25px rgba(191, 153, 0, .10);
}

.course-index-heading h1 {
    margin: 0 0 10px !important;
    color: #222 !important;
    font-size: 30px !important;
    font-weight: 800 !important;
    line-height: 1.25;
    letter-spacing: -.8px;
}

.course-index-heading p {
    margin: 0;
    color: #62551f;
    font-size: 13px;
    line-height: 1.7;
}

/* ==========================================
   TOMBOL TAMBAH KURSUS
========================================== */

.course-index-add {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 9px;
    flex-shrink: 0;
    padding: 13px 21px;
    border: 1px solid #252525;
    border-radius: 10px;
    background: #252525;
    color: #fff !important;
    font-size: 12px;
    font-weight: 700;
    text-decoration: none !important;
    transition: all .25s ease;
}

.course-index-add span {
    font-size: 19px;
    line-height: 1;
}

.course-index-add:hover {
    background: #fff;
    color: #252525 !important;
    transform: translateY(-3px);
    box-shadow: 0 6px 16px rgba(0,0,0,.12);
}

/* ==========================================
   NOTIFIKASI BERHASIL
========================================== */

.course-success-alert {
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 15px 18px;
    margin-bottom: 23px;
    border: 1px solid #bce8c7;
    border-radius: 11px;
    background: #edfff1;
    color: #237a3b;
    font-size: 13px;
    font-weight: 600;
}

/* ==========================================
   KARTU STATISTIK
========================================== */

.course-stats {
    display: grid;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    gap: 20px;
    margin-bottom: 27px;
}

.course-stat-card {
    position: relative;
    overflow: hidden;
    min-height: 155px;
    padding: 25px;
    border: 1px solid #e9ebef;
    border-radius: 17px;
    background: #fff;
    box-shadow: 0 5px 18px rgba(0,0,0,.035);
    transition: all .25s ease;
}

.course-stat-card::after {
    content: "";
    position: absolute;
    right: -28px;
    bottom: -38px;
    width: 110px;
    height: 110px;
    border-radius: 50%;
    background: #fff7d8;
}

.course-stat-card:hover {
    transform: translateY(-4px);
    border-color: #efd36b;
    box-shadow: 0 10px 25px rgba(0,0,0,.07);
}

.course-stat-label {
    position: relative;
    z-index: 1;
    margin-bottom: 14px;
    color: #777e89;
    font-size: 12px;
    font-weight: 700;
}

.course-stat-value {
    position: relative;
    z-index: 1;
    margin-bottom: 7px;
    color: #242424;
    font-size: 35px;
    font-weight: 800;
    line-height: 1.2;
    letter-spacing: -1px;
}

.course-stat-caption {
    position: relative;
    z-index: 1;
    color: #9298a2;
    font-size: 11px;
}

/* ==========================================
   PANEL TABEL KURSUS
========================================== */

.course-table-card {
    width: 100%;
    padding: 28px;
    overflow: hidden;
    border: 1px solid #e9ebef;
    border-radius: 19px;
    background: #fff;
    box-shadow: 0 5px 22px rgba(0,0,0,.035);
}

/* ==========================================
   JUDUL TABEL
========================================== */

.course-table-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 15px;
    margin-bottom: 24px;
}

.course-table-header h2 {
    margin: 0 0 7px !important;
    color: #252525 !important;
    font-size: 21px !important;
    font-weight: 800 !important;
    line-height: 1.4;
}

.course-table-header p {
    margin: 0;
    color: #9298a2;
    font-size: 12px;
}

.course-total-badge {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    padding: 9px 15px;
    border: 1px solid #f1e3a8;
    border-radius: 9px;
    background: #fff5cb;
    color: #806300;
    font-size: 11px;
    font-weight: 800;
    white-space: nowrap;
}

/* ==========================================
   PEMBUNGKUS TABEL
========================================== */

.course-table-responsive {
    width: 100%;
    overflow-x: auto;
    border: 1px solid #eceef1;
    border-radius: 12px;
}

/* ==========================================
   TABEL
========================================== */

.course-index-table {
    width: 100%;
    min-width: 900px;
    border-collapse: separate;
    border-spacing: 0;
    background: #fff;
}

.course-index-table thead th {
    padding: 16px 15px;
    background: #faf8ef;
    border-bottom: 1px solid #e9e5d8;
    color: #555b65;
    text-align: left;
    font-size: 10px;
    font-weight: 800;
    letter-spacing: .5px;
    text-transform: uppercase;
    white-space: nowrap;
}

.course-index-table tbody td {
    padding: 16px 15px;
    border-bottom: 1px solid #f0f1f3;
    color: #626875;
    font-size: 12px;
    vertical-align: middle;
}

.course-index-table tbody tr {
    transition: background .2s ease;
}

.course-index-table tbody tr:hover {
    background: #fffdf5;
}

.course-index-table tbody tr:last-child td {
    border-bottom: none;
}

/* ==========================================
   KODE KURSUS
========================================== */

.course-index-table .course-code {
    display: inline-block;
    padding: 7px 10px;
    border-radius: 7px;
    background: #fff4c5;
    color: #816200;
    font-size: 10px;
    font-weight: 800;
    letter-spacing: .3px;
}

/* ==========================================
   NAMA KURSUS
========================================== */

.course-index-table .course-name {
    color: #252525;
    font-size: 12px;
    font-weight: 750;
}

.course-index-table .course-description {
    margin-top: 5px;
    color: #999;
    font-size: 10px;
}

/* ==========================================
   BIAYA KURSUS
========================================== */

.course-index-table .course-fee {
    color: #252525;
    font-size: 12px;
    font-weight: 800;
    white-space: nowrap;
}

/* ==========================================
   STATUS KURSUS
========================================== */

.course-index-table .course-status {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-width: 65px;
    padding: 7px 12px;
    border-radius: 20px;
    font-size: 10px;
    font-weight: 800;
}

.course-index-table .course-status-open {
    background: #e8f8ed;
    color: #258343;
}

.course-index-table .course-status-draft {
    background: #fff5d8;
    color: #a17b00;
}

.course-index-table .course-status-closed {
    background: #ffeded;
    color: #ce4545;
}
/* TOMBOL DETAIL */

.course-index-table .btn-detail {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    padding: 9px 13px;
    margin-right: 5px;
    border: 1px solid #252525;
    border-radius: 8px;
    background: #252525;
    color: #ffd900 !important;
    font-size: 10px;
    font-weight: 800;
    text-decoration: none !important;
    cursor: pointer;
    transition: all .2s ease;
    white-space: nowrap;
}

.course-index-table .btn-detail:hover {
    background: #ffd52e;
    color: #252525 !important;
    transform: translateY(-2px);
}
/* ==========================================
   TOMBOL EDIT DAN HAPUS
========================================== */

.course-index-table .btn-edit,
.course-index-table .btn-delete {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    padding: 9px 13px;
    border-radius: 8px;
    font-size: 10px;
    font-weight: 800;
    text-decoration: none !important;
    cursor: pointer;
    transition: all .2s ease;
}

.course-index-table .btn-edit {
    margin-right: 5px;
    border: 1px solid #f0df9b;
    background: #fff4c5;
    color: #715800 !important;
}

.course-index-table .btn-edit:hover {
    background: #ffd52e;
    color: #252525 !important;
    transform: translateY(-2px);
}

.course-index-table .btn-delete {
    border: 1px solid #ffdbd8;
    background: #fff0ef;
    color: #c43e3e;
}

.course-index-table .btn-delete:hover {
    background: #d94343;
    color: #fff;
    transform: translateY(-2px);
}

/* MERAPIKAN TOMBOL AKSI */

.course-index-table tbody td:last-child {
    white-space: nowrap;
    min-width: 190px;
}

.course-index-table form {
    display: inline-flex !important;
    margin: 0;
    vertical-align: middle;
}

.course-index-table .btn-detail,
.course-index-table .btn-edit,
.course-index-table .btn-delete {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    vertical-align: middle;
    white-space: nowrap;
}

/* ==========================================
   DATA KOSONG
========================================== */

.course-index-table .course-empty {
    padding: 45px 20px;
    color: #9298a2;
    text-align: center;
}

.course-empty-icon {
    display: block;
    margin-bottom: 12px;
    color: #d4a900;
    font-size: 30px;
}

.course-empty strong {
    color: #252525;
    font-size: 15px;
}

.course-empty p {
    margin: 8px 0 15px;
    font-size: 12px;
}

/* ==========================================
   RESPONSIVE TABLET
========================================== */

@media (max-width: 900px) {
    .course-index-page {
        padding: 25px 20px 45px;
    }

    .course-stats {
        grid-template-columns: repeat(2, minmax(0, 1fr));
    }

    .course-index-heading {
        align-items: flex-start;
        flex-direction: column;
    }
}

/* ==========================================
   RESPONSIVE HP
========================================== */

@media (max-width: 600px) {
    .course-index-page {
        padding: 20px 13px 35px;
    }

    .course-index-heading {
        padding: 24px 20px;
        border-radius: 15px;
    }

    .course-index-heading h1 {
        font-size: 24px !important;
    }

    .course-index-heading p {
        font-size: 12px;
    }

    .course-stats {
        grid-template-columns: 1fr;
        gap: 13px;
    }

    .course-stat-card {
        min-height: 135px;
        padding: 20px;
    }

    .course-table-card {
        padding: 17px;
        border-radius: 15px;
    }

    .course-table-header {
        align-items: flex-start;
        flex-direction: column;
    }

    .course-table-header h2 {
        font-size: 18px !important;
    }
}
 </style>


<div class="course-index-page">
    <div class="course-index-wrapper">

        <span class="course-index-eyebrow">
            KursusKu · Dashboard
        </span>

        <div class="course-index-heading">
            <div>
                <h1>Daftar Kursus</h1>
                <p>
                    Kelola program pelatihan dan pantau informasi kursus
                    dalam satu halaman.
                </p>
            </div>

            <a href="{{ route('courses.create') }}"
               class="course-index-add">
                <span aria-hidden="true">+</span>
                Tambah Kursus
            </a>
        </div>

        @if (session('success'))
            <div class="course-success-alert">
                ✓ {{ session('success') }}
            </div>
        @endif

        <div class="course-stats">
            <div class="course-stat-card">
                <div class="course-stat-label">Total Kursus</div>
                <div class="course-stat-value">
                    {{ $courses->count() }}
                </div>
                <div class="course-stat-caption">
                    Seluruh program terdaftar
                </div>
            </div>

            <div class="course-stat-card">
                <div class="course-stat-label">Kursus Dibuka</div>
                <div class="course-stat-value">
                    {{ $courses->where('status', 'open')->count() }}
                </div>
                <div class="course-stat-caption">
                    Program dengan status open
                </div>
            </div>

            <div class="course-stat-card">
                <div class="course-stat-label">Total Kuota</div>
                <div class="course-stat-value">
                    {{ $courses->sum('quota') }}
                </div>
                <div class="course-stat-caption">
                    Akumulasi kuota seluruh kursus
                </div>
            </div>
        </div>

        <div class="course-table-card">
            <div class="course-table-header">
                <div>
                    <h2>Semua Program Kursus</h2>
                    <p>Informasi kursus yang tersimpan di database.</p>
                </div>

                <span class="course-total-badge">
                    {{ $courses->count() }} kursus
                </span>
            </div>

            <div class="course-table-responsive">
                <table class="course-index-table">
                    <thead>
                        <tr>
                            <th>Kode</th>
                            <th>Informasi Kursus</th>
                            <th>Biaya</th>
                            <th>Kuota</th>
                            <th>Tanggal Mulai</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($courses as $course)
                            <tr>
                                <td>
                                    <span class="course-code">
                                        {{ $course->code }}
                                    </span>
                                </td>

                                <td>
                                    <div class="course-name">
                                        {{ $course->name }}
                                    </div>

                                    @if ($course->description)
                                        <div class="course-description">
                                            {{ $course->description }}
                                        </div>
                                    @endif
                                </td>

                                <td>
                                    <span class="course-fee">
                                        Rp {{ number_format($course->fee, 0, ',', '.') }}
                                    </span>
                                </td>

                                <td>{{ $course->quota }} peserta</td>

                                <td>
                                    {{ $course->start_date->format('d/m/Y') }}
                                </td>

                                <td>
                                                                    <td>
                                    <span class="course-status course-status-{{ $course->status }}">
                                        @if ($course->status === 'open')
                                            Open
                                        @elseif ($course->status === 'draft')
                                            Draft
                                        @else
                                            Closed
                                        @endif
                                    </span>
                                </td>

                                <!-- TOMBOL EDIT DAN HAPUS -->
                                <td>
                                    <a href="{{ route('courses.show', $course->id) }}" 
                                        class="btn-detail">
                                        Detail
                                    </a>
                                    <a href="{{ route('courses.edit', $course->id) }}"
                                       class="btn-edit">
                                        Edit
                                    </a>

                                    <form action="{{ route('courses.destroy', $course->id) }}"
                                          method="POST"
                                          style="display: inline;"
                                          onsubmit="return confirm('Yakin ingin menghapus kursus ini?')">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn-delete">
                                            Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="course-empty">
                                    <span class="course-empty-icon">＋</span>
                                    <strong>Belum ada kursus</strong>
                                    <p class="mt-2 mb-3">
                                        Tambahkan kursus pertama untuk mulai
                                        mengisi katalog KursusKu.
                                    </p>
                                    <a href="{{ route('courses.create') }}"
                                       class="course-index-add">
                                        Tambah Kursus Pertama
                                    </a>
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
