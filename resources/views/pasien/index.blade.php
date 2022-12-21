@extends('shared.main')

@section('main-content')
<h1 class="my-3">Data Pasien</h1>
<a href="/pasien/create" class="btn btn-primary shadow"><i class="fas fa-plus"></i> Data baru</a>

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
                            <label for="nama_pasien" class="form-label">Nama Pasien</label>
                            <input type="text" class="form-control" id="nama_pasien">
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-md-7">
                            <div class="form-label">Jenis Kelamin</div> 
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" value="Laki-laki" id="laki-laki">
                                <label class="form-check-label" for="laki-laki">
                                    Laki-laki
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" value="Perempuan" id="perempuan">
                                <label class="form-check-label" for="perempuan">
                                    Perempuan
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-md-7">
                            <label for="tanggal_lahir_from" class="form-label">Tanggal Lahir</label>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <input type="date" class="form-control" id="tanggal_lahir_from">
                            </div>
                            <div class="col-sm-1 text-center">-</div>
                            <div class="col-sm-3">
                                <input type="date" class="form-control" id="tanggal_lahir_until">
                            </div>
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
                <th>Nama Pasien</th>
                <th>Jenis Kelamin</th>
                <th>Tanggal Lahir</th>
                <th>No. Telepon</th>
                <th></th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach ($data as $item)  
            <tr>
                <td>{{ $item->nama_pasien }}</td>
                <td>{{ $item->jenis_kelamin }}</td>
                <td>{{ $item->tanggal_lahir }}</td>
                <td>{{ $item->no_telepon }}</td>
                <td>
                    <a href="{{ url('/pasien/'.$item->id.'/edit') }}" class="btn btn-sm btn-success shadow"><i class="fas fa-edit"></i></a>
                    <a href="{{ url('/pasien/'.$item->id) }}" class="btn btn-sm btn-secondary shadow"><i class="fas fa-info-circle"></i></a>
                    <form action="{{ '/pasien/'.$item->id }}" method="post" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
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


