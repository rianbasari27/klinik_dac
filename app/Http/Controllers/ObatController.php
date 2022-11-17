<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ObatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Data Obat";
        $data = Obat::orderBy('updated_at', 'desc')->paginate(5);
        return view('obat.index')->with([
            'title' => $title,
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Data Obat";
        return view('obat.create')->with('title', $title);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Session::flash('nama_obat', $request->nama_obat);
        Session::flash('jenis', $request->jenis);
        Session::flash('deskripsi', $request->deskripsi);
        Session::flash('tanggal_exp', $request->tanggal_exp);
        Session::flash('stok', $request->stok);

        $request->validate([
            'nama_obat' => 'required',
            'jenis' => 'required',
            'deskripsi' => 'required',
            'tanggal_exp' => 'required',
            'stok' => 'required|numeric',
        ],[
            'nama_obat.required' => 'Nama obat wajib diisi!',
            'jenis.required' => 'Pilih salah satu jenis obat!',
            'deskripsi.required' => 'Deskripsi obat wajib diisi!',
            'tanggal_exp.required' => 'Tanggal kadaluwarsa obat wajib diisi!',
            'stok.required' => 'Masukan jumlah stok obat!',
            'stok.numeric' => 'Stok obat berupa angka!',
        ]);

        $data = [
            'nama_obat' => $request->input('nama_obat'),
            'jenis' => $request->input('jenis'),
            'deskripsi' => $request->input('deskripsi'),
            'tanggal_exp' => $request->input('tanggal_exp'),
            'stok' => $request->input('stok'),
        ];

        Obat::create($data);
        return redirect('obat')->with('success', 'Data berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $title = 'Data Obat';
        $data = Obat::where('id', $id)->first();
        return view('obat.detail')->with([
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
        $title = "Data Obat";
        $data = Obat::where('id', $id)->first();
        return view('obat.edit')->with([
            'data' => $data,
            'title' => $title
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
            'nama_obat' => 'required',
            'jenis' => 'required',
            'deskripsi' => 'required',
            'tanggal_exp' => 'required',
            'stok' => 'required|numeric',
        ],[
            'nama_obat.required' => 'Nama obat wajib diisi!',
            'jenis.required' => 'Pilih salah satu jenis obat!',
            'deskripsi.required' => 'Deskripsi obat wajib diisi!',
            'tanggal_exp.required' => 'Tanggal kadaluwarsa obat wajib diisi!',
            'stok.required' => 'Masukan jumlah stok obat!',
            'stok.numeric' => 'Stok obat berupa angka!',
        ]);

        $data = [
            'nama_obat' => $request->input('nama_obat'),
            'jenis' => $request->input('jenis'),
            'deskripsi' => $request->input('deskripsi'),
            'tanggal_exp' => $request->input('tanggal_exp'),
            'stok' => $request->input('stok'),
        ];

        Obat::where('id', $id)->update($data);
        return redirect('obat')->with('success', 'Berhasil melakukan update data.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Obat::where('id', $id)->delete();
        return redirect('/obat')->with('success', 'Data berhasil dihapus.');
    }
}
