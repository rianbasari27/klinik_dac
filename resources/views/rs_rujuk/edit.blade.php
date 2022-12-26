@extends('shared.main')

@section('main-content')
<div class="container">
    <div class="mx-2 mt-3 pt-4 bg-light shadow rounded">
        <div class="row">
            <div class="col-sm-6">
                <span class="fs-5 ps-3">{{ $title }}</span>
                <p class="ps-3 text-muted">Edit data rumah sakit rujukan</p>
            </div>
        </div>
        <hr>

        <div class="container">
            <div class="row my-4">
                <div class="col-md-5">
                    <form action="{{ '/rs_rujuk/'.$data->id }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="nama_rs" class="form-label">Nama Pasien <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('nama_rs') is-invalid @enderror" id="nama_rs" name="nama_rs" value="{{ $data->nama_rs }}">
                            @error('nama_rs')
                                <div class="invalid-feedback text-start">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
        
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat <span class="text-danger">*</span></label>
                            <textarea name="alamat" id="alamat" class="form-control @error('alamat') is-invalid @enderror">{{ $data->alamat }}</textarea>
                            @error('alamat')
                                <div class="invalid-feedback text-start">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    
                        <div class="mb-4">
                            <input type="submit" name="submit" class="btn btn-success shadow" value="Simpan">
                            <a href="/rs_rujuk" class="btn btn-outline-danger" onclick="return confirm('Data yang Anda sudah input akan hilang. Anda yakin ingin membatalkan pengisian data?')">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
