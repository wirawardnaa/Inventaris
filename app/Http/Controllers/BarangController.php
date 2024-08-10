<?php

namespace App\Http\Controllers; // Pastikan namespace ini benar

use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    public function create()
    {
        return view('admin.barang.tambah');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode' => 'required|string|max:255',
            'nama' => 'required|string|max:255',
            'stok' => 'required|integer',
        ]);

        $barang = new Barang;
        $barang->kode = $request->kode;
        $barang->nama = $request->nama;
        $barang->stok = $request->stok;
        $barang->save();

        return redirect('/admin/barang')->with('success', 'Data barang berhasil ditambahkan');
    }
}
