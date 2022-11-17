@extends('shared.layout')

@section('main-content')
<h1>Edit Data Pasien</h1>
<a href="/pasien" class="btn btn-sm btn-warning my-2">Kembali</a>
<div class="row my-2">
    <div class="col-md-5 mt-3 py-5 px-5 bg-light rounded-4 shadow">
        <form action="{{ '/pasien/'.$data->id }}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nama_pasien" class="form-label">Nama Pasien</label>
                <input type="text" class="form-control" id="nama_pasien" name="nama_pasien" value="{{ $data->nama_pasien }}">
            </div>
            <div class="mb-3">
                <p class="form-label">Jenis Kelamin</p>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki-laki" value="Laki-laki" {{ $data->jenis_kelamin == 'Laki-laki' ?  'checked' : ''}}>
                    <label class="form-check-label" for="laki-laki">Laki-laki</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="Perempuan" {{ $data->jenis_kelamin == 'Perempuan' ?  'checked' : ''}}>
                    <label class="form-check-label" for="perempuan">Perempuan</label>
                </div>
            </div>
            <div class="mb-3">
                <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="{{ $data->tanggal_lahir }}">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea name="alamat" id="alamat" class="form-control">{{ $data->alamat }}</textarea>
            </div>
            <div class="mb-3">
                <label for="no_telepon" class="form-label">No. Telepon</label>
                <input type="text" class="form-control" id="no_telepon" name="no_telepon" value="{{ $data->no_telepon }}">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $data->email }}">
            </div>
            <div class="mb-3">
                <input type="submit" name="submit" class="btn btn-success" value="Edit">
                <input type="reset" name="reset" class="btn btn-outline-danger" value="Bersih">
            </div>
        </form>
    </div>
</div>
@endsection