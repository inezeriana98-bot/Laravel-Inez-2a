<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>{{ $judul }}</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>
<body>
    <!-- Membuat Container -->
    <div class="container">
        
        <!-- Header -->
        @include('template/header')
        <!-- Akhir Header -->

        <div class="isi">
            <!-- Sidebar -->
            @include('template/sidebar')
            <!-- Akhir Sidebar -->

            <!-- Content -->
            <div class="content">
                @yield('content')
            </div>
            <!-- Akhir Content -->
        </div>

    </div>
</body>
</html>