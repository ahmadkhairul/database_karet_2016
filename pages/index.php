<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Database</title>
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
    <link href="../dist/css/timeline.css" rel="stylesheet">
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="../bower_components/morrisjs/morris.css" rel="stylesheet">
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <script type='text/javascript' src='../js/jquery-1.11.3.min.js'></script>
    <style type='text/css'>
    #container {
    height: 500px; 
    min-width: 310px; 
    max-width: 800px; 
    margin: 0 auto; 
    }
    .loading {
    margin-top: 10em;
    text-align: center;
    color: gray;
    }
    label.colom {
    width: 150px;
    padding: 2px;
    border: 2px #5dca7c solid;
    vertical-align: top;
    }
</style>
<script type='text/javascript'>//<![CDATA[
$(function () {

    // Prepare demo data
    var data = [
        {
            "hc-key": "id-3700",
            "value": 0
        },
        {
            <?php
            include "connect.php";
            $sql = "SELECT * FROM `t_produk` WHERE `provinsi` = 'Aceh'";
            $query = mysql_query($sql);
             ?>
            "hc-key": "id-ac",
            "value": <?php echo mysql_num_rows($query); ?>
        },
        {
            <?php
            $sql = "SELECT * FROM `t_produk` WHERE `provinsi` = 'Kalimantan Timur'";
            $query = mysql_query($sql);
             ?>
            "hc-key": "id-ki",
            "value": <?php echo mysql_num_rows($query); ?>
        },
        {
            <?php
            $sql = "SELECT * FROM `t_produk` WHERE `provinsi` = 'Jawa Timur'";
            $query = mysql_query($sql);
            ?>
            "hc-key": "id-jt",
            "value": <?php echo mysql_num_rows($query); ?>
        },
        {
            <?php
            $sql = "SELECT * FROM `t_produk` WHERE `provinsi` = 'Bengkulu'";
            $query = mysql_query($sql);
            ?>
            "hc-key": "id-be",
            "value": <?php echo mysql_num_rows($query); ?>
        },
        {   <?php
            $sql = "SELECT * FROM `t_produk` WHERE `provinsi` = 'Banten'";
            $query = mysql_query($sql);
            ?>
            "hc-key": "id-bt",
            "value": <?php echo mysql_num_rows($query); ?>
        },
        {   <?php
            $sql = "SELECT * FROM `t_produk` WHERE `provinsi` = 'Kalimantan Barat'";
            $query = mysql_query($sql);
            ?>
            "hc-key": "id-kb",
            "value": <?php echo mysql_num_rows($query); ?>
        },
        {
            <?php
            $sql = "SELECT * FROM `t_produk` WHERE `provinsi` = 'Bangka Belitung'";
            $query = mysql_query($sql);
            ?>
            "hc-key": "id-bb",
            "value": <?php echo mysql_num_rows($query); ?>
        },
        {
            <?php
            $sql = "SELECT * FROM `t_produk` WHERE `provinsi` = 'Bali'";
            $query = mysql_query($sql);
            ?>
            "hc-key": "id-ba",
            "value": <?php echo mysql_num_rows($query); ?>
        },
        {
            <?php
            $sql = "SELECT * FROM `t_produk` WHERE `provinsi` = 'Jawa Timur'";
            $query = mysql_query($sql);
            ?>
            "hc-key": "id-ji",
            "value": <?php echo mysql_num_rows($query); ?>
        },
        {
            <?php
            $sql = "SELECT * FROM `t_produk` WHERE `provinsi` = 'Kalimantan Selatan'";
            $query = mysql_query($sql);
            ?>
            "hc-key": "id-ks",
            "value": <?php echo mysql_num_rows($query); ?>
        },
        {
            <?php
            $sql = "SELECT * FROM `t_produk` WHERE `provinsi` = 'Nusa Tenggara Timur'";
            $query = mysql_query($sql);
            ?>
            "hc-key": "id-nt",
            "value": <?php echo mysql_num_rows($query); ?>
        },
        {
            <?php
            $sql = "SELECT * FROM `t_produk` WHERE `provinsi` = 'Sulawesi Selatan'";
            $query = mysql_query($sql);
            ?>
            "hc-key": "id-se",
            "value": <?php echo mysql_num_rows($query); ?>
        },
        {
            <?php
            $sql = "SELECT * FROM `t_produk` WHERE `provinsi` = 'Kepulauan Riau'";
            $query = mysql_query($sql);
            ?>
            "hc-key": "id-kr",
            "value": <?php echo mysql_num_rows($query); ?>
        },
        {
            <?php
            $sql = "SELECT * FROM `t_produk` WHERE `provinsi` = 'Irian Jaya Barat'";
            $query = mysql_query($sql);
            ?>
            "hc-key": "id-ib",
            "value": <?php echo mysql_num_rows($query); ?>
        },
        {
            <?php
            $sql = "SELECT * FROM `t_produk` WHERE `provinsi` = 'Sumatera Utara'";
            $query = mysql_query($sql);
            ?>
            "hc-key": "id-su",
            "value": <?php echo mysql_num_rows($query); ?>
        },
        {
            <?php
            $sql = "SELECT * FROM `t_produk` WHERE `provinsi` = 'Riau'";
            $query = mysql_query($sql);
            ?>
            "hc-key": "id-ri",
            "value": <?php echo mysql_num_rows($query); ?>
        },
        {
            <?php
            $sql = "SELECT * FROM `t_produk` WHERE `provinsi` = 'Sulawesi Utara'";
            $query = mysql_query($sql);
            ?>
            "hc-key": "id-sw",
            "value": <?php echo mysql_num_rows($query); ?>
        },
        {
            <?php
            $sql = "SELECT * FROM `t_produk` WHERE `provinsi` = 'Maluku Utara'";
            $query = mysql_query($sql);
            ?>
            "hc-key": "id-la",
            "value": <?php echo mysql_num_rows($query); ?>
        },
        {
            <?php
            $sql = "SELECT * FROM `t_produk` WHERE `provinsi` = 'Sumatera Barat'";
            $query = mysql_query($sql);
            ?>
            "hc-key": "id-sb",
            "value": <?php echo mysql_num_rows($query); ?>
        },
        {
            <?php
            $sql = "SELECT * FROM `t_produk` WHERE `provinsi` = 'Maluku'";
            $query = mysql_query($sql);
            ?>
            "hc-key": "id-ma",
            "value": <?php echo mysql_num_rows($query); ?>
        },
        {
            <?php
            $sql = "SELECT * FROM `t_produk` WHERE `provinsi` = 'Nusa Tenggara Barat'";
            $query = mysql_query($sql);
            ?>
            "hc-key": "id-nb",
            "value": <?php echo mysql_num_rows($query); ?>
        },
        {
            <?php
            $sql = "SELECT * FROM `t_produk` WHERE `provinsi` = 'Sulawesi Tenggara'";
            $query = mysql_query($sql);
            ?>
            "hc-key": "id-sg",
            "value": <?php echo mysql_num_rows($query); ?>
        },
        {
            <?php
            $sql = "SELECT * FROM `t_produk` WHERE `provinsi` = 'Sulawesi Tengah'";
            $query = mysql_query($sql);
            ?>
            "hc-key": "id-st",
            "value": <?php echo mysql_num_rows($query); ?>
        },
        {
            <?php
            $sql = "SELECT * FROM `t_produk` WHERE `provinsi` = 'Papua'";
            $query = mysql_query($sql);
            ?>
            "hc-key": "id-pa",
            "value": <?php echo mysql_num_rows($query); ?>
        },
        {
            <?php
            $sql = "SELECT * FROM `t_produk` WHERE `provinsi` = 'Jawa Barat'";
            $query = mysql_query($sql);
             ?>
            "hc-key": "id-jr",
            "value": <?php echo mysql_num_rows($query); ?>
        },
        {
            <?php
            $sql = "SELECT * FROM `t_produk` WHERE `provinsi` = 'Lampung'";
            $query = mysql_query($sql);
            ?>
            "hc-key": "id-1024",
            "value": <?php echo mysql_num_rows($query); ?>
        },
        {
            <?php
            $sql = "SELECT * FROM `t_produk` WHERE `provinsi` = 'Jakarta'";
            $query = mysql_query($sql);
            ?>
            "hc-key": "id-jk",
            "value": <?php echo mysql_num_rows($query); ?>
        },
        {
            <?php
            $sql = "SELECT * FROM `t_produk` WHERE `provinsi` = 'Gorontalo'";
            $query = mysql_query($sql);
            ?>
            "hc-key": "id-go",
            "value": <?php echo mysql_num_rows($query); ?>
        },
        {
            <?php
            $sql = "SELECT * FROM `t_produk` WHERE `provinsi` = 'Yogyakarta'";
            $query = mysql_query($sql);
            ?>
            "hc-key": "id-yo",
            "value": <?php echo mysql_num_rows($query); ?>
        },
        {
            <?php
            $sql = "SELECT * FROM `t_produk` WHERE `provinsi` = 'Kalimantan Tengah'";
            $query = mysql_query($sql);
            ?>
            "hc-key": "id-kt",
            "value": <?php echo mysql_num_rows($query); ?>
        },
        {
            <?php
            $sql = "SELECT * FROM `t_produk` WHERE `provinsi` = 'Sumatera Selatan'";
            $query = mysql_query($sql);
            ?>
            "hc-key": "id-sl",
            "value": <?php echo mysql_num_rows($query); ?>
        },
        {
            <?php
            $sql = "SELECT * FROM `t_produk` WHERE `provinsi` = 'Sulawesi Barat'";
            $query = mysql_query($sql);
            ?>
            "hc-key": "id-sr",
            "value": <?php echo mysql_num_rows($query); ?>
        },
        {
            <?php
            $sql = "SELECT * FROM `t_produk` WHERE `provinsi` = 'Jambi'";
            $query = mysql_query($sql);
            ?>
            "hc-key": "id-ja",
            "value": <?php echo mysql_num_rows($query); ?>
        }
    ];
    //Each data
    
    // Initiate the chart
    $('#container').highcharts('Map', {

        title : {
            text : 'Peta Persebaran Perusahaan Karet di Indonesia'
        },

        subtitle : {
            text : 'Source map: <a href="../js/id-all.js">Indonesia</a>'
        },

        mapNavigation: {
            enabled: true,
            buttonOptions: {
                verticalAlign: 'bottom'
            }
        },

        colorAxis: {
            min: 0
        },
        
        series : [{
            data : data,
            mapData: Highcharts.maps['countries/id/id-all'],
            joinBy: 'hc-key',
            name: 'Jumlah Perusahaan',
            allowPointSelect: true,
            cursor: 'pointer',
            point: {
            events: {
            click: function() {
                $("#lebel").html(this.name);
                $("#lier").html("Please Wait...");
                $.ajax({
                    type: "POST",
                    url: "load",
                    data: {prop: this.name},
                    success: function(hasil){
                        $("#lier").html(hasil);
                    }
                }); 
             }
             }
             },
             
            states: {
                    select: {
                        color: '#BADA55',
                        borderColor: '#BADA55',
                        dashStyle: 'solid',   
            
                    }
                },  
            dataLabels: {
                enabled: true,
                format: '{point.name}',
                cursor: 'pointer', 
            }     
        }],
    });
});

