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
                                    <h6>Beranda / Rawat Inap / <span class="active">Detail Rawat Inap</span></h6>
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
                                        <h4 class="title">Detail Rawat Inap</h4>  
                                    </div>
                                    <div class="col-sm-4 text-right">
                                        <h6 class="bold">No Pasien : <span class="text-success bold">1412312352</span></h6>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="content">

                                <table class="table table-striped">
                                    
                                    <tr>   
                                        <td><i class="ti-home"></i></td>
                                        <td class="bold">Nama</td>
                                        <td>: Muhammad Huda M.</td>
                                    </tr>
                                    <tr>
                                        <td><i class="ti-credit-card"></i></td>
                                        <td class="bold">No. Identitas</td>
                                        <td>: 1420412038219</td>
                                    </tr>
                                    <tr>
                                        <td><i class="ti-gift"></i></td>
                                        <td class="bold">Nama Ruangan</td>
                                        <td>: Anthurium</td>
                                    </tr>
                                    <tr>
                                        <td><i class="ti-star"></i></td>
                                        <td class="bold">Nama Dokter</td>
                                        <td>: Dr. Eri Srihayati</td>
                                    </tr>
                                    <tr>
                                        <td><i class="ti-wheelchair"></i></td>
                                        <td class="bold">Catatan Pemeriksaan</td>
                                        <td>: - </td>
                                    </tr>
                                    <tr>
                                        <td><i class="ti-mobile"></i></td>
                                        <td class="bold">Hari Pemeriksaan</td>
                                        <td>: Setiap Pagi, 08.15</td>
                                    </tr>
                                    <tr>
                                        <td><i class="ti-mobile"></i></td>
                                        <td class="bold">Waktu Pemeriksaan</td>
                                        <td>: 08.15</td>
                                    </tr>
                                    <tr>
                                        <td><i class="ti-mobile"></i></td>
                                        <td class="bold">Tanggal Masuk</td>
                                        <td>: 19 November 2016</td>
                                    </tr>
                                    <tr>
                                        <td><i class="ti-mobile"></i></td>
                                        <td class="bold">Tanggal Keluar</td>
                                        <td>: 26 November 2016</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="header">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h4 class="title">Status BPJS</h4>  
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="content">

                                <table class="table table-striped">
                                    <tr>
                                        <td><i class="ti-tag"></i></td>
                                        <td class="bold">Jenis Pasien</td>
                                        <td>: Non-BPJS</td>
                                    </tr>
                                    <tr>
                                        <td><i class="ti-id-badge"></i></td>
                                        <td class="bold">Nomor BPJS</td>
                                        <td>: -</td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <a href="index.php"><button class="btn btn-warning btn-fill">Kembali</button></a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


@include('rawatinap/template/footer')