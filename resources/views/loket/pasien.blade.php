@include('loket/template/header')
    <title>SIMPUS Rambipuji</title>
</head>
<body>

<div class="wrapper">
 
    @include('loket/template/sidebar-2')

    <div class="main-panel">

        @include('loket/template/navbar')
        
        <div class="content">
            <div class="container-fluid">

                <div class="row bread">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="content">
                                <h6>Beranda / <span class="active">Pasien</span></h6>
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
                                        <h4 class="title">Data Pasien</h4>  
                                        <p class="category">Jumat, 25 November 2016</p>
                                    </div>
                                    <form method="post" action="/loket/pasien/cari/">
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
                                                <th>Jenis Kelamin</th>
                                                <th>Jenis Pasien</th>
                                                <th width="210px;" >Aksi</th>
                                            </thead>
                                            <tbody>
                                                @foreach($pasiens as $no=>$pasien)
                                                <tr>
                                                    <td>{{++$no}}</td>
                                                    <td>{{$pasien->NamaPasien}}</td>
                                                    <td>{{$pasien->Alamat}}</td>
                                                    <td>{{$pasien->JenisKelamin}}</td>
                                                    <td>{{$pasien->JenisPasien}}</td>
                                                    <td>
                                                        <a href="/loket/pasien/detail/{{$pasien->IdPasien}}"><button class="btn btn-success bold">Detail</button></a>

                                                        <a href="/loket/pasien/ubah/{{$pasien->IdPasien}}"><button class="btn btn-warning bold">Ubah</button></a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        <div class="pull-right">
                                         {!! $pasiens->links() !!}
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                                <a href="/loket/pasien/tambah-pasien"><button class="btn btn-success bold btn-fill"><i class="ti-plus"></i> Tambah data pasien</button></a>
                    </div>
                   
                </div>
            </div>
        </div>

    </div>
</div>


@include('loket/template/footer')
