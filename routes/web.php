<?php

use Illuminate\Support\Facades\Route;

// Import semua Controller di bagian atas agar rapi
use App\Http\Controllers\Web;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KalkulatorController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\Kalkulator_SegitigaController; // <-- Ini yang tadi kurang diimport
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\AdminController;

// 1. Route Dasar
Route::get('/', function () {
    return "Hallo namaku adalah Laravel, Salam Kenal";
});

// Route About
Route::get('/about', function () {
    return "<h2>Ini adalah laman About</h2>";
});

// 2. Route Controller Web
Route::get('/web', [Web::class, 'home']);
Route::get('/profil/{nama}', [Web::class, 'profil']);
Route::get('/biodata', [Web::class, 'biodata']);

// 3. Route Controller DashboardController
Route::get('/home', [DashboardController::class, 'home']);
Route::get('/product', [DashboardController::class, 'product']);
Route::get('/produk/detail/{harga}', [DashboardController::class, 'detail']);

// 4. Route Controller Kalkulator (Sederhana)
Route::get('/kalkulator', [KalkulatorController::class, 'home']);
Route::post('/kalkulator/proses', [KalkulatorController::class, 'proses']);

// 5. Route Mahasiswa
Route::get('/daftar/mahasiswa', [MahasiswaController::class, 'index']);

// 6. Route Kalkulator Segitiga
Route::get('/kalkulator/segitiga', [Kalkulator_SegitigaController::class, 'segitiga']);
Route::post('/kalkulator/segitiga/proses', [Kalkulator_SegitigaController::class, 'prosesSegitiga']);

// 7. route ke controller Dashboard
Route::get('/dashboard',[DashboardController::class, 'home']);

// 8. menambahkan laman gallery
Route::get('/gallery',[DashboardController::class, 'gallery']);

// 9. Mendefinisikan route untuk mengakses halaman data pegawai (index)
Route::get('/employe',[EmployeController::class, 'index']);

// 10. route untuk menampilkan form tambah data pegawai
Route::get('/employe/create', [EmployeController::class, 'create']);

// 11. route untuk proses simpan data pegawai
Route::post('/employe/store', [EmployeController::class, 'store']);

// 12. route untuk menampilkan form edit data pegawai berdasarkan id
Route::get('/employe/edit/{employe}', [EmployeController::class, 'show']);

// 13. route untuk proses ubah data pegawai berdasarkan id
Route::put('/employe/{employe}', [EmployeController::class, 'update']);

// 14. route untuk proses hapus data pegawai berdasarkan id
Route::delete('/employe/{employe}', [EmployeController::class, 'destroy']);

// Route::resource('employe',EmployeController::class);

// Tampilkan semua data admin
Route::get('/admin', [AdminController::class, 'index']);

// Form tambah data admin
Route::get('/admin/create', [AdminController::class, 'create']);

// Proses simpan data admin baru
Route::post('/admin/store', [AdminController::class, 'store']);

// Form edit data admin berdasarkan id_admin
Route::get('/admin/edit/{admin}', [AdminController::class, 'edit']);

// Proses update data admin berdasarkan id_admin
Route::put('/admin/{admin}', [AdminController::class, 'update']);

// Proses hapus data admin berdasarkan id_admin
Route::delete('/admin/{admin}', [AdminController::class, 'destroy']);