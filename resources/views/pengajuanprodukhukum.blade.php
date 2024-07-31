@extends('layout.layout')

@section('title')
<title>Pengajuan Produk Hukum</title>
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('css/pengajuanprodukhukum.css') }}">
@endsection

@section('content')
<main class="main-content">
    <h2>Pengajuan Produk Hukum</h2>
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
                <th style="width: 60%; text-align:start">Judul</th>
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
                <td>Diterima</td>
                <td style="max-width:150px;">
                    <button class="action-button">
                        <i data-feather="search"></i>
                    </button>
                    <button class="action-button">
                        <i data-feather="download"></i>
                    </button>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>13</td>
                <td>2022</td>
                <td style="text-align:start">Regulasi Penyiaran Televisi dan Radio</td>
                <td>Ditolak</td>
                <td>
                    <button class="action-button">
                        <i data-feather="search"></i>
                    </button>
                    <button class="action-button">
                        <i data-feather="download"></i>
                    </button>
                </td>
            </tr>
        </tbody>
    </table>
</main>
</div>
<script>
    feather.replace();
</script>
<script src="{{ asset('js/pengajuanprodukhukum.js') }}" defer></script>
@endsection