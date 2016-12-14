@include('lab/template/header')

    <title>SIMPUS Rambipuji</title>
</head>
<body>

<div class="wrapper">

 @include('lab/template/sidebar-1')

    <div class="main-panel">

        @include('lab/template/navbar')
        
        <div class="content">
            <div class="container-fluid">
                <div class="row bread">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="content">
                                <h6>Beranda / <span class="active"> Pemeriksaan Lab</span></h6>
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
                                        <h4 class="title">Data Pemeriksaan Laboraturium</h4>  
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
                              <!--   <div class="row">
                                    <h6 class="subtitle text-primary">Data Hasil Pemeriksaan</h6>
                                        <div class="col-sm-12">
                                            <table class="table tbl-detail">
                                                --> <!-- @foreach($laboraturiums as $no=>$laboraturium)
                                                    <tr>
                                                        <td width="150px;">ID Pemeriksaan Lab</td>
                                                        <td>: {{++$no}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td width="150px;">Waran</td>
                                                        <td>: {{ $laboraturium->Warna }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Protein</td>
                                                        <td>: {{  $laboraturium->Protein }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Reduksi</td>
                                                        <td>: {{ $laboraturium->Reduksi }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>PH</td>
                                                        <td>: {{ $laboraturium->PH }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Keton</td>
                                                        <td>: {{ $laboraturium->Keton }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Berat Jenis</td>
                                                        <td>: {{ $laboraturium->BeratJenis }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Urobilin</td>
                                                        <td>: {{ $laboraturium->Urobilin }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Bilirubin</td>
                                                        <td>: {{ $laboraturium->Bilirubin }}</td>
                                                    </tr>
                                                    @endforeach            
                                            </table>
                                        </div>
                                </div> -->

                                <div class="row">
                                    <div class="col-sm-12">
                                         <table class="table table-striped">
                                            <thead>
                                                <th>Id Pemeriksaan Laboraturium</th>
                                                <th>Warna</th>
                                                <th>Protein</th>
                                                <th>Reduksi</th>
                                                <th>PH</th>
                                                <!-- <th>Keton</th>
                                                <th>Berat Jenis</th>
                                                <th>Urolubin</th>
                                                <th>Bilirubin</th> -->
                                                <th>Aksi</th>
                                            </thead>
                                            <tbody>
                                                 @foreach($laboraturiums as $no=>$laboraturium)
                                                <tr>
                                                    <td>{{ ++$no }}</td>
                                                    <td>{{ $laboraturium->Warna }}</td>
                                                    <td>{{ $laboraturium->Protein }}</td>
                                                    <td>{{ $laboraturium->Reduksi }}</td>
                                                    <td>{{ $laboraturium->PH }}</td>
                                                    <!-- <td>{{ $laboraturium->Keton }}</td>
                                                    <td>{{ $laboraturium->BeratJenis }}</td>
                                                    <td>{{ $laboraturium->Urolubin }}</td>
                                                    <td>{{ $laboraturium->Bilirubin }}</td> -->
                                                    <td>
                                                        <a href="/lab/detail/lab/{{ $laboraturium->IdPemeriksaanLab }}"><button class="btn btn-warning">Detail</button></a>
                                                    </td>
                                                </tr>
                                                  @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                                <a href="/lab/tambah-lab"><button class="btn btn-success btn-fill"><i class="ti-plus"></i> Tambah Data Pemeriksaan</button></a>
                    </div>
                   
                </div>
            </div>
        </div>

    </div>
</div>


    @include('lab/template/footer')
