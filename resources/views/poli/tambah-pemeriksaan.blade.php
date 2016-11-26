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
                                    <h6>Beranda / Pemeriksaan / <span class="active">Tambah Pemeriksaan</span></h6>
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
                                            <h4 class="title">Tambah Data Pemeriksaan</h4>
                                        </div>
                                        <div class="col-sm-3">
                                            <a href="/poli/"><button class="form-control btn-danger btn-fill">Kembali</button></a>
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
                                                    <div id="tambah-d">
                                                        <i class="text-warning">Tidak ada data diagnosa.</i><br>
                                                        <hr>
                                                        <form method="post" action="{{ url('/poli/tambah/add') }}">
                                                            {{ csrf_field() }}
                                                            <input type="hidden" name="IdKunjungan" value="{{ $detailKunjungan->IdKunjungan }}">
                                                            <input type="submit" id="btn-diagnosa" class="btn btn-info btn-fill" value="Tambah Diagnosa">
                                                        </form>
                                                    </div>

                                                    <div id="form-diagnosa">
                                                        
                                                        <form method="post" action="{{ url('/poli/tambah/diagnosa') }}"> 
                                                            
                                                            {{ csrf_field() }}
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <input type="hidden" name="IdKunjungan" value="1">
                                                                    <div class="form-group">
                                                                        <label>Nama Pasien</label>
                                                                        <input type="text" class="form-control border-input" value="" disabled="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-9">
                                                                    <div class="form-group">
                                                                        <label>Riwayat Penyakit</label>
                                                                        <input type="text" name="RiwayatPenyakit" class="form-control border-input" placeholder="Riwayat Penyakit">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Keadaan Umum</label>
                                                                        <textarea name="KeadaanUmum" class="form-control border-input" placeholder="Keadaan umum pasien"></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Keadaan Fisik</label>
                                                                        <textarea name="KeadaanFisik" class="form-control border-input" placeholder="Keadaan fisik pasien"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-1">
                                                                    <div class="form-group">
                                                                        <label>Tinggi</label>
                                                                        <input type="number" name="TinggiBadan" class="form-control border-input" placeholder="cm">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-1">
                                                                    <div class="form-group">
                                                                        <label>Berat</label>
                                                                        <input type="number" name="BeratBadan" class="form-control border-input" placeholder="kg">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-1">
                                                                    <div class="form-group">
                                                                        <label>Tensi</label>
                                                                        <input type="number" name="Tensi" class="form-control border-input" placeholder="-">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-1">
                                                                    <div class="form-group">
                                                                        <label>Suhu</label>
                                                                        <input type="number" name="Suhu" class="form-control border-input" placeholder="&#176;C">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <hr>

                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                         <label>Diagnosa</label>
                                                                        <textarea name="Diagnosa" class="form-control border-input" placeholder="Masukkan diagnosa pasien"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        

                                                            <div class="footer">
                                                                <hr>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <input type="submit" class="form-control btn-info btn-fill" value="Tambah" name="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="2">
                                                    <br>
                                                    
                                                    <div id="tambah-r">
                                                        <i class="text-warning">Tidak ada data rujukan.</i><br>
                                                        <hr>
                                                        <button id="btn-rujukan" class="btn btn-info btn-fill">Tambah Rujukan</button>
                                                    </div>

                                                    <div id="form-rujukan">
                                                        
                                                        <form method="post" action=""> 
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Jenis Rujukan</label>
                                                                        <select class="form-control border-input" name="jenis-rujukan">
                                                                            <option value="">Pilih jenis Rujukan</option>
                                                                            <option value="internal">Internal</option>
                                                                            <option value="internal">Eksternal</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Tujuan Internal</label>
                                                                         <select class="form-control border-input" name="tujuan-internal">
                                                                            <option value="">Pilih tujuan</option>
                                                                            <option value="poli-umum">Poli Umum</option>
                                                                            <option value="poli-kia">Poli KIA</option>
                                                                            <option value="poli-gigi">Poli Gigi</option>
                                                                            <option value="lab">Lab</option>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Tujuan Eksternal</label>
                                                                        <input type="text" name="tujuan-eksternal" class="form-control border-input" placeholder="Tujuan">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label>Keterangan</label>
                                                                        <textarea name="keterangan" class="form-control border-input" placeholder="Masukkan keterangan"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="footer">
                                                                <hr>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <input type="submit" class="form-control btn-info btn-fill" value="Tambah" name="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="3">
                                                    <br>

                                                    <div id="tambah-rp">
                                                        <i class="text-warning">Tidak ada data resep.</i><br>
                                                        <hr>
                                                        <button id="btn-resep" class="btn btn-info btn-fill">Tambah Resep</button>
                                                    </div>

                                                    <div id="form-resep">  

                                                        <table class="table table-striped">
                                                            <thead>
                                                                <th width="60px;">No</th>
                                                                <th>Nama Obat</th>
                                                                <th>Jumlah</th>
                                                                <th>Dosis</th>
                                                                <th width="100px;">Aksi</th>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>Promag</td>
                                                                    <td>2 tablet</td>
                                                                    <td>2 x sehari</td>
                                                                    <td><button class="btn btn-danger">Hapus</button></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        
                                                        <br>

                                                        <div class="konten bg-blue">
                                                        <h4 class="text-danger">Tambah Obat</h4>
                                                            <form method="post" action=""> 
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Nama Obat</label>
                                                                        <select class="form-control border-input selectpicker" name="jenis-rujukan" data-live-search="true">
                                                                            <option data-tokens="" value="">Pilih nama obat</option>
                                                                            <option data-tokens="bodrexin" value="1">Bodrexin</option>
                                                                            <option data-tokens="promag" value="2">Promag</option>
                                                                            <option data-tokens="diapet" value="3">Diapet</option>
                                                                            <option data-tokens="obat merah" value="4">Obat Merah</option>
                                                                            <option data-tokens="konidin" value="5">Konidin</option>
                                                                            <option data-tokens="paracetamol" value="6">Paracetamol</option>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-2">
                                                                    <div class="form-group">
                                                                        <label>Jumlah</label>
                                                                        <input type="text" name="jumlah" class="form-control border-input" placeholder="Jumlah">
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Dosis</label>
                                                                        <input type="text" name="dosis" class="form-control border-input" placeholder="Dosis">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="footer">
                                                                <hr>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <input type="submit" class="form-control btn-info btn-fill" value="Tambah" name="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
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