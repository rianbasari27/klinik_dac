@extends('shared.main')

@section('main-content')
<div class="container">
    <div class="mx-2 mt-3 pt-4 bg-light shadow rounded">
        <div class="row">
            <div class="col-sm-6">
                <span class="fs-5 ps-3">{{ $title }}</span>
                <p class="ps-3 text-muted">Data detail {{ $data->nama_pasien }}</p>
            </div>
        </div>
        <hr>

        <div class="container">
            <div class="row my-4">
                <div class="col-md-6">
                    <h3>{{ $data->nama_pasien }}</h3>
                    <hr>
                    <table class="table">
                        <tr>
                            <td class="fw-bold">Tanggal lahir</td>
                            <td>{{ $data->tanggal_lahir }}</td>
                        </tr>
                        <tr>
                            <td class="fw-bold">Jenis Kelamin</td>
                            <td>{{ $data->jenis_kelamin }}</td>
                        </tr>
                        <tr>
                            <td class="fw-bold">Alamat</td>
                            <td>{{ $data->alamat }}</td>
                        </tr>
                        <tr>
                            <td class="fw-bold">No. Telepon</td>
                            <td>{{ $data->no_telepon }}</td>
                        </tr>
                        <tr>
                            <td class="fw-bold">Email</td>
                            <td>{{ $data->email }}</td>
                        </tr>
                    </table>
                    <div class="mb-4">
                        <a href="{{ url('/pasien/'.$data->id.'/edit') }}" class="btn btn-success"><i class="fas fa-edit"></i> Edit</a>
                        <a href="/pasien" class="btn btn-warning my-2">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection