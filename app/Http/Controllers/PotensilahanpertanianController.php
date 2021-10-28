<?php

namespace App\Http\Controllers;

use App\Potensilahanpertanian;
use App\Kecamatan;
use Illuminate\Http\Request;

class PotensilahanpertanianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Potensilahanpertanian::all();
        $kecamatan = Kecamatan::all();
        return view('potensi_lahan_pertanian.index', compact('data', 'kecamatan'));
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
        // dd($request->all());
        $this->validate($request, [
            'kecamatan_id' => 'required',
            'tahun' => 'required',
            'luas_lahan_kosong' => 'required',
        ]);

        $tambah = Potensilahanpertanian::create($request->all());
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
            'kecamatan_id' => 'required',
            'tahun' => 'required',
            'luas_lahan_kosong' => 'required',
        ]);

        $update = Potensilahanpertanian::find($request->id)->update($request->all());
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
        $delete = Potensilahanpertanian::find($id)->delete();

        return redirect()->back()->with('sukses', 'Data Berhasil di Hapus !!!');
    }

    public function getdatapotensi($id)
    {
        $data = Potensilahanpertanian::find($id);
        return $data;
    }
}
