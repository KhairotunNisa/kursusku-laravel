
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

    <section class="courses">
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

    <footer>
        <div class="container">
            <p>© {{ date('Y') }} <span>KursusKu</span>. Belajar dan berkembang bersama.</p>
        </div>
    </footer>
@endsection
