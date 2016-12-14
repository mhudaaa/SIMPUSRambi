@include('apoteker/template/header')

    <title>Resep - SIMPUS Rambipuji</title>
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
                                <h6>Beranda / Resep / <span class="active">Detail Resep</span></h6>
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
                                        <h4 class="title">Detail Resep</h4>  
                                    </div>
                                    <div class="col-sm-4 text-right">
                                        <h6 class="bold">Pasien : <span class="text-success bold">{{$detailResep->pasien->NamaPasien}}</span></h6>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="content">

                                 <div class="row">
                                    <h6 class="subtitle text-primary">Data Resep</h6>
                                    <div class="col-sm-12">
                                        
                                        <table class="table tbl-detail">
                                            <thead>
                                                <th width="20px">No</th>
                                                <th>Nama Obat</th>
                                                <th>Jumlah</th>
                                                <th>Dosis</th>
                                            </thead>
                                            <tbody>
                                                @foreach($detailResep->resep->obat as $no=>$obat)
                                                <tr>
                                                    <td class="text-center">{{ ++$no }}</td>
                                                    <td>{{ $obat->NamaObat }}</td>
                                                    <td>{{ $obat->pivot->Jumlah }} {{ $obat->JenisObat }}</td>
                                                    <td>{{ $obat->pivot->Dosis }}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        
                                        <hr>
                                        <div class="konten catatan bg-red">
                                            
                                            <h6 class="text-danger">Catatan :</h6><br>
                                            <p>{{ $detailResep->resep->Catatan }}</p>
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
</div>

 @include('apoteker/template/footer')