@include('loket/template/header')
    <title>SIMPUS Rambipuji</title>
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
                    <div class="col-md-12">
                        <div class="card">
                            <div class="content">
                                <h6>Beranda / <span class="active">Kunjungan</span></h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h4 class="title">Data Kunjungan</h4>  
                                        <p class="category">{{ date("l, d M Y") }}</p>
                                    </div>
                                    <form method="post" action="">
                                        <div class="col-sm-3 text-right">
                                            <div class="form-group">
                                                <input type="text" name="cari-pasien" placeholder="Masukkan nama pasien" class="form-control border-input">
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
                            <br>
                            <div class="content table-responsive ">
                                <div class="row">
                                    <div class="col-sm-12">
                                         <table class="table table-striped">
                                            <thead class="bold text-primary">
                                                <th width="30px;">No.</th>
                                                <th>Nama</th>
                                                <th>Alamat</th>
                                                <th>Keluhan</th>
                                                <th>Poli Tujuan</th>
                                                <th width="210px;" >Aksi</th>
                                            </thead>
                                            <tbody> 
                                                <?php $no=1; ?>
                                                @foreach($kunjungans as $kunjungan)
                                                <tr>
                                                    <td>{{$no++}}</td>
                                                    <td>{{$kunjungan->pasien->NamaPasien}}</td>
                                                    <td>{{$kunjungan->pasien->Alamat}}</td>
                                                    <td>{{$kunjungan->Keluhan}}</td>
                                                    <td>{{$kunjungan->unit->NamaUnit}}</td>
                                                    <td>
                                                        <a href="/loket/kunjungan/detail/{{$kunjungan->IdKunjungan}}"><button class="btn btn-success bold">Detail</button></a>

                                                        <a href="/loket/kunjungan/ubah/{{$kunjungan->IdKunjungan}}"><button class="btn btn-warning bold">Ubah</button></a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                                <a href="/loket/kunjungan/tambah-kunjungan"><button class="btn btn-success bold btn-fill"><i class="ti-plus"></i> Tambah data kunjungan</button></a>
                    </div>
                   
                </div>
            </div>
        </div>

    </div>
</div>


@include('loket/template/footer')
