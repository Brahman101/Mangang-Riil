<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengisian Metadata</title>
    <link rel="stylesheet" href="{{ asset('css/dashboardtambah.css') }}">
</head>

<body>
    <div class="container">
        <aside class="sidebar">
            <h1>SIMPROKUM</h1>
            <ul>
                <li><a href="#">Pengajuan Produk Hukum</a></li>
                <li><a href="#">Katalog Produk Hukum</a></li>
                <li><a href="#">Tambah Produk Hukum</a></li>
                <li><a href="#">Profile</a></li>
            </ul>
        </aside>
        <main class="main-content">
            <h2>Pengisian Metadata</h2>
            <div class="tabs">
                <button class="tab-button active">Peraturan</button>
                <button class="tab-button">Monografi</button>
                <button class="tab-button">Artikel</button>
                <button class="tab-button">Putusan</button>
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
            </form>
        </main>
    </div>
</body>

</html>