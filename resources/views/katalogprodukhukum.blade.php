@extends('layout.layout')

@section('title')
<title>Katalog Produk Hukum</title>
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('css/katalogprodukhukum.css') }}">
@endsection

@section('content')
<main class="main-content">
    <h2>Katalog Produk Hukum</h2>
    <div class="search-container">
        <input type="text" class="search-box" placeholder="Search...">
        <button class="search-button">Search</button>
    </div>
    <table class="product-table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nomor</th>
                <th>Tahun</th>
                <th style="text-align:start">Judul</th>
                <th>Keterangan Dokumen</th>
                <th>Jenis</th>
                <th>Tanggal Pengundangan</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>12</td>
                <td>2023</td>
                <td style="text-align:start">Pedoman Penggunaan Media Sosial</td>
                <td>Berlaku</td>
                <td>Peraturan Wali kota</td>
                <td>24-06-2024</td>
                <td>Diterima</td>
                <td style="max-width:150px;">
                    <button class="action-button trayek">trayek</button>
                    <button class="action-button update">update</button>
                    <button class="action-button lihat">lihat</button>
                    <button class="action-button hapus">hapus</button>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>13</td>
                <td>2022</td>
                <td style="text-align:start">Regulasi Penyiaran Televisi dan Radio</td>
                <td> Tidak Berlaku</td>
                <td>Peraturan Wali kota</td>
                <td>24-06-2024</td>
                <td>Ditolak</td>
                <td>
                    <button class="action-button trayek">trayek</button>
                    <button class="action-button edit">edit</button>
                </td>
            </tr>
        </tbody>
    </table>
</main>
</div>
@endsection