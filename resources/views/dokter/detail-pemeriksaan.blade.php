@include('dokter/template/header')
<body>

    <div class="wrapper">

        @include('dokter/template/sidebar-2')

        <div class="main-panel">

            @include('dokter/template/navbar')
            
            <div class="content">
                <div class="container-fluid">
                    <div class="row bread">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="content">
                                    <h6>Beranda / Pemeriksaan / <span class="active">Detail Pemeriksaan</span></h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                         <div class="col-md-12">
                            <div class="card">
                                <div class="header">
                                    <div class="row">
                                        <div class="col-sm-9">
                                            <h4 class="title">Rincian Data Pemeriksaan</h4>
                                            <small class="text-success">Pasien : <b>{{ $detailPemeriksaan->pasien->NamaPasien }}</b></small>
                                        </div>
                                        <div class="col-sm-3">
                                            <a href="/dokter/rekap"><button class="form-control btn-danger btn-fill">Kembali</button></a>
                                        </div>
                                    </div>

                                </div>
                                <br>
                                <div class="content">
                                    <div id="exTab2"> 
                                            <ul class="nav nav-tabs">
                                                <li class="active">
                                                    <a  href="#1" data-toggle="tab">Diagnosa</a>
                                                </li>
                                                <li>
                                                    <a href="#2" data-toggle="tab">Rujukan</a>
                                                </li>
                                                <li>
                                                    <a href="#3" data-toggle="tab">Resep</a>
                                                </li>
                                                <li>
                                                    <a href="#4" data-toggle="tab">Hasil Lab</a>
                                                </li>
                                            </ul>

                                            <div class="tab-content ">
                                                <div class="tab-pane active" id="1">

                                                    <br>

                                                    <div class="row">
                                                        <h6 class="subtitle text-primary">Data Diagnosa</h6>
                                                        <div class="col-sm-8">
                                                            <table class="table tbl-detail">
                                                                <tr>
                                                                    <td width="150px;">Nama Pasien</td>
                                                                    <td>: {{ $detailPemeriksaan->pasien->NamaPasien }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Tanggal Periksa</td>
                                                                    <td>: {{ date('d M Y', strtotime($detailPemeriksaan->created_at)) }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Riwayat Penyakit</td>
                                                                    <td>: {{ $detailPemeriksaan->diagnosa->RiwayatPenyakit }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Keadaan Umum</td>
                                                                    <td>: {{ $detailPemeriksaan->diagnosa->KeadaanUmum }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Keadaan Fisik</td>
                                                                    <td>: {{ $detailPemeriksaan->diagnosa->KeadaanUmum }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Diagnosa</td>
                                                                    <td>: {{ $detailPemeriksaan->diagnosa->KeadaanUmum }}</td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <table class="table tbl-detail">
                                                                <tr>
                                                                    <td>Dokter</td>
                                                                    <td>: -</td>
                                                                </tr>
                                                                <tr>
                                                                    <td width="120px;">Tinggi Badan</td>
                                                                    <td>: {{ $detailPemeriksaan->diagnosa->TinggiBadan }} cm</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Berat Badan</td>
                                                                    <td>: {{ $detailPemeriksaan->diagnosa->BeratBadan }} kg</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Tensi</td>
                                                                    <td>: {{ $detailPemeriksaan->diagnosa->Tensi }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Suhu Tubuh</td>
                                                                    <td>: {{ $detailPemeriksaan->diagnosa->Suhu }}&#176;C</td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="2">
                                                    <br>

                                                    <div class="row">
                                                        <h6 class="subtitle text-primary">Data Rujukan</h6>
                                                        <div class="col-sm-12">
                                                            <table class="table tbl-detail">
                                                                <tr>
                                                                    <td width="150px;">Tujuan</td>
                                                                    <td>: {{ $detailPemeriksaan->rujukan->Tujuan }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Tanggal Rujukan</td>
                                                                    <td>: {{  date('d M Y', strtotime($detailPemeriksaan->rujukan->TanggalRujukan)) }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Catatan</td>
                                                                    <td>: {{ $detailPemeriksaan->rujukan->Catatan }}</td>
                                                                </tr>
                                                                
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="3">
                                                    <br>
                                                    <div class="row">
                                                        <h6 class="subtitle text-primary">Data Resep</h6>
                                                        <div class="col-sm-12">
                                                            <table class="table table-striped">
                                                            <thead>
                                                                <th width="60px;">No</th>
                                                                <th>Nama Obat</th>
                                                                <th>Jumlah</th>
                                                                <th>Dosis</th>
                                                                <th width="100px;">Aksi</th>
                                                            </thead>
                                                            <tbody>
                                                                @if($detailPemeriksaan->IdResep != 0)
                                                                @foreach($detailPemeriksaan->resep->obat as $no=>$obat)
                                                                    <tr>
                                                                        <td>{{ ++$no }}</td>
                                                                        <td>{{ $obat->NamaObat }}</td>
                                                                        <td>{{ $obat->pivot->Jumlah }} {{ $obat->JenisObat }}</td>
                                                                        <td>{{ $obat->pivot->Dosis }}</td>
                                                                        <td><a href="{{ url('/dokter/hapus/obat/'.$detailPemeriksaan->resep->IdResep.'/'.$obat->IdObat) }}"><button class="btn btn-danger">Hapus</button></a></td>
                                                                    </tr>
                                                                    @endforeach
                                                                @endif
                                                            </tbody>
                                                            </table>
                                                            <hr>
                                                            <div class="konten catatan bg-red">
                                                                
                                                                <h6 class="text-danger">Catatan :</h6><br>
                                                                <p>{{ $detailPemeriksaan->resep->Catatan }}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="4">
                                                    <br>
                                                    <i class="text-warning">Data hasil lab belum ditambahkan.</i><br>
                                                    <hr>
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

    <!-- Javascript source -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="{{ URL::asset('assets/dashboard/js/jquery-1.10.2.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/dashboard/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/dashboard/js/bootstrap-checkbox-radio.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/dashboard/js/chartist.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/dashboard/js/bootstrap-notify.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/dashboard/js/paper-dashboard.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/dashboard/js/bootstrap-select.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/dashboard/js/demo.js') }}" type="text/javascript"></script>

    <script type="text/javascript">
        $(document).ready(function(){

            $("#btn-diagnosa").click(function(){
                $("#form-diagnosa").fadeIn("slow");
                $("#tambah-d").hide();
                
            });

            $("#btn-rujukan").click(function(){
                $("#form-rujukan").fadeIn("slow");
                $("#tambah-r").hide();
                
            });

            $("#btn-resep").click(function(){
                $("#form-resep").fadeIn("slow");
                $("#tambah-rp").hide();
                
            });
        });
    </script>


</body>
</html>