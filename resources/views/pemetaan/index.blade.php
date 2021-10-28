@extends('layouts.master')
@section('aktif_kelola_pemetaan', 'active')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Kelola Pemetaan</h3>
                </div>
                <div class="panel-body">
                    <div class="row" style="margin-left: 10px; margin-top: 10px">
                        <button class="btn btn-primary btn-md" data-toggle="modal" data-target="#tambah"><i
                                class="fa fa-user-plus"></i> Tambah</button> <br>
                    </div>
                    @include('pemetaan/modaltambah')
                    <div class="row" style="margin-top: 20px; margin-left: 10px; margin-right: 10px">
                        <table class="table" id="datatable">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Kecamatan</th>
                                    <th width="100px" scope="col">Warna</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $datas)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $datas->nama_kecamatan }}</td>
                                        <td style="background-color: {{ $datas->warna }}"></td>
                                        <td>
                                            <button class="btn btn-success btn-md" onclick="getdata({{ $datas->id }})"
                                                data-toggle="modal" data-target="#edit">Edit</button>
                                            <a href="#" class="btn btn-danger btn-md hapus"
                                                id="{{ $datas->id }}">Hapus</a>
                                        </td>
                                    </tr>
                                @endforeach
                                @include('pemetaan/modaledit')
                            </tbody>
                        </table>
                    </div>
                    <div id="map" style="width: 100%; height: 500px;"></div>
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
        var peta1 = L.tileLayer(
            'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
                attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                    '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                    'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                id: 'mapbox/streets-v11'
            });

        var peta2 = L.tileLayer(
            'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
                attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                    '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                    'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                id: 'mapbox/satellite-v9'
            });


        var peta3 = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        });

        var peta4 = L.tileLayer(
            'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
                attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                    '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                    'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                id: 'mapbox/dark-v10'
            });

        @foreach ($data as $datas)
            var data{{ $datas->id }} = L.layerGroup();
        @endforeach
        var kecamatan = L.layerGroup();
        var map = L.map('map', {
            center: [0.2466385230005252, 110.50176394336441],
            zoom: 9,
            layers: [peta2,
                @foreach ($data as $datas)
                    data{{ $datas->id }},
                @endforeach
                kecamatan
            ]
        });

        var baseMaps = {
            "Grayscale": peta1,
            "Satellite": peta2,
            "Streets": peta3,
            "Dark": peta4
        };

        var overlayer = {
            @foreach ($data as $datas)
                "{{ $datas->nama_kecamatan }}" : data{{ $datas->id }},
            @endforeach
        };

        L.control.layers(baseMaps, overlayer).addTo(map);

        @foreach ($data as $datas)
            L.geoJSON(<?= $datas->geojson ?>{
            style: {
            color: 'white',
            fillColor: '{{ $datas->warna }}',
            fillOpacity: 1.0,
            },
            }).addTo(data{{ $datas->id }}).bindPopup("{{ $datas->nama_kecamatan }}");
        @endforeach
    </script>
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
                        window.location = "/pemetaan/hapus/" + Id + "";
                    }
                });
        });
    </script>
@endsection
