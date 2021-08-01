@extends('layouts.master')
@section('aktif_kelola_data_komoditi_hasil_panen', 'active')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Kelola Data Komoditi Hasil Panen</h3>
                </div>
                <div class="panel-body">
                    <div class="row" style="margin-left: 10px; margin-top: 10px">
                        <button class="btn btn-primary btn-md" data-toggle="modal" data-target="#tambah"><i
                                class="fa fa-user-plus"></i> Tambah</button> <br>
                    </div>
                    @include('komoditi_hasil_panen/modaltambah')
                    <div class="row" style="margin-top: 20px; margin-left: 10px; margin-right: 10px">
                        <table class="table" id="datatable">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Komoditi</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $datas)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $datas->nama_komoditi }}</td>
                                        <td>
                                            <button class="btn btn-success btn-md" onclick="getdata({{ $datas->id }})"
                                                data-toggle="modal" data-target="#edit">Edit</button>
                                            <a href="#" class="btn btn-danger btn-md hapus"
                                                id="{{ $datas->id }}">Hapus</a>
                                        </td>
                                    </tr>
                                @endforeach
                                @include('komoditi_hasil_panen/modaledit')
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('footer')

    <script>
        $('.hapus').click(function() {
            var Id = $(this).attr('id');
            Swal.fire({
                    title: 'Yakin?',
                    text: "Mau Hapus Data Dengan Id " + Id + "?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya',
                })
                .then((result) => {
                    console.log(result);
                    if (result.value) {
                        window.location = "/kelola_data_komoditi_hasil_panen/hapus/" + Id + "";
                    }
                });
        });

    </script>
@endsection
