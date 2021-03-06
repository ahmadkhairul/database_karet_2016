<?php
session_start();
error_reporting(0);
$session = $_SESSION['username'];
if($session != ""){
?>
<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
   <!-- Bootstrap Core CSS -->
   <title>Database</title>
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
                <a class="navbar-brand" href="#">DATABASE PEMETAAN PRODUK DAN PASAR BARANG-BARANG DARI KARET DI INDONESIA</a>
            </div>
            <!-- /.navbar-header -->
           <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a href="index">
                       Beranda
                    </a>
                    <!-- /.dropdown-tasks -->
                </li> 
                <li class="dropdown">
                    <a href="lihat">
                       Lihat Data
                    </a>
                    <!-- /.dropdown-tasks -->
                </li> 
                <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
        <i class="fa fa-pencil fa-fw"></i>
        <i class="fa fa-caret-down"></i>
        </a>
        <ul class="dropdown-menu dropdown-user">
        <li><a href="input"><i class="fa fa-building-o fa-fw"></i> Perusahaan</a></li>
        <li><a href="inputk"><i class=" fa fa-random fa-fw"></i> Komoditas</a></li>
        <li><a href="inputie"><i class=" glyphicon glyphicon-export"></i> Ekspor - Impor</a></li>
        <li><a href="inputg"><i class=" fa  fa-image fa-fw"></i> Gambar</a></li>
        <li><a href="pass"><i class=" fa  fa-exchange fa-fw"></i> Password</a></li>
        </ul>
        </li>          
        
        <li class="dropdown">
        <a href="table">
        <i class="fa fa-database fa-fw"></i>
        </a>
        </li> 
        
        <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
        </a>
        <ul class="dropdown-menu dropdown-user">
        <li><a href="logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
        </li>
        </ul>
        </li>
  </ul>
        <!-- /.dropdown-user -->
    </li>
  
            </ul>
        </nav>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                 <img style="float: right;" src="../pikcer/kemenris.jpg" width="270" height="80" /> 
                 <h1 class="page-header">EDIT DATA</h1>        
                </div>
                <!-- /.col-lg-12 -->
            </div>
        <!-- /.row -->
<div class="row"><!-- /.panel-heading -->
<div class="col-lg-12">
<div class="panel panel-default">
<div class="panel-heading">
</div>
<div class="panel-body">
<form method="post" action="editk">
<table>
<?php
include "connect.php";
$id = $_GET['id'];
$query = "SELECT * FROM `t_hulu` WHERE `id` = '$id'";
$hasil = mysql_query($query);
$r=mysql_fetch_array($hasil);
?>
 <tr>
	<td style="width:10%;">Jenis Komoditas</td>
	<td style="width:1%;">:</td>
	<td style="width:25%;"><input type="text" class="form-control" name ="jk" value="<?php echo $r['produk']; ?>" disabled=""/></td>
    <td style="width:55%;"></td>
 </tr>
 <tr>
	<td>Tahun</td>
	<td>:</td>
	<td><input type="text" class="form-control"  name ="tahun" value="<?php echo $r['tahun']; ?>" disabled=""/></td>
 </tr>
 <tr>
	<td>Kode HS</td>
	<td>:</td>
	<td><input type="text" class="form-control" name ="kdhs" value="<?php echo $r['kodehs']; ?>"/></td>
 </tr>
 <tr>
	<td>Produksi</td>
	<td>:</td>
	<td><input type="text" class="form-control" name ="produksi" value="<?php echo $r['produksi']; ?>"/></td>
 </tr>
  <tr>
	<td>Konsumsi</td>
	<td>:</td>
	<td><input type="text" class="form-control" name ="konsumsi" value="<?php echo $r['konsumsi']; ?>"/></td>
 </tr>
 <tr>
	<td>Satuan Produksi</td>
	<td>:</td>
	<td><input type="text" class="form-control" name ="sp" value="<?php echo $r['satuan']; ?>"/></td>
 </tr>                              
 <input type="hidden" value="<?php echo $r['id']; ?>" name="id"/>
 </table>
 <br />
 <input type="submit" class="btn" value="Edit"/>
 </form>
 </div>
 </div>
 </div>
 </div>
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
    <script src="../js/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
<?php }else{ ?> 
<script> alert('Anda Harus Login Terlebih Dahulu');setTimeout("location.href='login'", 1);</script> 
<?php }?>