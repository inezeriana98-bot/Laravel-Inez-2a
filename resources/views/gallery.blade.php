@extends('dashboard')

@section('content')
<h1>{{$judul}}</h1>
<p>Ini adalah laman Gallery</p>
{{-- Menampilkan gambar contoh/placeholder dengan ukuran 100x100 piksel --}}
<img src="https://picsum.photos/100" width="100px" height="100px">
@endsection