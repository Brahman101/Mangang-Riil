<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JDIH Kota Wisata Batu</title>
    <link rel="stylesheet" href="{{ asset('css/newberanda.css') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Top Details-->
    <nav class="navbar navbar-expand-lg bg-body-tertiary navbar-kesatu">
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
                <img src="{{'images/LogoJDIH.png'}}" alt="Logo JDIH" class="logo-container-dua">
                <img src="{{'images/LogoKotaBatu.png'}}" alt="Logo Kota Batu" class="logo-container-dua">
            </div>
            <div class="column text-center title ">
                <div class="row justify-content-center header">
                    <h1 class="red-header">JDIH</h1>
                    <h1>Kota Wisata Batu</h1>
                </div>
                <h2>Jaringan Dokumentasi dan Informasi Hukum Kota Wisata Batu</h2>
            </div>
        </div>
    </header>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary  justify-content-center">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#">Beranda</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Produk Hukum
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>

                </ul>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">Berita</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Statistik
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>

                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Forum</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Profil
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>

                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Informasi Hukum
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>

                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Media
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>

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

    <!-- Search Bar -->
    <section class="search-column d-flex flex-column align-items-center">
        <div class="justify-content-center searching text-center">
            <h2>Cari Produk Hukum</h2>
            <div class="xl-3 w-75">
                <input type="text" class="form-control" id="searchByQuery" placeholder="Cari...">
            </div>
            <div class="row justify-content-center w-100">
                <div class="col-md-5 mb-3">
                    <h5>Tipe Dokumen</h5>
                    <input type="text" class="form-control" id="searchDocType" placeholder="Tipe Dokumen">
                </div>
                <div class="col-md-5 mb-3">
                    <h5>Jenis Dokumen</h5>
                    <input type="text" class="form-control" id="searchDocKind" placeholder="Jenis Dokumen">
                </div>
            </div>
        </div>
    </section>



</body>

</html>