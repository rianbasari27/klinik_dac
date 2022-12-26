@extends('shared.main')

@section('main-content')
<div class="container">
    <div class="mx-2 mt-3 pt-4 bg-light shadow rounded">
        <div class="row">
            <div class="col-sm-6">
                <span class="fs-5 ps-3">{{ $title }}</span>
                <p class="ps-3 text-muted">Edit data dokter</p>
            </div>
        </div>
        <hr>

        <div class="container">
            <div class="row my-4">
                <div class="col-md-5">
                    <form action="{{ '/dokter/'.$data->id }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="nama_dokter" class="form-label">Nama Dokter <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('nama_dokter') is-invalid @enderror" id="nama_dokter" name="nama_dokter" value="{{ $data->nama_dokter }}">
                            @error('nama_dokter')
                                <div class="invalid-feedback text-start">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="nip" class="form-label">NIP <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('nip') is-invalid @enderror" id="nip" name="nip" value="{{ $data->nip }}">
                            @error('nip')
                                <div class="invalid-feedback text-start">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label for="sip" class="form-label">SIP <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('sip') is-invalid @enderror" id="sip" name="sip" value="{{ $data->sip }}">
                            @error('sip')
                                <div class="invalid-feedback text-start">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <input type="submit" name="submit" class="btn btn-success shadow" value="Simpan">
                            <a href="/dokter" class="btn btn-outline-danger" onclick="return confirm('Data yang Anda sudah input akan hilang. Anda yakin ingin membatalkan pengisian data?')">Cancel</a>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection