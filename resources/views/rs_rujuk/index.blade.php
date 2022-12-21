@extends('shared.main')

@section('main-content')
<h1 class="my-3">Data Rumah Sakit Rujukan</h1>
<a href="/rs_rujuk/create" class="btn btn-primary shadow"><i class="fas fa-plus"></i> Data baru</a>

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
                            <label for="nama_rs" class="form-label">Nama Rumah Sakit</label>
                            <input type="text" class="form-control" id="nama_rs">
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-md-7">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="alamat">
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
                <th>Nama Rumah Sakit</th>
                <th>Alamat</th>
                <th></th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach ($data as $item)  
            <tr>
                <td>{{ $item->nama_rs }}</td>
                <td>{{ $item->alamat }}</td>
                <td>
                    <a href="{{ url('/rs_rujuk/'.$item->id.'/edit') }}" class="btn btn-sm btn-success shadow"><i class="fas fa-edit"></i></a>
                    <form action="{{ '/rs_rujuk/'.$item->id }}" method="post" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
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


{{-- @extends('shared.main')

@section('main-content')
<h1 class="my-3">Data Rumah Sakit Rujukan</h1>
<a href="/rs_rujuk/create" class="btn btn-outline-primary">Data baru</a>
<table class="table table-hover my-3">
    <thead>
        <tr>
            <th>Nama Rumah Sakit</th>
            <th>Alamat</th>
            <th></th>
        </tr>
    </thead>
    <tbody class="table-group-divider">
        @foreach ($data as $item)  
        <tr>
            <td>{{ $item->nama_rs }}</td>
            <td>{{ $item->alamat }}</td>
            <td>
                <a href="{{ url('/rs_rujuk/'.$item->id.'/edit') }}" class="btn btn-sm btn-success shadow">Edit</a>
                <form action="{{ '/rs_rujuk/'.$item->id }}" method="post" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
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
@endsection --}}