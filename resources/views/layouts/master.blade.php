<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIG LAHAN SANGGAU</title>
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/datepicker3.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">
    <link href={{ asset('assets/images/sanggau.png') }} rel="shortcut icon">


    <!--Custom Font-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <!--[if lt IE 9]>
 <script src="js/html5shiv.js"></script>
 <script src="js/respond.min.js"></script>
 <![endif]-->
    <!-- DataTables -->
    {{-- <link href={{ asset("assets/plugins/datatables/dataTables.bootstrap4.min.css") }} rel="stylesheet" type="text/css" />
        <link href={{ asset("assets/plugins/datatables/buttons.bootstrap4.min.css") }} rel="stylesheet" type="text/css" />
        <link href={{ asset("assets/plugins/datatables/responsive.bootstrap4.min.css") }} rel="stylesheet" type="text/css" /> --}}
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css"> --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="sweetalert2.min.css">
    {{-- Toastr --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
</head>

<body>
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span></button>
                <a class="navbar-brand" href="#"><span>GIS LAHAN SANGGAU</span></a>
            </div>
        </div><!-- /.container-fluid -->
    </nav>
    <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
        <div class="profile-sidebar">
            <div class="profile-userpic">
                <img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
            </div>
            <div class="profile-usertitle">
                <div class="profile-usertitle-name">{{ Auth::user()->name }}</div>
                <div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="divider"></div>
        <form role="search">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
            </div>
        </form>
        <ul class="nav menu">
            <li><a href="{{ url('/home') }}"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
            <li class="@yield('aktif_kelola_user')"><a href="{{ url('/kelola_user') }}"><em
                        class="fa fa-user">&nbsp;</em> Kelola Pegawai</a></li>
            <li class="@yield('aktif_kelola_kepalakantor')"><a href="{{ url('/kelola_kepalakantor') }}"><em
                        class="fa fa-user">&nbsp;</em> Kelola Kepala Kantor</a></li>
            <li class="@yield('aktif_kelola_data_gapoktani')"><a href="{{ url('/kelola_gapoktani') }}"><em
                        class="fa fa-bar-chart">&nbsp;</em> Kelola Data Gapoktani</a></li>
            <li class="@yield('aktif_kelola_data_produksi')"><a href="{{ url('/kelola_produksi') }}"><em
                        class="fa fa-toggle-off">&nbsp;</em> Kelola Data Produksi</a></li>
            <li class="@yield('aktif_pemetaan')"><a href="{{ url('/kelola_pemetaan') }}"><em
                        class="fa fa-bar-chart">&nbsp;</em>
                    Pemetaan</a></li>
            <li class="@yield('aktif_grafik')"><a href="{{ url('/kelola_grafik') }}"><em
                        class="fa fa-bar-chart">&nbsp;</em>
                    Grafik</a></li>
            <li class="@yield('aktif_kelola_data_potensi_lahan_pertanian')"><a
                    href="{{ url('/kelola_data_potensi_lahan_pertanian') }}"><em class="fa fa-clone">&nbsp;</em>
                    Kelola Data Potensi Lahan Pertanian</a></li>
            <li class="@yield('aktif_kelola_data_komoditi_hasil_panen')"><a
                    href="{{ url('/kelola_data_komoditi_hasil_panen') }}"><em class="fa fa-clone">&nbsp;</em> Kelola
                    Data Komoditi Hasil Panen</a></li>
            <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                    <em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </ul>
    </div>
    <!--/.sidebar-->

    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#">
                        <em class="fa fa-home"></em>
                    </a></li>
                <li class="active">SELAMAT DATANG</li>
            </ol>
        </div>
        <!--/.row-->



        <div class="panel panel-container">
            @yield('content')
        </div>

    </div>
    <!--/.main-->

    <script src="{{ asset('assets/js/jquery-1.11.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/chart.min.js') }}"></script>
    <script src="{{ asset('assets/js/chart-data.js') }}"></script>
    <script src="{{ asset('assets/js/easypiechart.js') }}"></script>
    <script src="{{ asset('assets/js/easypiechart-data.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    {{-- DataTable Baru --}}

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
    {{-- Sweetalert2 --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="sweetalert2.all.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
    <script src="sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/promise-polyfill@8/dist/polyfill.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <!-- Buttons examples -->
    {{-- <script src={{ asset("assets/plugins/datatables/dataTables.buttons.min.js") }}></script>
	<script src={{ asset("assets/plugins/datatables/buttons.bootstrap4.min.js") }}></script>
	<script src={{ asset("assets/plugins/datatables/jszip.min.js") }}></script>
	<script src={{ asset("assets/plugins/datatables/pdfmake.min.js") }}></script>
	<script src={{ asset("assets/plugins/datatables/vfs_fonts.js") }}></script>
	<script src={{ asset("assets/plugins/datatables/buttons.html5.min.js") }}></script>
	<script src={{ asset("assets/plugins/datatables/buttons.print.min.js") }}></script>
	<script src={{ asset("assets/plugins/datatables/buttons.colVis.min.js") }}></script> --}}
    <!-- Responsive examples -->
    {{-- <script src={{ asset("assets/plugins/datatables/dataTables.responsive.min.js") }}></script> --}}
    {{-- <script src={{ asset("assets/plugins/datatables/responsive.bootstrap4.min.js") }}></script> --}}
    <script src={{ asset('assets/js/app.js') }}></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#datatable').DataTable();
        });
    </script>
    <script>
        @if (Session::has('sukses'))
            toastr.success("{{ Session::get('sukses') }}", "Selamat")
        @endif
    </script>
    <script>
        @if (Session::has('gagal'))
            toastr.error("{{ Session::get('gagal') }}", "Gagal")
        @endif
    </script>
    @yield('footer')

</body>
@section('footer')
@endsection

</html>
