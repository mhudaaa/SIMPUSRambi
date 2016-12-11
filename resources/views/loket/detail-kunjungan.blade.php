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
                                <h6>Beranda / Kunjungan / <span class="active">Detail Kunjungan</span></h6>
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
                                        <h4 class="title">Detail Kunjungan</h4>  
                                    </div>
                                    <div class="col-sm-4 text-right">
                                        <small class="text-success">No kunjungan : {{$kunjungans->IdKunjungan}}</small>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="content">
                                <table class="table table-striped">
                                    <tr>
                                        <td width="180px">Nama Pasien</td>
                                        <td>: {{$kunjungans->pasien->NamaPasien}}</td>
                                    </tr>
                                    <tr>
                                        <td>Jenis Perawatan</td>
                                        <td>: {{$kunjungans->JenisPerawatan}}</td>
                                    </tr>
                                    <tr>
                                        <td>Unit Tujuan</td>
                                        <td>: {{$kunjungans->unit->NamaUnit}}</td>
                                    </tr>
                                    <tr>
                                        <td>Kamar</td>
                                        <td>: -</td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal Kunjungan</td>
                                        <td>: {{ date('d M Y', strtotime($kunjungans->created_at)) }}</td>
                                    </tr>
                                    <tr>
                                        <td>Keluhan</td>
                                        <td>: {{$kunjungans->Keluhan}}</td>
                                    </tr>
                                </table>
                                <div class="footer">
                                    <a href="/loket/kunjungan"><button class="btn btn-success btn-fill">Kembali</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>

    </div>
</div>

@include('loket/template/footer')
