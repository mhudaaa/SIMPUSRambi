@include('loket/template/header')
<title>SIMPUS Rambipuji</title>
</head>
<body>

    <div class="wrapper">

       <div class="sidebar" data-background-color="black" data-active-color="warning">

        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="#" class="simple-text">
                    SIMPUS RAMBIPUJI
                </a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="/loket">
                        <i class="ti-home"></i>
                        <p>Beranda</p>
                    </a>
                </li>
                <li>
                    <a href="/loket/kunjungan">
                        <i class="ti-user"></i>
                        <p>Kunjungan</p>
                    </a>
                </li>
                <li>
                    <a href="/loket/pasien">
                        <i class="ti-wheelchair"></i>
                        <p>Pasien</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-panel">

        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="#">Beranda - Loket</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="ti-settings"></i>
                                <p>Pengaturan akun</p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="ti-power-off"></i>
                                <p>Keluar</p>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
        
        <div class="content">
            <div class="container-fluid">

                <div class="row bread">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="content">
                                <h6>Beranda / <span class="active">Loket</span></h6>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>
</div>


@include('loket/template/footer')
