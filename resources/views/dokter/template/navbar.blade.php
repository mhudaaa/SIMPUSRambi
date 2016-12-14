            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar bar1"></span>
                            <span class="icon-bar bar2"></span>
                            <span class="icon-bar bar3"></span>
                        </button>
                        @if($poliTujuan == "Umum")
                        <a class="navbar-brand" href="#">Dokter - <span class="text-primary">Umum</span></a>
                        @elseif($poliTujuan == "Kia")
                        <a class="navbar-brand" href="#">Dokter - <span class="text-warning">KIA</span></a>
                        @elseif($poliTujuan == "Gigi")
                        <a class="navbar-brand" href="#">Dokter - <span class="text-danger">Gigi</span></a>
                        @endif
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="/logout">
                                    <i class="ti-power-off"></i>
                                    <p>Keluar</p>
                                </a>
                            </li>
                        </ul>

                    </div>
                </div>
            </nav>