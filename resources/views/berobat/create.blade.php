@extends('shared.main')

@section('main-content')
<div class="container">
    <div class="mx-2 mt-3 pt-4 bg-light shadow rounded">
        <div class="row">
            <div class="col-sm-6">
                <span class="fs-5 ps-3">{{ $title }}</span>
                <p class="ps-3 text-muted">Tambah data pasien berobat</p>
            </div>
        </div>
        <hr>

        <div class="container">
            <div class="row my-4">
                <div class="col-md-5">
                    <form action="/berobat" method="post">
                        @csrf

                        <div class="mb-3">
                            <label for="nama_pasien_id" class="form-label">Nama Pasien <span class="text-danger">*</span></label>
                            <select class="form-select @error('nama_pasien_id') is-invalid @enderror" name="nama_pasien_id" id="nama_pasien_id">
                                <option selected>-</option>
                                @foreach ($pasien as $item)
                                    <option value="{{ $item->id }}" {{ old('nama_pasien_id') == $item->id ? 'selected' : ''}}>{{ $item->nama_pasien }}</option>
                                @endforeach
                            </select>
                            @error('nama_pasien_id')
                                <div class="invalid-feedback text-start">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="tanggal_berobat" class="form-label">Tanggal Berobat <span class="text-danger">*</span></label>
                            <input type="date" class="form-control @error('tanggal_berobat') is-invalid @enderror" id="tanggal_berobat" name="tanggal_berobat" value="{{ old('tanggal_berobat') }}">
                            @error('tanggal_berobat')
                                <div class="invalid-feedback text-start">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="keluhan" class="form-label">Keluhan <span class="text-danger">*</span></label>
                            <textarea name="keluhan" id="keluhan" class="form-control @error('keluhan') is-invalid @enderror">{{ old('keluhan') }}</textarea>
                            @error('keluhan')
                                <div class="invalid-feedback text-start">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="nama_dokter_id" class="form-label">Nama Dokter <span class="text-danger">*</span></label>
                            <select class="form-select @error('nama_dokter_id') is-invalid @enderror" name="nama_dokter_id" id="nama_dokter_id">
                                <option selected>-</option>
                                @foreach ($dokter as $item)
                                    <option value="{{ $item->id }}" {{ old('nama_dokter_id') == $item->id ? 'selected' : ''}}>{{ $item->nama_dokter }}</option>
                                @endforeach
                            </select>
                            @error('nama_dokter_id')
                                <div class="invalid-feedback text-start">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="hasil_periksa" class="form-label">Hasil Periksa <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('hasil_periksa') is-invalid @enderror" id="hasil_periksa" name="hasil_periksa" value="{{ old('hasil_periksa') }}">
                            @error('hasil_periksa')
                                <div class="invalid-feedback text-start">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <p class="form-label">Rujuk Pasien <span class="text-danger">*</span></p>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input @error('confirm_rujuk') is-invalid @enderror" type="radio" name="confirm_rujuk" id="1" value="1" {{ old('confirm_rujuk') == '1' ?  'checked' : ''}} onChange="checkOption(this)">
                                <label class="form-check-label" for="1">Ya</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input @error('confirm_rujuk') is-invalid @enderror" type="radio" name="confirm_rujuk" id="0" value="0" {{ old('confirm_rujuk') == '0' ?  'checked' : ''}} onChange="checkOption(this)">
                                <label class="form-check-label" for="0">Tidak</label>
                            </div>
                            @error('confirm_rujuk')
                                <div class="invalid-feedback text-start">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="nama_obat_id" class="form-label">Nama Obat <span class="text-danger">*</span></label>
                            <select class="form-select @error('nama_obat_id') is-invalid @enderror" name="nama_obat_id" id="nama_obat_id">
                                <option selected>-</option>
                                @foreach ($obat as $item)
                                    <option value="{{ $item->id }}" {{ old('nama_obat_id') == $item->id ? 'selected' : ''}}>{{ $item->nama_obat }}</option>
                                @endforeach
                            </select>
                            @error('nama_obat_id')
                                <div class="invalid-feedback text-start">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="nama_rs_id" class="form-label">Nama Rumah Sakit <span class="text-danger">*</span></label>
                            <select class="form-select @error('nama_rs_id') is-invalid @enderror" name="nama_rs_id" id="nama_rs_id">
                                <option selected>-</option>
                                @foreach ($rs_rujuk as $item)
                                    <option value="{{ $item->id }}" {{ old('nama_rs_id') == $item->id ? 'selected' : ''}}>{{ $item->nama_rs }}</option>
                                @endforeach
                            </select>
                            @error('nama_rs_id')
                                <div class="invalid-feedback text-start">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="biaya" class="form-label">Biaya <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('biaya') is-invalid @enderror" id="biaya" name="biaya" value="{{ old('biaya') }}">
                            @error('biaya')
                                <div class="invalid-feedback text-start">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <input type="submit" name="submit" class="btn btn-primary shadow" value="Tambah">
                            <a href="/berobat" class="btn btn-outline-danger" onclick="return confirm('Data yang Anda sudah input akan hilang. Anda yakin ingin membatalkan pengisian data?')">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function checkOption(obj) 
    {
        var input = document.getElementById("nama_rs_id");
        input.disabled = obj.value == "0";
        var input = document.getElementById("nama_obat_id");
        input.disabled = obj.value == "1";
    }
</script>
@endsection