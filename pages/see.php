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
<style>
label.colom {
    width: 150px;
    padding: 2px;
    border: 2px #5dca7c solid;
}
</style>
</head>
<body>
    <div id="wrapper">
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
                    <a href="input">
                       Tambah Data
                    </a>
                    <!-- /.dropdown-tasks -->
                </li> 
                 <li class="dropdown">
                    <a href="table">
                       <i class="fa fa-database"></i>
                    </a>
                    <!-- /.dropdown-tasks -->
                </li> 
        <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i></a>
        <ul class="dropdown-menu dropdown-user">
        <?php 
        session_start();
        error_reporting(0);
        $session = $_SESSION['username'];
        if($session !=""){
        ?>
        <li><a href="logout"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
        </li>
        <?php }else{ ?>
        <li><a href="login"><i class="fa fa-sign-in fa-fw"></i>Login</a>
        </li>
        <?php } ?>
        </ul>
        <!-- /.dropdown-user -->
        </li>
    </ul>
</nav>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                 <img style="float: right;" src="../pikcer/kemenris.jpg" width="270" height="80" /> 
                 <h1 class="page-header">DATA</h1>        
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
<table>
<?php
include "connect.php";
$id = $_GET['id'];
$query = "SELECT * FROM `t_produk` WHERE `id` = '$id'";
$hasil = mysql_query($query);
$r=mysql_fetch_array($hasil);
?>
 <tr>
	<td style="width:10%;">Nama Perusahaan</td>
	<td style="width:1%;">:</td>
	<td style="width:25%;"><?php echo $r['namaperusahaan']; ?></td>
    <td rowspan="18" style="width:45%; vertical-align: top;"><label class="colom"><?php echo $r['bahan1']; ?></label><img src="../pikcer/arrow.jpg" width="100" height="40" /><label class="colom"><?php echo $r['namaproduksi']; ?></label><img src="../pikcer/arrow.jpg" width="100" height="40" /><label class="colom"><?php echo $r['pasar']; ?></label></td>
 </tr>
 <tr>
	<td>Provinsi</td>
	<td>:</td>
	<td><?php echo $r['provinsi']; ?></td>
 </tr>
   <tr>
	<td>Alamat</td>
	<td>:</td>
	<td><?php echo $r['alamat']; ?></td>
 </tr>
 <tr>
	<td>No Kontak</td>
	<td>:</td>
	<td><?php echo $r['nokontak']; ?></td>
 </tr>
 <tr>
	<td>Kelompok Industri</td>
	<td>:</td>
	<td><?php echo $r['kelompokindustri']; ?></td>
 </tr>
 <tr>
	<td>Kelompok Komoditas</td>
	<td>:</td>
	<td><?php echo $r['kelompokkomoditas']; ?></td>
 </tr>
  <tr>
	<td>Jenis Komoditas</td>
	<td>:</td>
	<td><?php echo $r['namaproduksi']; ?></td>
 </tr>
 <tr>
	<td>Kode HS</td>
	<td>:</td>
	<td><?php echo $r['kodehs']; ?></td>
 </tr>
 <tr>
	<td>Kode KLBI</td>
	<td>:</td>
	<td><?php echo $r['kodeklbi']; ?></td>
 </tr>
 <tr>
	<td>Kode SNI</td>
	<td>:</td>
	<td><?php echo $r['kodesni']; ?></td>
 </tr>
 <tr>
	<td>Kapasitas Produksi</td>
	<td>:</td>
	<td><?php echo number_format($r['jumlahproduksi'])."&nbsp;".$r['satuanprod']."/".$r['waktuprod'];?></td>
 </tr>
 <tr>
	<td>Bahan Baku</td>
	<td>:</td>
	<td>1. <?php echo $r['bahan1']; ?></td>
 </tr>
 <tr>
	<td></td>
	<td></td>
	<td>2. <?php echo $r['bahan2']; ?></td>
 </tr> 
 <tr>
	<td></td>
	<td></td>
	<td>3. <?php echo $r['bahan3']; ?></td>
 </tr>                                
 <tr>
	<td>Konsumsi</td>
	<td>:</td>
	<td><?php echo $r['pasar']; ?></td>
 </tr>
 <tr>
	<td>Kebutuhan Konsumsi</td>
	<td>:</td>
	<td><?php echo number_format($r['kebutuhanpasar'])."&nbsp;".$r['satuanprod'];?></td>
 </tr>
  <tr>
	<td>E - Mail</td>
	<td>:</td>
	<td><?php echo $r['email']; ?></td>
 </tr>
  <tr>
	<td>Website</td>
	<td>:</td>
	<td><?php echo $r['website']; ?></td>
 </tr>
  <tr>
	<td>Keterangan</td>
	<td>:</td>
	<td><?php echo $r['keterangan']; ?></td>
 </tr>
 </table>
 </div>
 </div>
 </div>
 </div>
 </div>
 <br /><font size="2"><center><a href="#">copyright&nbsp;&copy;&nbsp;PT. Inasa Sakha Kirana</a></center></font><br />

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