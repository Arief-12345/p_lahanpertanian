@extends('layouts.master')
@section('aktif_perhitungan', 'active')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Perhitungan</h3>
                </div>
                <div class="panel-body">
                    <div class="row" style="margin-left: 10px; margin-top: 10px">
                        <div class="col-md-2">
                            <p>Filter</p>
                        </div>
                        <form action="/perhitungan" method="get">
                        <div class="col-md-2">
                            <select class="form-control" name="tahun" id="">
                                <option value="">-- Pilih Tahun --</option>
                                <option value="2018">2018</option>
                                <option value="2019">2019</option>
                            </select>
                            @error('tahun')
                                <div class="text-danger ml-3 mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-2">
                            <select class="form-control" name="kecamatan" id="">
                                <option value="">-- Pilih Kecamatan --</option>
                                @foreach ($kecamatan as $kec)
                                    <option value="{{ $kec->id }}" {{ old('kecamatan_id') ? 'selected' : '' }}>
                                        {{ $kec->nama_kecamatan }}</option>
                                @endforeach
                            </select>
                            @error('kecamatan')
                                <div class="text-danger ml-3 mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-2">
                            <select class="form-control" name="komoditi" id="">
                                <option value="">-- Pilih Komoditi --</option>
                                @foreach ($komoditi as $kom)
                                    <option value="{{ $kom->id }}" {{ old('komoditi_id') ? 'selected' : '' }}>
                                        {{ $kom->nama_komoditi }}</option>
                                @endforeach
                            </select>
                            @error('komoditi')
                                <div class="text-danger ml-3 mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-2">
                            <input type="text" class="form-control" style="height: 35px" name="provitas" placeholder="Masukkan Provitas ...">
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-md btn-success" type="submit">Pilih</button>
                        </div>
                    </form>
                    <table class="table" id="datatable">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Kecamatan</th>
                                <th scope="col">Tahun</th>
                                <th scope="col">Jenis Komoditi</th>
                                <th scope="col">Luas Penggunaan Lahan</th>
                                <th scope="col">Jumlah Produksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>{{$kecamatannn}}</td>
                                <td>{{$tahunn}}</td>
                                <td>{{$komoditii}}</td>
                                <td>{{$luas_penggunaan_lahan}}</td>
                                <td>{{$format_perhitungan}}</td>
                            </tr>
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection