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
                    <li>
                        <a href="/poli">
                            <i class="ti-ticket"></i>
                            <p>Antrian</p>
                        </a>
                    </li>
                    <li class="active">
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
                                    <h6>Beranda / Kunjungan / <span class="active">Rekap Kunjungan</span></h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="header">
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <h4 class="title space-top text-success">Rekap Data Kunjungan</h4>  
                                        </div>
                                        <form method="post" action="">
                                            <div class="col-sm-2">
                                                <small class="space-top">Cari berdasarkan tanggal </small>
                                            </div>
                                            <div class="col-sm-2 text-right">
                                                <div class="form-group">
                                                    <input type="date" name="created_at" placeholder="Masukkan tanggal kunjungan" class="form-control border-input">
                                                </div>
                                            </div>
                                            <div class="col-sm-2 text-right">
                                                <div class="form-group">
                                                    <input type="text" name="NamaPasien" placeholder="Masukkan nama pasien" class="form-control border-input">
                                                </div>
                                            </div>
                                            <div class="col-sm-1 text-right">
                                                <div class="form-group">
                                                    <input type="submit" value="Cari" class="form-control btn btn-success btn-fill">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                
                                <div class="content table-responsive ">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="konten">
                                                <!-- <h6 class="title text-danger">Kamis, 17 November 2016</h6> -->
                                                 <table class="table rekap">
                                                    <thead>
                                                        <th>No</th>
                                                        <th>Tanggal</th>
                                                        <th width="150px;">Nama</th>
                                                        <th>Diagnosa</th>
                                                        <th width="80px">Aksi</th>
                                                    </thead>
                                                    <tbody>
                                                    
                                                        @foreach($pemeriksaans as $no=>$pemeriksaan)
                                                        <tr>
                                                            <td width="40px">{{ ++$no }}</td>
                                                            <td width="120px">{{ date('d-m-Y', strtotime($pemeriksaan->diagnosa->created_at)) }}</td>
                                                            <td>{{ $pemeriksaan->diagnosa->pasien->NamaPasien }}</td>
                                                            <td>{{ $pemeriksaan->diagnosa->Diagnosa }}</td>
                                                            
                                                            <td>
                                                                <a href="/poli/rekap/detail/{{ $pemeriksaan->IdPemeriksaan }}"><button class="btn btn-success">Detail</button></a>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                        
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                            <a href="/poli"><button class="btn btn-danger btn-fill"><i class="ti-close"></i> Kembali</button></a>
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