@extends('shared.layout')

@section('main-content')
<h1>Edit Data Pasien</h1>
<a href="/obat" class="btn btn-sm btn-warning my-2">Kembali</a>
<div class="row my-2">
    <div class="col-md-5 mt-3 py-5 px-5 bg-light rounded-4 shadow">
        <form action="{{ '/obat/'.$data->id }}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nama_obat" class="form-label">Nama Obat</label>
                <input type="text" class="form-control" id="nama_obat" name="nama_obat" value="{{ $data->nama_obat }}">
            </div>
            <div class="mb-3">
                <p class="form-label">Jenis</p>
                <select class="form-select" name="jenis">
                    <option selected>-</option>
                    <option value="Kapsul" {{ $data->jenis == 'Kapsul' ?  'selected' : ''}}>Kapsul</option>
                    <option value="Tablet" {{ $data->jenis == 'Tablet' ?  'selected' : ''}}>Tablet</option>
                    <option value="Obat cair" {{ $data->jenis == 'Obat cair' ?  'selected' : ''}}>Obat cair</option>
                    <option value="Suntik" {{ $data->jenis == 'Suntik' ?  'selected' : ''}}>Suntik</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea name="deskripsi" id="deskripsi" class="form-control">{{ $data->deskripsi }}</textarea>
            </div>
            <div class="mb-3">
                <label for="tanggal_exp" class="form-label">Tanggal Kedaluwarsa</label>
                <input type="date" class="form-control" id="tanggal_exp" name="tanggal_exp" value="{{ $data->tanggal_exp }}">
            </div>
            <div class="mb-3">
                <label for="stok" class="form-label">Stok</label>
                <input type="text" class="form-control" id="stok" name="stok" value="{{ $data->stok }}">
            </div>
            <div class="mb-3">
                <input type="submit" name="submit" class="btn btn-success" value="Edit">
                <input type="reset" name="reset" class="btn btn-outline-danger" value="Bersih">
            </div>
        </form>
    </div>
</div>
@endsection