<?php

namespace App\Http\Controllers;

use App\Models\Berobat;
use App\Models\Dokter;
use App\Models\Obat;
use App\Models\Pasien;
use App\Models\Rs_rujuk;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index() {
        $data = Berobat::select(
            'berobat.id as id',
            'berobat.nama_pasien_id',
            'pasien.id as pasien_id',
            'pasien.nama_pasien',
            'tanggal_berobat',
            'keluhan',
            'biaya',
            'berobat.updated_at'
            )->join('pasien', 'pasien.id', '=', 'berobat.nama_pasien_id')
            ->orderBy('berobat.updated_at', 'desc')
            ->paginate(5);


        $title = "Dashboard";
        $pasien = Pasien::all();
        $dokter = Dokter::all();
        $obat = Obat::all();
        $rs_rujuk = Rs_rujuk::all();
        // $berobat = Berobat::all();
        return view('index')->with([
            'title' => $title,
            'pasien' => $pasien,
            'dokter' => $dokter,
            'obat' => $obat,
            'rs_rujuk' => $rs_rujuk,
            'data' => $data,
        ]);
    }
}
