<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{asset('images/LogoKotaBatu.png')}}">
    <title>Peraturan Perundang-Undangan - JDIH Kota Batu</title>
    <link rel="stylesheet" href="{{asset('css/navbar.css')}}">
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

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
    <nav class=" navbar navbar-kedua navbar-expand-lg bg-body-tertiary  justify-content-center">
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
    </nav>

    <!--  -->

    <!-- Footer -->
    <footer class="custom-footer text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-4 d-flex flex-column align-items-start">
                    <img src="{{asset('images/logo_jdih_footer.png')}}" alt="logoJDIHKotaBatu">
                    <p class="exp-footer">Media Publikasi Digital Produk Hukum dan Informasi Hukum Kota Batu.</p>
                </div>
                <div class="col-md-6 d-flex flex-column align-items-start alamat">
                    <h5>Alamat</h5>
                    <p><i class="fas fa-phone me-3"></i> (0341) 512555</p>
                    <p><i class="fa-solid fa-house me-3"></i>Bagian Hukum Setda Kota Batu Balai Kota Among Tani Gedung A lantai 3 Jl. Panglima Sudirman No. 507 Kota Batu</p>
                    <p><i class="fas fa-envelope me-3"></i>hukum@batukota.go.id</p>
                </div>
                <div class="col-md-2 d-flex flex-column align-items-start navigasi">
                    <h5>Navigasi </h5>
                    <a href="#">Beranda</a>
                    <a href="#">Produk Hukum</a>
                    <a href="#">Berita</a>
                    <a href="#">Statistik</a>
                    <a href="#">Forum</a>
                    <a href="#">Profil</a>
                    <a href="#">Informasi Hukum</a>
                    <a href="#">Media</a>
                    <a href="#">FAQ</a>
                    <a href="#"></a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="{{ asset('js/newhome.js') }}"></script>
</body>

</html>