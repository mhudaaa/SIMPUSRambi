@include('poli/template/header')
</head>
<body>

    <div class="wrapper">

         @include('poli/template/sidebar-1')

        <div class="main-panel">

            @include('poli/template/navbar')
            
            <div class="content">
                <div class="container-fluid">

                    <div class="row bread">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="content">
                                    <h6>Beranda / <span class="text-primary">Antrian</span></h6>
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
                                            <h4 class="title">Antrian Pasien</h4>  
                                            <p class="category">{{ date("l, d M Y") }}</p>
                                        </div>
                                        <form method="post" action="/poli/cari/pasien">
                                            {{ csrf_field() }}
                                            <div class="col-sm-3 text-right">
                                                <div class="form-group">
                                                    <input type="text" name="NamaPasien" placeholder="Masukkan nama pasien" class="form-control border-input">
                                                </div>
                                            </div>
                                            <div class="col-sm-1 text-right">
                                                <div class="form-group">
                                                    <input type="submit" value="Cari" class="form-control btn btn-primary btn-fill">
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
                                                    <th>Keluhan</th>
                                                    <th width="190px;">Aksi</th>
                                                </thead>
                                                <tbody>
                                                @if($jmlHasil > 0)
                                                        @foreach($antrians as $no=>$antrian)
                                                        <tr>
                                                            <td>{{ ++$no }}</td>
                                                            <td>{{ $antrian->pasien->NamaPasien }}</td>
                                                            <td>{{ $antrian->Keluhan }}</td>
                                                            <td>
                                                                <a href="/poli/tambah/{{ $antrian->IdKunjungan }}"><button class="btn btn-primary bold">Periksa</button></a>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                     @else
                                                    <tr>
                                                        <td colspan="6">
                                                            <p class="text-center text-danger">
                                                                <br><i>Data tidak ada</i>
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    @endif
                                                </tbody>
                                            </table>
                                            <div class="pull-right">
                                                {!! $antrians->links() !!}
                                            </div>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                            <a href="/poli/rekap"><button class="btn btn-primary bold btn-fill"><i class="ti-receipt"></i> Rekap Pemeriksaan</button></a>
                        </div>
                       
                    </div>
                </div>
            </div>

        </div>
    </div>

    
