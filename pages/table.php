<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
<title>Database</title>
<link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
<link href="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">
<link href="../bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">
<link href="../dist/css/sb-admin-2.css" rel="stylesheet">
<link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
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
 <br />
<?php
echo'<div class="row"><!-- /.panel-heading -->
 <div class="col-lg-12">
 <div class="panel panel-default">
 <div class="panel-heading">
 </div>
 <div class="panel-body">
 <div class="dataTable_wrapper">
 <table class="table table-striped table-bordered table-hover" id="dataTables-example">
 <thead>
 <tr>
 <th style="width:6%;">No</th>
 <th style="width:29%;">Nama Perusahaan</th>
 <th style="width:10%;">Provinsi</th>
 <th style="width:15%;">Jenis Komoditas</th>
 <th style="width:10%;">Kode HS</th>
 <th style="width:10%;">Kode SNI</th>
 <th style="width:10%;">Kap. Produksi</th>
 <th style="width:10%;">Detail</th>
 </tr>
 </thead>
 <tbody>';
error_reporting(0);
include "connect.php";
$query = "SELECT * FROM `t_produk` ";
$hasil = mysql_query($query);
$no=1;
while ($buff = mysql_fetch_array($hasil)) {
?>
<tr>
<td style="text-align: center;"><?php echo $no; ?></td>
<td><?php echo $buff['namaperusahaan']; ?></td>
<td><?php echo $buff['provinsi']; ?></td>
<td><?php echo $buff['namaproduksi']; ?></td>
<td><?php echo $buff['kodehs']; ?></td>
<td><?php echo $buff['kodesni']; ?></td>
<?php
$jml = $buff['jumlahproduksi'];
if ($jml != ""){
echo '<td>'.number_format($buff['jumlahproduksi'])."&nbsp;".$buff['satuanprod']."/".$buff['waktuprod'].'</td>';
}else{
echo '<td>-</td>';
}
?>
<td><a href="see?id=<?php echo $buff['id'];?>">Selengkapnya</a></td>
</tr>
<?php
$no++;
}; 
echo'</tbody></table></div></div></div></div></div>';
?>
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

    <!-- DataTables JavaScript -->
    <script src="../bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>
<br /><font size="2"><center><a href="#">copyright&nbsp;&copy;&nbsp;PT. Inasa Sakha Kirana</a></center></font><br />
</body>
</html>
