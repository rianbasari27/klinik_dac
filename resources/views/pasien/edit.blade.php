@extends('shared.main')

@section('main-content')
<div class="container">
    <div class="mx-2 mt-3 pt-4 bg-light shadow rounded">
        <div class="row">
            <div class="col-sm-6">
                <span class="fs-5 ps-3">{{ $title }}</span>
                <p class="ps-3 text-muted">Edit data pasien</p>
            </div>
        </div>
        <hr>

        <div class="container">
            <div class="row my-4">
                <div class="col-md-5">
                    <form action="{{ '/pasien/'.$data->id }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="nama_pasien" class="form-label">Nama Pasien <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('nama_pasien') is-invalid @enderror" id="nama_pasien" name="nama_pasien" value="{{ $data->nama_pasien }}">
                            @error('nama_pasien')
                                <div class="invalid-feedback text-start">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
        
                        <div class="mb-3">
                            <p class="form-label">Jenis Kelamin <span class="text-danger">*</span></p>
                            <div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input @error('jenis_kelamin') is-invalid @enderror" type="radio" name="jenis_kelamin" id="laki-laki" value="Laki-laki" {{ $data->jenis_kelamin == 'Laki-laki' ?  'checked' : ''}}>
                                    <label class="form-check-label" for="laki-laki">Laki-laki</label>
                                    @error('jenis_kelamin')
                                    <div class="invalid-feedback text-start">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input @error('jenis_kelamin') is-invalid @enderror" type="radio" name="jenis_kelamin" id="perempuan" value="Perempuan" {{ $data->jenis_kelamin == 'Perempuan' ?  'checked' : ''}}>
                                    <label class="form-check-label" for="perempuan">Perempuan</label>
                                    @error('jenis_kelamin')
                                    <div class="invalid-feedback text-start">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
        
                        <div class="mb-3">
                            <label for="tanggal_lahir" class="form-label">Tanggal Lahir <span class="text-danger">*</span></label>
                            <input type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" id="tanggal_lahir" name="tanggal_lahir" value="{{ $data->tanggal_lahir }}">
                            @error('tanggal_lahir')
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
                        <div class="mb-3">
                            <label for="no_telepon" class="form-label">No. Telepon <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('no_telepon') is-invalid @enderror" id="no_telepon" name="no_telepon" value="{{ $data->no_telepon }}">
                            @error('no_telepon')
                                <div class="invalid-feedback text-start">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ $data->email }}">
                            @error('email')
                                <div class="invalid-feedback text-start">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <input type="submit" name="submit" class="btn btn-success shadow" value="Simpan">
                            <a href="/pasien" class="btn btn-outline-danger" onclick="return confirm('Data yang Anda sudah input akan hilang. Anda yakin ingin membatalkan pengisian data?')">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
