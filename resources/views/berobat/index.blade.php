@extends('shared.layout')

@section('main-content')
<h1 class="my-3">Data Berobat</h1>
<a href="/berobat/create" class="btn btn-outline-primary">Data baru</a>
<table class="table table-hover my-3">
    <thead>
        <tr>
            <th>Nama Pasien</th>
            <th>Tanggal Berobat</th>
            <th>Keluhan</th>
            <th>Biaya</th>
        </tr>
    </thead>
    <tbody>
        {{-- <tr>
            <td><input type="text" name="s_nama_pasien" class="form-control"></td>
            <td>
                <select class="form-select mb-3" aria-label=".form-select-lg example">
                    <option selected>-</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </td>
            <td>
                <input type="date" name="s_tanggal_lahir" class="form-control">
            </td>
            <td><input type="text" name="s_no_telepon" class="form-control"></td>
            <td>
                <form action="/pasien">
                    <button class="btn btn-outline-secondary" type="submit" name="search">Search</button>
                </form>
            </td>
        </tr> --}}
        @foreach ($data as $item)  
        <tr>
            <td>{{ $item->pasien['nama_pasien'] }}</td>
            <td>{{ $item->tanggal_berobat }}</td>
            <td>{{ $item->keluhan }}</td>
            <td>{{ $item->biaya }}</td>
            <td>
                <a href="{{ url('/berobat/'.$item->id.'/edit') }}" class="btn btn-sm btn-success shadow">Edit</a>
                <a href="{{ url('/berobat/'.$item->id) }}" class="btn btn-sm btn-secondary shadow">Detail</a>
                <form action="{{ '/berobat/'.$item->id }}" method="post" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger shadow" type="submit">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{ $data->links() }}
@endsection