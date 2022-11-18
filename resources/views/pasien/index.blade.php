@extends('shared.layout')

@section('main-content')
<h1 class="my-3">Data Pasien</h1>
<a href="/pasien/create" class="btn btn-outline-primary">Data baru</a>
<table class="table table-hover my-3">
    <thead>
        <tr>
            <th>Nama Pasien</th>
            <th>Jenis Kelamin</th>
            <th>Tanggal Lahir</th>
            <th>No. Telepon</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)  
        <tr>
            <td>{{ $item->nama_pasien }}</td>
            <td>{{ $item->jenis_kelamin }}</td>
            <td>{{ $item->tanggal_lahir }}</td>
            <td>{{ $item->no_telepon }}</td>
            <td>
                <a href="{{ url('/pasien/'.$item->id.'/edit') }}" class="btn btn-sm btn-success shadow">Edit</a>
                <a href="{{ url('/pasien/'.$item->id) }}" class="btn btn-sm btn-secondary shadow">Detail</a>
                <form action="{{ '/pasien/'.$item->id }}" method="post" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
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


