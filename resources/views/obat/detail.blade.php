@extends('shared.main')

@section('main-content')
<div class="container">
    <div class="mx-2 mt-3 pt-4 bg-light shadow rounded">
        <div class="row">
            <div class="col-sm-6">
                <span class="fs-5 ps-3">{{ $title }}</span>
                <p class="ps-3 text-muted">Data detail obat {{ $data->obat }}</p>
            </div>
        </div>
        <hr>

        <div class="container">
            <div class="row my-4">
                <div class="col-md-6">
                    <h3>{{ $data->nama_obat }}</h3>
                    <hr>
                    <table class="table">
                        <tr>
                            <td class="fw-bold">Jenis</td>
                            <td>{{ $data->jenis }}</td>
                        </tr>
                        <tr>
                            <td class="fw-bold">Tanggal Kedaluwarsa</td>
                            <td>{{ $data->tanggal_exp }}</td>
                        </tr>
                        <tr>
                            <td class="fw-bold">Stok</td>
                            <td>{{ $data->stok }}</td>
                        </tr>
                        <tr>
                            <td class="fw-bold">Deskripsi</td>
                            <td>{{ $data->deskripsi }}</td>
                        </tr>
                    </table>
                    <div class="mb-4">
                        <a href="{{ url('/obat/'.$data->id.'/edit') }}" class="btn btn-success"><i class="fas fa-edit"></i> Edit</a>
                        <a href="/obat" class="btn btn-warning my-2">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
