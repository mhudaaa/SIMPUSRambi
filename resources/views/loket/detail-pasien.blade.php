@include('loket/template/header')
    <title>Pasien - SIMPUS Rambipuji</title>
</head>
<body>

<div class="wrapper">

    @include('loket/template/sidebar-2')

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
                    <div class="col-md-12">
                        <div class="card">
                            <div class="content">
                                <h6>Beranda / Pasien / <span class="active">Detail Pasien</span></h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                     <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h4 class="title">Detail Pasien</h4>  
                                    </div>
                                    <div class="col-sm-4 text-right">
                                        <h6 class="bold">No Pasien : <span class="text-success bold">{{$pasien->IdPasien}}</span></h6>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="content">

                                <table class="table table-striped">
                                    <tr>
                                        <td width="30px;"><i class="ti-user"></i></td>
                                        <td class="bold">Nama</td>
                                        <td>: {{$pasien->NamaPasien}}.</td>
                                    </tr>
                                    <tr>   
                                        <td><i class="ti-home"></i></td>
                                        <td class="bold">Alamat</td>
                                        <td>: {{$pasien->Alamat}}</td>
                                    </tr>
                                    <tr>
                                        <td><i class="ti-credit-card"></i></td>
                                        <td class="bold">No. Identitas</td>
                                        <td>: {{$pasien->NoKtp}}</td>
                                    </tr>
                                    <tr>
                                        <td><i class="ti-gift"></i></td>
                                        <td class="bold">Tempat, Tanggal Lahir</td>
                                        <td>:{{$pasien->TanggalLahir}} </td>
                                    </tr>
                                    <tr>
                                        <td><i class="ti-eye"></i></td>
                                        <td class="bold">Jenis Kelamin</td>
                                        <td>: {{$pasien->JenisKelamin}}</td>
                                    </tr>
                                    <tr>
                                        <td><i class="ti-star"></i></td>
                                        <td class="bold">Agama</td>
                                        <td>: {{$pasien->Agama}}</td>
                                    </tr>
                                    <tr>
                                        <td><i class="ti-wheelchair"></i></td>
                                        <td class="bold">Nama Orang tua</td>
                                        <td>: {{$pasien->NamaOrangtua}}</td>
                                    </tr>
                                    <tr>
                                        <td><i class="ti-mobile"></i></td>
                                        <td class="bold">Nomor Telepon</td>
                                        <td>: {{$pasien->NoTelepon}}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="header">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h4 class="title">Status BPJS</h4>  
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="content">

                                <table class="table table-striped">
                                    <tr>
                                        <td><i class="ti-tag"></i></td>
                                        <td class="bold">Jenis Pasien</td>
                                        <td>: {{$pasien->JenisPasien}}</td>
                                    </tr>
                                    <tr>
                                        <td><i class="ti-id-badge"></i></td>
                                        <td class="bold">No BPJS</td>
                                        <td>: {{$pasien->NoBpjs}}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <a href="/loket/pasien"><button class="btn btn-warning btn-fill">Kembali</button></a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@include('loket/template/footer')
