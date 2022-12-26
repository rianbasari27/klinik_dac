@extends('shared.main')

@section('main-content')
<div class="container">
    <div class="mx-2 mt-3 pt-4 bg-light shadow rounded">
        <div class="row">
            <div class="col-sm-6">
                <span class="fs-5 ps-3">{{ $title }}</span>
                <p class="ps-3 text-muted">Tambah data obat</p>
            </div>
        </div>
        <hr>

        <div class="container">
            <div class="row my-4">
                <div class="col-md-5">
                    <form action="/obat" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="nama_obat" class="form-label">Nama Obat <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('nama_obat') is-invalid @enderror" id="nama_obat" name="nama_obat" value="{{ old('nama_obat') }}">
                            @error('nama_obat')
                                <div class="invalid-feedback text-start">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <p class="form-label">Jenis <span class="text-danger">*</span></p>
                            <select class="form-select @error('jenis') is-invalid @enderror" name="jenis">
                                <option selected>-</option>
                                <option value="Kapsul" {{ old('jenis') == 'Kapsul' ?  'selected' : ''}}>Kapsul</option>
                                <option value="Tablet" {{ old('jenis') == 'Tablet' ?  'selected' : ''}}>Tablet</option>
                                <option value="Obat cair" {{ old('jenis') == 'Obat cair' ?  'selected' : ''}}>Obat cair</option>
                                <option value="Suntik" {{ old('jenis') == 'Suntik' ?  'selected' : ''}}>Suntik</option>
                            </select>
                            @error('jenis')
                                <div class="invalid-feedback text-start">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>     
                        
                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi Obat <span class="text-danger">*</span></label>
                            <textarea name="deskripsi" id="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror">{{ old('deskripsi') }}</textarea>
                            @error('deskripsi')
                                <div class="invalid-feedback text-start">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
        
                        <div class="mb-3">
                            <label for="tanggal_exp" class="form-label">Tanggal Kedaluwarsa <span class="text-danger">*</span></label>
                            <input type="date" class="form-control @error('tanggal_exp') is-invalid @enderror" id="tanggal_exp" name="tanggal_exp" value="{{ old('tanggal_exp') }}">
                            @error('tanggal_exp')
                                <div class="invalid-feedback text-start">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="stok" class="form-label">Stok <span class="text-danger">*</span></label>
                            <input type="number" class="form-control @error('stok') is-invalid @enderror" id="stok" name="stok" value="{{ old('stok') }}">
                            @error('stok')
                                <div class="invalid-feedback text-start">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <input type="submit" name="submit" class="btn btn-primary shadow" value="Tambah">
                            <a href="/obat" class="btn btn-outline-danger" onclick="return confirm('Data yang Anda sudah input akan hilang. Anda yakin ingin membatalkan pengisian data?')">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection