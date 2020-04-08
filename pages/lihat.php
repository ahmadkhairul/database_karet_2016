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
                 <h1 class="page-header">LIHAT DATA</h1>        
                </div>
                <!-- /.col-lg-12 -->
            </div>
        <!-- /.row -->
<div class="col-lg-12">
<div class="panel panel-default">
<div class="panel-heading">
Lihat data karet ber-format xls
</div>
<div class="panel-body">
<form method="post" action="change" >
<table>
 <tr>
	<td style="width:10%;">Nama Perusahaan</td>
	<td style="width:1%;">:</td>
	<td style="width:15%;"><input class="form-control" type="text" name="naper"></td>
    <td style="width:55%;"></td>
 </tr>
 <tr>
	<td>Propinsi</td>
	<td>:</td>
	<td>
<select class="form-control" name="prov"> 
<option></option>
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
	<td>Jenis Komoditas</td>
	<td>:</td>
	<td><select class="form-control" name="napro"> 
    <option></option>
        <?php
        include "connect.php";
        $row = mysql_query("select DISTINCT(namaproduksi) from t_produk");
        while($sql = mysql_fetch_array($row)){
        echo '<option>'.$sql['namaproduksi'].'</option>';
        }
        ?>
        </select></td>
 </tr>
 </table>
 <input type="submit" class="btn btn-default" value="download" class="button"> <input class="btn btn-default" type="reset" value="Reset" class="button">
 </form>
 <br />
 </div>
 </div>
 </div>
 </div>
                          <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
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
