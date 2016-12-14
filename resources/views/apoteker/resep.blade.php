@include('apoteker/template/header')

    <title>SIMPUS Rambipuji</title>
</head>
<body>

<div class="wrapper">

       @include('apoteker/template/sidebar-3')

    <div class="main-panel">

         @include('apoteker/template/navbar-1')
        
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

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h4 class="title">Data Resep</h4>  
                                        <p class="category">Data Resep Puskesmas Rambipuji</p>
                                    </div>
                                    <form method="post" action="">
                                        <div class="col-sm-3 text-right">
                                            <div class="form-group">
                                                <input type="text" name="cari-resep" placeholder="Masukkan nama Pasien" class="form-control border-input">
                                            </div>
                                        </div>
                                        <div class="col-sm-1 text-right">
                                            <div class="form-group">
                                                <input type="submit" value="Cari" class="form-control btn btn-info btn-fill">
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
                                                <th>No</th>
                                                <th>Nama Pasien</th>
                                                <th>Asal Poli</th>
                                                <th>Catatan</th>
                                                <th>Aksi</th>
                                            </thead>
                                            <tbody> 
                                               
                                            @foreach($reseps as $no=>$resep)
                                            <tr>
                                                <td class="text-center" width="20px">{{ ++$no }}</td>
                                                <td>{{ $resep->pasien->NamaPasien }}</td>
                                                <td>{{ $resep->unit->NamaUnit }}</td>
                                                <td>{{ $resep->resep->Catatan }}</td>
                                                <td width="100px">
                                                    <a href="/apoteker/detail/resep/{{ $resep->IdKunjungan }}">
                                                        <button class="btn btn-info">Detail</button>
                                                    </a>
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


 @include('apoteker/template/footer')