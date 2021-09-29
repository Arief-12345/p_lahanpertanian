<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Komoditihasilpanen;
use App\Kecamatan;
use App\Produksi;
use App\Potensilahanpertanian;

class LandingpageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $komoditi = Komoditihasilpanen::all();
        $kecamatan = Kecamatan::all();

        return view('landing_page.index', compact('komoditi', 'kecamatan'));
    }

    public function pemetaan_komoditi(Request $request)
    {
        $komoditi = Komoditihasilpanen::all();
        // $produksi = Produksi::all();
        $kecamatan = Kecamatan::all();

        if ($request->komoditi != null && $request->tahun != null) {
            $produksi = Produksi::where('komoditi_id', $request->komoditi)->where('tahun', $request->tahun)->get();
        } elseif ($request->komoditi == null && $request->tahun == null) {
            $produksi = Produksi::all();
        } else {
            $produksi = Produksi::all();
        }
        

        return view('landing_page.pemetaan_komoditi', compact('komoditi', 'produksi', 'kecamatan'));
    }

    public function pemetaan_potensi_lahan(Request $request)
    {
        $potensi = Potensilahanpertanian::all();
        $komoditi = Komoditihasilpanen::all();
        $kecamatan = Kecamatan::all();

        if ($request->tahun != null) {
            $potensi = Potensilahanpertanian::where('tahun', $request->tahun)->get();
        }  else {
            $potensi = Potensilahanpertanian::all();
        }

        return view('landing_page.pemetaan_potensi_lahan', compact('potensi', 'komoditi', 'kecamatan'));
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
