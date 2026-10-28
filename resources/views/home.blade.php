
@extends('layouts.app')

@section('title', $siteName)

@section('content')
    <section class="hero">
        <div>
            <p>Belajar Web Secara Bertahap</p>

            <h1>
                Bangun kemampuan web dari PHP sampai Laravel.
            </h1>

            <p>
                KursusKu menyediakan latihan terarah untuk pemula.
            </p>
        </div>

        <div class="hero-kursus">
            <img src="{{ asset('images/hero-kursus.jpg') }}" alt="Ilustrasi KursusKu">
        </div>
        
    </section>

    <section class="courses" id="kursus">
        <h2>Kursus Unggulan</h2>

        <div class="course-grid">
            @foreach ($featured as $course)
                <article class="card">
                    <small>{{ $course['code'] }}</small>

                    <h3>{{ $course['name'] }}</h3>

                    <p>{{ $course['description'] }}</p>
                </article>
            @endforeach
        </div>
    </section>
    
<section class="cara-daftar" id="cara-daftar">
    <div class="container">
        <div class="cara-header">
            <span class="label-cara">MULAI BELAJAR</span>
            <h2>Cara Daftar Kursus</h2>
            <p>
                Ikuti langkah mudah berikut untuk memulai perjalanan
                belajar web bersama KursusKu.
            </p>
        </div>

        <div class="cara-grid">
            <div class="cara-card">
                <div class="nomor-cara">01</div>
                <h3>Pilih Kursus</h3>
                <p>
                    Lihat katalog kursus dan pilih materi yang
                    sesuai dengan kebutuhanmu.
                </p>
            </div>

            <div class="cara-card">
                <div class="nomor-cara">02</div>
                <h3>Isi Formulir</h3>
                <p>
                    Klik tombol Daftar Sekarang, kemudian isi
                    data diri dan pilihan kursus dengan benar.
                </p>
            </div>

            <div class="cara-card">
                <div class="nomor-cara">03</div>
                <h3>Periksa Data</h3>
                <p>
                    Pastikan informasi pendaftaran sudah benar
                    sebelum mengirim formulir.
                </p>
            </div>

            <div class="cara-card">
                <div class="nomor-cara">04</div>
                <h3>Mulai Belajar</h3>
                <p>
                    Ikuti informasi pendaftaran dan bersiaplah
                    untuk meningkatkan kemampuan web kamu.
                </p>
            </div>
        </div>

        <div class="cara-action">
            <a href="{{ route('enrollments.create') }}">
                Daftar Sekarang →
            </a>
        </div>
    </div>
</section>

    <footer>
        <div class="container">
            <p>© {{ date('Y') }} <span>KursusKu</span>. Belajar dan berkembang bersama.</p>
        </div>
    </footer>
@endsection
