<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {    
        $title = "Data Pasien";
        if($request->has('search')) {
            $data = Pasien::where('nama_pasien', 'like', '%' . $request->search . '%')->paginate(10);
        }
        else {
            $data = Pasien::latest()->paginate(10);
        }
        return view('pasien.index')->with([
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
        $title = "Data Pasien";
        return view('pasien.create')->with('title', $title);
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
            'nama_pasien' => 'required',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'no_telepon' => 'required|numeric',
        ],[
            'nama_pasien.required' => 'Nama pasien wajib diisi!',
            'jenis_kelamin.required' => 'Pilih salah satu jenis kelamin!',
            'tanggal_lahir.required' => 'Tanggal lahir pasien wajib diisi!',
            'alamat.required' => 'Alamat pasien wajib diisi!',
            'no_telepon.required' => 'Nomor telepon pasien wajib diisi!',
            'no_telepon.numeric' => 'Nomor telepon harus berupa angka!',
        ]);

        $data = [
            'nama_pasien' => $request->input('nama_pasien'),
            'jenis_kelamin' => $request->input('jenis_kelamin'),
            'tanggal_lahir' => $request->input('tanggal_lahir'),
            'alamat' => $request->input('alamat'),
            'no_telepon' => $request->input('no_telepon'),
            'email' => $request->input('email')
        ];
        Pasien::create($data);
        return redirect('pasien')->with('success', 'Data berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $title = 'Data Pasien';
        $data = Pasien::where('id', $id)->first();
        return view('pasien.detail')->with([
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
        $title = "Data Pasien";
        $data = Pasien::where('id', $id)->first();
        return view('pasien.edit')->with([
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
            'nama_pasien' => 'required',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'no_telepon' => 'required|numeric',
        ],[
            'nama_pasien.required' => 'Nama pasien wajib diisi!',
            'jenis_kelamin.required' => 'Pilih salah satu jenis kelamin!',
            'tanggal_lahir.required' => 'Tanggal lahir pasien wajib diisi!',
            'alamat.required' => 'Alamat pasien wajib diisi!',
            'no_telepon.required' => 'Nomor telepon pasien wajib diisi!',
            'no_telepon.numeric' => 'Nomor telepon harus berupa angka!',
        ]);

        $data = [
            'nama_pasien' => $request->input('nama_pasien'),
            'jenis_kelamin' => $request->input('jenis_kelamin'),
            'tanggal_lahir' => $request->input('tanggal_lahir'),
            'alamat' => $request->input('alamat'),
            'no_telepon' => $request->input('no_telepon'),
            'email' => $request->input('email')
        ];

        Pasien::where('id', $id)->update($data);
        return redirect('pasien')->with('success', 'Berhasil melakukan update data.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pasien::where('id', $id)->delete();
        return redirect('/pasien')->with('success', 'Data berhasil dihapus.');
    }
}
