@extends('shared.main')

@section('main-content')
<div class="container-lg">
    <div class="row mt-3 mx-2">

        <div class="col-md-2 bg-light shadow rounded-4 m-3">
            <div class="p-3 text-center">
                <i class="fas fa-user-injured fs-2"></i>
                <div class="text-muted">Pasien</div>
                <?php 
                $i = 0; 
                foreach ($pasien as $item) {
                    $nama = $item["nama_pasien"];
                    $i++;
                }
                ?>
                <h1 class="fs-1 fw-bold text-primary"><?= $i; ?></h1>
                <div class="mt-3 mb-2">
                    <a href="/pasien">View detail</a>
                </div>
            </div>
        </div>

        <div class="col-md-2 bg-light shadow rounded-4 m-3">
            <div class="p-3 text-center">
                <i class="fas fa-user-md fs-2"></i>
                <div class="text-muted">Dokter</div>
                <?php 
                $i = 0; 
                foreach ($dokter as $item) {
                    $nama = $item["nama_dokter"];
                    $i++;
                }
                ?>
                <h1 class="fs-1 fw-bold text-primary"><?= $i; ?></h1>
                <div class="mt-3 mb-2">
                    <a href="/dokter">View detail</a>
                </div>
            </div>
        </div>

        <div class="col-md-2 bg-light shadow rounded-4 m-3">
            <div class="p-3 text-center">
                <i class="fas fa-pills fs-2"></i>
                <div class="text-muted">Obat</div>
                <?php 
                $i = 0; 
                foreach ($obat as $item) {
                    $nama = $item["nama_obat"];
                    $i++;
                }
                ?>
                <h1 class="fs-1 fw-bold text-primary"><?= $i; ?></h1>
                <div class="mt-3 mb-2">
                    <a href="/obat">View detail</a>
                </div>
            </div>
        </div>

        <div class="col-md-2 bg-light shadow rounded-4 m-3">
            <div class="p-3 text-center">
                <i class="fas fa-hospital fs-2"></i>
                <div class="text-muted">Rumah sakit</div>
                <?php 
                $i = 0; 
                foreach ($rs_rujuk as $item) {
                    $nama = $item["nama_rs"];
                    $i++;
                }
                ?>
                <h1 class="fs-1 fw-bold text-primary"><?= $i; ?></h1>
                <div class="mt-3 mb-2">
                    <a href="/rs_rujuk">View detail</a>
                </div>
            </div>
        </div>

        <div class="col-md-2 bg-light shadow rounded-4 m-3">
            <div class="p-3 text-center">
                <i class="fas fa-procedures fs-2"></i>
                <div class="text-muted">Pasien berobat</div>
                <?php 
                $i = 0; 
                foreach ($data as $item) {
                    $nama = $item["nama_rs"];
                    $i++;
                }
                ?>
                <h1 class="fs-1 fw-bold text-primary"><?= $i; ?></h1>
                <div class="mt-3 mb-2">
                    <a href="/berobat">View detail</a>
                </div>
            </div>
        </div>
        
        {{-- <div class="col-md-3">
            <div class="p-3 text-center">
                
            </div>
        </div> --}}
        
    </div>

    <div class="mx-2 mt-3 pt-4 bg-light shadow rounded">
        <div class="row">
            <div class="col-sm-6">
                <p class="ps-3 fw-bold">Data berobat terbaru</p>
            </div>
        </div>
        <hr>

        <div class="container">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Nama Pasien</th>
                        <th>Tanggal Berobat</th>
                        <th>Keluhan</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @foreach ($data as $item)  
                    <tr>
                        <td>{{ $item->nama_pasien }}</td>
                        <td class="text-muted">{{ $item->tanggal_berobat }}</td>
                        <td class="text-muted">{{ $item->keluhan }}</td>
                        <td>
                            <a href="{{ url('/berobat/'.$item->id) }}" class="btn btn-sm btn-outline-secondary"><i class="fas fa-info-circle"></i> Detail</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="text-end me-3 pb-3">
                <a href="/berobat" class="btn btn-sm btn-outline-primary">Lihat semua <i class="fas fa-chevron-circle-right"></i></a>
            </div>
        </div>
    </div>
</div>
    
@endsection