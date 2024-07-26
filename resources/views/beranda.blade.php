<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JDIH Kota Wisata Batu</title>
    <link rel="icon" href="{{asset('images/LogoKotaBatu.png')}}">
    <link rel="stylesheet" href="{{ asset('css/beranda.css') }}">
    <link rel="stylesheet" href="{{asset('css/navbar.css')}}">
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">
    <!-- Bootstrap CSS -->
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

    <!-- Search Bar -->
    <section class="search-column d-flex flex-column align-items-center justify-content-center">
        <form action="">
            <div class="bagian-satu text-center">
                <h3 class="exc-search-column">Cari Produk Hukum</h3>
                <input type="text" class="form-control justify-content-center" id="cariKeyword" placeholder="Judul Produk Hukum...">
            </div>
            <div class="row justify-content-around bagian-dua">
                <div class="col-md-4 text-center">
                    <h5 class="exc-search-column">Tipe Dokumen</h5>
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
                    <h5 class="exc-search-column">Jenis Dokumen</h5>
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
                    <p class="exc-search-column">Tahun</p>
                    <input type="text" class="form-control" id="cariTahun" placeholder="Tahun...">
                </div>
                <div class="col-md-4 text-center">
                    <p class="exc-search-column">Nomor</p>
                    <input type="text" class="form-control" id="cariNomor" placeholder="Nomor...">
                </div>
                <div class="col-md-4 text-center">
                    <p class="exc-search-column">Status</p>
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

    <!-- Count of Documents -->
    <section class="doc-counts d-flex align-items-center justify-content-center">
        <div class="container d-flex align-items-center">
            <a href="#" class="custom-card peraturan d-flex justify-content-between">
                <div class="card-content">
                    <div class="card-title">[counts]</div>
                    <p class="card-text">Peraturan</p>
                </div>
                <img src="{{ asset('images/ikon_timbangan.png') }}" alt="Peraturan">
            </a>
            <a href="#" class="custom-card monografi-hukum d-flex justify-content-between">
                <div class="card-content">
                    <div class="card-title">[counts]</div>
                    <p class="card-text">Monografi Hukum</p>
                </div>
                <img src="{{ asset('images/ikon_buku.png') }}" alt="Monografi Hukum">
            </a>
            <a href="#" class="custom-card artikel-hukum d-flex justify-content-between">
                <div class="card-content">
                    <div class="card-title">[counts]</div>
                    <p class="card-text">Artikel Hukum</p>
                </div>
                <img src="{{ asset('images/ikon_artikel.png') }}" alt="Artikel Hukum">
            </a>
            <a href="#" class="custom-card putusan-pengadilan d-flex justify-content-between">
                <div class="card-content">
                    <div class="card-title">[counts]</div>
                    <p class="card-text">Putusan Pengadilan</p>
                </div>
                <img src="{{ asset('images/ikon_gavel.png') }}" alt="Putusan Pengadilan">
            </a>
        </div>
    </section>

    <!-- New Rules -->
    <section class="new-rules d-flex align-items-center justify-content-center">
        <div class="container d-flex flex-column align-items-center">
            <h3>Peraturan Terbaru</h3>
            <a href="#" class="custom-card new-rules-card align-items-center justify-content-center">
                <div class="card-content">
                    <div class="information d-flex flex-column align-items-start justify-content-center">
                        <h5>[judul_dokumen]</h5>
                        <p class="p-new-rules">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras fermentum erat hendrerit quam porta, quis laoreet lectus pellentesque. Suspendisse potenti. Aliquam quis ligula tempus, vulputate quam non, imperdiet elit.</p>
                    </div>
                    <div class="new-rules-details">
                        <p class="p-new-rules">[tanggal]</>
                        <div class="seen-counter">
                            <img src="{{asset('images/ikon_mata.png')}}" alt="Dilihat">
                            <p class="p-new-rules">[jumlah_dilihat]</>
                        </div>
                        <div class="download-counter">
                            <img src="{{asset('images/ikon_unduh.png')}}" alt="Diunduh">
                            <p class="p-new-rules">[jumlah_diunduh]</>
                        </div>
                    </div>
                </div>
            </a>
            <a href="#" class="custom-card new-rules-card align-items-center justify-content-center">
                <div class="card-content">
                    <div class="information d-flex flex-column align-items-start justify-content-center">
                        <h5>[judul_dokumen]</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras fermentum erat hendrerit quam porta, quis laoreet lectus pellentesque. Suspendisse potenti. Aliquam quis ligula tempus, vulputate quam non, imperdiet elit.</p>
                    </div>
                    <div class="new-rules-details">
                        <p>[tanggal]</p>
                        <div class="seen-counter">
                            <img src="{{asset('images/ikon_mata.png')}}" alt="Dilihat">
                            <p>[jumlah_dilihat]</p>
                        </div>
                        <div class="download-counter">
                            <img src="{{asset('images/ikon_unduh.png')}}" alt="Diunduh">
                            <p>[jumlah_diunduh]</p>
                        </div>
                    </div>
                </div>
            </a>
            <a href="#" class="custom-card new-rules-card align-items-center justify-content-center">
                <div class="card-content">
                    <div class="information d-flex flex-column align-items-start justify-content-center">
                        <h5>[judul_dokumen]</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras fermentum erat hendrerit quam porta, quis laoreet lectus pellentesque. Suspendisse potenti. Aliquam quis ligula tempus, vulputate quam non, imperdiet elit.</p>
                    </div>
                    <div class="new-rules-details">
                        <p>[tanggal]</p>
                        <div class="seen-counter">
                            <img src="{{asset('images/ikon_mata.png')}}" alt="Dilihat">
                            <p>[jumlah_dilihat]</p>
                        </div>
                        <div class="download-counter">
                            <img src="{{asset('images/ikon_unduh.png')}}" alt="Diunduh">
                            <p>[jumlah_diunduh]</p>
                        </div>
                    </div>
                </div>
            </a>
            <a href="#" class="custom-card new-rules-card align-items-center justify-content-center">
                <div class="card-content">
                    <div class="information d-flex flex-column align-items-start justify-content-center">
                        <h5>[judul_dokumen]</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras fermentum erat hendrerit quam porta, quis laoreet lectus pellentesque. Suspendisse potenti. Aliquam quis ligula tempus, vulputate quam non, imperdiet elit.</p>
                    </div>
                    <div class="new-rules-details">
                        <p>[tanggal]</p>
                        <div class="seen-counter">
                            <img src="{{asset('images/ikon_mata.png')}}" alt="Dilihat">
                            <p>[jumlah_dilihat]</p>
                        </div>
                        <div class="download-counter">
                            <img src="{{asset('images/ikon_unduh.png')}}" alt="Diunduh">
                            <p>[jumlah_diunduh]</p>
                        </div>
                    </div>
                </div>
            </a>
            <button class="custom-btn-more">Lihat Semua</button>
        </div>
    </section>

    <!-- Document Quantity Chart Here! -->
    <!-- <section class="doc-chart">

    </section> -->
    <!-- News & Activity -->
    <section class="news-activity d-flex align-items-center justify-content-center">
        <div class="container d-flex flex-column align-items-center">
            <h3>Berita & Kegiatan</h3>

            <!-- 1st Row -->
            <div class="container d-flex flex-row align-items-center justify-content-center">
                <!-- Card -->
                <div class="custom-card news-activity-card">
                    <img src="{{asset('images/hero_amongtani.jpeg')}}" alt="News & Activity">
                    <div class="custom-card-body">
                        <h3>Lorem ipsum odor amet, consectetuer adipiscing elit.</h3>
                        <div class="custom-card-body-bot-part">
                            <div class="bot-part d-flex flex-row align-items-start">
                                <p>[tanggal_acara]</p>
                                <div class="seen-counter d-flex flex-row">
                                    <img src="{{asset('images/ikon_mata.png')}}" alt="Dilihat">
                                    <p class="p-new-rules">[jumlah_dilihat]</p>
                                </div>
                            </div>
                            <a href="#">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="custom-card news-activity-card">
                    <img src="{{asset('images/hero_amongtani.jpeg')}}" alt="News & Activity">
                    <div class="custom-card-body">
                        <h3>Lorem ipsum odor amet, consectetuer adipiscing elit.</h3>
                        <div class="custom-card-body-bot-part">
                            <div class="bot-part d-flex flex-row align-items-start">
                                <p>[tanggal_acara]</p>
                                <div class="seen-counter d-flex flex-row">
                                    <img src="{{asset('images/ikon_mata.png')}}" alt="Dilihat">
                                    <p class="p-new-rules">[jumlah_dilihat]</p>
                                </div>
                            </div>
                            <a href="#">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <!-- End of Card -->
            </div>

            <!-- 2nd Row -->
            <div class="container d-flex flex-row align-items-center justify-content-center">
                <!-- Card -->
                <div class="custom-card news-activity-card">
                    <img src="{{asset('images/hero_amongtani.jpeg')}}" alt="News & Activity">
                    <div class="custom-card-body">
                        <h3>Lorem ipsum odor amet, consectetuer adipiscing elit.</h3>
                        <div class="custom-card-body-bot-part">
                            <div class="bot-part d-flex flex-row align-items-start">
                                <p>[tanggal_acara]</p>
                                <div class="seen-counter d-flex flex-row">
                                    <img src="{{asset('images/ikon_mata.png')}}" alt="Dilihat">
                                    <p class="p-new-rules">[jumlah_dilihat]</p>
                                </div>
                            </div>
                            <a href="#">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="custom-card news-activity-card">
                    <img src="{{asset('images/hero_amongtani.jpeg')}}" alt="News & Activity">
                    <div class="custom-card-body">
                        <h3>Lorem ipsum odor amet, consectetuer adipiscing elit.</h3>
                        <div class="custom-card-body-bot-part">
                            <div class="bot-part d-flex flex-row align-items-start">
                                <p>[tanggal_acara]</p>
                                <div class="seen-counter d-flex flex-row">
                                    <img src="{{asset('images/ikon_mata.png')}}" alt="Dilihat">
                                    <p class="p-new-rules">[jumlah_dilihat]</p>
                                </div>
                            </div>
                            <a href="#">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <!-- End of Card -->
            </div>
            <button class="custom-btn-more">Lihat Semua</button>
        </div>
    </section>


    <!-- Link Portal -->
    <section class="link-portal d-flex flex-column justify-content-center align-items-center">
        <h2>Link Portal</h2>
        <div class="container d-flex flex-row align-items-center justify-content-around">
            <a href="#" class="custom-card align-items-center justify-content-around">
                <div class="card-content">
                    <img src="{{asset('images/LogoJDIH.png')}}" alt="JDIH Nasional">
                    <h3>JDIH Nasional</h3>
                </div>
            </a>
            <a href="#" class="custom-card align-items-center justify-content-around">
                <div class="card-content">
                    <img src="{{asset('images/LogoKotaBatu.png')}}" alt="PPID Kota Batu">
                    <h3>PPID Kota Batu</h3>
                </div>
            </a>
            <a href="#" class="custom-card align-items-center justify-content-around">
                <div class="card-content">
                    <img src="{{asset('images/ikon_simprokum.png')}}" alt="Simprokum">
                    <h3>SIMPROKUM</h3>
                </div>
            </a>
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