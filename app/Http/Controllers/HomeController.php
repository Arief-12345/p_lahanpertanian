<?php

namespace App\Http\Controllers;

use App\Produksi;
use App\Kecamatan;
use App\Komoditihasilpanen;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
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

        return view('home', compact('data1', 'data2', 'categories', 'kecamatan', 'komoditi'));
    }
}
