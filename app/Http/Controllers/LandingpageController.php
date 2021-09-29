<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Komoditihasilpanen;
use App\Kecamatan;
use App\Produksi;

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

    public function pemetaan_komoditi()
    {
        $komoditi = Komoditihasilpanen::all();
        $produksi = Produksi::all();
        $kecamatan = Kecamatan::all();

        return view('landing_page.pemetaan_komoditi', compact('komoditi', 'produksi', 'kecamatan'));
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
