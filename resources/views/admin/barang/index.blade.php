@extends('layouts.master')

@section('content')

@if(session('success'))
        <div class="alert alert-success" id="success-alert">
            {{ session('success') }}
        </div>
    @endif


<div class="row">
    <div class="col-md-6">
        <h1 class="h3 mb-0 text-gray-800">Data Barang</h1>
    </div>



    <div class="col-md-6 text-right">
        <a href="/admin/barang/tambah" class="btn btn-primary btn-circle btn-lg">
            <i class="fa fa-plus"></i>
        </a>
    </div>
</div>
<br>


<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Menampilkan Data Barang</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode</th>
                        <th>Nama Barang</th>
                        <th>Stok</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $key => $item)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $item->kode }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->stok }}</td>
                        <td>
                            <a href="/admin/barang/edit/{{$item->id}}" class="btn btn-success btn-circle btn-sm">
                                <i class="fa fa-edit"></i>
                            </a>
                        
                        
                            <a href="/admin/barang/delete/{{$item->id}}" class="btn btn-danger btn-circle btn-sm" onclick="return confirm ('Yakin Ingin Menghapus ?')">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
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
