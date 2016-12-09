
<!doctype html>
<html lang="en">
<head>

    <!-- Meta tags -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- CSS Files -->
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="{{ URL::asset('assets/dashboard/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/dashboard/css/animate.min.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/dashboard/css/paper-dashboard.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/dashboard/css/demo.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/dashboard/css/bootstrap-select.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/dashboard/css/themify-icons.css') }}" rel="stylesheet" />

    <title>SIMPUS Rambipuji - Poli</title>
</head>
<body>

    <div class="wrapper">

         <div class="sidebar" data-background-color="white" data-active-color="primary">

            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="#" class="simple-text">
                        SIMPUS RAMBIPUJI
                    </a>
                </div>

                <ul class="nav">
                    <li class="active">
                        <a href="/poli">
                            <i class="ti-ticket"></i>
                            <p>Antrian</p>
                        </a>
                    </li>
                    <li>
                        <a href="/poli/rekap">
                            <i class="ti-clipboard"></i>
                            <p>Rekap Pemeriksaan</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="main-panel">

            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar bar1"></span>
                            <span class="icon-bar bar2"></span>
                            <span class="icon-bar bar3"></span>
                        </button>
                        <a class="navbar-brand" href="#">Poli - <span class="text-primary">Umum</span></a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="#">
                                    <i class="ti-power-off"></i>
                                    <p>Keluar</p>
                                </a>
                            </li>
                        </ul>

                    </div>
                </div>
            </nav>
            
            <div class="content">
                <div class="container-fluid">

                    <div class="row bread">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="content">
                                    <h6>Beranda / <span class="text-primary">Antrian</span></h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    @if(Session::has('message'))
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-success">
                                <button type="button" aria-hidden="true" class="close">×</button>
                                <span>{{ Session::get('message') }}</span>
                            </div>
                        </div>
                    </div>
                    @endif
                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="header">
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <h4 class="title">Antrian Pasien</h4>  
                                            <p class="category">{{ date("l, d M Y") }}</p>
                                        </div>
                                        <form method="post" action="">
                                            <div class="col-sm-3 text-right">
                                                <div class="form-group">
                                                    <input type="text" name="cari-kunjungan" placeholder="Masukkan nama pasien" class="form-control border-input">
                                                </div>
                                            </div>
                                            <div class="col-sm-1 text-right">
                                                <div class="form-group">
                                                    <input type="submit" value="Cari" class="form-control btn btn-primary btn-fill">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <br>
                                <div class="content table-responsive ">
                                    <div class="row">
                                        <div class="col-sm-12">
                                             <table class="table table-striped">
                                                <thead class="bold text-primary">
                                                    <th width="30px;">No.</th>
                                                    <th>Nama</th>
                                                    <th>Keluhan</th>
                                                    <th width="190px;">Aksi</th>
                                                </thead>
                                                <tbody>

                                                    @foreach($antrians as $no=>$antrian)
                                                    <tr>
                                                        <td>{{ ++$no }}</td>
                                                        <td>{{ $antrian->pasien->NamaPasien }}</td>
                                                        <td>{{ $antrian->Keluhan }}</td>
                                                        <td>
                                                            <a href="/poli/tambah/{{ $antrian->pasien->IdPasien }}"><button class="btn btn-primary bold">Periksa</button></a>
                                                        </td>
                                                    </tr>
                                                    @endforeach

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                            <a href="/poli/rekap"><button class="btn btn-primary bold btn-fill"><i class="ti-receipt"></i> Rekap Pemeriksaan</button></a>
                        </div>
                       
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Javascript source -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="{{ URL::asset('assets/dashboard/js/jquery-1.10.2.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/dashboard/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/dashboard/js/bootstrap-checkbox-radio.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/dashboard/js/chartist.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/dashboard/js/bootstrap-notify.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/dashboard/js/paper-dashboard.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/dashboard/js/bootstrap-select.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/dashboard/js/demo.js') }}" type="text/javascript"></script>

    <script type="text/javascript">
        $(document).ready(function(){

            $("#btn-diagnosa").click(function(){
                $("#form-diagnosa").fadeIn("slow");
                $("#tambah-d").hide();
                
            });

            $("#btn-rujukan").click(function(){
                $("#form-rujukan").fadeIn("slow");
                $("#tambah-r").hide();
                
            });

            $("#btn-resep").click(function(){
                $("#form-resep").fadeIn("slow");
                $("#tambah-rp").hide();
                
            });
        });
    </script>


</body>
</html>
