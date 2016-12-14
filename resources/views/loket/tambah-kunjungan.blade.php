@include('loket/template/header')
    <title>Tambah Kunjungan - SIMPUS Rambipuji</title>
</head>
<body>
 
<div class="wrapper">

    @include('loket/template/sidebar-1')

    <div class="main-panel">

        @include('loket/template/navbar')
        
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
                                        <small class="text-success">{{ date('D, d M Y') }}</small>
                                    </div>
                                    <div class="col-sm-3">
                                        <a href="/loket/kunjungan"><button class="form-control btn-danger btn-fill">Batal</button></a>
                                    </div>
                                </div>

                            </div>
                            <br>
                            <div class="content">
                                @if (count($errors) > 0)
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <form method="post" action="/loket/kunjungan/tambah"> 
                                {{csrf_field()}}
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="pasien">Pasien</label>
                                                <select id="pasien" data-size="7" class="form-control border-input selectpicker" data-live-search="true" name="IdPasien">
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
