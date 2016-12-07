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
                                    <h6>Beranda / Pemeriksaan / <span class="active">Detail Pemeriksaan</span></h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                         <div class="col-md-12">
                            <div class="card">
                                <div class="header">
                                    <div class="row">
                                        <div class="col-sm-9">
                                            <h4 class="title">Rincian Data Pemeriksaan</h4>
                                        </div>
                                        <div class="col-sm-3">
                                            <a href="/poli/rekap"><button class="form-control btn-danger btn-fill">Kembali</button></a>
                                        </div>
                                    </div>

                                </div>
                                <br>
                                <div class="content">
                                    <div id="exTab2"> 
                                            <ul class="nav nav-tabs">
                                                <li class="active">
                                                    <a  href="#1" data-toggle="tab">Diagnosa</a>
                                                </li>
                                                <li>
                                                    <a href="#2" data-toggle="tab">Rujukan</a>
                                                </li>
                                                <li>
                                                    <a href="#3" data-toggle="tab">Resep</a>
                                                </li>
                                                <li>
                                                    <a href="#4" data-toggle="tab">Hasil Lab</a>
                                                </li>
                                            </ul>

                                            <div class="tab-content ">
                                                <div class="tab-pane active" id="1">

                                                    <br>

                                                    <div class="row">
                                                        <h6 class="subtitle text-primary">Data Diagnosa</h6>
                                                        <div class="col-sm-8">
                                                            <table class="table tbl-detail">
                                                                <tr>
                                                                    <td width="150px;">Nama Pasien</td>
                                                                    <td>: nama</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Tanggal Periksa</td>
                                                                    <td>: 11-12-2015</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Riwayat Penyakit</td>
                                                                    <td>: riwayat</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Keadaan Umum</td>
                                                                    <td>: keadaan</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Keadaan Fisik</td>
                                                                    <td>: fisik</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Diagnosa</td>
                                                                    <td>: dd</td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <table class="table tbl-detail">
                                                                <tr>
                                                                    <td>Dokter</td>
                                                                    <td>: Dr. Huda</td>
                                                                </tr>
                                                                <tr>
                                                                    <td width="120px;">Tinggi Badan</td>
                                                                    <td>: tgg cm</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Berat Badan</td>
                                                                    <td>:  kg</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Tensi</td>
                                                                    <td>: </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Suhu Tubuh</td>
                                                                    <td>:  &#176;C</td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="2">
                                                    <br>

                                                    <div class="row">
                                                        <h6 class="subtitle text-primary">Data Rujukan</h6>
                                                        <div class="col-sm-8">
                                                            <table class="table tbl-detail">
                                                                <tr>
                                                                    <td width="150px;">Perujuk</td>
                                                                    <td>: </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Tujuan</td>
                                                                    <td>: </td>
                                                                </tr>
                                                                
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="3">
                                                    <br>
                                                    <div class="row">
                                                        <h6 class="subtitle text-primary">Data Resep</h6>
                                                        <div class="col-sm-12">
                                                            <table class="table tbl-detail">
                                                                <thead>
                                                                    <th>No</th>
                                                                    <th>Nama Obat</th>
                                                                    <th>Jumlah</th>
                                                                    <th>Dosis</th>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td width="40px;">1</td>
                                                                        <td>Paracetamol</td>
                                                                        <td>1 botol</td>
                                                                        <td>3x sehari sebelum makan</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <hr>
                                                            <div class="konten catatan bg-red">
                                                                
                                                                <h6 class="text-danger">Catatan :</h6><br>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                                quis nostrud exercitation ullamco</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="4">
                                                    <br>
                                                    <i class="text-warning">Data hasil lab belum ditambahkan.</i><br>
                                                    <hr>
                                                </div>
                                            </div>
                                      </div>

                                   
                                </div>
                            </div>
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