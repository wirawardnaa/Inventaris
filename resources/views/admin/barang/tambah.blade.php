@extends('layouts.master')

@section('content')

@if(session('success'))
        <div class="alert alert-success" id="success-alert">
            {{ session('success') }}
        </div>
    @endif


<div class="row">
    <div class="col-md-6">
        <h1 class="h3 mb-0 text-gray-800">Tambah Data Barang</h1>
    </div>
</div>
<br>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Menambahkan Data Barang Baru</h6>
    </div>
    <div class="card-body">
        <form action="/admin/barang/simpan" method="POST">
            @csrf
            <div class="form-group">
                <label for="kode">Kode Barang</label>
                <input type="text" class="form-control" id="kode" name="kode" required>
            </div>
            <div class="form-group">
                <label for="nama">Nama Barang</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="stok">Stok Barang</label>
                <input type="number" class="form-control" id="stok" name="stok" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="/admin/barang" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', (event) => {
        const alert = document.getElementById('success-alert');
        if (alert) {
            setTimeout(() => {
                alert.style.display = 'none';
            }, 1500); // 3000 ms = 3 seconds
        }
    });
</script>

@endsection


