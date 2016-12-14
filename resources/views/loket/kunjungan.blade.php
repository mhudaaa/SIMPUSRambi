@include('loket/template/header')
    <title>SIMPUS Rambipuji</title>
</head>
<body>

<div class="wrapper">
 
    @include('loket/template/sidebar-1')

    <div class="main-panel">

        @include('loket/template/navbar')
        
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
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h4 class="title">Data Kunjungan</h4>  
                                        <!-- <p class="category">{{ date("l, d M Y") }}</p> -->
                                    </div>
                                    <form method="post" action="/loket/kunjungan/cari/">
                                        {{ csrf_field() }}
                                        <div class="col-sm-3 text-right">
                                            <div class="form-group">
                                                <input type="text" name="NamaPasien" placeholder="Masukkan nama pasien" class="form-control border-input">
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
                                                <th width="50px;" >Aksi</th>
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
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        <div class="pull-right">
                                            {!! $kunjungans->links() !!}
                                        </div>
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
