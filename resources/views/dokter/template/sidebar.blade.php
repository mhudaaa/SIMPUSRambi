        @if($poliTujuan == "Umum")
        <div class="sidebar" data-background-color="black" data-active-color="primary">
        @elseif($poliTujuan == "Kia")
        <div class="sidebar" data-background-color="black" data-active-color="warning">
        @elseif($poliTujuan == "Gigi")
        <div class="sidebar" data-background-color="black" data-active-color="danger">
        @endif
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="#" class="simple-text">
                        SIMPUS RAMBIPUJI
                    </a>
                </div>

                <ul class="nav">
                    <li class="active">
                        <a href="/dokter">
                            <i class="ti-home"></i>
                            <p>Beranda</p>
                        </a>
                    </li>
                    <li>
                        <a href="/dokter/rekap">
                            <i class="ti-clipboard"></i>
                            <p>Rekap Pemeriksaan</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>