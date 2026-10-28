
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
