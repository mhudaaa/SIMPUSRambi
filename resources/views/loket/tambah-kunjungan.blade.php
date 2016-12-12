@include('loket/template/header')
    <title>Tambah Kunjungan - SIMPUS Rambipuji</title>
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
                    <a class="navbar-brand" href="#">Loket - Kunjungan</a>
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
                                <h6>Beranda / Kunjungan / <span class="active">Tambah Kunjungan</span></h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                     <div class="col-md-8 col-sm-offset-2">
                        <div class="card">
                            <div class="header">
                                <div class="row">
                                    <div class="col-sm-9">
                                        <h4 class="title">Data Kunjungan</h4>
                                    </div>
                                    <div class="col-sm-3">
                                        <a href="/loket/kunjungan"><button class="form-control btn-danger btn-fill">Batal</button></a>
                                    </div>
                                </div>

                            </div>
                            <br>
                            <div class="content">

                                <form method="post" action="/loket/kunjungan/tambah"> 
                                {{csrf_field()}}
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="pasien">Pasien</label>
                                                <select id="pasien" data-size="7" class="form-control border-input selectpicker" data-live-search="true" name="IdPasien" required="">
                                                    <option data-tokens="" value="">- Pilih Pasien -</option>
                                                    <option data-divider="true"></option>
                                                    @foreach($pasiens as $pasien)
                                                    <option data-subtext="{{ $pasien->IdPasien }}" data-tokens="{{ $pasien->IdPasien }}" value="{{ $pasien->IdPasien }}">{{ $pasien->NamaPasien }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="JenisPerawatan">Jenis Perawatan</label>
                                                <select name="JenisPerawatan" class="form-control border-input selectpicker" name="JenisPerawatan">
                                                    <option value="" disabled selected>- Pilih Jenis Perawatan -</option>
                                                    <option data-divider="true"></option>
                                                    <option value="Rawat Jalan">Rawat Jalan</option>
                                                    <option value="Rawat Inap">Rawat Inap</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="Keluhan">Keluhan</label>
                                                <textarea id="Keluhan" name="Keluhan" class="form-control border-input" placeholder="Masukkan Keluhan"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="UnitTujuan">Unit Tujuan</label>
                                                <select id="UnitTujuan" class="form-control border-input selectpicker" name="UnitTujuan">
                                                    <option value="" disabled selected>- Pilih Poli Tujuan -</option>
                                                    <option data-divider="true"></option>
                                                    @foreach($polis as $poli)
                                                    <option data-tokens="{{ $poli->NamaUnit }}" value="{{ $poli->IdUnit }}">{{ $poli->NamaUnit }}</option>
                                                    @endforeach 
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="CaraBayar">Cara Bayar</label>
                                                <select id="CaraBayar" class="form-control border-input selectpicker" name="CaraBayar">
                                                    <option value="" disabled selected>- Pilih Cara Bayar -</option>
                                                    <option data-divider="true"></option>
                                                    <option value="1">Non</option>
                                                    <option value="2">BPJS</option>     
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer text-right">
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-12 text-right">
                                                <div class="form-group">
                                                    <input type="submit" class="pull-right form-control btn-info btn-fill" value="Tambah" name="">
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