//]]> 
</script>
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
<?php
echo'
<div id="page-wrapper">
<div class="row">
<div class="col-lg-12">  
<img style="float: center;" src="../pikcer/kemenris.jpg" width="400" height="100" /> 
<img style="float: right;" src="../pikcer/dj.jpg" width="600" height="100" /> 
</div>
                <!-- /.col-lg-12 -->
<div class="col-lg-6">
<div class="panel panel-default">
<div class="panel-heading">
</div>
<div class="panel-body">
<script src="../js/highmaps.js"></script>
<script src="../js/highcharts.js"></script>
<script src="../js/exporting.js"></script>
<script src="../js/id-all.js"></script>
<div id="container"></div>
</div>
</div>
</div>
<div class="col-lg-6">
<div class="panel panel-default">
<div class="panel-heading">
</div>
<div class="panel-body">';
$flow = mysql_query("select DISTINCT(kelompokindustri)from t_produk");
echo'
<ul class="nav nav-tabs">
<li class="active"><a href="#home" data-toggle="tab">Propinsi</a></li>';
while($f=mysql_fetch_array($flow)){
$fi = $f['kelompokindustri'];
echo 
'<li><a href="#'.$fi.'" data-toggle="tab">'.$fi.'</a></li>';    
}
echo'</ul>
<div class="tab-content">
<div class="tab-pane fade in active" id="home">
<h4>
<div id="lebel">Klik Salah satu Propinsi di Peta untuk melihat data perusahaan per Propinsi</div></h4>
<div id="lier"></div>
</div>';
$flow2 = mysql_query("select DISTINCT(kelompokindustri) from t_produk");
    while($f2=mysql_fetch_array($flow2)){
    $fi2 = $f2['kelompokindustri'];
    echo'<div class="tab-pane" id="'.$fi2.'">';
    echo'<h4>Kelompok Industri '.$fi2.'<button type="button" id="btn'.$fi2.'" class="btn" style="float: right;">Kembali</button></h4><br />';
    $a=1;
    $q = mysql_query("select DISTINCT(namaproduksi)from t_produk where kelompokindustri = '$fi2' order by namaproduksi asc");
    while($d = mysql_fetch_array($q)){
        $fap = $d['namaproduksi'];
        $quero = mysql_query("Select * from t_hulu where produk = '$fap'");
        $blur = mysql_fetch_array($quero);
        echo '<div class="cox'.$fi2.'">
                  <a href="javascript:void();" class="fap'.$fi2.$a.'">
                  <font color="black">'.$fap.'</font>
                  </a>
                  </div>';
            echo "<div id='faphasil$fi2$a' class='fapall$a'>";
            $query = mysql_query("Select * from t_produk where namaproduksi = '$fap' and kelompokindustri = '$fi2'");
            echo '<div class="panel panel-default">
                  <div class="panel-heading">
                  <center class="text-success">Daftar Nama Perusahaan '.$fap.'</center>
                  </div>
                  <div class="panel-body">';
            $quer = mysql_query("Select * from t_gambar where komoditas = '$fap'");
            $blu = mysql_fetch_array($quer);
            $image = $blu['gambar'];
            if ($image == ''){
            echo'<center><img src="../pikcer/noimage.jpg" width="265" height="189" /></center>';    
            }else{
            echo'<center><img src="../pikcer/'.$image.'" width="265" height="189" /></center>';        
            }
                   echo '</div>
                  <div class="panel-body">';
            while($data = mysql_fetch_array($query)){
                  echo '<label class="fa fa-angle-double-right"></label>
                  <a href="see?id='.$data['id'].'">'.$data['namaperusahaan'].'</a><br />';
            }
            echo '
            </div>
            </div>
            <div class="panel panel-default">
            <div class="panel-heading">
            </div>
            <div class="panel-body">
            Jumlah Perusahaan : ';
            $sekiel = mysql_fetch_array(mysql_query("SELECT count(*) as num FROM `t_produk` Where `namaproduksi` =  '$fap'")); 
            echo $sekiel['num'].'<br />Jumlah Total Produksi saat ini : ';
            $query11=mysql_query("select * from t_produk where namaproduksi = '$fap'");
            $row11=mysql_fetch_array($query11);
            $qry_jumlah_nilai = mysql_query("SELECT sum(jumlahproduksi) FROM `t_produk` WHERE `namaproduksi` = '$fap'");
            $data_nilai = mysql_fetch_array($qry_jumlah_nilai);
            $jumlah_nilai_total=$data_nilai[0];
            if ($jumlah_nilai_total == "" ){
            echo '-';
            }else{
             echo number_format($jumlah_nilai_total).'&nbsp'.$row11['satuanprod'].' / '.$row11['waktuprod'];
            }
            echo '
            </div>
            </div>
            <div class="panel panel-default">
            <div class="panel-heading">
            </div>
            <div class="panel-body">
            <label class="colom">'.$row11['bahan1'].'</label><img src="../pikcer/arrow.jpg" width="50" height="20" />
            <label class="colom">'.$row11['namaproduksi'].'</label><img src="../pikcer/arrow.jpg" width="50" height="20" />
            <label class="colom">'.$row11['pasar'].'</label>';
            echo '
            </div>
            </div>';
            echo '<div class="panel panel-default">
                  <div class="panel-heading">
                  <center class="text-success">Tabel Pertumbuhan Konsumsi '.$fap.'
                  ('.$blur['satuan'].' / '.$blur['waktu'].')</center></div>
                  <div class="panel-body">
<div class="table-responsive">
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
<thead>';
echo'<tr>
<th style="width:10%; text-align: center;">Tahun</th>
<th style="width:30%; text-align: center;">Konsumsi</th>
<th style="width:30%; text-align: center;">Produksi</th>
<th style="width:30%; text-align: center;">Selisih</th>
</tr>
</thead>
<tbody>';
$query = mysql_query("Select * from t_hulu where produk = '$fap'");
while($data = mysql_fetch_array($query)){
$kon=$data['konsumsi'];
$pro=$data['produksi'];
if ($kon > $pro){
    $fier=$kon-$pro;
}else{
    $fier=$pro-$kon;}         
echo'
<tr>
	<td style="text-align: center;">'.$data['tahun'].'</td>
	<td>'.number_format($data['produksi']).'</td>
    <td>'.number_format($data['konsumsi']).'</td>
	<td>'.number_format($fier).'</td>
</tr>';
}
echo '
</tbody>
</table>
</div>
</div>
</div>
<div class="panel-heading">
</div>                  
<div class="panel-body">
<div id="container'.$fi2.$a.'">
</div>
</div>
<div class="panel-heading">
</div>                  
<div class="panel-body">
<div id="container'.$fi2.$a.'a">
</div>
</div>
</div>';
?>
<script>
$(document).ready(function(){
    $(".fapall<?php echo $fi2; ?>").hide();
    $("#btn<?php echo $fi2; ?>").hide();
    $("#faphasil<?php echo $fi2.$a; ?>").hide();
    $(".fap<?php echo $fi2.$a; ?>").click(function(){
        $(".fapall<?php echo $fi2; ?>").hide();
        $("#faphasil<?php echo $fi2.$a; ?>").show(600);
        $(".cox<?php echo $fi2; ?>").hide();
        $("#btn<?php echo $fi2; ?>").show();
    });
    $("#btn<?php echo $fi2; ?>").click(function(){
        $(".cox<?php echo $fi2; ?>").show();
        $("#faphasil<?php echo $fi2.$a; ?>").hide(600);
        $("#btn<?php echo $fi2; ?>").hide();
    });
    $('#container<?php echo $fi2.$a; ?>').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Perkembangan Produksi / Konsumsi <?php echo $fap; ?>'
        },
        subtitle: {
            text: 'dalam Negeri'
        },
        xAxis: {
            categories: [
            <?php
            $sql=mysql_query("select * from t_hulu where produk = '$fap'");
            while($row=mysql_fetch_array($sql)){
            echo "'".$row['tahun']."',";
            }  
            ?>
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Produksi <?php echo $blur['satuan'].' / '.$blur['waktu'];?>'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0;margin:0;">{series.name}</td><td>&nbsp:&nbsp</td>' +
                '<td style="padding:0;margin:0;"><b>{point.y:1f} <?php echo $blur['satuan'].' / '.$blur['waktu'];?></b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Produksi',
            data: 
            [
            <?php
            $quiry=mysql_query("select * from t_hulu where produk = '$fap'");
            while($row=mysql_fetch_array($quiry)){
            echo $row['produksi'].",";
            }
            ?>
            ]

            }, {
            name: 'Konsumsi',
            data: 
            [
            <?php
            $quiry=mysql_query("select * from t_hulu where produk = '$fap'");
            while($row=mysql_fetch_array($quiry)){
            echo $row['konsumsi'].",";
            }
            ?>
            ]

        },]
    });
     $('#container<?php echo $fi2.$a; ?>a').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Perkembangan Ekspor / Impor  <?php echo $fap; ?>'
        },
        xAxis: {
            categories: [
            <?php
            $sql=mysql_query("select * from t_ie where produk = '$fap'");
            while($row=mysql_fetch_array($sql)){
            echo "'".$row['tahun']."',";
            }  
            ?>
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Ekspor - Impor <?php echo $blur['satuan'].' / '.$blur['waktu'];?>'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0;margin:0;">{series.name}</td><td>&nbsp:&nbsp</td>' +
                '<td style="padding:0;margin:0;"><b>{point.y:1f} <?php echo $blur['satuan'].' / '.$blur['waktu'];?></b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Ekspor',
            data: 
            [
            <?php
            $quiry=mysql_query("select * from t_ie where produk = '$fap'");
            while($row=mysql_fetch_array($quiry)){
            echo $row['ekspor'].",";
            }
            ?>
            ]

            }, {
            name: 'Impor',
            data: 
            [
            <?php
            $quiry=mysql_query("select * from t_ie where produk = '$fap'");
            while($row=mysql_fetch_array($quiry)){
            echo $row['impor'].",";
            }
            ?>
            ]

        },]
    });    
});
</script>
<?php
$a++;
}
echo '</div>';
}
echo'
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>
<script src="../dist/js/sb-admin-2.js"></script>
<br /><font size="2"><center><a href="#">copyright&nbsp;&copy;&nbsp;PT. Inasa Sakha Kirana</a></center></font><br />
</body>
</html>';