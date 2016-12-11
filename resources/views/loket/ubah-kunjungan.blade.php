@include('loket/template/header')
    <title>Ubah Kunjungan - SIMPUS Rambipuji</title>
</head>
<body>

<div class="wrapper">

    @include('loket/template/sidebar-1')

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
                    <a class="navbar-brand" href="#">Loket - Pasien</a>
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
                    <div class="col-md-8 col-md-offset-2">
                        <div class="card">
                            <div class="content">
                                <h6>Beranda / Kunjungan / <span class="active">Ubah Kunjungan</span></h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                     <div class="col-md-8 col-md-offset-2">
                        <div class="card">
                            <div class="header">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h4 class="title">Ubah Data Kunjungan</h4>  
                                    </div>
                                    <div class="col-sm-4 text-right">
                                        <a href="index.php"><button class="btn btn-danger btn-fill">Batal</button></a>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="content">

                                <form action="/loket/kunjungan/ubah-kunjungan/{{$kunjungans->IdKunjungan}}" method="post">
                                    {{csrf_field()}}
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Nama Pasien</label>
                                                <input type="text" class="form-control border-input" value="{{$kunjungans->pasien->NamaPasien}}" disabled="">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Tanggal Masuk</label>
                                                <input  type="text" disabled="" class="form-control border-input" name="tgl_masuk" value="{{ date('l, d M Y', strtotime($kunjungans->created_at)) }}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Waktu Kunjungan</label>
                                                <input  type="text" disabled="" class="form-control border-input" name="" value="{{ date('H:i A', strtotime($kunjungans->created_at)) }}">
                                            </div>
                                        </div>
                                        
                                    </div>
                                   
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Unit Tujuan</label>
                                                <select  class="form-control border-input" name="UnitTujuan">
                                                    <option value="0">Pilih Poli Tujuan</option>
                                                    <option value="1" selected="">{{$kunjungans->unit->NamaUnit}}</option>
                                                    <option value="2">Poli Gigi</option>
                                                    <option value="3">Poli KIA</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Jenis Perawatan</label>
                                                <select  class="form-control border-input" name="JenisPerawatan">
                                                    <option value="1" disabled >Pilih Jenis Perawatan</option>        
                                                    <option value="Rawat Jalan" selected="">{{$kunjungans->JenisPerawatan}}</option>
                                                    <option value="Rawat Inap">Rawat Inap</option>
                                                </select>
                                            </div>
                                        </div>

                                        
                                    </div>
                                    
                                     <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Keluhan</label>
                                                <textarea name="Keluhan" class="form-control border-input" >{{ $kunjungans->Keluhan}}</textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="footer">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <input type="submit" class="form-control btn-fill btn-success" value="Simpan" name="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@include('loket/template/footer')