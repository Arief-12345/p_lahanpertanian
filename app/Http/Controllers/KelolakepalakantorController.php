<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Kepalakantor;

class KelolakepalakantorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Kepalakantor::all();
        return view('kelola_kepalakantor.index', compact('data'));
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
            'username' => 'required|unique:users|max:20',
            'nip' => 'required|max:18',
            'name' => 'required|max:25',
            'email' => 'required|max:25|unique:users|email',
            'password' => 'required',
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->username = $request->username;
        // $user->role = 'Petugas';
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        $kepala_kantor = new Kepalakantor();
        $request->request->add([
            'user_id' => $user->id,
            'nip' => $request->nip
        ]);
        $tambah_kepalakantor = Kepalakantor::create($request->except([
            'email' => $request->email, 
            'name' => $request->name]));
        // dd($tambah_pengguna);
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
        $update_user = User::find($request->id_user)->update([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        $update_kepalakantor = Kepalakantor::where('user_id', $request->id_user)->first()->update($request->except([$request->urlgetdata]));

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
        $kepala_kantor = Kepalakantor::where('user_id', $id)->first()->delete();
        $user = User::find($id)->delete();

        return redirect()->back()->with('sukses', 'Data Berhasil di Hapus !!!');
    }

    public function getdatakepalakantor($id)
    {
        $data = Kepalakantor::find($id);
        $data->user;
        return $data;
    }
}
