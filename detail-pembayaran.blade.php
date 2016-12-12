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


    <title>Detail Pembayaran - SIMPUS Rambipuji</title>
</head>
<body>

<div class="wrapper">
 <div class="sidebar" data-background-color="black" data-active-color="warning">

        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="#" class="simple-text">
                    SIMPUS RAMBIPUJI
                </a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="index.php">
                        <i class="fa fa-money"></i>
                        <p>Pembayaran</p>
                    </a>
                </li>
                <li class="active">
                    <a href="lab.php">
                        <i class=></i>
                        <p></p>
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
                    <a class="navbar-brand" href="#">Pembayaran</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="ti-settings"></i>
                                <p>Pengaturan akun</p>
                            </a>
                        </li>
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
                <div class="row">
                     <div class="col-md-8 col-md-offset-2">
                        <div class="card">
                            <div class="header">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h4 class="title">Detail Pembayaran</h4>  
                                    </div>
                                    <div class="col-sm-4 text-right">
                                        <small class="text-success"></small>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="content">

                                <form method="post" action=""> 
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Nama Ruangan</label>
                                                <input type="text" class="form-control border-input" placeholder="Nama Ruangan" value="">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Nama Pasien</label>
                                                <input type="text" class="form-control border-input" placeholder="Nama Pasien" value="">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Umur Pasien</label>
                                                <input type="text" class="form-control border-input" placeholder="Umur Pasien" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                    <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Jenis Kelamin</label>
                                                <select class="form-control border-input" name="jenkel">
                                                    <option value="1">Laki-laki</option>
                                                    <option value="2">Perempuan</option>
                                                </select>
                                            </div>
                                        </div>
                                    <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Alamat Pasien</label>
                                                <input type="text" class="form-control border-input" placeholder="Alamat" value="">
                                            </div>
                                        
                                    </div>
                                </div>
                                    <div class="row">
                                    <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Nama Dokter</label>
                                                <input type="text" class="form-control border-input" placeholder="Nama Dokter" value="">
                                            </div>
                                        </div>
                                    <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Catatan Pemeriksaan</label>
                                                <input type="textarea" class="form-control border-input" name="ket" value="">
                                            </div>
                                        </div>
                                         </div>
                                    <div class="row">
                                    <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Tanggal Pemeriksaan</label>
                                                <input type="date" class="form-control border-input" name="tgl_transakssi" value="">
                                            </div>
                                        </div>
                                   </div>
                                    
                                        
                                </form>

                                    <div class="footer">
                                        <hr><br>
                                        <a href="index.php"><button class="btn btn-success btn-fill">Selesai</button></a>
                                    </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>  

    </div>
</div>

    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="{{ URL::asset('assets/dashboard/js/jquery-1.10.2.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/dashboard/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/dashboard/js/bootstrap-checkbox-radio.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/dashboard/js/chartist.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/dashboard/js/bootstrap-notify.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/dashboard/js/paper-dashboard.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/dashboard/js/bootstrap-select.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/dashboard/js/demo.js') }}" type="text/javascript"></script>

<!--     <script type="text/javascript">
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
 -->

</body>
</html>
