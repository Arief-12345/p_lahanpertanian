<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produksi;

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
    public function index()
    {
        $produksi_panen = Produksi::all();
        $categories = [];
    //    return $categories = produksi::get()->tahun;
        foreach ($produksi_panen as $produksi) {
            $data1 = $produksi->where('tahun', '2018')->first()->jmlh_produksi;
            $data2 = $produksi->where('tahun', '2019')->first()->jmlh_produksi;
            $categories = $produksi->tahun;
        }
        // dd($categories);
        return view('home', compact('data1', 'data2', 'categories'));
    }
}
