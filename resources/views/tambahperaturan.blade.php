@extends('layout.layout')

@section('title')
<title>Pengisian Metadata</title>
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('css/dashboardtambah.css') }}">
@endsection

@section('content')
<main class="main-content">
    <h2>Pengisian Metadata</h2>
    <div class="tabs">
        <a href="{{ route('tambahperaturan') }}" class="tab-button active">Peraturan</a>
        <a href="{{ route('tambahmonografi') }}" class="tab-button">Monografi</a>
        <a href="{{ route('tambahartikel') }}" class="tab-button">Artikel</a>
        <a href="{{ route('tambahputusan') }}" class="tab-button ">Putusan</a>
    </div>
    <form class="form">
        <label for="jenis-dokumen">Jenis Dokumen</label>
        <select class="text" style="margin-top: 5px;" name="jenis-dokumen">
            <option value="keputusan-wali-kota">Keputusan Wali Kota</option>
            <option value="peraturan-daerah">Peraturan Daerah</option>
            <option value="peraturan-walikota">Peraturan Walikota</option>
        </select>

        <label for="judul">Judul</label>
        <input type="text" id="judul" name="judul" required>

        <label for="pengarang">Pengarang</label>
        <input type="text" id="pengarang" name="pengarang" required>

        <label for="nomor-peraturan">Nomor Peraturan</label>
        <input type="text" id="nomor-peraturan" name="nomor-peraturan" required>

        <label for="tahun-terbit">Tahun Terbit</label>
        <input type="text" id="tahun-terbit" name="tahun-terbit" required>

        <label for="singkatan-jenis">Singkatan Jenis</label>
        <input type="text" id="singkatan-jenis" name="singkatan-jenis" required>

        <label for="tempat-penetapan">Tempat Penetapan</label>
        <input type="text" id="tempat-penetapan" name="tempat-penetapan" required>

        <label for="tanggal-penetapan">Tanggal Penetapan</label>
        <input type="text" id="tanggal-penetapan" name="tanggal-penetapan" required>

        <label for="subjek">Subjek</label>
        <input type="text" id="subjek" name="subjek" required>

        <label for="sumber">Sumber</label>
        <input type="text" id="sumber" name="sumber" required>

        <label for="status">Status</label>
        <select class="text" name="status">
            <option value="diterima">Diterima</option>
            <option value="ditolak">Ditolak</option>
        </select>

        <label for="bahasa">Bahasa</label>
        <input type="text" id="bahasa" name="bahasa" required>

        <label for="lokasi">Lokasi</label>
        <input type="text" id="lokasi" name="lokasi" required>

        <label for="bidang-hukum">Bidang Hukum</label>
        <input type="text" id="bidang-hukum" name="bidang-hukum" required>

        <label for="lampiran">Lampiran</label>
        <input type="file" id="lampiran" name="lampiran">

        <label for="penandatanganan">Penandatanganan</label>
        <input type="file" id="penandatanganan" name="penandatanganan">

        <label for="urusan-pemerintahan">Urusan Pemerintahan</label>
        <input type="text" id="urusan-pemerintahan" name="urusan-pemerintahan" required>

        <label for="peraturan-terkait">Peraturan Terkait</label>
        <input type="text" id="peraturan-terkait" name="peraturan-terkait" required>

        <button type="submit" class="submit-button">Tambahkan</button>
    </form>
</main>
</div>
<script src="{{ asset('js/tambahperaturan.js') }}" defer></script>
@endsection