<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use App\Models\Dokter;
use App\Models\Pasien;
use App\Models\Berobat;
use App\Models\Rs_rujuk;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class BerobatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Data Berobat";
        $data = Berobat::orderBy('berobat.updated_at', 'desc')
            ->join('pasien', 'pasien.id', '=', 'berobat.nama_pasien_id')
            ->paginate(5);
        // $data = Berobat::orderBy('updated_at', 'desc')->paginate(5);
        return view('berobat.index')->with([
            'data' => $data,
            'title' => $title
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Data Berobat";
        $pasien = Pasien::all();
        $dokter = Dokter::all();
        $obat = Obat::all();
        $rs_rujuk = Rs_rujuk::all();
        return view('berobat.create')->with([
            'title' => $title,
            'pasien' => $pasien,
            'dokter' => $dokter,
            'obat' => $obat,
            'rs_rujuk' => $rs_rujuk,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Session::flash('nama_pasien_id', $request->nama_pasien_id);
        Session::flash('tanggal_berobat', $request->tanggal_berobat);
        Session::flash('keluhan', $request->keluhan);
        Session::flash('nama_dokter_id', $request->nama_dokter_id);
        Session::flash('hasil_periksa', $request->hasil_periksa);
        Session::flash('confirm_rujuk', $request->confirm_rujuk);
        Session::flash('nama_obat_id', $request->nama_obat_id);
        Session::flash('nama_rs_id', $request->nama_rs_id);
        Session::flash('biaya', $request->biaya);

        $request->validate([
            'nama_pasien_id' => 'required',
            'tanggal_berobat' => 'required',
            'keluhan' => 'required',
            'nama_dokter_id' => 'required',
            'hasil_periksa' => 'required',
            'confirm_rujuk' => 'required',
            'biaya' => 'required|numeric',
        ],[
            'nama_pasien_id.required' => 'Pilih pasien!',
            'tanggal_berobat.required' => 'Tentukan tanggal berobat!',
            'keluhan.required' => 'Masukan keluhan pasien!',
            'nama_dokter_id.required' => 'Pilih dokter!',
            'hasil_periksa.required' => 'Masukan hasil periksa!',
            'confirm_rujuk' => 'Pilih rujuk!',
            'biaya.required' => 'Masukkan jumlah biaya!',
            'biaya.numeric' => 'Biaya harus berupa angka!',
        ]);

        $data = [
            'nama_pasien_id' => $request->input('nama_pasien_id'),
            'tanggal_berobat' => $request->input('tanggal_berobat'),
            'keluhan' => $request->input('keluhan'),
            'nama_dokter_id' => $request->input('nama_dokter_id'),
            'hasil_periksa' => $request->input('hasil_periksa'),
            'confirm_rujuk' => $request->input('confirm_rujuk'),
            'nama_obat_id' => $request->input('nama_obat_id'),
            'nama_rs_id' => $request->input('nama_rs_id'),
            'biaya' => $request->input('biaya')
        ];
        Berobat::create($data);
        return redirect('berobat')->with('success', 'Data berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $title = 'Data Berobat';
        $data = Berobat::where('id', $id)->first();
        return view('berobat.detail')->with([
            'data' => $data,
            'title' => $title
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = "Data Berobat";
        $pasien = Pasien::all();
        $dokter = Dokter::all();
        $obat = Obat::all();
        $rs_rujuk = Rs_rujuk::all();
        $berobat = Berobat::where('id', $id)->first();;
        return view('berobat.edit')->with([
            'title' => $title,
            'pasien' => $pasien,
            'dokter' => $dokter,
            'obat' => $obat,
            'rs_rujuk' => $rs_rujuk,
            'berobat' => $berobat
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_pasien_id' => 'required',
            'tanggal_berobat' => 'required',
            'keluhan' => 'required',
            'nama_dokter_id' => 'required',
            'hasil_periksa' => 'required',
            'confirm_rujuk' => 'required',
            'biaya' => 'required|numeric',
        ],[
            'nama_pasien_id.required' => 'Pilih pasien!',
            'tanggal_berobat.required' => 'Tentukan tanggal berobat!',
            'keluhan.required' => 'Masukan keluhan pasien!',
            'nama_dokter_id.required' => 'Pilih dokter!',
            'hasil_periksa.required' => 'Masukan hasil periksa!',
            'confirm_rujuk' => 'Pilih rujuk!',
            'biaya.required' => 'Masukkan jumlah biaya!',
            'biaya.numeric' => 'Biaya harus berupa angka!',
        ]);

        $data = [
            'nama_pasien_id' => $request->input('nama_pasien_id'),
            'tanggal_berobat' => $request->input('tanggal_berobat'),
            'keluhan' => $request->input('keluhan'),
            'nama_dokter_id' => $request->input('nama_dokter_id'),
            'hasil_periksa' => $request->input('hasil_periksa'),
            'confirm_rujuk' => $request->input('confirm_rujuk'),
            'nama_obat_id' => $request->input('nama_obat_id'),
            'nama_rs_id' => $request->input('nama_rs_id'),
            'biaya' => $request->input('biaya')
        ];

        Berobat::where('id', $id)->update($data);
        return redirect('berobat')->with('success', 'Berhasil melakukan update data.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Berobat::where('id', $id)->delete();
        return redirect('/berobat')->with('success', 'Data berhasil dihapus.');
    }
}
