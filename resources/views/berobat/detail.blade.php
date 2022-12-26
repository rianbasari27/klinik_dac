@extends('shared.main')

@section('main-content')
<div class="container">
    <div class="mx-2 mt-3 pt-4 bg-light shadow rounded">
        <div class="row">
            <div class="col-sm-6">
                <span class="fs-5 ps-3">{{ $title }}</span>
                <p class="ps-3 text-muted">Data detail pasien berobat</p>
            </div>
        </div>
        <hr>

        <div class="container">
            <div class="row my-4">
                <div class="col-md-6">
                    <h3>{{ $data->pasien->nama_pasien }}</h3>
                    <hr>
                    <table class="table">
                        <tr>
                            <td class="fw-bold">Tanggal berobat</td>
                            <td>{{ $data->tanggal_berobat }}</td>
                        </tr>
                        <tr>
                            <td class="fw-bold">Keluhan</td>
                            <td>{{ $data->keluhan }}</td>
                        </tr>
                        <tr>
                            <td class="fw-bold">Nama dokter</td>
                            <td>{{ $data->dokter->nama_dokter }}</td>
                        </tr>
                        <tr>
                            <td class="fw-bold">Hasil periksa</td>
                            <td>{{ $data->hasil_periksa }}</td>
                        </tr>
                        <tr>
                            <td class="fw-bold">Obat</td>
                            <td>
                                @if ($data->nama_obat_id === null) 
                                    {{ '-' }}
                                @else 
                                    {{ $data->obat->nama_obat }}
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td class="fw-bold">Rujuk rumah sakit</td>
                            <td>
                                @if ($data->nama_rs_id === null) 
                                    {{ '-' }}
                                @else 
                                    {{ $data->rs_rujuk->nama_rs }}
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td class="fw-bold">Biaya</td>
                            <td>{{ $data->biaya }}</td>
                        </tr>

                    </table>
                    <div class="mb-4">
                        <a href="{{ url('/berobat/'.$data->id.'/edit') }}" class="btn btn-success"><i class="fas fa-edit"></i> Edit</a>
                        <a href="/berobat" class="btn btn-warning my-2">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
