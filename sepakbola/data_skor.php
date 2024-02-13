<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
    <!--<![endif]-->

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <title>Data Skor</title>
        <meta name="description" content="Sufee Admin - HTML5 Admin Template" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <link rel="apple-touch-icon" href="apple-icon.png" />
        <link rel="shortcut icon" href="favicon.ico" />

        <link
            rel="stylesheet"
            href="vendors/bootstrap/dist/css/bootstrap.min.css"
        />
        <link
            rel="stylesheet"
            href="vendors/font-awesome/css/font-awesome.min.css"
        />
        <link
            rel="stylesheet"
            href="vendors/themify-icons/css/themify-icons.css"
        />
        <link
            rel="stylesheet"
            href="vendors/flag-icon-css/css/flag-icon.min.css"
        />
        <link
            rel="stylesheet"
            href="vendors/selectFX/css/cs-skin-elastic.css"
        />
        <link
            rel="stylesheet"
            href="vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css"
        />
        <link
            rel="stylesheet"
            href="vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css"
        />

        <link rel="stylesheet" href="assets/css/style.css" />

        <link
            href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800"
            rel="stylesheet"
            type="text/css"
        />
    </head>
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
                        <h1>Data Skor Club</h1>
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
               

                                                    <!-- Hapus data -->                                                                                          
        <?php

            include "koneksi.php";
              if(isset($_GET['kode'])){
                mysqli_query($koneksi,"delete from skor where nama='$_GET[kode]'");

                  echo '<div class="alert alert-danger" role="alert">
                      <span class="badge badge-pill badge-success"></span>Data Skor Berhasil Di Hapus
                       </div>
                         </div>';
                         echo "<meta http-equiv='refresh' content='2;data_skor.php'>";
                           }
                             ?> 


                                                </div>
<div class="content mt-3">
                <div class="animated fadeIn">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                               <a href="input_skor.php"> <button type="submit" class="btn btn-primary btn-sm" name="simpan">
                                                            <i class="fa fa-plus"></i>Tambah Data Skor
                                                        </button></a>
                                    <strong class="card-title">Data Skor / Klasemen </strong><br>

                                </div>
                  <div class="col-sm-12">
                                   <br> <table
                                        id="bootstrap-data-table-export"
                                        class="table table-striped table-bordered">

                                        <thead>
                                        <form action="" method="GET"> 
                                        <tr align="right">
                                                <th colspan=9><input tye="text" name="cari" value="<?php if(isset($_GET['cari'])){echo $_GET['cari'];}?>"> <button type="submit" class="btn btn-primary btn-sm" name="simpan">
                                                            <i class="fa fa-search"></i>Cari data nama Club
                                                        </button>
                                                </th>    
                                        </tr>
                                            </form>     
                                            </tr>
                                            <tr align="center" bgcolor="azure">
                                                <th>no</th>
                                                <th>Nama Club</th>
                                                <th>Main</th>
                                                <th>Menang</th>
                                                <th>Seri</th>
                                                <th>Kalah</th>
                                                <th>Goal Menang</th>
                                                <th>Goal kalah</th>
                                                <th>Total Point</th>
                                                <th colspan=8>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                               </div>
            
                                                        </form>
                                                    </div>
<!-- vlidasi simpan akun -->
                                                   
                                            <?php
                                     include "koneksi.php";
                                      if (isset($_GET['cari'])){
                                        $pencarian = $_GET['cari'];
                                        $query = "select * from skor where nama like '%".$pencarian."%'" ;
                                        
                                      }else{
                                        $query="select * from skor";
                                      }
                                     $no=1;
                                   $ambildata = mysqli_query($koneksi,$query);
                                     while ($tampil= mysqli_fetch_array($ambildata)){
                                         echo "
                                         <tr>
                                           <td>$no</td>
                                            <td>$tampil[nama]</td>
                                           <td>$tampil[main]</td>
                                           <td>$tampil[menang]</td>
                                           <td>$tampil[seri]</td>
                                           <td>$tampil[kalah]</td>
                                           <td>$tampil[gm]</td>
                                           <td>$tampil[gk]</td>
                                           <td>$tampil[total]</td>
                                           <td><a href='?kode=$tampil[nama]'class='btn btn-sm btn-danger'><i class='fa fa-trash'>Hapus</i></a></td>
                                          
                                         </tr>";

                                         $no++;
                                     }
                                     ?>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- .animated -->
            </div>
            <!-- .content -->
        </div>
     
       </div>  
    </div>
    <!-- Right Panel -->

    <script src="vendors/jquery/dist/jquery.min.js"></script>
        <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
        <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="assets/js/main.js"></script>

        <script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
        <script src="vendors/jszip/dist/jszip.min.js"></script>
        <script src="vendors/pdfmake/build/pdfmake.min.js"></script>
        <script src="vendors/pdfmake/build/vfs_fonts.js"></script>
        <script src="vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
        <script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
        <script src="vendors/datatables.net-buttons/js/buttons.colVis.min.js"></script>
        <script src="assets/js/init-scripts/data-table/datatables-init.js"></script>
</body>
</html

