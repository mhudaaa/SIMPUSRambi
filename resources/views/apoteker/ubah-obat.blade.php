@include('apoteker/template/header')

    <title>Ubah Obat - SIMPUS Rambipuji</title>
</head>
<body>

<div class="wrapper">

    @include('apoteker/template/sidebar-2')

        <div class="main-panel">

            @include('apoteker/template/navbar')
        
        <div class="content">
            <div class="container-fluid">
                 <div class="row bread">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="card">
                            <div class="content">
                                <h6>Beranda / <span class="active">Apoteker</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="card">
                            <div class="header">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h4 class="title">Ubah Data Obat</h4>  
                                        <p class="category">Lengkapi isian dibawah untuk mengubah data obat.</p>
                                    </div>
                                    <div class="col-sm-6 text-right">
                                        <a href="/apoteker/obat"><button class="btn btn-danger btn-fill"><i class="ti-close"></i> Batal</button></a>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="content table-responsive ">
                                <form method="post" class="tambah-obat" action="/apoteker/ubah/obat/{{$obat->IdObat}}">
                                    {{ csrf_field() }}
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Nama Obat</label>
                                                <input type="text" name="NamaObat" class="form-control border-input" value="{{ $obat->NamaObat }}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Jumlah Obat</label>
                                                <input type="number" name="JumlahObat" class="form-control border-input" value="{{ $obat->JumlahObat }}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Harga Obat</label>
                                                <input type="text" name="HargaObat" class="form-control border-input" value="{{ $obat->HargaObat }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <input type="submit" class="form-control btn-info btn-fill" value="Simpan">
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


   @include('apoteker/template/footer')
