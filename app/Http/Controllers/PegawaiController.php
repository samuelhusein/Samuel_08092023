<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\pegawai;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    public function read()
    {
        $data = pegawai::all();
        return view('read')->with([
            'data' => $data,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data['pegawai_nama'] = $request->pegawai_nama;
        $data['pegawai_jabatan'] = $request->pegawai_jabatan;
        $data['pegawai_umur'] = $request->pegawai_umur;
        $data['pegawai_alamat'] = $request->pegawai_alamat;
        // return response()->json($data);
        pegawai::insert($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = pegawai::findOrFail($id);
        return view('edit')->with([
            'data' => $data,
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
        $data = pegawai::findOrFail($id);
        $data->pegawai_nama = $request->pegawai_nama;
        $data->pegawai_jabatan = $request->pegawai_jabatan;
        $data->pegawai_umur = $request->pegawai_umur;
        $data->pegawai_alamat = $request->pegawai_alamat;
        $data->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = pegawai::findOrFail($id)->delete();
    }
}
