<!doctype html>
<html lang="en">
<head>

    <!-- Meta tags -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- CSS Files -->
    <link href="/assets/dashboard/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/assets/dashboard/css/animate.min.css" rel="stylesheet"/>
    <link href="/assets/dashboard/css/paper-dashboard.css" rel="stylesheet"/>
    <link href="/assets/dashboard/css/demo.css" rel="stylesheet" />
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="/assets/dashboard/css/themify-icons.css" rel="stylesheet">
    <link href="/assets/dashboard/css/bootstrap-select.css" rel="stylesheet">


    <title>Tambah Pemeriksaan Rawat Inap - SIMPUS Rambipuji</title>
</head>
<body>

    <div class="wrapper">
       <div class="sidebar" data-background-color="black" data-active-color="primary">

        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="#" class="simple-text">
                    SIMPUS RAMBIPUJI
                </a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="/rawatinap">
                        <i class="ti-ticket"></i>
                        <p>Rawat Inap</p>
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
                    <a class="navbar-brand" href="#">Rawat Inap</a>
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
                <div class="row bread">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="card">
                            <div class="content">
                                <h6>Beranda / Rawat Inap / <span class="active">Pemeriksaan Rawat Inap</span></h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="card">
                            <div class="header">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h4 class="title">Data Pemeriksaan Rawat Inap</h4>  
                                        <p class="category">Lengkapi isian dibawah untuk pemeriksaan rawat inap.</p>
                                    </div>
                                    <div class="col-sm-6 text-right">
                                        <a href="/rawatinap"><button class="btn btn-danger btn-fill"><i class="ti-close"></i> Batal</button></a>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="content">
                                <div id="exTab2"> 
                                    <ul class="nav nav-tabs">
                                        <li class="active">
                                            <a  href="#1" data-toggle="tab">Pemeriksaan Berkala</a>
                                        </li>
                                        <li>
                                            <a href="#2" data-toggle="tab">Rujukan</a>
                                        </li>
                                        <li>
                                            <a href="#3" data-toggle="tab">Resep</a>
                                        </li>
                                        <li>
                                            <a href="#4" data-toggle="tab">Pemeriksaan Lab</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content ">
                                        <div class="tab-pane active" id="1">
                                            <table class="table table-striped">
                                                <thead>
                                                    <th width="60px;">No</th>
                                                    <th width="150px;">Tanggal Periksa</th>
                                                    <th>Nama Pemeriksa</th>
                                                    <th>Aksi</th>
                                                </thead>
                                                <tbody>
                                                    @if($rawatinaps->detail !=0)
                                                    @php(@no==1)
                                                    @foreach($rawatinaps as $rawatinap)
                                                    <tr>
                                                        <td>{{ ++$no }}</td>
                                                        <td>{{ $rawatinap->TanggalPeriksa }}</td>
                                                        <td>{{ $rawatinap->pegawai->NamaPegawai }}</td>
                                                        <td><a href="#"><button class="btn btn-danger">Detail</button></a></td>
                                                    </tr>
                                                    @endforeach
                                                    @endif
                                                </tbody>
                                            </table>
                                            <form method="post" action="/rawatinap/tambah/catatan">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Nama</label>
                                                            <input type="text" name="nama" class="form-control border-input" disabled value="{{ $rawatinaps->pasien->NamaPasien }}">
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>No. Identitas (KTP)</label>
                                                            <input type="text" name="noktp" class="form-control border-input" disabled value="{{ $rawatinaps->pasien->NoKtp }}">
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Nama Ruangan</label>
                                                            <input type="text" name="ruang" class="form-control border-input" disabled value="{{ $rawatinaps->unit->NamaRuangan }}">
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Nama Dokter</label>
                                                            <input type="text" name="dokter" class="form-control border-input" placeholder="Masukkan nama dokter">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="form-group">
                                                            <label>Catatan Pemeriksaan</label>
                                                            <textarea type="textarea" name="catatan" class="form-control border-input" placeholder="Masukkan catatan pemeriksaan"></textarea>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label>Tanggal Pemeriksaan</label>
                                                                <input type="date" name="tglperiksa" class="form-control border-input" placeholder="Masukkan tanggal pemeriksaan">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label>Waktu Pemeriksaan</label>
                                                                <input type="time" name="waktu" class="form-control border-input" placeholder="Masukkan waktu pemeriksaan">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">    
                                                            <label>Tanggal Masuk</label>
                                                            <input type="timestamp" name="tglmasuk" class="form-control border-input" disabled value="{{ $rawatinaps->TanggalMasuk}}">
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Tanggal Keluar</label>
                                                            <input type="date" name="tglkeluar" class="form-control border-input" placeholder="Masukkan tanggal keluar">
                                                        </div>
                                                    </div>
                                                </div>

                                                <br>


                                                <div class="footer">

                                                    <hr>
                                                    <div class="text-success">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <input type="submit" class="form-control btn-info btn-fill" value="Tambah Pemeriksaan Rawat Inap" name="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </form>
                                        </div>

                                        <div class="tab-pane" id="2">
                                            <br>
                                            @if($rawatinaps->IdRujukan == 99)
                                            <div class="row">
                                                <div class="col-sm-8 col-sm-offset-2">

                                                    <!-- Form -->
                                                    <form method="post" action="{{ url('/rawatinap/tambah/{id}#2') }}"> 
                                                        {{ csrf_field() }}
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Tujuan</label>
                                                                    <input type="hidden" name="IdRawatInap" value="{{ $rawatinaps->IdRawatInap }}">
                                                                    <input type="text" name="Tujuan" class="form-control border-input" placeholder="Tujuan">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Tanggal Rujukan</label> 
                                                                    <input type="date" name="TanggalRujukan" class="form-control border-input">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                           <div class="col-md-12">
                                                            <label>Catatan</label>
                                                            <textarea name="Catatan" class="form-control border-input" placeholder="Masukkan keterangan"></textarea>
                                                        </div>
                                                    </div>
                                                    <br>
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
                                        @else
                                        <div class="row">
                                            <h5 class="subtitle text-primary"><b>Data Rujukan</b></h5>
                                            <div class="col-sm-12">
                                                <!-- Detail -->
                                                <table class="table tbl-detail">
                                                    <tr>
                                                        <td width="150px;">Tujuan</td>
                                                        <td>:{{$rawatinaps->rujukan->Tujuan}} </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tanggal Rujukan</td>
                                                        <td>:{{$rawatinaps->rujukan->TanggalRujukan}} </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Catatan</td>
                                                        <td>:{{$rawatinaps->rujukan->Catatan}} </td>
                                                    </tr>
                                                </table>
                                            </div>  
                                        </div>
                                        @endif
                                    </div>
                                    <div class="tab-pane" id="3">
                                        <br>
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
                                                    @if($rawatinaps->IdResep != 0)
                                                    @foreach($rawatinaps->resep->obat as $no=>$obat)
                                                    <tr>
                                                        <td>{{ ++$no }}</td>
                                                        <td>{{ $obat->NamaObat }}</td>
                                                        <td>{{ $obat->pivot->Jumlah }} {{ $obat->JenisObat }}</td>
                                                        <td>{{ $obat->pivot->Dosis }}</td>
                                                        <td><a href="{{ url('/rawatinap/hapus/obat/'.$rawatinaps->resep->IdResep.'/'.$obat->IdObat) }}"><button class="btn btn-danger">Hapus</button></a></td>
                                                    </tr>
                                                    @endforeach
                                                    @endif
                                                </tbody>
                                            </table>

                                            <br>

                                            <!-- Tambah obat -->
                                            <div class="konten bg-blue">
                                                <h4 class="text-danger">Tambah Obat</h4>
                                                <form method="post" action="{{ url('/rawatinap/tambah/obat') }}"> 

                                                  {{ csrf_field() }}
                                                  <div class="row">
                                                    <div class="col-md-4">
                                                        <input type="hidden" name="IdKunjungan" value="{{ $rawatinaps->IdKunjungan }}">
                                                        <div class="form-group">
                                                            <label>Nama Obat</label>
                                                            <select class="form-control border-input selectpicker" name="IdObat" data-live-search="true">
                                                                <option data-tokens="" value="">Pilih nama obat</option>
                                                                @foreach($obats as $obat)
                                                                <option data-tokens="{{ strtolower($obat->NamaObat) }}" value="{{ $obat->IdObat }}">{{ $obat->NamaObat }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label>Jumlah</label>
                                                            <input type="text" name="Jumlah" class="form-control border-input" placeholder="Jumlah">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Dosis</label>
                                                            <input type="text" name="Dosis" class="form-control border-input" placeholder="Dosis">
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

                                        <!-- Tambah Catatan -->
                                        <div class="konten">
                                            <h4 class="text-danger">Catatan</h4>
                                            <form method="post" action="{{ url('/rawatinap/tambah/catatanResep') }}"> 

                                                {{ csrf_field() }}
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <input type="hidden" name="IdResep" value="{{ $rawatinaps->IdResep }}">
                                                        <input type="hidden" name="IdKunjungan" value="{{ $rawatinaps->IdKunjungan }}">
                                                        <div class="form-group">
                                                            <label>Catatan Resep</label>
                                                            <textarea name="Catatan" class="form-control border-input" placeholder="Masukkan catatan resep">{{ $rawatinaps->resep->Catatan }}</textarea>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="footer">
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <input type="submit" class="form-control btn-info btn-fill" value="Perbarui" name="">
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