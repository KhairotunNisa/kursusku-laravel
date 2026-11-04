# KursusKu Laravel

## Deskripsi

KursusKu merupakan website informasi dan pengelolaan kursus pemrograman yang dikembangkan menggunakan framework Laravel. Website ini dibuat untuk memudahkan pengguna melihat informasi kursus serta membantu admin dalam mengelola data kursus dan pendaftaran peserta.

## Fitur

- Menampilkan halaman utama KursusKu.
- Menampilkan daftar kursus yang tersedia.
- Menambahkan data kursus.
- Menampilkan detail dan daftar data kursus.
- Mengedit data kursus.
- Menghapus data kursus.
- Menyediakan form pendaftaran kursus.
- Menyimpan data ke database MySQL.
- Menggunakan validasi pada form.
- Menggunakan Route, Controller, Model, dan Blade View.

## Teknologi yang Digunakan

- PHP 8.3
- Laravel 13
- MySQL
- HTML
- CSS
- JavaScript
- Vite

## Struktur Utama Project

```text
kursusku-laravel/
├── app/
│   ├── Http/Controllers/
│   │   └── CourseController.php
│   └── Models/
│       └── Course.php
├── database/
│   ├── migrations/
│   └── seeders/
│       └── CourseSeeder.php
├── resources/
│   └── views/
│       └── courses/
│           ├── index.blade.php
│           ├── create.blade.php
│           └── edit.blade.php
├── routes/
│   └── web.php
└── evidence/
    └── week-10/
```

## Cara Menjalankan Project

1. Buka folder project melalui VS Code.
2. Jalankan terminal pada folder project.
3. Instal dependensi jika belum tersedia:

   `composer install`

4. Siapkan file `.env` berdasarkan `.env.example` dan sesuaikan konfigurasi database.
5. Buat database dengan nama `kursusku` melalui phpMyAdmin.
6. Jalankan migration:

   `php artisan migrate`

7. Instal dependensi frontend:

   `npm install`

8. Jalankan proses build:

   `npm run build`

9. Jalankan server Laravel:

   `php artisan serve`

10. Buka browser dan akses:

    `http://127.0.0.1:8000`

## Database

Project menggunakan MySQL dengan nama database `kursusku`.

Data kursus disimpan pada tabel `courses`, sedangkan pengelolaan data dilakukan melalui fitur CRUD yang tersedia pada aplikasi.

## Dokumentasi

Bukti pengerjaan praktikum disimpan pada folder:

`evidence/week-10/`

Folder tersebut berisi screenshot database, struktur tabel, form kursus, daftar data, hasil validasi, dokumentasi pengujian, dan AI Usage Log.