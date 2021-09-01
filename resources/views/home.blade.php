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
                    <div id="chart">
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
                    // {!! json_encode($categories) !!}, 2019
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
                data: [{!! json_encode($data1) !!}, {!! json_encode($data2) !!}]
            }]
        });
    </script>
@endsection
