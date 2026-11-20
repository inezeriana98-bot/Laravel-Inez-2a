<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    // Menampilkan semua data admin
    public function index()
    {
        $data['judul'] = 'Data Admin';
        $data['admins'] = Admin::all();
        return view('admin.index', $data);
    }

    // Menampilkan form tambah data admin
    public function create()
    {
        $data['judul'] = 'Tambah Data Admin';
        return view('admin.create', $data);
    }

    // Menyimpan data admin ke database
    public function store(Request $request)
    {
        $admin = new Admin;
        $admin->id_admin = $request->id_admin;
        $admin->username = $request->username;
        $admin->password = Hash::make($request->password);
        $admin->save();

        return redirect('/admin');
    }

    // Menampilkan form edit data admin
    public function edit(Admin $admin)
    {
        $data['judul'] = 'Edit Data Admin';
        $data['admin'] = $admin;
        return view('admin.edit', $data);
    }

    // Memperbarui data admin di database
    public function update(Request $request, Admin $admin)
    {
        $admin->username = $request->username;

        // Update password hanya jika kolom password diisi
        if ($request->filled('password')) {
            $admin->password = Hash::make($request->password);
        }

        $admin->save();

        return redirect('/admin');
    }

    // Menghapus data admin dari database
    public function destroy(Admin $admin)
    {
        $admin->delete();

        return redirect('/admin');
    }
}