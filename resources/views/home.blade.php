@extends('layouts.master')
@section('aktif_dashboard', 'active')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Dashboard</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <form action="/home" method="get">
                            @csrf
                            <div class="pull-right">
                                <div class="col-md-4">
                                    <select class="form-control" name="kecamatan" id="">
                                        <option value="">-- Pilih Kecamatan --</option>
                                        @foreach ($kecamatan as $kec)
                                            <option value="{{ $kec->id }}">{{ $kec->nama_kecamatan }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <select class="form-control" name="komoditi" id="">
                                        <option value="">-- Pilih Komoditi --</option>
                                        @foreach ($komoditi as $kom)
                                            <option value="{{ $kom->id }}">{{ $kom->nama_komoditi }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <button class="btn btn-primary" type="submit">Pilih</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="row">
                        <div id="chart">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

@section('footer')
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script>
        Highcharts.chart('chart', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Grafik Hasil Panen'
            },
            xAxis: {
                categories: [
                    2018, 2019
                ],
                crosshair: true
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Jumlah Poduksi'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.f} Ton</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'Jumlah Produksi',
                data: [
                    {!! json_encode($data1) !!}, {!! json_encode($data2) !!}
                    ]
            }]
        });
    </script>
@endsection
