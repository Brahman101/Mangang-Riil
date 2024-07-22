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
            <div class="navbar-logo">
                SIMPROKUM
            </div>
        </div>
    </nav>
    <div class="container">
        <aside class="sidebar">
            <ul>
                <li><a href="#">Pengajuan Produk Hukum</a></li>
                <li><a href="#">Katalog Produk Hukum</a></li>
                <li><a href="#">Tambah Produk Hukum</a></li>
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
                <button class="tab-button">Peraturan</button>
                <button class="tab-button">Monografi</button>
                <button class="tab-button">Artikel</button>
                <button class="tab-button active">Putusan</button>
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

                <label for="nomor-peraturan">Nomor Peraturan</label>
                <input type="text" id="nomor-peraturan" name="nomor-peraturan">

                <label for="tahun-terbit">Tahun Terbit</label>
                <input type="text" id="tahun-terbit" name="tahun-terbit">

                <label for="singkatan-jenis">Singkatan Jenis</label>
                <input type="text" id="singkatan-jenis" name="singkatan-jenis">

                <label for="tempat-penetapan">Tempat Penetapan</label>
                <input type="text" id="tempat-penetapan" name="tempat-penetapan">

                <label for="tanggal-penetapan">Tanggal Penetapan</label>
                <input type="text" id="tanggal-penetapan" name="tanggal-penetapan">

                <label for="subjek">Subjek</label>
                <input type="text" id="subjek" name="subjek">

                <label for="tahun-terbit">Tahun Terbit</label>
                <input type="text" id="tahun-terbit" name="tahun-terbit">

                <label for="sumber">Sumber</label>
                <input type="text" id="sumber" name="sumber">

                <label for="status">Status</label>
                <input type="text" id="status" name="status">

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

                <label for="urusan-pemerintahan">Urusan Pemerintahan</label>
                <input type="text" id="urusan-pemerintahan" name="urusan-pemerintahan">

                <label for="peraturan-terkait">Peraturan Terkait</label>
                <input type="text" id="peraturan-terkait" name="peraturan-terkait">

                <button type="submit" class="submit-button">Tambahkan</button>
            </form>
        </main>
    </div>
</body>

</html>