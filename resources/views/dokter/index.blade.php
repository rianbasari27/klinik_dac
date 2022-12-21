@extends('shared.main')

@section('main-content')
<h1 class="my-3">Data Dokter</h1>
<a href="/dokter/create" class="btn btn-primary shadow"><i class="fas fa-plus"></i> Data baru</a>

{{-- Search --}}

<div class="my-3">
    <button class="btn btn-outline-success shadow" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
        <i class="fas fa-search"></i> Search
    </button>
</div>
<div class="collapse" id="collapseExample">
    <div class="card card-body bg-light">
        <div class="row">
            <div class="col-md-8">
                <form action="">
                    <div class="row my-3">
                        <div class="col-md-7">
                            <label for="nama_dokter" class="form-label">Nama Dokter</label>
                            <input type="text" class="form-control" id="nama_dokter">
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-md-7">
                            <label for="nip" class="form-label">NIP</label>
                            <input type="text" class="form-control" id="nip">
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-md-7">
                            <label for="sip" class="form-label">SIP</label>
                            <input type="text" class="form-control" id="sip">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button class="btn btn-primary" type="submit"><i class="fas fa-search"></i> Search</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- End Search --}}

<div class="container-md bg-light shadow p-4 my-3 rounded">
    <h5 class="fw-bold text-primary">{{ $title }}</h5>
    <table class="table table-hover my-3">
        <thead>
            <tr>
                <th>Nama Dokter</th>
                <th>NIP</th>
                <th>SIP</th>
                <th></th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach ($data as $item)  
            <tr>
                <td>{{ $item->nama_dokter }}</td>
                <td>{{ $item->nip }}</td>
                <td>{{ $item->sip }}</td>
                <td>
                    <a href="{{ url('/dokter/'.$item->id.'/edit') }}" class="btn btn-sm btn-success shadow"><i class="fas fa-edit"></i></a>
                    <a href="{{ url('/dokter/'.$item->id) }}" class="btn btn-sm btn-secondary shadow"><i class="fas fa-info-circle"></i></a>
                    <form action="{{ '/dokter/'.$item->id }}" method="post" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger shadow" type="submit"><i class="fas fa-trash-alt"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $data->links() }}
</div>
@endsection