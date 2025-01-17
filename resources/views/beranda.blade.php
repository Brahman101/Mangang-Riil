@extends('layout.app')
@section('title','Beranda - JDIH Kota Batu')

@section('css')
<link rel="stylesheet" href="{{ asset('css/beranda.css') }}">
@endsection

@section('content')
<div class="container">
    <!-- Search Bar -->
    <section class="search-column d-flex flex-column align-items-center justify-content-center">
        <form class="search-column-form w-100 justify-content-center align-items-center" action="">
            <div class="bagian-satu text-center">
                <h3 class="exc-search-column">Cari Produk Hukum</h3>
                <input type="text" class="form-control justify-content-center" id="cariKeyword" placeholder="Judul Produk Hukum...">
            </div>
            <div class="d-flex flex-md-row justify-content-between bagian-dua">
                <div class="bagian-dua-item mb-3 mb-md-0 text-center">
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
                <div class="bagian-dua-item text-center">
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
            <div class="d-flex flex-md-row justify-content-between align-items-center bagian-tiga">
                <div class="text-center flex-item">
                    <p class="exc-search-column">Tahun</p>
                    <input type="text" class="form-control" id="cariTahun" placeholder="Tahun...">
                </div>
                <div class="text-center flex-item">
                    <p class="exc-search-column">Nomor</p>
                    <input type="text" class="form-control" id="cariNomor" placeholder="Nomor...">
                </div>
                <div class="text-center flex-item">
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
            <div class="text-center">
                <button type="submit" class="btn custom-btn-cari">Cari</button>
            </div>
        </form>
    </section>

    <!-- Count of Documents -->
    <section class="doc-counts d-flex align-items-center justify-content-center">
        <div class="container d-flex align-items-center justify-content-center">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4 justify-content-center">
                <div class="col">
                    <a href="#" class="custom-card peraturan d-flex justify-content-between">
                        <div class="card-content">
                            <div class="card-title">[counts]</div>
                            <p class="card-text">Peraturan</p>
                        </div>
                        <img src="{{ asset('images/ikon_timbangan.png') }}" alt="Peraturan">
                    </a>
                </div>
                <div class="col">
                    <a href="#" class="custom-card monografi-hukum d-flex justify-content-between">
                        <div class="card-content">
                            <div class="card-title">[counts]</div>
                            <p class="card-text">Monografi Hukum</p>
                        </div>
                        <img src="{{ asset('images/ikon_buku.png') }}" alt="Monografi Hukum">
                    </a>
                </div>
                <div class="col">
                    <a href="#" class="custom-card artikel-hukum d-flex justify-content-between">
                        <div class="card-content">
                            <div class="card-title">[counts]</div>
                            <p class="card-text">Artikel Hukum</p>
                        </div>
                        <img src="{{ asset('images/ikon_artikel.png') }}" alt="Artikel Hukum">
                    </a>
                </div>
                <div class="col">
                    <a href="#" class="custom-card putusan-pengadilan d-flex justify-content-between">
                        <div class="card-content">
                            <div class="card-title">[counts]</div>
                            <p class="card-text">Putusan Pengadilan</p>
                        </div>
                        <img src="{{ asset('images/ikon_gavel.png') }}" alt="Putusan Pengadilan">
                    </a>
                </div>
            </div>
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
</div>
@endsection

@section('js')
<script src="{{ asset('js/newhome.js') }}"></script>
@endsection