<?php 

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin()
    {
        return view('admin.beranda');
    }

    public function barang()
    {
        $data = Barang::get();
        return view('admin.barang.index', compact('data'));
    }

    public function tambah_barang()
    {
        return view('admin.barang.tambah');
    }

    public function edit_barang($id)
    {
        $data = Barang::find($id);
        return view('admin.barang.edit', compact('data'));
    }

    public function delete_barang($id)
    {
        Barang::find($id)->delete();
        notify()->success('Berhasil Delete Barang⚡️');
        return back()->with('success', 'Barang berhasil dihapus!');
    }

    public function simpan_barang(Request $req)
    {
        Barang::create($req->all());
        notify()->success('Berhasil Simpan Barang⚡️');
        return redirect('/admin/barang')->with('success', 'Barang berhasil ditambahkan!');
    }

    public function update_barang(Request $req, $id)
    {
        Barang::find($id)->update($req->all());
        notify()->info('Berhasil Update Barang⚡️');
        return redirect('/admin/barang')->with('success', 'Barang berhasil diperbarui!');
    }
}
?>
