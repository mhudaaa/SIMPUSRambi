@include('lab/template/header')

<div class="wrapper">

      @include('lab/template/sidebar-2')

    <div class="main-panel">

          @include('lab/template/navbar')
        
        <div class="content">
            <div class="container-fluid">
                <div class="row bread">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="content">
                                <h6>Beranda / Pemeriksaan Lab / <span class="active">Detail Pemeriksaan Lab</span></h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                     <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h4 class="title">Detail Pemeriksaan Lab</h4>  
                                    </div>
                                    
                                </div>
                            </div>
                            <br>
                            <div class="content">
                                <div class="row">
                                    <h6 class="subtitle text-primary">Data Hasil Pemeriksaan</h6>
                                        <div class="col-sm-12">
                                            <table class="table tbl-detail">
                                                
                                                    <tr>
                                                        <td width="150px;">Warna</td>
                                                        <td>: {{  $laboraturiums->Warna }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Protein</td>
                                                        <td>: {{  $laboraturiums->Protein }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Reduksi</td>
                                                        <td>: {{ $laboraturiums->Reduksi }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>PH</td>
                                                        <td>: {{ $laboraturiums->PH }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Keton</td>
                                                        <td>: {{ $laboraturiums->Keton }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Berat Jenis</td>
                                                        <td>: {{ $laboraturiums->BeratJenis }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Urobilin</td>
                                                        <td>: {{ $laboraturiums->Urobilin }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Bilirubin</td>
                                                        <td>: {{ $laboraturiums->Bilirubin }}</td>
                                                    </tr>
                                                             
                                            </table>
                                        </div>
                                </div>

                              <!--   <table class="table table-striped">
                                    <div class="row">
                                    <div class="col-sm-12">
                                         <table class="table table-striped">
                                            <thead>
                                                <th>Warna</th>
                                                <th>Protein</th>
                                                <th>Reduksi</th>
                                                <th>PH</th>
                                                <th>Keton</th>
                                                <th>Berat Jenis</th>
                                                <th>Urolubin</th>
                                                <th>Bilirubin</th>
                                                <th>Aksi</th>
                                            </thead>
                                            <tbody>

                                                <tr>
                                                    <td>{{ $laboraturiums->Warna }}</td>
                                                    <td>{{ $laboraturiums->Protein }}</td>
                                                    <td>{{ $laboraturiums->Reduksi }}</td>
                                                    <td>{{ $laboraturiums->PH }}</td>
                                                    <td>{{ $laboraturiums->Keton }}</td>
                                                    <td>{{ $laboraturiums->BeratJenis }}</td>
                                                    <td>{{ $laboraturiums->Urolubin }}</td>
                                                    <td>{{ $laboraturiums->Bilirubin }}</td>
                                                    <!-- <td>
                                                        <a href="ubah-lab.php"><button class="btn btn-warning">Detail</button></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                </table> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <a href="/lab/laboraturium"><button class="btn btn-warning btn-fill">Kembali</button></a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


    @include('lab/template/footer')