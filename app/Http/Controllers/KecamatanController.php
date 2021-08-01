<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kecamatan;

class KecamatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Kecamatan::all();

        return view('pemetaan.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_kecamatan' => 'required',
            'warna' => 'required',
            'geojson' => 'required',
        ]);

        $tambah = Kecamatan::create($request->all());
        return redirect()->back()->with('sukses', 'Data Berhasil di Simpan !!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function update(Request $request)
    {
        $this->validate($request, [
            'nama_kecamatan' => 'required',
            'warna' => 'required',
            'geojson' => 'required',
        ]);

        $update = Kecamatan::find($request->id)->update($request->all());
        return redirect()->back()->with('sukses', 'Data Berhasil di Simpan !!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Kecamatan::find($id)->delete();

        return redirect()->back()->with('sukses', 'Data Berhasil di Hapus !!!');
    }

    public function getdatapemetaan($id)
    {
        $data = Kecamatan::find($id);
        return $data;
    }
}
