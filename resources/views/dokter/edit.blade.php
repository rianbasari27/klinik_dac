@extends('shared.layout')

@section('main-content')
<h1>Edit Data Dokter</h1>
<a href="/dokter" class="btn btn-sm btn-warning my-2">Kembali</a>
<div class="row my-2">
    <div class="col-md-5 mt-3 py-5 px-5 bg-light rounded-4 shadow">
        <form action="{{ '/dokter/'.$data->id }}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nama_dokter" class="form-label">Nama Dokter</label>
                <input type="text" class="form-control" id="nama_dokter" name="nama_dokter" value="{{ $data->nama_dokter }}">
            </div>
            <div class="mb-3">
                <label for="nip" class="form-label">NIP</label>
                <input type="number" class="form-control" id="nip" name="nip" value="{{ $data->nip }}">
            </div>
            <div class="mb-3">
                <label for="sip" class="form-label">SIP</label>
                <input type="number" class="form-control" id="sip" name="sip" value="{{ $data->sip }}">
            </div>
            <div class="mb-3">
                <input type="submit" name="submit" class="btn btn-success" value="Edit">
                <input type="reset" name="reset" class="btn btn-outline-danger" value="Bersih">
            </div>
        </form>
    </div>
</div>
@endsection