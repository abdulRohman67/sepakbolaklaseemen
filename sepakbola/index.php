<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dasbord Admin</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="vendors/jqvmap/dist/jqvmap.min.css">


    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body>


    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand">SEPAK BOLA</a>
                
               
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user"></i>Data Club</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-unlock-alt"></i><a href="input_data_club.php">Input Data Club</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="data_club.php">Lihat Data Club</a></li>
                           
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-home"></i>Skor</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-unlock-alt"></i><a href="input_skor.php">Input Skor</a></li>
                            <li><i class="fa fa-unlock-alt"></i><a href="data_skor.php">Lihat Skor</a></li>
                            
                        </ul>
                    </li>
                    

                    

                    
                    
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bar-chart"></i>Papan Informasi</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-edit"></i><a href="input_informasi.php">Input Informasi</a></li>
                            
                        </ul>
                    </li>

                    
                    
                </ul>
    
            </div><!-- /.navbar-collapse -->
            
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7"> <font color="red">Sistem Informasi Sepak Bola</font>
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        
                        <div class="form-inline">

                        </div>
                    </div>
                </div>
                
                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/bola.jpg" alt="User Avatar">
                        </a>
                    </div>
                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Admin</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="col-sm-12">
                <div class="alert  alert-success alert-dismissible fade show" role="alert">
                    <span class="badge badge-pill badge-success"></span> Selamat Datang Admin 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button></div>
                    <?php
        

include "koneksi.php";
          if(isset($_GET['kode'])){
          mysqli_query($koneksi,"delete from informasi where info='$_GET[kode]'");
              
          echo '<div class="alert alert-danger" role="alert">
          <span class="badge badge-pill badge-success"></span>Informasi Berhasil Di Hapus
                      </div>
          </div>';
          echo "<meta http-equiv='refresh' content='3;index.php'>";
          }
         ?> 
          <!--hapus informasi-->
            </div>

           
            <div>
                    <div>
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Papan Informasi</strong>
                            </div>
                           

                              <!--Tabel informasi--> 
                            <div class="card-body">
                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr align="center">
                                            <th>No</th>
                                            <th>Informasi</th>
                                            <th>Keterangan</th>
                                            <th>Aksi</th>
                                            
                                        </tr>
                                    </thead>
                                       <!--Tabel informasi--> 

                                     <!--Tampil data Informasi-->
                                    <?php
                                     include "koneksi.php";

                                     $no=1;
                                     $ambildata = mysqli_query($koneksi,"select * from informasi");
                                     while ($tampil= mysqli_fetch_array($ambildata)){
                                         echo "
                                         <tr>
                                           <td>$no</td>
                                           <td>$tampil[info]</td>
                                           <td>$tampil[keterangan]</td>
                                           <td><a href='?kode=$tampil[info]'class='btn btn-sm btn-danger'><i class='fa fa-trash'>Hapus</i></a></td>
                                         
                                         </tr>";

                                         $no++;
                                     }
                                     ?>
                                      <!--Tampil data Informasi-->
                                 </table>
                            </div>

                            

                                


                            </div>
       </div>  
    </div>
    <!-- Right Panel -->

    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="vendors/chart.js/dist/Chart.bundle.min.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>
    <script src="vendors/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <script src="vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
</body>
</html
