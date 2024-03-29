@extends('layouts.master')
@section('aktif_kelola_kepalakantor', 'active')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Kelola Kepala Kantor</h3>
                </div>
                <div class="panel-body">
                    <div class="row" style="margin-left: 10px; margin-top: 10px">
                        <button class="btn btn-primary btn-md" data-toggle="modal" data-target="#tambah"><i
                                class="fa fa-user-plus"></i> Tambah</button> <br>
                    </div>
                    @include('kelola_kepalakantor/modaltambah')
                    <div class="row" style="margin-top: 20px; margin-left: 10px; margin-right: 10px">
                        <table class="table" id="datatable">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">NIP</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $datas)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $datas->nip }}</td>
                                        <td>{{ $datas->user->name }}</td>
                                        <td>{{ $datas->username }}</td>
                                        <td>{{ $datas->user->email }}</td>
                                        <td>
                                            <button class="btn btn-success btn-md" onclick="getdata({{ $datas->id }})"
                                                data-toggle="modal" data-target="#edit">Edit</button>
                                            <a href="#" class="btn btn-danger btn-md hapus"
                                                id="{{ $datas->user_id }}">Hapus</a>
                                        </td>
                                    </tr>
                                @endforeach
                                @include('kelola_kepalakantor/modaledit')
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <script>
        $('.delete').click(function() {
            var Id = $(this).attr('user-id');
            alert(Id);
        });
    </script> --}}
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
                        window.location = "/kelola_kepalakantor/hapus/" + Id + "";
                    }
                });
        });
    </script>
@endsection
