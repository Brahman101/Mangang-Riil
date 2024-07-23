<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JDIH Kota Wisata Batu</title>
    <link rel="stylesheet" href="{{ asset('css/newberanda.css') }}">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
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
    <section class="search-column d-flex flex-column align-items-center justify-content-center">
        <form action="">
            <div class="bagian-satu text-center">
                <h3>Cari Produk Hukum</h3>
                <input type="text" class="form-control justify-content-center" id="cariKeyword" placeholder="Judul Produk Hukum...">
            </div>
            <div class="row justify-content-around bagian-dua">
                <div class="col-md-4 text-center">
                    <h5>Tipe Dokumen</h5>
                    <div class="dropdown-tipe">
                        <button id="dropdownTipe" class="dropdown-toggle custom-btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            - Pilih Tipe Dokumen -
                        </button>
                        <ul class="dropdown-menu drop-tipe-dokumen">
                            <li><a class="dropdown-item item-tipe-dokumen" href="#" data-value="Semua-Tipe">Semua</a></li>
                            <li><a class="dropdown-item item-tipe-dokumen" href="#" data-value="Peraturan Perundang-Undangan">Peraturan Perundag-Undangan</a></li>
                            <li><a class="dropdown-item item-tipe-dokumen" href="#" data-value="Monografi Hukum">Monografi Hukum</a></li>
                            <li><a class="dropdown-item item-tipe-dokumen" href="#" data-value="Artikel Hukum">Artikel Hukum</a></li>
                            <li><a class="dropdown-item item-tipe-dokumen" href="#" data-value="Putusan Pengadilan">Putusan Pengadilan</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <h5>Jenis Dokumen</h5>
                    <div class="dropdown-jenis">
                        <button id="dropdownJenis" class="dropdown-toggle custom-btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            - Pilih Jenis Dokumen -
                        </button>
                        <ul class="dropdown-menu drop-jenis-dokumen">
                            <li><a class="dropdown-item item-jenis-dokumen" href="#" data-value="Semua-Jenis">Semua</a></li>
                            <li><a class="dropdown-item item-jenis-dokumen" href="#" data-value="Keputusan Wali Kota">Keputusan Wali Kota</a></li>
                            <li><a class="dropdown-item item-jenis-dokumen" href="#" data-value="Peraturan Daerah">Peraturan Daerah</a></li>
                            <li><a class="dropdown-item item-jenis-dokumen" href="#" data-value="Peraturan Walikota">Peraturan Walikota</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-row justify-content-center bagian-tiga">
                <div class="col-md-4 text-center">
                    <p>Tahun</p>
                    <input type="text" class="form-control" id="cariTahun" placeholder="Tahun...">
                </div>
                <div class="col-md-4 text-center">
                    <p>Nomor</p>
                    <input type="text" class="form-control" id="cariNomor" placeholder="Nomor...">
                </div>
                <div class="col-md-4 text-center">
                    <p>Status</p>
                    <div class="dropdown-status">
                        <button id="dropdownStatus" class="dropdown-toggle custom-btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            - Status -
                        </button>
                        <ul class="dropdown-menu drop-status">
                            <li><a class="dropdown-item item-status" href="#" data-value="Semua-Status">Semua</a></li>
                            <li><a class="dropdown-item item-status" href="#" data-value="Berlaku">Berlaku</a></li>
                            <li><a class="dropdown-item item-status" href="#" data-value="Tidak Berlaku">Tidak Berlaku</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4">
                <button type="submit" class="btn custom-btn-cari">Cari</button>
            </div>
        </form>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="{{ asset('js/newhome.js') }}"></script>
</body>

</html>