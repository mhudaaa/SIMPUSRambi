@include('poli/template/header')
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
                                    <h6>Beranda / Pemeriksaan / <span class="active">Tambah Pemeriksaan</span></h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    @if(Session::has('message'))
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-success">
                                <button type="button" aria-hidden="true" class="close">×</button>
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
                                            <h4 class="title">Tambah Data Pemeriksaan</h4>
                                            <small class="text-primary">Pasien : <b>{{ $detailKunjungan->pasien->NamaPasien }}</b></small>
                                        </div>
                                        <div class="col-sm-2">
                                            <a href="/poli/antrian"><button class="form-control btn-danger btn-fill">Kembali</button></a>
                                        </div>
                                        <div class="col-sm-2">
                                            <a href="/poli/submit/pemeriksaan/{{ $detailKunjungan->IdKunjungan }}"><button class="form-control btn-success btn-fill btn-selesa" data-title="Selesai ?">Selesai</button></a>
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
                                                    @if($detailKunjungan->IdDiagnosa == 0)
                                                    <br>
                                                    <div id="form-diagnosa">
                                                        
                                                        <form method="post" class="form-tambah-d" action="{{ url('/poli/tambah/diagnosa') }}"> 
                                                            {{ csrf_field() }}
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <input type="hidden" name="IdKunjungan" value="{{ $detailKunjungan->IdKunjungan }}">
                                                                    <div class="form-group">
                                                                        <label>Nama Pasien</label>
                                                                        <input type="text" class="form-control border-input" value="{{ $detailKunjungan->pasien->NamaPasien }}" disabled="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <label>Dokter</label>
                                                                        <select class="form-control border-input selectpicker" name="Dokter" data-live-search="true" required="">
                                                                            <option data-tokens="" value="">- Pilih Dokter -</option>
                                                                            @foreach($dokters as $dokter)
                                                                            <option data-tokens="{{ $dokter->NamaPegawai }}" value="{{ $dokter->IdPegawai }}">{{ $dokter->NamaPegawai }}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-7">
                                                                    <div class="form-group">
                                                                        <label>Riwayat Penyakit</label>
                                                                        <input type="text" name="RiwayatPenyakit" class="form-control border-input" placeholder="Riwayat Penyakit" value="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Keadaan Umum</label>
                                                                        <textarea name="KeadaanUmum" class="form-control border-input" placeholder="Keadaan umum pasien"></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Keadaan Fisik</label>
                                                                        <textarea name="KeadaanFisik" class="form-control border-input" placeholder="Keadaan fisik pasien"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-1">
                                                                    <div class="form-group">
                                                                        <label>Tinggi</label>
                                                                        <input type="number" name="TinggiBadan" class="form-control border-input" placeholder="cm">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-1">
                                                                    <div class="form-group">
                                                                        <label>Berat</label>
                                                                        <input type="number" name="BeratBadan" class="form-control border-input" placeholder="kg">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-1">
                                                                    <div class="form-group">
                                                                        <label>Tensi</label>
                                                                        <input type="number" name="Tensi" class="form-control border-input" placeholder="-">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-1">
                                                                    <div class="form-group">
                                                                        <label>Suhu</label>
                                                                        <input type="number" name="Suhu" class="form-control border-input" placeholder="&#176;C">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <hr>

                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label>Diagnosa</label>
                                                                        <textarea name="Diagnosa" class="form-control border-input" placeholder="Masukkan diagnosa pasien"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        

                                                            <div class="footer">
                                                                <hr>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <input type="submit" class="form-control btn-confirm-d btn-info btn-fill" value="Tambah" name="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    @else
                                                    <br>
                                                    <div class="row">
                                                        <h5 class="subtitle text-primary"><b>Data Diagnosa</b></h5>
                                                        <div class="col-sm-8">
                                                            <table class="table tbl-detail">
                                                                <tr>
                                                                    <td width="150px;">Nama Pasien</td>
                                                                    <td>: {{ $detailKunjungan->pasien->NamaPasien }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Tanggal Periksa</td>
                                                                    <td>: {{ date('d M Y', strtotime($detailKunjungan->created_at)) }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Riwayat Penyakit</td>
                                                                    <td>: {{ $detailKunjungan->diagnosa->RiwayatPenyakit }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Keadaan Umum</td>
                                                                    <td>: {{ $detailKunjungan->diagnosa->KeadaanUmum }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Keadaan Fisik</td>
                                                                    <td>: {{ $detailKunjungan->diagnosa->KeadaanFisik }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Diagnosa</td>
                                                                    <td>: {{ $detailKunjungan->diagnosa->Diagnosa }}</td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <table class="table tbl-detail">
                                                                <tr>
                                                                    <td>Dokter</td>
                                                                    <td>: {{ $detailKunjungan->diagnosa->NamaPegawai }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td width="120px;">Tinggi Badan</td>
                                                                    <td>: {{ $detailKunjungan->diagnosa->TinggiBadan }} cm</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Berat Badan</td>
                                                                    <td>: {{ $detailKunjungan->diagnosa->BeratBadan }} kg</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Tensi</td>
                                                                    <td>: {{ $detailKunjungan->diagnosa->Tensi }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Suhu Tubuh</td>
                                                                    <td>: {{ $detailKunjungan->diagnosa->Suhu }} &#176;C</td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    @endif
                                                </div>
                                                <div class="tab-pane" id="2">
                                                    <br>
                                                    @if($detailKunjungan->IdRujukan == 0)
                                                    <div class="row">
                                                        <div class="col-sm-8 col-sm-offset-2">

                                                            <!-- Form -->
                                                            <form method="post" class="form-tambah-r" action="{{ url('/poli/tambah/rujukan') }}"> 
                                                                {{ csrf_field() }}
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label>Tujuan</label>
                                                                            <input type="hidden" name="IdKunjungan" value="{{ $detailKunjungan->IdKunjungan }}">
                                                                            <input type="text" name="Tujuan" class="form-control border-input" placeholder="Tujuan">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label>Tanggal Rujukan</label> 
                                                                            <input type="date" name="TanggalRujukan" class="form-control border-input">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                     <div class="col-md-12">
                                                                        <label>Catatan</label>
                                                                        <textarea name="Catatan" class="form-control border-input" placeholder="Masukkan keterangan"></textarea>
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <div class="footer">
                                                                    <hr>
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <input type="submit" class="form-control btn-confirm-r btn-info btn-fill" value="Tambah" name="">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    @else
                                                    <div class="row">
                                                        <h5 class="subtitle text-primary"><b>Data Rujukan</b></h5>
                                                        <div class="col-sm-12">
                                                            <!-- Detail -->
                                                            <table class="table tbl-detail">
                                                                <tr>
                                                                    <td width="150px;">Tujuan</td>
                                                                    <td>: {{ $detailKunjungan->rujukan->Tujuan }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Tanggal Rujukan</td>
                                                                    <td>: {{ $detailKunjungan->rujukan->TanggalRujukan }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Catatan</td>
                                                                    <td>: {{ $detailKunjungan->rujukan->Catatan }}</td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    @endif
                                                </div>
                                                <div class="tab-pane" id="3">
                                                    <br>
                                                    <div id="form-resep">  
                                                        <table class="table table-striped">
                                                            <thead>
                                                                <th width="60px;">No</th>
                                                                <th>Nama Obat</th>
                                                                <th>Jumlah</th>
                                                                <th>Dosis</th>
                                                                <th width="100px;">Aksi</th>
                                                            </thead>
                                                            <tbody>
                                                                @if($detailKunjungan->IdResep != 0)
                                                                @foreach($detailKunjungan->resep->obat as $no=>$obat)
                                                                <tr>
                                                                    <td>{{ ++$no }}</td>
                                                                    <td>{{ $obat->NamaObat }}</td>
                                                                    <td>{{ $obat->pivot->Jumlah }} {{ $obat->JenisObat }}</td>
                                                                    <td>{{ $obat->pivot->Dosis }}</td>
                                                                    <td><a href="{{ url('/poli/hapus/obat/'.$detailKunjungan->resep->IdResep.'/'.$obat->IdObat) }}"><button class="btn btn-danger">Hapus</button></a></td>
                                                                </tr>
                                                                @endforeach
                                                                @endif
                                                            </tbody>
                                                        </table>
                                                        
                                                        <br>

                                                        <!-- Tambah obat -->
                                                        <div class="konten bg-blue">
                                                            <h4 class="text-danger">Tambah Obat</h4>
                                                            <form method="post" action="{{ url('/poli/tambah/obat') }}"> 

                                                                {{ csrf_field() }}
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <input type="hidden" name="IdKunjungan" value="{{ $detailKunjungan->IdKunjungan }}">
                                                                        <div class="form-group">
                                                                            <label>Nama Obat</label>
                                                                            <select class="form-control border-input selectpicker" name="IdObat" data-live-search="true">
                                                                                <option data-tokens="" value="">Pilih nama obat</option>
                                                                                @foreach($obats as $obat)
                                                                                <option data-tokens="{{ strtolower($obat->NamaObat) }}" value="{{ $obat->IdObat }}">{{ $obat->NamaObat }}</option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-2">
                                                                        <div class="form-group">
                                                                            <label>Jumlah</label>
                                                                            <input type="text" name="Jumlah" class="form-control border-input" placeholder="Jumlah">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label>Dosis</label>
                                                                            <input type="text" name="Dosis" class="form-control border-input" placeholder="Dosis">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="footer">
                                                                    <hr>
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <input type="submit" class="form-control btn-info btn-fill" value="Tambah" name="">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div> 

                                                        @if($detailKunjungan->IdResep != 0)
                                                        <!-- Tambah Catatan -->
                                                        <div class="konten">
                                                            <h4 class="text-danger">Catatan</h4>
                                                            <form method="post" action="{{ url('/poli/tambah/catatanResep') }}"> 

                                                                {{ csrf_field() }}
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <input type="hidden" name="IdResep" value="{{ $detailKunjungan->IdResep }}">
                                                                        <input type="hidden" name="IdKunjungan" value="{{ $detailKunjungan->IdKunjungan }}">
                                                                        <div class="form-group">
                                                                            <label>Catatan Resep</label>
                                                                            <textarea name="Catatan" class="form-control border-input" placeholder="Masukkan catatan resep">{{ $detailKunjungan->resep->Catatan }}</textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="footer">
                                                                    <hr>
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <input type="submit" class="form-control btn-info btn-fill" value="Perbarui" name="">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        @endif 
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

     @include('poli/template/footer')