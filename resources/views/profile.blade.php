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
                <li><a href="{{ route('dashboardchart') }}">Chart</a></li>
                <li><a href="{{ route('profile') }}">Profile</a></li>
            </ul>
            <div class="user-info">
                <h3>User Information</h3>
                <p><strong>Username:</strong> Staff Dokumentasi</p>
                <p><strong>Role:</strong> staf_dokumentasi</p>
                <p><strong>Dinas:</strong> SETDA Bagian Hukum Kota Batu</p>
            </div>
        </aside>
        <main class="main-content">
            <h2>Profile</h2>
            <form class="form" id="emailform" method="POST" action="{{ route('profile') }}">
                @csrf
                @method('PUT')
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required>

                <label for="password">Password:</label>
                <input type="password" name="password" id="password" required>

                <label for="password_confirmation">Confirm Password:</label>
                <input type="password" name="password_confirmation" id="password_confirmation" required>

                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>

                <label for="nip">NIP</label>
                <input type="text" id="nip" name="nip" required>

                <label for="pilih-dinas">Pilih Dinas</label>
                <select class="text" name="pilih-dinas">
                    <option value="SETDA-bagian-hukum-kota-batu">SETDA Bagian Hukum Kota Batu</option>
                    <option value="SETDA-bagian-hukum-kota-malang">SETDA Bagian Hukum Kota Malang</option>
                </select>
                <button type="submit" class="submit-button">Edit Profile</button>
            </form>
        </main>
    </div>
    <script src="{{ asset('js/profile.js') }}" defer></script>
</body>

</html>