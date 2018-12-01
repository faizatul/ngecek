<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $judul;?></title>
    <!-- Bootstrap Styles-->
    <link href="<?php echo base_url().'assets/assets/css/bootstrap.css'?>" rel="stylesheet">
    <!-- FontAwesome Styles-->
    <link href="<?php echo base_url().'assets/assets/css/font-awesome.css'?>" rel="stylesheet">
    <!-- Morris Chart Styles-->
    <link href="<?php echo base_url().'assets/assets/js/morris/morris-0.4.3.min.css'?>" rel="stylesheet">
    <!-- Custom Styles-->
    <link href="<?php echo base_url().'assets/assets/css/custom-styles.css'?>" rel="stylesheet">
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">RS</a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                       <!-- <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>-->
                        <li class="divider"></li>
                        <li><a href="<?php echo base_url().'login/logout'?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a  href="<?php echo base_url().'login'?>"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url().'proses/tampil_artikel'?>"><i class="fa fa-table"></i> Lihat Artikel</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url().'proses/artikel'?>"><i class="fa fa-edit"></i> Tambah Artikel </a>
                    </li>
                </ul>

            </div>

        </nav>
        <!-- akhir nav-->