<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kecamatan;
use App\Komoditihasilpanen;
use App\Penggunaanlahan;

class PerhitunganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // dd($request->tahun);
        $kecamatan = Kecamatan::all();
        $komoditi = Komoditihasilpanen::all();

        // diketahui
        // luas penggunaan lahan = pertahun
        // jmlh produksi = luas penggunaan lahan x provitas : 10
        if ($request->tahun != null && $request->kecamatan != null && $request->provitas != null && $request->komoditi != null) {
           $tahunn = $request->tahun;
           $luas_panen = Penggunaanlahan::where('tahun', $tahunn)->where('kecamatan_id', $request->kecamatan)->first()->luas_penggunaan_lahan;
           $kecamatannn = Penggunaanlahan::where('kecamatan_id', $request->kecamatan)->first()->kecamatan->nama_kecamatan;
           $komoditii = Komoditihasilpanen::where('id', $request->komoditi)->first()->nama_komoditi;
           $provitas = $request->provitas;

           // Rumus
           $perhitungan = $luas_panen * $provitas / 10;
           $format_perhitungan = number_format($perhitungan);
        } else {
            $tahunn = '';
        }
        
        
        if ($request->tahun != null && $request->kecamatan != null && $request->provitas != null && $request->komoditi != null) {
            return view('perhitungan.index', compact('kecamatan', 'komoditi', 'kecamatannn', 'luas_panen', 'tahunn', 'komoditii', 'format_perhitungan'));
        } else {
            return view('perhitungan.index', compact('kecamatan', 'komoditi', 'tahunn'));
        }
        
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
        //
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
