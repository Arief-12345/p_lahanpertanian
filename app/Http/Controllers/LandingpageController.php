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
    //    return $keyword = $request->tahun;
        $komoditi = Komoditihasilpanen::all();
        // $produksi = Produksi::all();
        $kecamatan = Kecamatan::all();

        if ($request->komoditi == null && $request->tahun == null) {
            $produksi = Produksi::where('tahun', 2222)->get();
            return view('landing_page.pemetaan_komoditi', compact('komoditi', 'produksi', 'kecamatan'));
        } elseif ($request->komoditi != null && $request->tahun != null) {
            // $keyword = $request->tahun;
            $produksi = Produksi::where('komoditi_id', $request->komoditi)->get();
            return view('landing_page.pemetaan_komoditi', compact('komoditi', 'produksi', 'kecamatan'));
        } else {
            $produksi = Produksi::all();
            return view('landing_page.pemetaan_komoditi', compact('komoditi', 'produksi', 'kecamatan'));
        }
        
    }

    public function grafik(Request $request)
    {
        $produksi_panen = Produksi::all();
        $kecamatan = Kecamatan::all();
        $komoditi = Komoditihasilpanen::all();
        $categories = [];
        //    return $categories = produksi::get()->tahun;
        if ($request->kecamatan != null && $request->komoditi != null) {
            foreach ($produksi_panen as $produksi) {
                if ($produksi->where('tahun', 2018)->where('kecamatan_id', $request->kecamatan)->where('komoditi_id', $request->komoditi)->first() == null && $produksi->where('tahun', 2019)->where('kecamatan_id', $request->kecamatan)->where('komoditi_id', $request->komoditi)->first() == null) {
                    $data1 = '';
                    $data2 = '';
                } elseif ($produksi->where('tahun', 2019)->where('kecamatan_id', $request->kecamatan)->where('komoditi_id', $request->komoditi)->first() == null) {
                    $data1 = $produksi->where('tahun', 2018)->where('kecamatan_id', $request->kecamatan)->where('komoditi_id', $request->komoditi)->first()->jmlh_produksi;
                    $data2 = '';
                } elseif ($produksi->where('tahun', 2018)->where('kecamatan_id', $request->kecamatan)->where('komoditi_id', $request->komoditi)->first() == null) {
                    $data1 = '';
                    $data2 = $produksi->where('tahun', 2019)->where('kecamatan_id', $request->kecamatan)->where('komoditi_id', $request->komoditi)->first()->jmlh_produksi;
                } else {
                    $data1 = $produksi->where('tahun', 2018)->where('kecamatan_id', $request->kecamatan)->where('komoditi_id', $request->komoditi)->first()->jmlh_produksi;
                    $data2 = $produksi->where('tahun', 2019)->where('kecamatan_id', $request->kecamatan)->where('komoditi_id', $request->komoditi)->first()->jmlh_produksi;
                }

                $categories = $produksi->tahun;
            }
        } else {
            foreach ($produksi_panen as $produksi) {
                $data1 = $produksi->where('tahun', '2018')->first()->jmlh_produksi;
                $data2 = $produksi->where('tahun', '2019')->first()->jmlh_produksi;
                $categories = $produksi->tahun;
            }
        }

        return view('landing_page.grafik', compact('data1', 'data2', 'categories', 'kecamatan', 'komoditi'));
    }

    public function pemetaan_potensi_lahan(Request $request)
    {
        $potensi = Potensilahanpertanian::all();
        $komoditi = Komoditihasilpanen::all();
        $kecamatan = Kecamatan::all();

        if ($request->tahun != null) {
            $potensi = Potensilahanpertanian::where('tahun', $request->tahun)->get();
        }  else {
            $potensi = Potensilahanpertanian::where('tahun', 2222)->get();
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
