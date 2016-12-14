@include('apoteker/template/header')



    <title>Tambah Obat - SIMPUS Rambipuji</title>
</head>
<body>

<div class="wrapper">

     @include('apoteker/template/sidebar-2')

    <div class="main-panel">

         @include('apoteker/template/navbar')
        
        <div class="content">
            <div class="container-fluid">
                <div class="row bread">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="card">
                            <div class="content">
                                <h6>Beranda / <span class="active">Apoteker</span></h6>
                            </div>
                        </div>
                    </div>
                </div>

                 @if(Session::has('message'))
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <div class="alert alert-success">
                                <button type="button" aria-hidden="true" class="close">×</button>
                                <span>{{ Session::get('message') }}</span>
                            </div>
                        </div>
                    </div>
                    @endif

                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="card">
                            <div class="header">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h4 class="title">Tambah Data Obat</h4>  
                                        <p class="category">Lengkapi isian dibawah untuk menambah data obat.</p>
                                    </div>
                                    <div class="col-sm-4 text-right">
                                        <a href="/apoteker/obat"><button class="btn btn-danger btn-fill"><i class="ti-close"></i> Batal</button></a>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="content table-responsive ">
                                <form method="post" action="/apoteker/tambah/obat">

                                    {{ csrf_field() }}
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nama Obat</label>
                                                <input type="text" name="NamaObat" class="form-control border-input" placeholder="Masukkan nama obat" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Harga Obat</label>
                                                <input type="text" name="HargaObat" class="form-control border-input" placeholder="Masukkan harga obat">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Jumlah Obat</label>
                                                <input type="number" name="JumlahObat" class="form-control border-input" placeholder="Masukkan jumlah obat">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Jenis Obat</label>
                                                <select name="JenisObat" class="form-control border-input selectpicker" required="">
                                                    <option value="Botol">Botol</option>
                                                    <option value="Tablet">Tablet</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                             <a href=""><button type="submit" class="btn btn-info btn-fill"><i class=""></i>Tambah</button></a>
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
