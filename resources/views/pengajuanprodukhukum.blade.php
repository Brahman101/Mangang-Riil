<!-- resources/views/dashboardtambah.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengisian Metadata</title>
    <link rel="stylesheet" href="{{ asset('css/pengajuanprodukhukum.css') }}">
    <script src="https://unpkg.com/feather-icons"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
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
</body>
<script>
    feather.replace();
</script>

</html>