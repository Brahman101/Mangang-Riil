@extends('layout.layout')

@section('title')
<title>Pengisian Metadata</title>
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('css/dashboardtambah.css') }}">
@endsection

@section('content')
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
@endsection