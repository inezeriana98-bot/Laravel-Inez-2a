<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function home() 
    {
        $data['judul'] = 'Laman Home';
        $data['isi'] = 'Lorem ipsum dolor sit amet';
        return view('home', $data);
    }

    public function gallery()
    {
        $data['judul'] = 'Laman Gallery';
        return view('gallery', $data);
    }

    public function product() 
    {
        $data['judul'] = 'Laman Product';
        return view('product', $data);
    }

    public function about() 
    {
        $data['judul'] = 'Laman About';
        return view('about', $data);
    }

    public function detail($nama) 
    {
        // Data harga produk sesuai latihan di modul
        $hargaList = [
            'sepatu' => '300.000',
            'baju'   => '200.000',
            'celana' => '150.000'
        ];

        $namaItem = strtolower($nama);
        $harga = $hargaList[$namaItem] ?? 'Harga tidak ditemukan';

        $data['judul'] = 'Detail Produk';
        $data['nama'] = ucfirst($namaItem);
        $data['harga'] = $harga;

        return view('detail', $data);
    }
}