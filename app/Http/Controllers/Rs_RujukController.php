<?php

namespace App\Http\Controllers;

use App\Models\Rs_rujuk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class Rs_RujukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Rumah Sakit Rujukan";
        $data = Rs_rujuk::orderBy('updated_at', 'desc')->paginate(5);
        return view('rs_rujuk.index')->with([
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
        $title = "Data Rumah Sakit Rujukan";
        return view('rs_rujuk.create')->with('title', $title);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Session::flash('nama_rs', $request->nama_rs);
        Session::flash('alamat', $request->alamat);

        $request->validate([
            'nama_rs' => 'required',
            'alamat' => 'required',
        ],[
            'nama_rs.required' => 'Nama rumah sakit wajib diisi!',
            'alamat.required' => 'Alamat rumah sakit wajib diisi!',
        ]);

        $data = [
            'nama_rs' => $request->input('nama_rs'),
            'alamat' => $request->input('alamat'),
        ];
        Rs_rujuk::create($data);
        return redirect('rs_rujuk')->with('success', 'Data berhasil ditambahkan.');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
