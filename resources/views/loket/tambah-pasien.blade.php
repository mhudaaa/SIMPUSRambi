@include('loket/template/header')
    <title>Tambah Pasien - SIMPUS Rambipuji</title>
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
                    <div class="col-md-10 col-md-offset-1">
                        <div class="card">
                            <div class="content">
                                <h6>Beranda / Pasien / <span class="active">Tambah Pasien</span></h6>
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
                                        <h4 class="title">Tambah Data Pasien</h4>  
                                        <p class="category">Lengkapi isian dibawah untuk menambah data pasien.</p>
                                    </div>
                                    <div class="col-sm-6 text-right">
                                        <a href="/loket/pasien"><button onclick="return confirm('Batal menambahkan pasien?')" class="btn btn-danger btn-fill"><i class="ti-close"></i> Batal</button></a>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="content table-responsive ">
                                <form action="/loket/pasien/tambah" method="post" >
                                    {{csrf_field()}}
                                    
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Nama</label>
                                                <input type="text" name="nama" class="form-control border-input" placeholder="Masukkan nama">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>No Identitas (KTP)</label>
                                                <input type="number" name="ktp" class="form-control border-input" placeholder="Masukkan nomor identitas">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Tanggal Lahir</label>
                                                <input type="date" name="tgl" class="form-control border-input" placeholder="Masukkan tanggal lahir">
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Alamat Lengkap</label>
                                                <input type="text" name="alamat" class="form-control border-input" placeholder="Masukkan alamat lengkap">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Agama</label>
                                                <select class="form-control border-input" name="agama">
                                                    <option value="0" selected="">Pilih agama</option>
                                                    <option value="Islam">Islam</option>
                                                    <option value="Kristen">Kristen</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Jenis Kelamin</label>
                                                <select class="form-control border-input" name="jenkel">
                                                    <option value="0" selected="">Pilih Jenis Kelamin</option>
                                                    <option value="L">Laki-laki</option>
                                                    <option value="P">Perempuan</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Nama Orang Tua</label>
                                                <input type="text" name="ortu" class="form-control border-input" placeholder="Masukkan nama orang tua">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>No Telepon</label>
                                                <input type="number" name="telp" class="form-control border-input" placeholder="Masukkan nomor telepon">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Jenis Pasien</label>
                                                <select class="form-control border-input" name="jenisPasien">
                                                    <option value="0">Pilih Jenis Pasien</option>
                                                    <option value="BPJS">BPJS</option>
                                                    <option value="Non-BPJS">Non-BPJS</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Nomor BPJS</label>
                                                <input type="number" name="noBpjs" class="form-control border-input" placeholder="Masukkan nomor BPJS">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="footer">
                                       
                                        <hr>
                                        <div class="text-success">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="submit" class="form-control btn-info btn-fill" value="Tambah Pasien" name="">
                                                    </div>
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
