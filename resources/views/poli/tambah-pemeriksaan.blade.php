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
    <link href="{{ URL::asset('assets/dashboard/css/jquery-confirm.css') }}" rel="stylesheet" />
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
                                            <h4 class="title">Tambah Data Pemeriksaan</h4>
                                            <small class="text-primary">Pasien : <b>{{ $detailKunjungan->pasien->NamaPasien }}</b></small>
                                        </div>
                                        <div class="col-sm-2">
                                            <a href="/poli/"><button class="form-control btn-danger btn-fill">Kembali</button></a>
                                        </div>
                                        <div class="col-sm-2">
                                            <a href="/poli/submit/pemeriksaan/{{ $detailKunjungan->IdKunjungan }}"><button class="form-control btn-success btn-fill btn-selesa" data-title="Selesai ?">Selesai</button></a>
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
                                                    @if($detailKunjungan->IdDiagnosa == 0)
                                                    <br>
                                                    <div id="form-diagnosa">
                                                        
                                                        <form method="post" class="form-tambah-d" action="{{ url('/poli/tambah/diagnosa') }}"> 
                                                            {{ csrf_field() }}
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <input type="hidden" name="IdKunjungan" value="{{ $detailKunjungan->IdKunjungan }}">
                                                                    <div class="form-group">
                                                                        <label>Nama Pasien</label>
                                                                        <input type="text" class="form-control border-input" value="{{ $detailKunjungan->pasien->NamaPasien }}" disabled="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <label>Dokter</label>
                                                                        <select class="form-control border-input selectpicker" name="Dokter" data-live-search="true" required="">
                                                                            <option data-tokens="" value="">- Pilih Dokter -</option>
                                                                            @foreach($dokters as $dokter)
                                                                            <option data-tokens="{{ $dokter->NamaPegawai }}" value="{{ $dokter->IdPegawai }}">{{ $dokter->NamaPegawai }}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-7">
                                                                    <div class="form-group">
                                                                        <label>Riwayat Penyakit</label>
                                                                        <input type="text" name="RiwayatPenyakit" class="form-control border-input" placeholder="Riwayat Penyakit" value="">
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
                                                                            <input type="submit" class="form-control btn-confirm-d btn-info btn-fill" value="Tambah" name="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    @else
                                                    <br>
                                                    <div class="row">
                                                        <h5 class="subtitle text-primary"><b>Data Diagnosa</b></h5>
                                                        <div class="col-sm-8">
                                                            <table class="table tbl-detail">
                                                                <tr>
                                                                    <td width="150px;">Nama Pasien</td>
                                                                    <td>: {{ $detailKunjungan->pasien->NamaPasien }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Tanggal Periksa</td>
                                                                    <td>: {{ date('d M Y', strtotime($detailKunjungan->created_at)) }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Riwayat Penyakit</td>
                                                                    <td>: {{ $detailKunjungan->diagnosa->RiwayatPenyakit }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Keadaan Umum</td>
                                                                    <td>: {{ $detailKunjungan->diagnosa->KeadaanUmum }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Keadaan Fisik</td>
                                                                    <td>: {{ $detailKunjungan->diagnosa->KeadaanFisik }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Diagnosa</td>
                                                                    <td>: {{ $detailKunjungan->diagnosa->Diagnosa }}</td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <table class="table tbl-detail">
                                                                <tr>
                                                                    <td>Dokter</td>
                                                                    <td>: {{ $detailKunjungan->diagnosa->NamaPegawai }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td width="120px;">Tinggi Badan</td>
                                                                    <td>: {{ $detailKunjungan->diagnosa->TinggiBadan }} cm</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Berat Badan</td>
                                                                    <td>: {{ $detailKunjungan->diagnosa->BeratBadan }} kg</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Tensi</td>
                                                                    <td>: {{ $detailKunjungan->diagnosa->Tensi }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Suhu Tubuh</td>
                                                                    <td>: {{ $detailKunjungan->diagnosa->Suhu }} &#176;C</td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    @endif
                                                </div>
                                                <div class="tab-pane" id="2">
                                                    <br>
                                                    @if($detailKunjungan->IdRujukan == 0)
                                                    <div class="row">
                                                        <div class="col-sm-8 col-sm-offset-2">

                                                            <!-- Form -->
                                                            <form method="post" class="form-tambah-r" action="{{ url('/poli/tambah/rujukan') }}"> 
                                                                {{ csrf_field() }}
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label>Tujuan</label>
                                                                            <input type="hidden" name="IdKunjungan" value="{{ $detailKunjungan->IdKunjungan }}">
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
                                                                                <input type="submit" class="form-control btn-confirm-r btn-info btn-fill" value="Tambah" name="">
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
                                                                    <td>: {{ $detailKunjungan->rujukan->Tujuan }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Tanggal Rujukan</td>
                                                                    <td>: {{ $detailKunjungan->rujukan->TanggalRujukan }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Catatan</td>
                                                                    <td>: {{ $detailKunjungan->rujukan->Catatan }}</td>
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
                                                                @if($detailKunjungan->IdResep != 0)
                                                                @foreach($detailKunjungan->resep->obat as $no=>$obat)
                                                                <tr>
                                                                    <td>{{ ++$no }}</td>
                                                                    <td>{{ $obat->NamaObat }}</td>
                                                                    <td>{{ $obat->pivot->Jumlah }} {{ $obat->JenisObat }}</td>
                                                                    <td>{{ $obat->pivot->Dosis }}</td>
                                                                    <td><a href="{{ url('/poli/hapus/obat/'.$detailKunjungan->resep->IdResep.'/'.$obat->IdObat) }}"><button class="btn btn-danger">Hapus</button></a></td>
                                                                </tr>
                                                                @endforeach
                                                                @endif
                                                            </tbody>
                                                        </table>
                                                        
                                                        <br>

                                                        <!-- Tambah obat -->
                                                        <div class="konten bg-blue">
                                                            <h4 class="text-danger">Tambah Obat</h4>
                                                            <form method="post" action="{{ url('/poli/tambah/obat') }}"> 

                                                                {{ csrf_field() }}
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <input type="hidden" name="IdKunjungan" value="{{ $detailKunjungan->IdKunjungan }}">
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

                                                        @if($detailKunjungan->IdResep != 0)
                                                        <!-- Tambah Catatan -->
                                                        <div class="konten">
                                                            <h4 class="text-danger">Catatan</h4>
                                                            <form method="post" action="{{ url('/poli/tambah/catatanResep') }}"> 

                                                                {{ csrf_field() }}
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <input type="hidden" name="IdResep" value="{{ $detailKunjungan->IdResep }}">
                                                                        <input type="hidden" name="IdKunjungan" value="{{ $detailKunjungan->IdKunjungan }}">
                                                                        <div class="form-group">
                                                                            <label>Catatan Resep</label>
                                                                            <textarea name="Catatan" class="form-control border-input" placeholder="Masukkan catatan resep">{{ $detailKunjungan->resep->Catatan }}</textarea>
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
                                                        @endif 
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
    <script src="{{ URL::asset('assets/dashboard/js/jquery-confirm.js') }}" type="text/javascript"></script>


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

            // Submit confirm
            $('.btn-confirm-d').on('click', function (event) {
            event.preventDefault();
            
                $.confirm({
                
                    title: 'Simpan!',
                    content: 'Data yang telah anda masukkan tidak dapat diubah. Periksa data terlebih dahulu',
                    buttons: {
                        confirm: {
                            btnClass: 'btn-primary z-depth-0',
                            text: 'Simpan',
                            keys: ['enter'],
                            action: function () {
                                $('.form-tambah-d').submit();
                            }
                        },
                        cancel: {
                            btnClass: 'z-depth-0 btn-muted',
                            text: 'Batal',
                            action: function () {
                                $.alert('Periksa data kembali');
                            }
                        }
                    }
                });
            
            });

            // Submit confirm
            $('.btn-confirm-r').on('click', function (event) {
            event.preventDefault();
            
                $.confirm({
                
                    title: 'Simpan!',
                    content: 'Data yang telah anda masukkan tidak dapat diubah. Periksa data terlebih dahulu',
                    buttons: {
                        confirm: {
                            btnClass: 'btn-primary z-depth-0',
                            text: 'Simpan',
                            keys: ['enter'],
                            action: function () {
                                $('.form-tambah-r').submit();
                            }
                        },
                        cancel: {
                            btnClass: 'z-depth-0 btn-muted',
                            text: 'Batal',
                            action: function () {
                                $.alert('Periksa data kembali');
                            }
                        }
                    }
                });
            
            });

            // Ketika klik selesai
            $('button.btn-selesai').confirm({

                content: 'Selesai menambahkan data?',
                buttons: {
                    Ok: {
                        btnClass: 'btn-success btn-fill',
                        text: 'Ok',
                        keys: ['enter'],
                        action: function () {
                            location.href = this.$target.attr('href');
                        }
                    },
                    Batal: {
                        btnClass: 'btn-fill btn-default ',
                        text: 'Batal',
                    }
                }
            });
        });
    </script>
</body>
</html>