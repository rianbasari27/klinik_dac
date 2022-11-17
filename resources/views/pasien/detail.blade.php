@extends('shared.layout')

@section('main-content')
<h1>Detail Pasien</h1>
<div class="row my-2">
    <div class="col-md-6 mt-3 py-5 px-5 bg-light rounded-4 shadow">
        <h3>{{ $data->nama_pasien }}</h3>
        <hr>
        <table class="table">
            <tr>
                <td class="text-end fw-bold">Tanggal lahir</td>
                <td>{{ $data->tanggal_lahir }}</td>
            </tr>
            <tr>
                <td class="text-end fw-bold">Jenis Kelamin</td>
                <td>{{ $data->jenis_kelamin }}</td>
            </tr>
            <tr>
                <td class="text-end fw-bold">Alamat</td>
                <td>{{ $data->alamat }}</td>
            </tr>
            <tr>
                <td class="text-end fw-bold">No. Telepon</td>
                <td>{{ $data->no_telepon }}</td>
            </tr>
            <tr>
                <td class="text-end fw-bold">Email</td>
                <td>{{ $data->email }}</td>
            </tr>
        </table>
        <a href="/pasien" class="btn btn-sm btn-warning my-2">Kembali</a>
    </div>
</div>
@endsection