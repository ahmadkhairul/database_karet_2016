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
<form method="post" action="edit">
<table>
<?php
include "connect.php";
$id = $_GET['id'];
$query = "SELECT * FROM `t_produk` WHERE `id` = '$id'";
$hasil = mysql_query($query);
$r=mysql_fetch_array($hasil);
?>
<tr>
	<td style="width:37%;">Nama Perusahaan</td>
	<td style="width:5%;">:</td>
	<td style="width:58%;"><input class="form-control" type="text" name="naper" value="<?php echo $r['namaperusahaan']; ?>"/></td>
 </tr>
 <tr>
	<td>Provinsi</td>
	<td>:</td>
	<td>
<select class="form-control" name="prov"> 
<option><?php echo $r['provinsi']; ?></option>
<option>Aceh</option>
<option>Bali</option>
<option>Banten</option>
<option>Bengkulu</option>
<option>Gorontalo</option>
<option>Jakarta</option>
<option>Jambi</option>
<option>Jawa Barat</option>
<option>Jawa Tengah</option>
<option>Jawa Timur</option>
<option>Kalimantan Barat</option>
<option>Kalimantan Selatan</option>
<option>Kalimantan Tengah</option>
<option>Kalimantan Timur</option>
<option>Kalimantan Utara</option>
<option>Kepulauan Bangka Belitung</option>
<option>Kepulauan Riau</option>
<option>Lampung</option>
<option>Maluku</option>
<option>Maluku Utara</option>
<option>Nusa Tenggara Barat</option>
<option>Nusa Tenggara Timur</option>
<option>Papua</option>
<option>Irian Jaya Barat</option>
<option>Riau</option>
<option>Sulawesi Barat</option>
<option>Sulawesi Selatan</option>
<option>Sulawesi Tengah</option>
<option>Sulawesi Tenggara</option>
<option>Sulawesi Utara</option>
<option>Sumatera Barat</option>
<option>Sumatera Selatan</option>
<option>Sumatera Utara</option>
<option>Yogyakarta</option>
</select>
</td>
 </tr>
   <tr>
	<td>Alamat</td>
	<td>:</td>
	<td><textarea style="resize:none" class="form-control" name="alamat"><?php echo $r['alamat']; ?></textarea></td>
 </tr>
 <tr>
	<td>No Kontak</td>
	<td>:</td>
	<td><input class="form-control" type="text" name="nokontak" value="<?php echo $r['nokontak']; ?>" /></td>
 </tr>
 <tr>
	<td>Kelompok Industri</td>
	<td>:</td>
<td>
<select class="form-control" name="keli"> 
<option><?php echo $r['kelompokindustri']; ?></option>
<option>Hulu</option>
<option>Antara</option>
<option>Hilir</option>
</select>
</td> 
</tr>
<tr>
	<td>Kelompok Komoditas</td>
	<td>:</td>
	<td><input class="form-control" type="text" name="kapro" value="<?php echo $r['kelompokkomoditas']; ?>"/></td>
 </tr>
<tr>
	<td>Jenis Komoditas</td>
	<td>:</td>
	<td><input class="form-control" type="text" name="napro" value="<?php echo $r['namaproduksi']; ?>"/></td>
 </tr>
 <tr>
	<td>Kode SNI</td>
	<td>:</td>
	<td><input class="form-control" type="text" name="sni" value="<?php echo $r['kodesni']; ?>" /></td>
 </tr>
 <tr>
	<td>Kode HS</td>
	<td>:</td>
	<td><input class="form-control" type="text" name="hs" value="<?php echo $r['kodehs']; ?>" /></td>
 </tr>
  <tr>
	<td>Kode KLBI</td>
	<td>:</td>
	<td><input class="form-control" type="text" name="klbi" value="<?php echo $r['kodeklbi']; ?>" /></td>
 </tr>
 <tr>
	<td>Kapasitas Produksi</td>
	<td>:</td>
	<td><input class="form-control" type="text" name="kappro" value="<?php echo $r['jumlahproduksi']; ?>" /></td>
 </tr>                               
 <tr>
	<td>Satuan Produksi</td>
	<td>:</td>
	<td><input class="form-control" type="text" name="satpro" value="<?php echo $r['satuanprod']; ?>" /></td>
 </tr>
  <tr>
	<td>Waktu Produksi</td>
	<td>:</td>
	<td><input class="form-control" type="text" name="wktpro" value="<?php echo $r['waktuprod']; ?>"/></td>
 </tr>
 <tr>
	<td>Bahan Produksi</td>
	<td>1. </td>
	<td><input class="form-control" type="text" name="bhn1" value="<?php echo $r['bahan1']; ?>" /></td>
 </tr>
 <tr>
	<td></td>
	<td>2. </td>
	<td><input class="form-control" type="text" name="bhn2" value="<?php echo $r['bahan2']; ?>" /></td>
 </tr>
 <tr>
	<td></td>
	<td>3. </td>
	<td><input class="form-control" type="text" name="bhn3" value="<?php echo $r['bahan3']; ?>" /></td>
 </tr>
 <tr>
	<td>Konsumsi</td>
	<td>:</td>
	<td><input class="form-control" type="text" name="pasar" value="<?php echo $r['pasar']; ?>"/></td>
 </tr>
 <tr>
	<td>Kebutuhan Konsumsi</td>
	<td>:</td>
	<td><input class="form-control" type="text" name="kebpasar" value="<?php echo $r['kebutuhanpasar']; ?>"></td>
 </tr>
 <tr>
	<td>E - Mail</td>
	<td>:</td>
	<td><input class="form-control" type="text" name="email" value="<?php echo $r['email']; ?>" /></td>
 </tr>
  <tr>
	<td>Website</td>
	<td>:</td>
	<td><input class="form-control" type="text" name="web" value="<?php echo $r['website']; ?>" /></td>
 </tr>
  <tr>
	<td>Keterangan</td>
	<td>:</td>
	<td><textarea style="resize:none" class="form-control" name="ket"><?php echo $r['keterangan']; ?></textarea></td>
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