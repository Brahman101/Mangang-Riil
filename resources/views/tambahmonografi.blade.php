<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengisian Metadata</title>
    <link rel="stylesheet" href="{{ asset('css/dashboardtambah.css') }}">
</head>

<body>
    <nav class="navbar">
        <div class="navbar-container">
            <a class="navbar-logo" href="#">
                SIMPROKUM
            </a>
        </div>
    </nav>
    <div class="container">
        <aside class="sidebar">
            <ul>
                <li><a href="{{ route('pengajuanprodukhukum') }}">Pengajuan Produk Hukum</a></li>
                <li><a href="{{ route('katalogprodukhukum') }}">Katalog Produk Hukum</a></li>
                <li><a href="{{ route('tambahperaturan') }}">Tambah Produk Hukum</a></li>
                <li><a href="#">Profile</a></li>
            </ul>
            <div class="user-info">
                <h3>User Information</h3>
                <p><strong>Username:</strong> Staff Dokumentasi</p>
                <p><strong>Role:</strong> staf_dokumentasi</p>
                <p><strong>Dinas:</strong> SETDA Bagian Hukum Kota Batu</p>
            </div>
        </aside>
        <main class="main-content">
            <h2>Pengisian Metadata</h2>
            <div class="tabs">
                <a href="{{ route('tambahperaturan') }}" class="tab-button">Peraturan</a>
                <a href="{{ route('tambahmonografi') }}" class="tab-button active">Monografi</a>
                <a href="{{ route('tambahartikel') }}" class="tab-button">Artikel</a>
                <a href="{{ route('tambahputusan') }}" class="tab-button">Putusan</a>
            </div>
            <form class="form">
                <label for="tipe-dokumen">Tipe Dokumen</label>
                <input type="text" id="tipe-dokumen" name="tipe-dokumen">

                <label for="jenis-dokumen">Jenis Dokumen</label>
                <input type="text" id="jenis-dokumen" name="jenis-dokumen">

                <label for="judul">Judul</label>
                <input type="text" id="judul" name="judul">

                <label for="pengarang">Pengarang</label>
                <input type="text" id="pengarang" name="pengarang">

                <label for="tahun-terbit">Tahun Terbit</label>
                <input type="text" id="tahun-terbit" name="tahun-terbit">

                <label for="tempat-penetapan">Tempat Penetapan</label>
                <input type="text" id="tempat-penetapan" name="tempat-penetapan">

                <label for="penerbit">Penerbit</label>
                <input type="text" id="penerbit" name="penerbit">

                <label for="tanggal-penetapan">Tanggal Penetapan</label>
                <input type="text" id="tanggal-penetapan" name="tanggal-penetapan">

                <label for="nomor-panggil">Nomor Panggil</label>
                <input type="text" id="nomor-panggil" name="nomor-panggil">

                <label for="cetakan">Cetakan</label>
                <input type="text" id="cetakan" name="cetakan">

                <label for="deskripsi-fisik">Deskripsi Fisik</label>
                <input type="text" id="deskripsi-fisik" name="deskripsi-fisik">

                <label for="subjek">Subjek</label>
                <input type="text" id="subjek" name="subjek">

                <label for="ISBN/ISSN">ISBN/ISSN</label>
                <input type="text" id="ISBN/ISSN" name="ISBN/ISSN">

                <label for="bahasa">Bahasa</label>
                <input type="text" id="bahasa" name="bahasa">

                <label for="lokasi">Lokasi</label>
                <input type="text" id="lokasi" name="lokasi">

                <label for="bidang-hukum">Bidang Hukum</label>
                <input type="text" id="bidang-hukum" name="bidang-hukum">

                <label for="lampiran">Lampiran</label>
                <input type="text" id="lampiran" name="lampiran">

                <label for="penandatanganan">Penandatanganan</label>
                <input type="text" id="penandatanganan" name="penandatanganan">

                <label for="nomor-induk-buku">Nomor Induk Buku</label>
                <input type="text" id="nomor-induk-buku" name="nomor-induk-buku">

                <button type="submit" class="submit-button">Tambahkan</button>
            </form>
        </main>
    </div>
</body>

</html>