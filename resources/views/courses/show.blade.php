@extends('layouts.app')

@section('content')

<style>
    /* HALAMAN UTAMA */
    .profile-page {
        max-width: 750px;
        margin: 40px auto;
        padding: 0 18px;
        color: #292929;
    }

    /* JUDUL HALAMAN */
    .page-heading {
        margin-bottom: 25px;
    }

    .page-heading span {
        color: #b28a00;
        font-size: 11px;
        font-weight: 800;
        letter-spacing: 1.5px;
    }

    .page-heading h1 {
        font-size: 29px;
        font-weight: 800;
        color: #292929;
        margin: 8px 0;
    }

    .page-heading p {
        color: #888;
        font-size: 14px;
        margin: 0;
    }

    /* HEADER KURSUS */
    .profile-header {
        position: relative;
        overflow: hidden;
        background: linear-gradient(120deg, #f8d84e, #ffe98e);
        border-radius: 24px;
        padding: 38px;
        margin-bottom: 28px;
    }

    .profile-header::after {
        content: "";
        position: absolute;
        width: 220px;
        height: 220px;
        border: 35px solid rgba(255,255,255,.25);
        border-radius: 50%;
        right: -65px;
        top: -85px;
        pointer-events: none;
    }

    .profile-code {
        display: inline-block;
        background: rgba(255,255,255,.7);
        padding: 7px 15px;
        border-radius: 30px;
        font-size: 12px;
        font-weight: 700;
        letter-spacing: 1px;
    }

    .profile-header h2 {
        font-size: 32px;
        font-weight: 800;
        margin: 20px 0 10px;
        max-width: 600px;
        color: #292929;
    }

    .profile-header p {
        color: #665719;
        max-width: 600px;
        line-height: 1.7;
        margin-bottom: 25px;
    }

    /* TOMBOL */
    .profile-actions {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        position: relative;
        z-index: 2;
    }

    .profile-actions form {
        margin: 0;
    }

    .profile-actions a,
    .profile-actions button {
        display: inline-block;
        padding: 11px 19px;
        border-radius: 9px;
        text-decoration: none;
        font-size: 13px;
        font-weight: 700;
        border: none;
        cursor: pointer;
        transition: all .25s ease;
        transform: translateY(0);
    }

    .action-back {
        background: white;
        color: #444;
    }

    .action-edit {
        background: #292929;
        color: white;
    }

    .action-delete {
        background: white;
        color: #c0392b;
    }

    /* ANIMASI HOVER */
    .action-back:hover {
        background: #444;
        color: white;
        transform: translateY(-3px);
        box-shadow: 0 5px 12px rgba(0,0,0,.15);
    }

    .action-edit:hover {
        background: #555;
        color: white;
        transform: translateY(-3px);
        box-shadow: 0 5px 12px rgba(0,0,0,.15);
    }

    .action-delete:hover {
        background: #d9534f;
        color: white;
        transform: translateY(-3px);
        box-shadow: 0 5px 12px rgba(217,83,79,.2);
    }

    /* ANIMASI SAAT DITEKAN */
    .profile-actions a:active,
    .profile-actions button:active {
        transform: scale(.94);
        box-shadow: none;
    }

    .profile-actions a:focus-visible,
    .profile-actions button:focus-visible {
        outline: 3px solid #e5b900;
        outline-offset: 3px;
    }

    /* KARTU INFORMASI */
    .profile-section {
        background: #fff;
        border: 1px solid #eee;
        border-radius: 20px;
        padding: 30px;
        box-shadow: 0 6px 22px rgba(0,0,0,.035);
    }

    .section-heading {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 12px;
        margin-bottom: 24px;
    }

    .section-heading span {
        color: #b28a00;
        font-size: 11px;
        font-weight: 800;
        letter-spacing: 1.5px;
    }

    .section-heading h3 {
        font-size: 22px;
        font-weight: 800;
        margin-top: 7px;
        color: #292929;
    }

    .section-number {
        color: #e9dcae;
        font-size: 40px;
        font-weight: 800;
    }

    /* BARIS INFORMASI */
    .profile-row {
        display: grid;
        grid-template-columns: 55px 1fr 1.4fr;
        align-items: center;
        gap: 15px;
        padding: 19px 8px;
        border-top: 1px solid #f0f0f0;
    }

    .row-number {
        width: 38px;
        height: 38px;
        border-radius: 12px;
        background: #fff7d6;
        color: #a17b00;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 800;
        font-size: 13px;
    }

    .row-label {
        color: #888;
        font-size: 13px;
        font-weight: 600;
    }

    .row-value {
        color: #292929;
        font-size: 14px;
        font-weight: 700;
        text-align: right;
        overflow-wrap: anywhere;
    }

    .profile-status {
        display: inline-block;
        background: #fff3c4;
        color: #946b00;
        padding: 7px 15px;
        border-radius: 20px;
        font-size: 12px;
    }

    /* FOOTER */
    .profile-footer {
        margin-top: 22px;
        padding: 17px 20px;
        border-radius: 13px;
        background: #fffbed;
        color: #806b27;
        font-size: 13px;
        line-height: 1.7;
    }

    /* RESPONSIVE */
    @media (max-width: 600px) {
        .profile-page {
            margin: 25px auto;
        }

        .profile-header {
            padding: 25px;
        }

        .profile-header h2 {
            font-size: 25px;
        }

        .profile-section {
            padding: 22px 17px;
        }

        .profile-row {
            grid-template-columns: 42px 1fr;
            gap: 10px;
        }

        .row-value {
            grid-column: 2;
            text-align: left;
        }

        .section-number {
            font-size: 30px;
        }
    }
</style>


<div class="profile-page">

    {{-- JUDUL HALAMAN --}}
    <div class="page-heading">
        <span>HALAMAN KURSUS</span>
        <h1>Detail Kursus</h1>
        <p>Lihat informasi lengkap mengenai kursus yang dipilih.</p>
    </div>


    {{-- HEADER KURSUS --}}
    <div class="profile-header">

        <span class="profile-code">
            KODE {{ $course->code }}
        </span>

        <h2>{{ $course->name }}</h2>

        <p>
            {{ $course->description ?: 'Kenali informasi lengkap dan detail program kursus ini.' }}
        </p>

        <div class="profile-actions">

            <a href="{{ route('courses.index') }}"
               class="action-back">
                ← Kembali
            </a>

            <a href="{{ route('courses.edit', $course->id) }}"
               class="action-edit">
                Edit Kursus
            </a>

            <form action="{{ route('courses.destroy', $course->id) }}"
                  method="POST"
                  onsubmit="return confirm('Yakin ingin menghapus kursus ini?')">

                @csrf
                @method('DELETE')

                <button type="submit" class="action-delete">
                    Hapus
                </button>

            </form>

        </div>
    </div>


    {{-- INFORMASI KURSUS --}}
    <div class="profile-section">

        <div class="section-heading">
            <div>
                <span>COURSE PROFILE</span>
                <h3>Rincian Informasi Kursus</h3>
            </div>

            <div class="section-number">01</div>
        </div>


        <div class="profile-row">
            <div class="row-number">01</div>
            <div class="row-label">Kode Kursus</div>
            <div class="row-value">{{ $course->code }}</div>
        </div>


        <div class="profile-row">
            <div class="row-number">02</div>
            <div class="row-label">Nama Kursus</div>
            <div class="row-value">{{ $course->name }}</div>
        </div>


        <div class="profile-row">
            <div class="row-number">03</div>
            <div class="row-label">Deskripsi</div>
            <div class="row-value">
                {{ $course->description ?: '-' }}
            </div>
        </div>


        <div class="profile-row">
            <div class="row-number">04</div>
            <div class="row-label">Biaya Kursus</div>
            <div class="row-value">
                Rp {{ number_format($course->fee, 0, ',', '.') }}
            </div>
        </div>


        <div class="profile-row">
            <div class="row-number">05</div>
            <div class="row-label">Kuota Peserta</div>
            <div class="row-value">
                {{ $course->quota }} Peserta
            </div>
        </div>


        <div class="profile-row">
            <div class="row-number">06</div>
            <div class="row-label">Tanggal Mulai</div>
            <div class="row-value">
                {{ \Carbon\Carbon::parse($course->start_date)->format('d-m-Y') }}
            </div>
        </div>


        <div class="profile-row">
            <div class="row-number">07</div>
            <div class="row-label">Status Kursus</div>
            <div class="row-value">
                <span class="profile-status">
                    {{ ucfirst($course->status) }}
                </span>
            </div>
        </div>

    </div>


    {{-- FOOTER --}}
    <div class="profile-footer">
        <strong>Informasi KursusKu</strong><br>
        Seluruh informasi di atas merupakan data program kursus
        yang tersimpan dalam sistem KursusKu.
    </div>

</div>

@endsection
