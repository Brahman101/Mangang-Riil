    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <!-- Top Details-->
    <nav class="navbar navbar-expand-lg navbar-kesatu">
        <div class="container-navbar">
            <img src="{{ asset('images/LogoKotaBatu.png') }}" alt="Logo Kota Batu" class="logo-batu">
            <img src="{{ asset('images/ikon_bangunan.png') }}" alt="Alamat" class="ikon-topnav">
            <p>Bagian Hukum Setda. Kota Wisata Batu</p>
            <img src="{{ asset('images/ikon_mail.png') }}" alt="E-mail" class="ikon-topnav">
            <p>hukumkwb@gmail.com</p>
            <img src="{{ asset('images/ikon_telepon.png') }}" alt="NoTelp" class="ikon-topnav">
            <p>(0341) 591032</p>
        </div>
    </nav>

    <!-- Logo & Title -->
    <header class="web-intro">
        <div class="container logo-title">
            <div class="row justify-content-center logo">
                <div class="col-auto">
                    <img src="{{'images/LogoJDIH.png'}}" alt="Logo JDIH" class="logo-container-dua">
                </div>
                <div class="col-auto">
                    <img src="{{'images/LogoKotaBatu.png'}}" alt="Logo Kota Batu" class="logo-container-dua">
                </div>
            </div>
            <div class="text-center title">
                <div class="header-container">
                    <h1 class="red-header">JDIH</h1>
                    <h1>Kota Wisata Batu</h1>
                </div>
                <h2>Jaringan Dokumentasi dan Informasi Hukum Kota Wisata Batu</h2>
            </div>
        </div>
    </header>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light justify-content-center">
        <button class="navbar-toggler" onclick="toggleNavbar()">
            <i class="fas fa-bars"></i> Menu
        </button>

        <div class="collapse navbar-collapse" id="navbarMenu">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('beranda') }}">Beranda</a>
                </li>
                <li class="nav-item dropdown dropdown-navbar-kedua">
                    <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Produk Hukum
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item item-navbar-kedua" href="{{ route('produkPerundangan') }}">Peraturan Perundang-Undangan</a></li>
                        <li><a class="dropdown-item item-navbar-kedua" href="#">Monografi Hukum</a></li>
                        <li><a class="dropdown-item item-navbar-kedua" href="#">Artikel Hukum</a></li>
                        <li><a class="dropdown-item item-navbar-kedua" href="#">Putusan Pengadilan</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Berita</a>
                </li>
                <li class="nav-item dropdown dropdown-navbar-kedua">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Statistik
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item item-navbar-kedua" href="#">Produk Hukum</a></li>
                        <li><a class="dropdown-item item-navbar-kedua" href="#">Survei</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Forum</a>
                </li>
                <li class="nav-item dropdown dropdown-navbar-kedua">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Profil
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item item-navbar-kedua" href="#">-</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown dropdown-navbar-kedua">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Informasi Hukum
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item item-navbar-kedua" href="#">Ruang Unduh</a></li>
                        <li><a class="dropdown-item item-navbar-kedua" href="#">Kamus Hukum</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown dropdown-navbar-kedua">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Media
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item item-navbar-kedua" href="#">Media 1</a></li>
                        <li><a class="dropdown-item item-navbar-kedua" href="#">Media 2</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">FAQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Kontak</a>
                </li>
            </ul>
        </div>
    </nav>


    <script>
        function toggleNavbar() {
            var navbar = document.getElementById("navbarMenu");
            navbar.classList.toggle("show");
        }
    </script>
    <script src="{{ asset('js/newhome.js') }}"></script>