<!doctype html>
<html lang="en">
<head>

    <!-- Meta tags -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/animate.min.css" rel="stylesheet"/>
    <link href="../assets/css/paper-dashboard.css" rel="stylesheet"/>
    <link href="../assets/css/demo.css" rel="stylesheet" />
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="../assets/css/themify-icons.css" rel="stylesheet">


    <title>Rawat Inap - SIMPUS Rambipuji</title>
</head>
<body>

<div class="wrapper">
 <div class="sidebar" data-background-color="black" data-active-color="primary">

        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="#" class="simple-text">
                    SIMPUS RAMBIPUJI
                </a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="index.php">
                        <i class="ti-ticket"></i>
                        <p>Rawat Inap</p>
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
                    <a class="navbar-brand" href="#">Rawat Inap</a>
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
                                <h6>Beranda / Rawat Inap / <span class="active">Ubah Data Rawat Inap</span></h6>
                            </div>
                        </div>
                    </div>
                </div>

                <form method="post" action="anu.html">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="card">
                                <div class="header">
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <h4 class="title">Ubah Data Rawat Inap</h4>  
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
                                            <td width="30px;"><i class="ti-user"></i></td>
                                            <td class="bold">Nama</td>
                                            <td><input type="text" name="nama" class="form-control border-input" value="Muhammad Huda M"></td>
                                        </tr>
                                        <tr>
                                            <td><i class="ti-credit-card"></i></td>
                                            <td class="bold">No. Identitas</td>
                                            <td><input type="text" name="no-identitas" class="form-control border-input" value="1420412038219"></td>
                                        </tr>
                                        <tr>
                                            <td><i class="ti-gift"></i></td>
                                            <td class="bold">Nama Ruangan</td>
                                            <td><input type="text" name="ttl" class="form-control border-input" value="Anthurium"></td>
                                        </tr>
                                        <tr>
                                            <td><i class="ti-wheelchair"></i></td>
                                            <td class="bold">Nama Dokter</td>
                                            <td><input type="text" name="nama-ortu" class="form-control border-input" value="Dr Eri Srihayati"></td>
                                        </tr>
                                        <tr>
                                            <td><i class="ti-mobile"></i></td>
                                            <td class="bold">Catatan Pemeriksaan</td>
                                            <td><input type="text" name="catatan" class="form-control border-input" value=""></td>
                                        </tr>
                                        <tr>
                                            <td><i class="ti-mobile"></i></td>
                                            <td class="bold">Hari Pemeriksaan</td>
                                            <td><input type="text" name="hari" class="form-control border-input" value="Setiap Hari"></td>
                                        </tr>
                                        <tr>
                                            <td><i class="ti-mobile"></i></td>
                                            <td class="bold">Waktu Pemeriksaan</td>
                                            <td><input type="time" name="waktu" class="form-control border-input" value="08.00"></td>
                                        </tr>
                                        <tr>
                                            <td><i class="ti-mobile"></i></td>
                                            <td class="bold">Tanggal Masuk</td>
                                            <td><input type="date" name="tglmasuk" class="form-control border-input" value="19 November 2016"></td>
                                        </tr>
                                        <tr>
                                            <td><i class="ti-mobile"></i></td>
                                            <td class="bold">Tanggal Keluar</td>
                                            <td><input type="date" name="tglkeluar" class="form-control border-input" value="26 November 2016"></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
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
                                            <td width="30px;"><i class="ti-tag"></i></td>
                                            <td class="bold">Jenis Pasien</td>
                                             <td>
                                                <select name="jenis-pasien" class="form-control border-input">
                                                    <option value="0">Non-BPJS</option>
                                                    <option value="1" selected="">BPJS</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><i class="ti-id-badge"></i></td>
                                            <td class="bold">Nomor BPJS</td>
                                            <td><input type="number" name="no-bpjs" class="form-control border-input" value="0" disabled=""></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <input onclick="return confirm('Simpan data?')" type="submit" class="btn btn-info btn-fill" value="Simpan Data">
                                </div>
                                <div class="col-sm-6 text-right text-danger bold">
                                    <a href="index.php" onclick="return confirm('Batal mengubah?')"><div class="btn btn-danger">Batal</div></a>
                                </div>
                            </div>
                        </div>      
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>

    <script src="../assets/js/jquery-1.10.2.js" type="text/javascript"></script>
    <script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../assets/js/bootstrap-checkbox-radio.js"></script>
    <script src="../assets/js/chartist.min.js"></script>
    <script src="../assets/js/bootstrap-notify.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="../assets/js/paper-dashboard.js"></script>
    <script src="../assets/js/demo.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){

            // demo.initChartist();

            // $.notify({
            //     icon: 'ti-gift',
            //     message: "Welcome to <b>Paper Dashboard</b> - a beautiful Bootstrap freebie for your next project."

            // },{
            //     type: 'success',
            //     timer: 4000
            // });
        });
    </script>

</body>
</html>
