<style>
/* ==============================
   NAVBAR KURSUSKU MODERN
============================== */

.navbar {
    background: linear-gradient(135deg, #ffd83d 0%, #ffc107 55%, #ffb800 100%) !important;
    padding: 17px 0;
    border-bottom: 4px solid #e6a900;
    box-shadow: 0 5px 20px rgba(120, 83, 0, 0.13);
    position: relative;
    z-index: 1000;
}

/* LOGO */
.navbar .navbar-brand {
    color: #171717 !important;
    font-size: 28px;
    font-weight: 900;
    letter-spacing: -1.5px;
    transition: 0.3s ease;
}

.navbar .navbar-brand:hover {
    transform: scale(1.04);
}

.navbar .brand-highlight {
    color: #ffffff;
    text-shadow: 1px 2px 2px rgba(0, 0, 0, 0.15);
}

/* MENU NAVIGASI */
.navbar .navbar-nav {
    align-items: center;
    gap: 8px;
}

.navbar .nav-link {
    color: #252525 !important;
    font-size: 14px;
    font-weight: 700;
    padding: 11px 17px !important;
    border-radius: 30px;
    transition: all 0.3s ease;
    position: relative;
}

/* EFEK HOVER MENU */
.navbar .nav-link:hover {
    color: #000000 !important;
    background: rgba(255, 255, 255, 0.45);
    transform: translateY(-2px);
}

/* TOMBOL DAFTAR SEKARANG */
.navbar .btn-daftar {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    background: #171717;
    color: #ffcf24 !important;
    padding: 12px 25px;
    border-radius: 30px;
    font-size: 14px;
    font-weight: 800;
    text-decoration: none;
    border: 2px solid #171717;
    box-shadow: 0 5px 12px rgba(0, 0, 0, 0.15);
    transition: all 0.3s ease;
}

/* HOVER TOMBOL */
.navbar .btn-daftar:hover {
    background: #ffffff;
    color: #171717 !important;
    border-color: #ffffff;
    transform: translateY(-3px);
    box-shadow: 0 7px 16px rgba(0, 0, 0, 0.15);
}

/* TOGGLER MOBILE */
.navbar .navbar-toggler {
    border: 2px solid #171717;
    border-radius: 12px;
    padding: 7px 10px;
    box-shadow: none !important;
}

.navbar .navbar-toggler:focus {
    outline: none;
    box-shadow: 0 0 0 4px rgba(255, 255, 255, 0.35) !important;
}

/* RESPONSIVE */
@media (max-width: 991px) {
    .navbar {
        padding: 13px 0;
    }

    .navbar .navbar-nav {
        align-items: stretch;
        gap: 5px;
        padding-top: 15px;
    }

    .navbar .nav-link {
        padding: 12px 16px !important;
    }

    .navbar .nav-link:hover {
        transform: none;
    }

    .navbar .btn-daftar {
        display: flex;
        margin-top: 10px;
        text-align: center;
    }
}
</style>
<nav class="navbar navbar-expand-lg bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="/">KursusKu</a>

        <button class="navbar-toggler" type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarMenu"
            aria-controls="navbarMenu"
            aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        
        <div class="collapse navbar-collapse" id="navbarMenu">
            <ul class="navbar-nav ms-auto align-items-lg-center">
                <li class="nav-item">
                    <a class="nav-link" href="/">Beranda</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/#kursus">Kursus Unggulan</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/#cara-daftar">Cara Daftar</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('courses.index') }}">
                        Courses
                    </a>
                </li>

                <li class="nav-item ms-lg-3">
                    <a href="{{ route('enrollments.create') }}"
                    class="btn btn-dark"
                    style="font-size: 16px; font-weight: 700; padding: 8px 18px; border-radius: 30px; white-space: nowrap;">
                        Daftar Sekarang
                    </a>
                </li>
            </ul>
        </div>
           
    </div>
</nav>
