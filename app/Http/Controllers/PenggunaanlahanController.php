<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Penggunaanlahan;
use App\Kecamatan;
use App\Komoditihasilpanen;

class PenggunaanlahanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Penggunaanlahan::all();
        $kecamatan = Kecamatan::all();
        $komoditi = Komoditihasilpanen::all();

        return view('penggunaan_lahan.index', compact('data', 'kecamatan', 'komoditi'));
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
            'kecamatan_id' => 'required',
            'luas_penggunaan_lahan' => 'required',
            'komoditi_id' => 'required',
            'tahun' => 'required',
        ]);

        $tambah = Penggunaanlahan::create($request->all());
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
            'luas_penggunaan_lahan' => 'required',
            'komoditi_id' => 'required',
            'tahun' => 'required',
        ]);

        $update = Penggunaanlahan::find($request->id)->update($request->all());
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
        $delete = Penggunaanlahan::find($id)->delete();

        return redirect()->back()->with('sukses', 'Data Berhasil di Hapus !!!');
    }

    public function getdatapenggunaanlahan($id)
    {
        $data = Penggunaanlahan::find($id);
        return $data;
    }
}
