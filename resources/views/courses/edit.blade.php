
@extends('layouts.app')

@section('content')

<style>
/* =================================
   EDIT KURSUS - KURSUSKU
================================= */

.edit-container {
    width: calc(100% - 30px);
    max-width: 1100px;
    margin: 30px auto 60px;
    box-sizing: border-box;
}

/* Kartu utama */
.edit-card {
    width: 100%;
    background: #ffffff;
    border: 1px solid #f0e5b9;
    border-radius: 22px;
    overflow: hidden;
    box-shadow: 0 12px 35px rgba(0, 0, 0, 0.08);
}

/* Bagian atas */
.edit-header {
    background: linear-gradient(
        120deg,
        #ffe45c,
        #ffd21a,
        #ffb900
    );
    padding: 35px 40px;
    border-bottom: 5px solid #f2bd00;
}

.edit-icon {
    width: 55px;
    height: 55px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #ffffff;
    color: #e5a900;
    border-radius: 16px;
    font-size: 25px;
    margin-bottom: 15px;
}

.edit-header h2 {
    margin: 0;
    color: #171717;
    font-size: 29px;
    font-weight: 800;
}

.edit-header p {
    margin: 9px 0 0;
    color: #454545;
    font-size: 14px;
}

/* Isi formulir */
.edit-body {
    padding: 32px 40px 38px;
    background: #ffffff;
}

.edit-section-title {
    background: #fff8dc;
    border-left: 5px solid #f5c400;
    padding: 15px 18px;
    border-radius: 10px;
    margin-bottom: 25px;
    color: #252525;
    font-size: 15px;
    font-weight: 800;
}

/* Susunan form */
.edit-form {
    display: grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: 22px 25px;
}

.edit-group {
    display: flex;
    flex-direction: column;
    gap: 9px;
    min-width: 0;
}

.edit-group.full {
    grid-column: 1 / -1;
}

.edit-group label {
    color: #252525;
    font-size: 14px;
    font-weight: 700;
}

/* Input */
.edit-group input,
.edit-group select,
.edit-group textarea {
    width: 100%;
    box-sizing: border-box;
    padding: 13px 15px;
    border: 1px solid #e5e2d7;
    border-radius: 11px;
    background: #fffefa;
    color: #222222;
    font-family: inherit;
    font-size: 14px;
    outline: none;
    transition: 0.25s ease;
}

.edit-group input,
.edit-group select {
    min-height: 48px;
}

.edit-group textarea {
    min-height: 110px;
    resize: vertical;
}

.edit-group input:focus,
.edit-group select:focus,
.edit-group textarea:focus {
    border-color: #e9b900;
    background: #ffffff;
    box-shadow: 0 0 0 4px rgba(245, 196, 0, 0.15);
}

/* Pesan validasi */
.edit-error {
    color: #d93025;
    font-size: 12px;
    margin-top: 3px;
}

.edit-group input.is-invalid,
.edit-group select.is-invalid,
.edit-group textarea.is-invalid {
    border-color: #d93025;
    background: #fff8f7;
}

.edit-group input.is-invalid:focus,
.edit-group select.is-invalid:focus,
.edit-group textarea.is-invalid:focus {
    box-shadow: 0 0 0 4px rgba(217, 48, 37, 0.10);
}

/* Pemberitahuan kesalahan */
.edit-alert {
    padding: 15px 18px;
    border-radius: 10px;
    margin-bottom: 22px;
    background: #fff0ef;
    border: 1px solid #ffc9c4;
    color: #b42318;
    font-size: 13px;
}

.edit-alert ul {
    margin: 8px 0 0;
    padding-left: 20px;
}

/* Tombol */
.edit-actions {
    grid-column: 1 / -1;
    display: flex;
    justify-content: flex-end;
    align-items: center;
    gap: 12px;
    margin-top: 30px;
    padding-top: 23px;
    border-top: 1px solid #eeeeee;
}

.btn-update,
.btn-back {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-height: 46px;
    padding: 0 23px;
    border-radius: 11px;
    font-size: 14px;
    font-weight: 800;
    text-decoration: none;
    cursor: pointer;
    transition: 0.25s ease;
}

