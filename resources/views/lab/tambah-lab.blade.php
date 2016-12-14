@include('lab/template/header')

    <title>Tambah pemeriksaan - SIMPUS Rambipuji</title>
</head>
<body>

    <div class="wrapper">

  @include('lab/template/sidebar-2')

    <div class="main-panel">

        @include('lab/template/navbar')
        
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="card">
                            <div class="header">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h4 class="title">Tambah Data Pemeriksaan Lab</h4>  
                                        <p class="category">Lengkapi isian dibawah untuk menambah data pemeriksaan lab.</p>
                                    </div>
                                    <div class="col-sm-6 text-right">
                                        <a href="/lab/laboraturium"><button class="btn btn-danger btn-fill"><i class="ti-close"></i> Batal</button></a>
                                    </div>
                                    
                                    <br>
                                    <div class="content table-responsive">
                                        <form method="post" action="/lab/laboraturium">
                                           {{ csrf_field() }}
                                           <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Petugas Lab</label>
                                                    <select class="form-control border-input selectpicker" name="PetugasLab" data-live-search="true" required="">
                                                        <option data-tokens="" value="">- Pilih Petugas -</option>
                                                        @foreach($petugaslab as $plab)
                                                        <option data-tokens="{{ $plab->NamaPegawai }}" value="{{ $plab->IdPegawai }}">{{ $plab->NamaPegawai }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div> 
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Warna</label>
                                                    <input type="text" name="Warna" class="form-control border-input" placeholder="Warna">
                                                </div>
                                            </div> 
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Protein</label>
                                                    <input type="text" name="Protein" class="form-control border-input" placeholder="Berat Jenis">

                                                    <!-- <select class="form-control border-input selectpicker" name="Protein" data-live-search="true" required="">
                                                        <option data-tokens="" value="">  </option>
                                                        <option data-tokens="" value="+"> (+) </option>
                                                        <option data-tokens="" value="++"> (++) </option>
                                                        <option data-tokens="" value="-"> (-) </option>                     
                                                    </select> -->
                                                </div>
                                            </div> 

                                        </div> 
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Reduksi</label>
                                                    <input type="text" name="Reduksi" class="form-control border-input" placeholder="Berat Jenis">

                                                    <!-- <select class="form-control border-input selectpicker" name="Reduksi" data-live-search="true" required="">
                                                        <option data-tokens="" value="">  </option>
                                                        <option data-tokens="" value=""> Negative </option>
                                                        <option data-tokens="" value=""> Postive </option>                   
                                                    </select> -->
                                                </div>
                                            </div> 
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>PH</label>
                                                    <input type="text" name="PH" class="form-control border-input" placeholder="PH">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Keton</label>
                                                    <input type="text" name="Keton" class="form-control border-input" placeholder="Keton">
                                                </div>
                                            </div> 
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Berat Jenis</label>
                                                    <input type="text" name="BeratJenis" class="form-control border-input" placeholder="Berat Jenis">
                                                </div>
                                            </div> 


                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Urobilin</label>
                                                    <input type="text" name="Urobilin" class="form-control border-input" placeholder="Berat Jenis">

                                                    <!-- <select class="form-control border-input selectpicker" name="Reduksi" data-live-search="true" required="">
                                                        <option data-tokens="" value="">  </option>
                                                        <option data-tokens="" value=""> (+) </option>
                                                        <option data-tokens="" value=""> (-) </option>                   
                                                    </select>   -->                                          
                                                </div>
                                            </div> 
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Bilirubin</label>
                                                    <input type="text" name="Bilirubin" class="form-control border-input" placeholder="Berat Jenis">

                                                    <!-- <select class="form-control border-input selectpicker" name="Reduksi" data-live-search="true" required="">
                                                        <option data-tokens="" value="">  </option>
                                                        <option data-tokens="" value=""> (+) </option>
                                                        <option data-tokens="" value=""> (++) </option>  
                                                        <option data-tokens="" value=""> (+++) </option> 
                                                        <option data-tokens="" value=""> (-) </option>                  
                                                    </select>   -->                
                                                </div>
                                            </div> 
                                        </div>

                                </div>
                            </div>

                            <div class="footer">

                                <hr>
                                <div class="text-success">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <button type="submit" value="submit"  class="btn btn-info btn-fill">Tambah</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
</div>
</div>



    @include('lab/template/footer')