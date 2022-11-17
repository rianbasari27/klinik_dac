@extends('shared.layout')

@section('main-content')
<h1>Data Berobat Baru</h1>
<a href="/berobat" class="btn btn-sm btn-warning my-2">Kembali</a>
<div class="row my-2">
    <div class="col-md-5 mt-3 py-5 px-5 bg-light rounded-4 shadow">
        <form action="/berobat" method="post">
            @csrf
            <div class="mb-3">
                <label for="nama_pasien_id" class="form-label">Nama Pasien</label>
                <select class="form-select" name="nama_pasien_id">
                    <option selected>-</option>
                    @foreach ($pasien as $item)
                        <option value="{{ $item->id }}" {{ Session::get('nama_pasien_id') == $item->id ?  'selected' : ''}}>{{ $item->nama_pasien }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="tanggal_berobat" class="form-label">Tanggal Berobat</label>
                <input type="date" class="form-control" id="tanggal_berobat" name="tanggal_berobat" value="{{ Session::get('tanggal_berobat') }}">
            </div>
            <div class="mb-3">
                <label for="keluhan" class="form-label">Keluhan</label>
                <textarea name="keluhan" id="keluhan" class="form-control">{{ Session::get('keluhan') }}</textarea>
            </div>
            <div class="mb-3">
                <label for="nama_dokter_id" class="form-label">Nama Dokter</label>
                <select class="form-select" name="nama_dokter_id">
                    <option selected>-</option>
                    @foreach ($dokter as $item)
                        <option value="{{ $item->id }}" {{ Session::get('nama_dokter_id') == $item->id ?  'selected' : ''}}>{{ $item->nama_dokter }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="hasil_periksa" class="form-label">Hasil periksa</label>
                <input type="text" class="form-control" id="hasil_periksa" name="hasil_periksa" value="{{ Session::get('hasil_periksa') }}">
            </div>
            <div class="mb-3">
                <p class="form-label">Rujuk Pasien?</p>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki-laki" value="Laki-laki" {{ Session::get('jenis_kelamin') == 'Laki-laki' ?  'checked' : ''}}>
                    <label class="form-check-label" for="laki-laki">Laki-laki</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="Perempuan" {{ Session::get('jenis_kelamin') == 'Perempuan' ?  'checked' : ''}}>
                    <label class="form-check-label" for="perempuan">Perempuan</label>
                </div>
            </div>
            <div class="mb-3">
                <label for="nama_obat_id" class="form-label">Nama Obat</label>
                <select class="form-select" name="nama_obat_id">
                    <option selected>-</option>
                    @foreach ($obat as $item)
                        <option value="{{ $item->id }}" {{ Session::get('nama_obat_id') == $item->id ?  'selected' : ''}}>{{ $item->nama_obat }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="nama_rs_id" class="form-label">Nama Rumah Sakit</label>
                <select class="form-select" name="nama_rs_id">
                    <option selected>-</option>
                    @foreach ($rs_rujuk as $item)
                        <option value="{{ $item->id }}" {{ Session::get('nama_rs_id') == $item->id ?  'selected' : ''}}>{{ $item->nama_rs }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="biaya" class="form-label">Biaya</label>
                <input type="number" class="form-control" id="biaya" name="biaya" value="{{ Session::get('biaya') }}">
            </div>
            <div class="mb-3">
                <input type="submit" name="submit" class="btn btn-primary" value="Tambah">
                <input type="reset" name="reset" class="btn btn-outline-danger" value="Bersih">
            </div>
        </form>
    </div>
</div>
@endsection