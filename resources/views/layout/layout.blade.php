<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/feather-icons"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    @yield('title')
    @yield('css')
    <link rel="stylesheet" href="{{ asset('css/dropdown.css') }}">
</head>

<body>
    <nav class="navbar">
        <div class="navbar-container">
            <a class="navbar-logo" href="#">
                SIMPROKUM
            </a>
        </div>
        <div class="dropdown">
            <ul>
                <li><a href="#">Akun &dtrif;</a>
                    <ul class="dropdown">
                        <li><a href="{{ route('profile') }}">Profile</a></li>
                        <li><a href="{{ route('logout') }}">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <aside class="sidebar">
            <ul>
                <li><a href="{{ route('pengajuanprodukhukum') }}">Pengajuan Produk Hukum</a></li>
                <li><a href="{{ route('katalogprodukhukum') }}">Katalog Produk Hukum</a></li>
                <li><a href="{{ route('tambahperaturan') }}">Tambah Produk Hukum</a></li>
            </ul>
            <div class="user-info">
                <h3>User Information</h3>
                <p><strong>Username:</strong> Staff Dokumentasi</p>
                <p><strong>Role:</strong> staf_dokumentasi</p>
                <p><strong>Dinas:</strong> SETDA Bagian Hukum Kota Batu</p>
            </div>
        </aside>
        @yield('content')
    </div>
</body>

</html>