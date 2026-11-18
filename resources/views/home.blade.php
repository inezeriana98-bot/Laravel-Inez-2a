{{-- Mewarisi layout utama dari file dashboard.blade.php --}}
@extends('dashboard')

{{-- Memulai bagian section content yang akan dimasukkan ke dalam layout dashboard --}}
@section('content')
    {{-- Menampilkan variabel judul yang dikirim dari controller --}}
    <h1>{{$judul}}</h1>
    
    {{-- Teks informasi statis untuk laman Home --}}
    <p>Ini adalah laman Home</p>
@endsection
{{-- Akhir dari section content --}}