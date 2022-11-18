@extends('shared.layout')

@section('main-content')
<h1>Detail Obat</h1>
<div class="row my-2">
    <div class="col-md-6 mt-3 py-5 px-5 bg-light rounded-4 shadow">
        <h3>{{ $data->nama_obat }}</h3>
        <hr>
        <table class="table">
            <tr>
                <td class="text-end fw-bold">Jenis</td>
                <td>{{ $data->jenis }}</td>
            </tr>
            <tr>
                <td class="text-end fw-bold">Tanggal Kedaluwarsa</td>
                <td>{{ $data->tanggal_exp }}</td>
            </tr>
            <tr>
                <td class="text-end fw-bold">Stok</td>
                <td>{{ $data->stok }}</td>
            </tr>
            <tr>
                <td class="text-end fw-bold">Deskripsi</td>
                <td>{{ $data->deskripsi }}</td>
            </tr>
        </table>
        <a href="/obat" class="btn btn-sm btn-warning my-2">Kembali</a>
    </div>
</div>
@endsection