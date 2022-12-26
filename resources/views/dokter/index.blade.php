@extends('shared.main')

@section('main-content')
<div class="container">

    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show mt-3 mx-2" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <div class="mx-2 mt-3 pt-4 bg-light shadow rounded">
        <div class="row">
            <div class="col-sm-6">
                <span class="fs-5 ps-3">{{ $title }}</span>
                <p class="ps-3 text-muted">Kumpulan data dokter klinik DAC Medical Center</p>
            </div>
            <div class="col-sm-4">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search">
                    <button class="btn btn-primary" type="button" id="button-addon2"><i class="fas fa-search"></i></button>
                </div>
            </div>
            <div class="col-sm-2">
                <a href="/dokter/create" class="btn btn-primary"><i class="fas fa-plus"></i> Data baru</a>
            </div>
        </div>
        <hr>

        <div class="container">
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
                        <td class="text-muted">{{ $item->nip }}</td>
                        <td class="text-muted">{{ $item->sip }}</td>
                        <td>
                            <a href="{{ url('/dokter/'.$item->id.'/edit') }}" class="btn btn-sm btn-outline-success"><i class="fas fa-edit"></i></a>
                            <form action="{{ '/dokter/'.$item->id }}" method="post" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-outline-danger" type="submit"><i class="fas fa-trash-alt"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $data->links() }}
        </div>
    </div>
</div>
@endsection