@include('poli/template/header')
<body>
    <div class="wrapper">

         @include('poli/template/sidebar-2')

        <div class="main-panel">

            @include('poli/template/navbar')
            
            <div class="content">
                <div class="container-fluid">
                    <div class="row bread">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="content">
                                    <h6>Beranda / Kunjungan / <span class="active">Rekap Kunjungan</span></h6>
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
                                            <h4 class="title space-top text-success">Rekap Data Pemeriksaan</h4>  
                                        </div>
                                        <form method="post" action="/poli/rekap/cari/">
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
                                
                                <div class="content table-responsive ">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <!-- <div class="konten"> -->
                                                <!-- <h6 class="title text-danger">Kamis, 17 November 2016</h6> -->

                                                 <table class="table table-striped rekap">
                                                    <thead>
                                                        <th>No</th>
                                                        <th>Tanggal</th>
                                                        <th width="150px;">Nama</th>
                                                        <th>Diagnosa</th>
                                                        <th width="100px">Dokter</th>
                                                        <th width="80px">Aksi</th>
                                                    </thead>
                                                    <tbody>
                                                        @if($jmlHasil > 0)
                                                            @foreach($pemeriksaans as $no=>$pemeriksaan)        
                                                            <tr>
                                                                <td width="40px">{{ ++$no }}</td>
                                                                <td width="120px">{{ date('d M Y', strtotime($pemeriksaan->created_at)) }}</td>
                                                                <td>{{ $pemeriksaan->pasien->NamaPasien }}</td>
                                                                @if($pemeriksaan->IdDiagnosa != 0)
                                                                <td>{{ $pemeriksaan->diagnosa->Diagnosa }}</td>
                                                                <td>Dokter</td>
                                                                @else
                                                                <td><i class="text-danger">Data Diagnosa belum dimasukkan</i></td>
                                                                <td>-</td>
                                                                @endif
                                                                <td>
                                                                    <a href="/poli/rekap/detail/{{ $pemeriksaan->IdKunjungan }}"><button class="btn btn-success">Detail</button></a>
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
                                                 {!! $pemeriksaans->links() !!}
                                                </div>
                                            <!-- </div> -->
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                            <a href="/poli"><button class="btn btn-danger btn-fill"><i class="ti-close"></i> Kembali</button></a>
                        </div>
                       
                    </div>
                </div>
            </div>

        </div>
    </div>

    @include('poli/template/footer')