@extends('shared.main')

@section('main-content')
<h1>Data Rumah Sakit Baru</h1>
<a href="/rs_rujuk" class="btn btn-sm btn-warning my-2">Kembali</a>
<div class="row my-2">
    <div class="col-md-5 mt-3 py-5 px-5 bg-light rounded-4 shadow">
        <form action="/rs_rujuk" method="post">
            @csrf
            <div class="mb-3">
                <label for="nama_rs" class="form-label">Nama Rumah Sakit</label>
                <input type="text" class="form-control" id="nama_rs" name="nama_rs" value="{{ Session::get('nama_rs') }}" placeholder="Nama Rumah Sakit">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea name="alamat" id="alamat" class="form-control">{{ Session::get('alamat') }}</textarea>
            </div>
            <div class="mb-3">
                <input type="submit" name="submit" class="btn btn-primary" value="Tambah">
                <input type="reset" name="reset" class="btn btn-outline-danger" value="Bersih">
            </div>
        </form>
    </div>
</div>
@endsection