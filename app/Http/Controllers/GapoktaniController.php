<?php

namespace App\Http\Controllers;

use App\Gapoktani;
use Illuminate\Http\Request;

class GapoktaniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Gapoktani::all();
        return view('gapoktani.index', compact('data'));
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
            'nama_gapoktani' => 'required|max:20',
            'ketua_gapoktani' => 'required|max:25',
            'jmlh_anggota' => 'required',
            'lokasi_gapoktani' => 'required',
        ]);

        $tambah_gapoktani = Gapoktani::create($request->all());
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
            'nama_gapoktani' => 'required|max:20',
            'ketua_gapoktani' => 'required|max:25',
            'jmlh_anggota' => 'required',
            'lokasi_gapoktani' => 'required',
        ]);
        $update_gapoktani = Gapoktani::find($request->id)->update($request->all());

        return redirect()->back()->with('sukses', 'Data Berhasil di Update !!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Gapoktani::find($id)->delete();

        return redirect()->back()->with('sukses', 'Data Berhasil di Hapus !!!');
    }

    public function getdatagapoktani($id)
    {
        $data = Gapoktani::find($id);
        return $data;
    }
}
