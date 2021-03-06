<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Laboratorium Komputer Jurusan Fisika</title>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="../dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../bower_components/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Home</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
            <?php 
            if(isset($_SESSION['Login']))
            {
            ?>
            <ul class="nav navbar-top-links navbar-right">
                <li class="divider"></li>
                <li><a href="logout.php"> Logout</a></li>    
            </ul>
            <!-- /.navbar-top-links -->
            <?php 
            }
            else 
            {
            ?>
            <ul class="nav navbar-top-links navbar-right">
                <li class="divider"></li>
                <li><a href="login.php"> Login</a></li>
            </ul>    
            <?php
            }
            ?>
            </ul>
            <!-- /.navbar-top-links -->
            
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        
                        <?php if(isset($_SESSION['Login']) && $_SESSION['Login'] == "Admin") 
                        {
                        ?>
                        <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Asisten<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="asisten/index.php">Data Asisten</a>
                                </li>
                                <li>
                                    <a href="asisten/input.php">Input Asisten</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Jadwal<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="jadwal/index.php">Data Jadwal</a>
                                </li>
                                <li>
                                    <a href="jadwal/input.php">Input Jadwal</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Praktikkan<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="praktikan/index.php">Data Praktikkan</a>
                                </li>
                                <li>
                                    <a href="praktikan/input.php">Input Praktikkan</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Praktikum <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="praktikum/index.php">Data Praktikum</a>
                                </li>
                                <li>
                                    <a href="praktikum/input.php">Input Praktikum</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

			<li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Nilai<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="tugaspraktikum/index.php">Nilai Tugas Praktikum</a>
                                 </li>
                                <li>
                                    <a href="tugasrumah/index.php">Nilai Tugas Rumah</a>
                                </li>
                                <li>
                                    <a href="nilaiakhir.php">Nilai</a>
                                </li>
                            </ul>
                        </li>
                        <?php  
                        }
                        else if(isset($_SESSION['Login']) && $_SESSION['Login'] == "Asisten") 
                        { ?>
                        <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Jadwal<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="jadwal/index.php">Data Jadwal</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
			<li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Absen<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Form <span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="absenasisten/index.php">Absen Asisten</a>
                                        </li>
                                        <li>
                                            <a href="absenpraktikan/index.php"> Absen Praktikan</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                    <a href="#">Input <span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="absenasisten/input.php">Absen Asisten</a>
                                        </li>
                                        <li>
                                            <a href="absenpraktikan/input.php"> Absen Praktikan</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
			<li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Nilai<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Form <span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="tugaspraktikum/index.php">Tugas Praktikum</a>
                                        </li>
                                        <li>
                                            <a href="tugasrumah/index.php"> Tugas Rumah</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                    <a href="#">Input <span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="tugaspraktikum/input.php">Input Tugas Praktikum</a>
                                        </li>
                                        <li>
                                            <a href="tugasrumah/input.php"> Input Tugas Rumah</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                            </ul>
                        </li>
                        <?php
                        }
                        else if(isset($_SESSION['Login']) && $_SESSION['Login'] == "PJ")
                        {
                            ?>
                            <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Jadwal<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="jadwal/index.php">Data Jadwal</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Nilai<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="tugaspraktikum/index.php">Nilai Tugas Praktikum</a>
                                 </li>
                                <li>
                                    <a href="tugasrumah/index.php">Nilai Tugas Rumah</a>
                                </li>
                                <li>
                                    <a href="nilaiakhir.php">Nilai</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Absen<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Form <span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="absenasisten/index.php">Absen Asisten</a>
                                        </li>
                                        <li>
                                            <a href="absenpraktikan/index.php"> Absen Praktikan</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <?php
                        }
                        else
                        {
                        ?>
                        <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Jadwal<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="jadwal/index.php">Data Jadwal</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Nilai<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="tugaspraktikum/index.php">Nilai Tugas Praktikum</a>
                                 </li>
                                <li>
                                    <a href="tugasrumah/index.php">Nilai Tugas Rumah</a>
                                </li>
                                <li>
                                    <a href="nilaiakhir.php">Nilai</a>
                                </li>
                            </ul>
                        </li>
                        
                        <?php    
                        }
                        ?>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="col-lg-12">
                    <center><h1>Sistem Informasi Pengelolaan Praktikum</h1></center>
					<br>
					
                </div>
				<div>
				<center><img src="img/a.jpg" width="1000px" height="500px"></center>
				</div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../bower_components/raphael/raphael-min.js"></script>
    <script src="../bower_components/morrisjs/morris.min.js"></script>
    
    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
