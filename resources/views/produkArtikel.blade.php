<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{asset('images/LogoKotaBatu.png')}}">
    <title>Artikel Hukum - JDIH Kota Batu</title>
    <link rel="stylesheet" href="{{asset('css/navbar.css')}}">
    <link rel="stylesheet" href="{{asset('css/produkHukum.css')}}">
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
                    <li><a class="dropdown-item item-navbar-kedua" href="{{ route('produkMonografi')}}">Monografi Hukum</a></li>
                    <li><a class="dropdown-item item-navbar-kedua" href="{{ route('produkArtikel')}}">Artikel Hukum</a></li>
                    <li><a class="dropdown-item item-navbar-kedua" href="{{ route('produkPutusan')}}">Putusan Pengadilan</a></li>
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

    <!-- !!Main Section!! -->
    <section class="main-section d-flex flex-column align-items-center justify-content-center">
        <h2>Artikel Hukum</h2>
        <div class="container d-flex flex-row align-items-start">
            <!-- Left Part -->
            <div class="left-part d-flex flex-column align-items-center justify-content-center">
                <a href="" class="custom-card d-flex flex-column align-items-center justify-content-start">
                    <div class="card-content d-flex flex-column align-items-center justify-content-start">
                        <h3>[artikel_hukum_title]</h3>
                        <div class="rule-details d-flex flex-row justify-content-between align-items-center">
                            <div class="rule-details-component d-flex flex-row align-items-center justify-content-start">
                                <p>[tanggal_diterbitkan]</p>
                                <p>[tipe_produk_hukum?]</p>
                            </div>
                            <div class="rule-details-component d-flex flex-row align-items-center justify-content-end">
                                <p><i class="fa-regular fa-eye"></i>[seen]</p>
                                <p><i class="fa-solid fa-download"></i>[download]</p>
                            </div>
                        </div>
                        <h5>Lorem ipsum odor amet, consectetuer adipiscing elit. Ad mollis varius sem curabitur torquent nisl molestie. Vulputate facilisi id risus tempus nam litora habitasse erat. Congue nullam magnis quisque convallis primis habitasse natoque. Augue nulla metus phasellus at potenti lorem interdum nam.</h5>
                    </div>
                </a>

                <!-- Pagination Here -->
            </div>
            <!-- End Left Part -->

            <!-- Right Part -->
            <div class="right-part d-flex flex-column align-items-center justify-content-center">
                <div class="search-box d-flex flex-column align-items-center justify-content-start">
                    <div class="form-group judul d-flex flex-column align-items-center justify-content-start">
                        <label for="cari-judul-kotak">Judul</label>
                        <input type="text" class="form-control" id="cari-judul-kotak" placeholder="Judul Produk Hukum...">
                    </div>
                    <div class="dropdown">
                        <label for="dropdownTipe">Tipe Dokumen</label>
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
                    <div class="dropdown">
                        <label for="dropdownJenis">Jenis Dokumen</label>
                        <button id="dropdownJenis" class="dropdown-toggle custom-btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            - Pilih Tipe Dokumen -
                        </button>
                        <ul class="dropdown-menu drop-jenis-dokumen">
                            <li><a class="dropdown-item item-jenis-dokumen" href="#" data-value="Semua-Jenis">Semua</a></li>
                            <li><a class="dropdown-item item-jenis-dokumen" href="#" data-value="Keputusan Wali Kota">Keputusan Wali Kota</a></li>
                            <li><a class="dropdown-item item-jenis-dokumen" href="#" data-value="Peraturan Daerah">Peraturan Daerah</a></li>
                            <li><a class="dropdown-item item-jenis-dokumen" href="#" data-value="Peraturan Walikota">Peraturan Walikota</a></li>
                        </ul>
                    </div>
                    <div class="form-group judul d-flex flex-column align-items-center justify-content-start">
                        <label for="cari-tahun-kotak">Tahun</label>
                        <input type="text" class="form-control" id="cari-tahun-kotak" placeholder="Tahun...">
                    </div>
                    <div class="form-group judul d-flex flex-column align-items-center justify-content-start">
                        <label for="cari-nomor-kotak">Nomor</label>
                        <input type="text" class="form-control" id="cari-nomor-kotak" placeholder="Nomor...">
                    </div>
                    <div class="dropdown">
                        <label for="dropdownStatus">Status</label>
                        <button id="dropdownStatus" class="dropdown-toggle custom-btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            - Status -
                        </button>
                        <ul class="dropdown-menu drop-status">
                            <li><a class="dropdown-item item-status" href="#" data-value="Semua-Status">Semua</a></li>
                            <li><a class="dropdown-item item-status" href="#" data-value="Berlaku">Berlaku</a></li>
                            <li><a class="dropdown-item item-status" href="#" data-value="Tidak Berlaku">Tidak Berlaku</a></li>
                        </ul>
                    </div>
                    <div class="text-center mt-4 btn-cari">
                        <button type="submit" class="btn custom-btn-cari">Cari</button>
                    </div>
                </div>
                <div class="righ-part-link-portal d-flex flex-column align-items-center justify-content-center">
                    <h4>Link Portal</h4>
                    <div class="container d-flex flex-column align-items-center justify-content-around">
                        <a href="#" class="custom-card-link-portal align-items-center justify-content-around">
                            <div class="card-content">
                                <img src="{{asset('images/LogoJDIH.png')}}" alt="JDIH Nasional">
                                <h3>JDIH Nasional</h3>
                            </div>
                        </a>
                        <a href="#" class="custom-card-link-portal align-items-center justify-content-around">
                            <div class="card-content">
                                <img src="{{asset('images/LogoKotaBatu.png')}}" alt="PPID Kota Batu">
                                <h3>PPID Kota Batu</h3>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

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