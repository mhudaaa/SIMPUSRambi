@include('dokter/template/header')
<body>
    <div class="wrapper">

         @include('dokter/template/sidebar')

        <div class="main-panel">

            @include('dokter/template/navbar')
            
            <div class="content">
                <div class="container-fluid">
                    <div class="row bread">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="content">
                                    <h6>Beranda</h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="header">
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <h4 class="title space-top text-success">Selamat datang Dokter</h4>  
                                            <br>
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

    @include('dokter/template/footer')