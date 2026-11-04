
@extends('layouts.app')

@section('content')
<style>
    .course-create-page {
        min-height: 100vh;
        padding: 40px 16px 60px;
        background: linear-gradient(135deg, #fffbea 0%, #fff7d6 55%, #fffdf5 100%);
    }

    .course-create-wrapper {
        max-width: 850px;
        margin: 0 auto;
    }

    .course-back-link {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        margin-bottom: 24px;
        color: #765400;
        text-decoration: none;
        font-weight: 600;
    }

    .course-back-link:hover {
        color: #b98200;
    }

    .course-create-heading {
        margin-bottom: 25px;
    }

    .course-create-eyebrow {
        display: inline-block;
        padding: 7px 13px;
        border-radius: 30px;
        background: #fff0ad;
        color: #805b00;
        font-size: 12px;
        font-weight: 800;
        letter-spacing: 1px;
        text-transform: uppercase;
    }

    .course-create-heading h1 {
        margin: 15px 0 8px;
        color: #29220e;
        font-size: clamp(28px, 4vw, 38px);
        font-weight: 800;
        letter-spacing: -1px;
    }

    .course-create-heading p {
        color: #80765f;
        font-size: 15px;
        line-height: 1.7;
    }

    .course-create-card {
        overflow: hidden;
        border: 1px solid #f0e5bd;
        border-radius: 22px;
        background: #fff;
        box-shadow: 0 15px 45px rgba(104, 78, 0, 0.09);
    }

    .course-create-card-header {
        display: flex;
        align-items: center;
        gap: 15px;
        padding: 23px 28px;
        background: linear-gradient(110deg, #ffdc54, #ffec9a);
        border-bottom: 1px solid #f1d76d;
    }

    .course-create-icon {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        width: 48px;
        height: 48px;
        border-radius: 15px;
        background: rgba(255, 255, 255, 0.75);
        color: #765400;
        font-size: 24px;
        font-weight: 800;
    }

    .course-create-card-header h2 {
        margin: 0 0 5px;
        color: #392b00;
        font-size: 19px;
        font-weight: 800;
    }

    .course-create-card-header p {
        margin: 0;
        color: #705a16;
        font-size: 13px;
    }

    .course-create-form {
        padding: 30px;
    }

    .course-form-grid {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 22px;
    }

    .course-form-field {
        min-width: 0;
    }

    .course-form-field.full-width {
        grid-column: 1 / -1;
    }

    .course-form-field label {
        display: block;
        margin-bottom: 9px;
        color: #373020;
        font-size: 13px;
        font-weight: 700;
    }

    .course-form-field label span {
        color: #d97706;
    }

    .course-form-field input,
    .course-form-field textarea,
    .course-form-field select {
        display: block;
        width: 100%;
        box-sizing: border-box;
        padding: 13px 14px;
        border: 1px solid #e8e1d0;
        border-radius: 11px;
        background: #fffefa;
        color: #29251b;
        font: inherit;
        font-size: 14px;
        outline: none;
        transition: border-color .2s, box-shadow .2s;
    }

    .course-form-field input,
    .course-form-field select {
        min-height: 48px;
    }

    .course-form-field textarea {
        min-height: 110px;
        resize: vertical;
    }

    .course-form-field input:focus,
    .course-form-field textarea:focus,
    .course-form-field select:focus {
        border-color: #e6b800;
        box-shadow: 0 0 0 4px rgba(255, 211, 51, .2);
    }

    .course-form-field input::placeholder,
    .course-form-field textarea::placeholder {
        color: #aaa18e;
    }

    .course-form-error {
        margin-top: 6px;
        color: #dc2626;
        font-size: 12px;
    }

    .course-form-hint {
        margin-top: 7px;
        color: #918773;
        font-size: 12px;
    }

    .course-form-actions {
        display: flex;
        flex-wrap: wrap;
        gap: 12px;
        margin-top: 30px;
        padding-top: 24px;
        border-top: 1px solid #f0eadb;
    }

    .course-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        min-height: 46px;
        padding: 0 20px;
        border: 0;
        border-radius: 11px;
        font-size: 14px;
        font-weight: 700;
        text-decoration: none;
        cursor: pointer;
        transition: transform .2s, box-shadow .2s;
    }

    .course-btn:hover {
        transform: translateY(-2px);
    }

    .course-btn-primary {
        background: #f5c928;
        color: #382900;
        box-shadow: 0 5px 14px rgba(197, 151, 0, .18);
    }

    .course-btn-primary:hover {
        background: #ffdb4c;
        color: #382900;
        box-shadow: 0 8px 18px rgba(197, 151, 0, .23);
    }

    .course-btn-secondary {
        border: 1px solid #e8e1d0;
        background: #fff;
        color: #655b47;
    }

    .course-btn-secondary:hover {
        background: #faf7ee;
        color: #403725;
    }

    .course-create-note {
        display: flex;
        align-items: flex-start;
        gap: 10px;
        margin-top: 20px;
        padding: 15px 17px;
        border: 1px solid #f1e4b5;
        border-radius: 13px;
        background: rgba(255, 255, 255, .75);
        color: #786638;
        font-size: 12px;
        line-height: 1.7;
    }

    @media (max-width: 600px) {
        .course-create-page {
            padding: 25px 12px 40px;
        }

        .course-create-card-header {
            padding: 20px;
        }

        .course-create-form {
            padding: 21px 17px;
        }

        .course-form-grid {
            grid-template-columns: 1fr;
            gap: 18px;
        }

        .course-form-field.full-width {
            grid-column: auto;
        }

        .course-form-actions {
            flex-direction: column;
        }

        .course-btn {
            width: 100%;
            box-sizing: border-box;
        }
    }
</style>

<div class="course-create-page">
    <div class="course-create-wrapper">

        <a href="{{ route('courses.index') }}" class="course-back-link">
            <span aria-hidden="true">←</span>
            Kembali ke daftar kursus
        </a>

        <div class="course-create-heading">
            <span class="course-create-eyebrow">KursusKu · Admin</span>
            <h1>Tambah Kursus Baru</h1>
            <p>
                Lengkapi informasi di bawah ini untuk menambahkan
                program kursus ke katalog KursusKu.
            </p>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger mb-4">
                <strong>Periksa kembali data yang kamu masukkan.</strong>
                <ul class="mb-0 mt-2">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="course-create-card">
            <div class="course-create-card-header">
                <div class="course-create-icon" aria-hidden="true">+</div>
                <div>
                    <h2>Informasi Kursus</h2>
                    <p>Isi setiap kolom yang bertanda wajib.</p>
                </div>
            </div>

            <form
                action="{{ route('courses.store') }}"
                method="POST"
                class="course-create-form"
            >
                @csrf

                <div class="course-form-grid">

                    <div class="course-form-field">
                        <label for="code">
                            Kode Kursus <span>*</span>
                        </label>
                        <input
                            type="text"
                            id="code"
                            name="code"
                            value="{{ old('code') }}"
                            placeholder="Contoh: WEB-101"
                            maxlength="20"
                            required
                        >
                        @error('code')
                            <div class="course-form-error">{{ $message }}</div>
                        @enderror
                        <div class="course-form-hint">
                            Gunakan kode yang unik.
                        </div>
                    </div>

                    <div class="course-form-field">
                        <label for="name">
                            Nama Kursus <span>*</span>
                        </label>
                        <input
                            type="text"
                            id="name"
                            name="name"
                            value="{{ old('name') }}"
                            placeholder="Contoh: Web Dasar"
                            maxlength="120"
                            required
                        >
                        @error('name')
                            <div class="course-form-error">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="course-form-field full-width">
                        <label for="description">Deskripsi Kursus</label>
                        <textarea
                            id="description"
                            name="description"
                            placeholder="Jelaskan materi yang akan dipelajari peserta..."
                        >{{ old('description') }}</textarea>
                        @error('description')
                            <div class="course-form-error">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="course-form-field">
                        <label for="fee">
                            Biaya Kursus (Rp) <span>*</span>
                        </label>
                        <input
                            type="number"
                            id="fee"
                            name="fee"
                            value="{{ old('fee', 0) }}"
                            min="0"
                            placeholder="300000"
                            required
                        >
                        @error('fee')
                            <div class="course-form-error">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="course-form-field">
                        <label for="quota">
                            Kuota Peserta <span>*</span>
                        </label>
                        <input
                            type="number"
                            id="quota"
                            name="quota"
                            value="{{ old('quota', 20) }}"
                            min="1"
                            max="500"
                            required
                        >
                        @error('quota')
                            <div class="course-form-error">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="course-form-field">
                        <label for="start_date">
                            Tanggal Mulai <span>*</span>
                        </label>
                        <input
                            type="date"
                            id="start_date"
                            name="start_date"
                            value="{{ old('start_date') }}"
                            required
                        >
                        @error('start_date')
                            <div class="course-form-error">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="course-form-field">
                        <label for="status">
                            Status Kursus <span>*</span>
                        </label>
                        <select id="status" name="status" required>
                            <option value="draft"
                                @selected(old('status', 'draft') === 'draft')>
                                Draft
                            </option>
                            <option value="open"
                                @selected(old('status') === 'open')>
                                Open
                            </option>
                            <option value="closed"
                                @selected(old('status') === 'closed')>
                                Closed
                            </option>
                        </select>
                        @error('status')
                            <div class="course-form-error">{{ $message }}</div>
                        @enderror
                    </div>

                </div>

                <div class="course-form-actions">
                    <button type="submit" class="course-btn course-btn-primary">
                        Simpan Kursus
                        <span aria-hidden="true">→</span>
                    </button>

                    <a
                        href="{{ route('courses.index') }}"
                        class="course-btn course-btn-secondary"
                    >
                        Batal
                    </a>
                </div>
            </form>
        </div>

        <div class="course-create-note">
            <span aria-hidden="true">ⓘ</span>
            <div>
                <strong>Catatan:</strong>
                Pastikan kode kursus belum digunakan dan semua informasi
                sudah benar sebelum menyimpan.
            </div>
        </div>

    </div>
</div>
@endsection