.btn-update {
    background: linear-gradient(135deg, #ffdf35, #ffbd00);
    color: #171717;
    border: none;
}

.btn-update:hover {
    background: #f0b900;
    transform: translateY(-2px);
    box-shadow: 0 6px 15px rgba(230, 180, 0, 0.25);
}

.btn-back {
    background: #ffffff;
    color: #333333;
    border: 1px solid #dddddd;
}

.btn-back:hover {
    background: #f5f5f5;
    transform: translateY(-2px);
}

/* Tampilan HP */
@media (max-width: 768px) {
    .edit-container {
        width: calc(100% - 24px);
        margin: 20px auto 35px;
    }

    .edit-header {
        padding: 25px 22px;
    }

    .edit-header h2 {
        font-size: 23px;
    }

    .edit-body {
        padding: 23px 20px;
    }

    .edit-form {
        grid-template-columns: 1fr;
        gap: 17px;
    }

    .edit-group.full {
        grid-column: auto;
    }

    .edit-actions {
        flex-direction: column-reverse;
    }

    .btn-update,
    .btn-back {
        width: 100%;
        box-sizing: border-box;
    }
}
</style>

<div class="edit-container">

    <div class="edit-card">

        <div class="edit-header">
            <div class="edit-icon">✎</div>
            <h2>Edit Data Kursus</h2>
            <p>Perbarui informasi dan detail kursus KursusKu.</p>
        </div>

        <div class="edit-body">

            <div class="edit-section-title">
                INFORMASI KURSUS
            </div>

            {{-- Pesan kesalahan validasi --}}
            @if ($errors->any())
                <div class="edit-alert">
                    <strong>Periksa kembali data yang kamu masukkan:</strong>

                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('courses.update', $course->id) }}"
                  method="POST"
                  class="edit-form">

                @csrf
                @method('PUT')

                {{-- Kode Kursus --}}
                <div class="edit-group">
                    <label for="code">Kode Kursus</label>

                    <input type="text"
                           id="code"
                           name="code"
                           value="{{ old('code', $course->code) }}"
                           maxlength="20"
                           class="@error('code') is-invalid @enderror"
                           required>

                    @error('code')
                        <span class="edit-error">{{ $message }}</span>
                    @enderror
                </div>

                {{-- Nama Kursus --}}
                <div class="edit-group">
                    <label for="name">Nama Kursus</label>

                    <input type="text"
                           id="name"
                           name="name"
                           value="{{ old('name', $course->name) }}"
                           maxlength="120"
                           class="@error('name') is-invalid @enderror"
                           required>

                    @error('name')
                        <span class="edit-error">{{ $message }}</span>
                    @enderror
                </div>

                {{-- Deskripsi --}}
                <div class="edit-group full">
                    <label for="description">Deskripsi Kursus</label>

                    <textarea id="description"
                              name="description"
                              class="@error('description') is-invalid @enderror">{{ old('description', $course->description) }}</textarea>

                    @error('description')
                        <span class="edit-error">{{ $message }}</span>
                    @enderror
                </div>

                {{-- Biaya --}}
                <div class="edit-group">
                    <label for="fee">Biaya Kursus (Rp)</label>

                    <input type="number"
                           id="fee"
                           name="fee"
                           value="{{ old('fee', $course->fee) }}"
                           min="0"
                           class="@error('fee') is-invalid @enderror"
                           required>

                    @error('fee')
                        <span class="edit-error">{{ $message }}</span>
                    @enderror
                </div>

                {{-- Kuota --}}
                <div class="edit-group">
                    <label for="quota">Kuota Peserta</label>

                    <input type="number"
                           id="quota"
                           name="quota"
                           value="{{ old('quota', $course->quota) }}"
                           min="1"
                           max="500"
                           class="@error('quota') is-invalid @enderror"
                           required>

                    @error('quota')
                        <span class="edit-error">{{ $message }}</span>
                    @enderror
                </div>

                {{-- Tanggal --}}
                <div class="edit-group">
                    <label for="start_date">Tanggal Mulai</label>

                    <input type="date"
                           id="start_date"
                           name="start_date"
                           value="{{ old('start_date', $course->start_date->format('Y-m-d')) }}"
                           class="@error('start_date') is-invalid @enderror"
                           required>

                    @error('start_date')
                        <span class="edit-error">{{ $message }}</span>
                    @enderror
                </div>

                {{-- Status --}}
                <div class="edit-group">
                    <label for="status">Status Kursus</label>

                    <select id="status"
                            name="status"
                            class="@error('status') is-invalid @enderror"
                            required>

                        <option value="draft"
                            {{ old('status', $course->status) == 'draft' ? 'selected' : '' }}>
                            Draft
                        </option>

                        <option value="open"
                            {{ old('status', $course->status) == 'open' ? 'selected' : '' }}>
                            Open
                        </option>

                        <option value="closed"
                            {{ old('status', $course->status) == 'closed' ? 'selected' : '' }}>
                            Closed
                        </option>

                    </select>

                    @error('status')
                        <span class="edit-error">{{ $message }}</span>
                    @enderror
                </div>

                {{-- Tombol --}}
                <div class="edit-actions">

                    <button type="submit" class="btn-update">
                        Simpan Perubahan
                    </button>

                    <a href="{{ route('courses.index') }}" class="btn-back">
                        Kembali
                    </a>

                </div>

            </form>

        </div>
    </div>
</div>

@endsection
