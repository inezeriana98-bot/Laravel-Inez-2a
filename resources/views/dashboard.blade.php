<!DOCTYPE html>
<html lang="id">
<head>
    <!-- Pengaturan karakter dan judul halaman dinamis -->
    <meta charset="utf-8">
    <title>{{ $judul }}</title>
    <!-- Memuat file stylesheet utama -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>
<body>
    <!-- Membuat Container -->
    <div class="container">
        
        <!-- Header -->
        @include('template/header')
        <!-- Akhir Header -->

        <!-- Wadah utama untuk sidebar dan konten -->
        <div class="isi">
            <!-- Sidebar -->
            @include('template/sidebar')
            <!-- Akhir Sidebar -->

            <!-- Content -->
            <div class="content">
                <!-- Slot konten utama dari halaman turunan -->
                @yield('content')
            </div>
            <!-- Akhir Content -->
        </div>

    </div>
</body>
</html>