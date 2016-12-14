@include('apoteker/template/header')

    <title>SIMPUS Rambipuji</title>
</head>
<body>

<div class="wrapper">

     @include('apoteker/template/sidebar-2')


    <div class="main-panel">

        @include('apoteker/template/navbar')
        
        <div class="content">
            <div class="container-fluid">
                <div class="row bread">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="content">
                                <h6>Beranda / <span class="active">Apoteker</span></h6>
                            </div>
                        </div>
                    </div>
                </div>

                 @if(Session::has('message'))
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-success fade in">
                            <button type="button" aria-hidden="true" data-dismiss="alert" aria-label="close" class="close">×</button>
                            <span>{{ Session::get('message') }}</span>
                        </div>
                    </div>
                </div>
                @endif
                    
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h4 class="title">Daftar Obat</h4>  
                                        <p class="category"></p>
                                    </div>
                                    <form method="post" action="">
                                        <div class="col-sm-3 text-right">
                                            <div class="form-group">
                                                <input type="text" name="cari-obat" placeholder="Masukkan nama obat" class="form-control border-input">
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
                                            <thead>
                                                <th width="20px">No</th>
                                                <th>Nama Obat</th>
                                                <th>Jumlah Obat</th>
                                                <th>Harga Obat</th>
                                                <th width="60px">Aksi</th>
                                            </thead>
                                            <tbody>
                                                @foreach($obats as $no=>$obat)
                                                <tr>
                                                    <td>{{ ++$no }}</td>
                                                    <td>{{ $obat->NamaObat }}</td>
                                                    <td>{{ $obat->JumlahObat }} {{$obat->JenisObat}}</td>
                                                    <td>Rp {{ $obat->HargaObat }},-</td>
                                                    <td>
                                                        <a href="/apoteker/ubah-obat/{{ $obat->IdObat }}"><button class="btn btn-warning">Ubah</button></a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        <div class="pull-right">
                                            {!! $obats->links() !!}
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                        <a href="/apoteker/tambah-obat"><button class="btn btn-success btn-fill"><i class="ti-plus"></i> Tambah data obat</button></a>
                    </div>
                   
                </div>
            </div>
        </div>

    </div>
</div>


   @include('apoteker/template/footer')
