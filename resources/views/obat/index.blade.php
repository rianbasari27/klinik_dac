@extends('shared.layout')

@section('main-content')
<h1 class="my-3">Data Pasien</h1>
<a href="/obat/create" class="btn btn-outline-primary">Data baru</a>
<table class="table table-hover my-3">
    <thead>
        <tr>
            <th>Nama Obat</th>
            <th>Jenis</th>
            <th>Stok</th>
            <th>Tanggal Kedaluwarsa</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)  
        <tr>
            <td>{{ $item->nama_obat }}</td>
            <td>{{ $item->jenis }}</td>
            <td>{{ $item->stok }}</td>
            <td>{{ $item->tanggal_exp }}</td>
            <td>
                <a href="{{ url('/obat/'.$item->id.'/edit') }}" class="btn btn-sm btn-success shadow">Edit</a>
                <a href="{{ url('/obat/'.$item->id) }}" class="btn btn-sm btn-secondary shadow">Detail</a>
                <form action="{{ '/obat/'.$item->id }}" method="post" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
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