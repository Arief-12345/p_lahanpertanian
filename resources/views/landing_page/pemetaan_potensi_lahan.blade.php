@extends('layouts.frontend')
@section('heading', 'Pemetaan Potensi Lahan Pertanian')
@section('content')

    <div class="row" style="margin-top: -100px">
        <form action="/pemetaan_potensi_lahan" method="get">
            {{ csrf_field() }}
            <div class="col-md-4">
                <select name="tahun" id="tahun" class="form-control">
                    <option value="">--Pilih Tahun--</option>
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                </select>
            </div>
            <div class="col-md-4">
                <button class="button button-primary medium" type="submit">Pilih</button>
            </div>
        </form>
    </div>

    <div class="row">
        <div id="map" style="width: 100%; height: 500px;"></div>
    </div>

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

        @foreach ($potensi as $datas)
            var data{{ $datas->kecamatan->id }} = L.layerGroup();
        @endforeach
        var kecamatan = L.layerGroup();
        var map = L.map('map', {
            center: [0.2466385230005252, 110.50176394336441],
            zoom: 9,
            layers: [peta2,
                @foreach ($potensi as $datas)
                    data{{ $datas->kecamatan->id }},
                @endforeach
                // kecamatan
            ]
        });

        var baseMaps = {
            "Grayscale": peta1,
            "Satellite": peta2,
            "Streets": peta3,
            "Dark": peta4
        };

        var overlayer = {
            @foreach ($potensi as $datas)
                "{{ $datas->kecamatan->nama_kecamatan }}" : data{{ $datas->kecamatan->id }},
            @endforeach
        };

        L.control.layers(baseMaps, overlayer).addTo(map);


        @foreach ($potensi as $datas)
            L.geoJSON(<?= $datas->kecamatan->geojson ?>{
            style: {
            color: 'white',
            fillColor: '{{ $datas->kecamatan->warna }}',
            fillOpacity: 1.0,
            },
            }).addTo(data{{ $datas->kecamatan->id }}).bindPopup('<h4>Informasi</h4><table style="border-collapse:collapse;border-spacing:0" class="tg"><thead><tr><th style="border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;font-weight:normal;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">Kecamatan</th><th style="border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;font-weight:normal;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">{{ $datas->kecamatan->nama_kecamatan }}</th></tr></thead><tbody><tr><td style="border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">Tahun</td><td style="border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">{{ $datas->tahun }}</td></tr><tr><td style="border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">Luas Lahan Kosong</td><td style="border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">{{ $datas->luas_lahan_kosong . ' Ha' }}</td></tr></tbody></table>');
        @endforeach
    </script>
@endsection
