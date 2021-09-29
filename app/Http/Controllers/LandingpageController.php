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

    public function pemetaan_komoditi()
    {
        $data = Komoditihasilpanen::all();
        $data1 = Kecamatan::all();
        $komoditi = Komoditihasilpanen::all();
        $produksi = Produksi::all();


        return view('landing_page.pemetaan_komoditi', compact('data', 'data1', 'komoditi', 'produksi'));
    }

    public function index()
    {
        $data = Komoditihasilpanen::all();
        $data1 = Kecamatan::all();

        return view('landing_page.index', compact('data', 'data1', 'produksi'));
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
