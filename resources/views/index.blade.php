@extends('shared.main')

@section('main-content')
<div class="container">
    <div class="d-flex mt-3 py-5 px-5 bg-light rounded-4 shadow">
        <div class="my-5">
            <h1>KLINIK DAC</h1>
            <h3>DAC Solution Training Center</h3>
        </div>
    </div>   
    <div class="row mt-4">
        <div class="col-md-4">
            <h2>Klinik DAC</h2>
            <p>
                Klinik DAC merupakan aplikasi sampel dari DAC Solution Training Center
                yang dibuat untuk pembelajaran tentang bagaimana membuat aplikasi
                dengan Framework Laravel 9.
            </p>
        </div>
        <div class="col-md-4">
            <h2>Laravel 9</h2>
            <p>Lihat dokumentasi lengkap mengenai Framework Laravel 9</p>
            <p><a class="btn btn-outline-primary" href="https://laravel.com/docs/9.x">Lihat Tutorial &raquo;</a></p>
        </div>
        <div class="col-md-4">
            <h2>DAC Solution Training Center</h2>
            <p>Lihat lebih lengkap tentang DAC Solution Training Center.</p>
            <p><a class="btn btn-outline-primary" href="https://www.instagram.com/dac_trainingcenter/">Lihat Profil &raquo;</a></p>
        </div>
    </div>
</div>
    
@endsection