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

    <title>Database</title>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

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
        <!-- end -->
  </ul>
        </nav>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                 <img style="float: right;" src="../pikcer/kemenris.jpg" width="270" height="80" /> 
                 <h1 class="page-header">BANK DATA</h1>        
                </div>
                <!-- /.col-lg-12 -->
            </div>
        <!-- /.row -->
 <br />
<div class="row">
<div class="col-lg-6">
 <div class="panel panel-default">
 <div class="panel-heading">
 <b class="text-info">Input Data</b>
 </div>
 <div class="panel-body">
<form method="post" action="simpang" enctype="multipart/form-data" role="form">
<table>
<tr>
	<td style="width:37%;">Jenis Komoditas</td>
	<td style="width:5%;">:</td>
	<td style="width:58%;">
        <select class="form-control" name="jk"> 
        <?php
        include "connect.php";
        $row = mysql_query("select DISTINCT(namaproduksi) from t_produk");
        while($sql = mysql_fetch_array($row)){
        echo '<option>'.$sql['namaproduksi'].'</option>';
        }
        ?>
        </select>
 </td>
 </tr>
 <tr>
	<td>Gambar</td>
	<td>:</td>
	<td><input type="file" name="file" accept="image/jpeg,image/png,image/gif"/></td>
 </tr>
 </table>
    <br />
 <input type="submit" class="btn btn-default" value="Simpan" class="button"> <input class="btn btn-default" type="reset" value="Reset" class="button">
 </form>
 </div>
 <div class="panel-footer">
Keterangan : <br />Jika Gambar komoditas sudah ada, Gambar akan otomatis mengganti<br /> Jika Gambar komoditas belum ada, Gambar akan otomatis menyimpan
</div>
 </div>
 </div>
    <?php
echo'<!-- /.panel-heading -->
 <div class="col-lg-6">
 <div class="panel panel-default">
 <div class="panel-heading">
 <b class="text-info">Delete Data</b>
 </div>
 <div class="panel-body">
 <div class="dataTable_wrapper">
 <table class="table table-striped table-bordered table-hover" id="dataTables-example">
 <thead>
 <tr>
 <th style="width:12%;">No</th>
 <th style="width:45%;">Jenis Komoditas</th>
 <th style="width:25%;">Gambar</th>
 <th style="width:18%;">Action</th>
 </tr>
 </thead>
 <tbody>';
include "connect.php";
$query = "SELECT * FROM `t_gambar` ";
$hasil = mysql_query($query);
$no=1;
while ($buff = mysql_fetch_array($hasil)) {
?>
<tr>
<td style="text-align: center;"><?php echo $no; ?></td>
<td><?php echo $buff['komoditas']; ?></td>
<td><img src="../pikcer/<?php echo $buff['gambar']; ?>" width="110" height="90" /></td>
<td style="text-align: center;"><a href="deleteg?id=<?php echo $buff['id'];?>"><span class="glyphicon glyphicon-remove"></span></a></td>
</tr>
<?php
$no++;
}; 
echo'</tbody></table></div>
</div><div class="panel-footer">
Keterangan : <br />Klik icon <span class="glyphicon glyphicon-edit"></span> untuk Edit <br /> Klik icon <span class="glyphicon glyphicon-remove"></span> untuk Delete
</div></div></div></div>';
?>
    </div>
    <!-- /#page-wrapper -->
    </div>
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

</body>

</html>
<?php
}else{
?> 
<script> alert('Anda Harus Login Terlebih Dahulu');setTimeout("location.href='login'", 1);</script> 
<?php   
}
?>