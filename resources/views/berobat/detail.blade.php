@extends('shared.main')

@section('main-content')
<h1>Detail Berobat</h1>
<div class="row my-2">
    <div class="col-md-6 mt-3 py-5 px-5 bg-light rounded-4 shadow">
        <h3>{{ $data->pasien->nama_pasien }}</h3>
        <hr>
        <table class="table">
            <tr>
                <td class="text-end fw-bold">Tanggal lahir</td>
                <td>{{ $data->tanggal_berobat }}</td>
            </tr>
            <tr>
                <td class="text-end fw-bold">Keluhan</td>
                <td>{{ $data->keluhan }}</td>
            </tr>
            <tr>
                <td class="text-end fw-bold">Nama Dokter</td>
                <td>{{ $data->dokter->nama_dokter }}</td>
            </tr>
            <tr>
                <td class="text-end fw-bold">Hasil Periksa</td>
                <td>{{ $data->hasil_periksa }}</td>
            </tr>
            <tr>
                <td class="text-end fw-bold">Obat</td>
                <td>
                    @if ($data->nama_obat_id === null) 
                        {{ '-' }}
                    @else 
                        {{ $data->obat->nama_obat }}
                    @endif
                </td>
            </tr>
            <tr>
                <td class="text-end fw-bold">Rujuk Rumah Sakit</td>
                <td>
                    @if ($data->nama_rs_id === null) 
                        {{ '-' }}
                    @else 
                        {{ $data->rs_rujuk->nama_rs }}
                    @endif
                </td>
            </tr>
            <tr>
                <td class="text-end fw-bold">Biaya</td>
                <td>{{ $data->biaya }}</td>
            </tr>
        </table>
        <a href="/berobat" class="btn btn-sm btn-warning my-2 shadow">Kembali</a>
        <a href="{{ url('/berobat/'.$data->id.'/edit') }}" class="btn btn-sm btn-success shadow">Edit</a>
    </div>
</div>
@endsection