@include('rawatinap/template/header')
<body>

    <div class="wrapper">


        @include('rawatinap/template/sidebar')

        <div class="main-panel">

            
            @include('rawatinap/template/navbar')     
        <div class="content">
            <div class="container-fluid">

                <div class="row bread">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="content">
                                <h6>Beranda / Rawat Inap / <span class="text-primary">Rekap Rawat Inap</span></h6>
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
                                        <h4 class="title">Rawat Inap Pasien</h4>  
                                        <p class="category">Kamis, 17 November 2016</p>
                                    </div>
                                    <form method="post" action="">
                                        <div class="col-sm-3 text-right">
                                            <div class="form-group">
                                                <input type="text" name="cari-rawatan" placeholder="Masukkan nama pasien" class="form-control border-input">
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
                            <div class="content table-responsive">
                                <div class="row">
                                    <div class="col-sm-12">
                                       <table class="table table-striped">
                                        <thead class="bold text-primary">
                                            <th width="30px;">No.</th>
                                            <th>Nama</th>
                                            <th>Tanggal Masuk</th>
                                            <th>Tanggal Keluar</th>
                                            <th width="190px;">Aksi</th>
                                        </thead>
                                        <tbody>
                                        @foreach($rawatinaps as $no=>$rawatinap)
                                            <tr>
                                                <td width="40px;">{{ ++$no }}</td>
                                                <td>{{ $rawatinap->pasien->NamaPasien }}</td>
                                                <td>{{ $rawatinap->TanggalMasuk }}</td>
                                                <td>{{ $rawatinap->TanggalKeluar}}</td>
                                                <td>
                                                    <a href="/rawatinap/rekap/{{ $rawatinap->IdRawatInap }}"><button class="btn btn-primary bold">Detail</button></a>
                                                </td>
                                            </tr>
                                            @endforeach
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
</div>


@include('rawatinap/template/footer')