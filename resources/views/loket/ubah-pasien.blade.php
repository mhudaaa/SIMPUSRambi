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
                                    <h6>Beranda / Pasien / <span class="active">Ubah Data Pasien</span></h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <form action="/loket/pasien/ubah-pasien/{{$pasien->IdPasien}}" method="post">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="col-md-7">
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
                                                <td><input type="text" name="nama" class="form-control border-input" value="{{$pasien->NamaPasien}}"></td>
                                            </tr>
                                            <tr>   
                                                <td><i class="ti-home"></i></td>
                                                <td class="bold">Alamat</td>
                                                <td><input type="text" name="alamat" class="form-control border-input" value="{{$pasien->Alamat}}"></td>
                                            </tr>
                                            <tr>
                                                <td><i class="ti-credit-card"></i></td>
                                                <td class="bold">No. Identitas</td>
                                                <td><input type="text" name="ktp" class="form-control border-input" value="{{$pasien->NoKtp}}"></td>
                                            </tr>
                                            <tr>
                                                <td><i class="ti-gift"></i></td>
                                                <td class="bold">Tanggal Lahir</td>
                                                <td><input type="date" name="ttl" class="form-control border-input" value="{{$pasien->TanggalLahir}}"></td>
                                            </tr>
                                            <tr>
                                                <td><i class="ti-eye"></i></td>
                                                <td class="bold">Jenis Kelamin</td>
                                                <td>
                                                    <select name="jenkel" class="form-control border-input">
                                                        <option value="{{$pasien->JenisKelamin}}" selected="">{{$pasien->JenisKelamin}}</option>
                                                        <option value="L">Laki-laki</option>
                                                        <option value="P">Perempuan</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><i class="ti-star"></i></td>
                                                <td class="bold">Agama</td>
                                                <td>
                                                    <select name="agama" class="form-control border-input">
                                                        <option value="{{$pasien->Agama}}" selected="">{{$pasien->Agama}}</option>
                                                        <option value="Islam">Islam</option>
                                                        <option value="Kristen">Kristen</option>
                                                        <option value="Katolik">Katolik</option>
                                                        <option value="Hindu">Hindu</option>
                                                        <option value="Budha">Budha</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><i class="ti-wheelchair"></i></td>
                                                <td class="bold">Nama Orang tua</td>
                                                <td><input type="text" name="namaOrtu" class="form-control border-input" value="{{$pasien->NamaOrangtua}}"></td>
                                            </tr>
                                            <tr>
                                                <td><i class="ti-mobile"></i></td>
                                                <td class="bold">Nomor Telepon</td>
                                                <td><input type="text" name="telp" class="form-control border-input" value="{{$pasien->NoTelepon}}"></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
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
                                                <td width="30px;"><i class="ti-tag"></i></td>
                                                <td class="bold">Jenis Pasien</td>
                                                <td>
                                                    <select name="jenisPasien" class="form-control border-input">
                                                        <option value="{{$pasien->JenisPasien}}" selected="">{{$pasien->JenisPasien}}</option>
                                                        <option value="Non-BPJS">Non-BPJS</option>
                                                        <option value="BPJS">Non-BPJS</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><i class="ti-id-badge"></i></td>
                                                <td class="bold">Nomor BPJS</td>
                                                <td><input type="number" name="noBpjs" class="form-control border-input" value="{{$pasien->NoBpjs}}"></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <input onclick="return confirm('Simpan perubahan data?')" type="submit" class="btn btn-info btn-fill" value="Simpan">
                                    </div>
                                    <div class="col-sm-6 text-right text-danger bold">
                                        <a href="/loket/pasien" onclick="return confirm('Batal mengubah?')"><div class="btn btn-danger">Batal</div></a>
                                    </div>
                                </div>
                            </div>      
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>

    @include('loket/template/footer')
