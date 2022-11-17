@extends('shared.layout')

@section('main-content')
<h1 class="my-3">Data Dokter</h1>
<a href="/dokter/create" class="btn btn-outline-primary">Data baru</a>
<table class="table table-hover my-3">
    <thead>
        <tr>
            <th>Nama Dokter</th>
            <th>NIP</th>
            <th>SIP</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)  
        <tr>
            <td>{{ $item->nama_dokter }}</td>
            <td>{{ $item->nip}}</td>
            <td>{{ $item->sip }}</td>
            <td>
                <a href="{{ url('/dokter/'.$item->id.'/edit') }}" class="btn btn-sm btn-success shadow">Edit</a>
                <form action="{{ '/dokter/'.$item->id }}" method="post" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
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