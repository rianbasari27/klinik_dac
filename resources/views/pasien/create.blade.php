@extends('shared.main')

@section('main-content')
<h1 class="text-center">Data Pasien Baru</h1>
<div class="row my-2 justify-content-center">
    <div class="col-md-5 mt-3 py-5 px-5 bg-light rounded-4 shadow">
        <form action="/pasien" method="post">
            @csrf
            <div class="mb-3">
                <label for="nama_pasien" class="form-label">Nama Pasien</label>
                <input type="text" class="form-control" id="nama_pasien" name="nama_pasien" value="{{ Session::get('nama_pasien') }}" placeholder="Nama Pasien">
            </div>
            <div class="mb-3">
                <p class="form-label">Jenis Kelamin</p>
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
                <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="{{ Session::get('tanggal_lahir') }}">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea name="alamat" id="alamat" class="form-control">{{ Session::get('alamat') }}</textarea>
            </div>
            <div class="mb-3">
                <label for="no_telepon" class="form-label">No. Telepon</label>
                <input type="text" class="form-control" id="no_telepon" name="no_telepon" value="{{ Session::get('no_telepon') }}">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ Session::get('email') }}">
            </div>
            <div class="mb-3">
                <input type="submit" name="submit" class="btn btn-primary shadow" value="Tambah">
                <a href="/pasien" class="btn btn-outline-danger" onclick="return confirm('Data yang Anda sudah input akan hilang. Anda yakin ingin membatalkan pengisian data?')">Cancel</a>
            </div>
        </form>
    </div>
</div>
@endsection