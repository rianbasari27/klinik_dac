<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DokterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $title = "Data Dokter";
        if($request->has('search')) {
            $data = Dokter::where('nama_dokter', 'like', '%' . $request->search . '%')->paginate(10);
        }
        else {
            $data = Dokter::latest()->paginate(10);
        }
        return view('dokter.index')->with([
            'data' => $data,
            'title' => $title,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Data Dokter";
        return view('dokter.create')->with('title', $title);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_dokter' => 'required',
            'nip' => 'required|numeric',
            'sip' => 'required|numeric'
        ],[
            'nama_dokter.required' => 'Nama dokter wajib diisi!',
            'nip.required' => 'NIP wajib diisi!',
            'nip.numeric' => 'NIP harus berupa angka!',
            'sip.required' => 'SIP wajib diisi!',
            'sip.numeric' => 'SIP harus berupa angka!',
        ]);

        $data = [
            'nama_dokter' => $request->input('nama_dokter'),
            'nip' => $request->input('nip'),
            'sip' => $request->input('sip')
        ];
        Dokter::create($data);
        return redirect('dokter')->with('success', 'Data berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = "Data Dokter";
        $data = Dokter::where('id', $id)->first();
        return view('dokter.edit')->with([
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
            'nama_dokter' => 'required',
            'nip' => 'required|numeric',
            'sip' => 'required|numeric'
        ],[
            'nama_dokter.required' => 'Nama dokter wajib diisi!',
            'nip.required' => 'NIP wajib diisi!',
            'nip.numeric' => 'NIP harus berupa angka!',
            'sip.required' => 'SIP wajib diisi!',
            'sip.numeric' => 'SIP harus berupa angka!',
        ]);

        $data = [
            'nama_dokter' => $request->input('nama_dokter'),
            'nip' => $request->input('nip'),
            'sip' => $request->input('sip')
        ];
        Dokter::where('id', $id)->update($data);
        return redirect('dokter')->with('success', 'Berhasil melakukan update data.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Dokter::where('id', $id)->delete();
        return redirect('/dokter')->with('success', 'Data berhasil dihapus.');
    }
}
