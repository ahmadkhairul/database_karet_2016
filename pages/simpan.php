<?php
session_start();
error_reporting(0);
$session = $_SESSION['username'];
if($session != ""){
include "connect.php";
$naper				= $_POST['naper'];
$prov			    = $_POST['prov'];
$alamat		       	= $_POST['alamat'];
$nokontak           = $_POST['nokontak'];
$keli               = $_POST['keli'];
$napro  			= $_POST['napro'];
$klbi               = $_POST['klbi'];
$sni                = $_POST['sni'];
$hs 			    = $_POST['hs'];
$kapro		        = $_POST['kapro'];
$kpro		        = $_POST['kappro'];
$spro	      		= $_POST['satpro'];
$wpro		        = $_POST['wktpro'];
$bhn1               = $_POST['bhn1'];
$bhn2               = $_POST['bhn2'];
$bhn3               = $_POST['bhn3'];
$email		  	    = $_POST['email'];
$website			= $_POST['web'];
$pasar		  	    = $_POST['pasar'];
$kebpasar			= $_POST['kebpasar'];
$ket		      	= $_POST['ket'];
if (($napro == "") or ($naper == "")){
echo "<script>alert('Nama Perusahaan & Nama Produksi Tidak Boleh Kosong');javascript:history.go(-1);</script>";
}else{
$query = "insert into t_produk values (NULL ,'$naper','$prov',
'$alamat','$nokontak','$klbi','$sni','$napro','$hs','$keli','$kapro',
'$kpro','$spro','$bhn1','$bhn2','$bhn3','$wpro','$email',
'$website','$pasar','$kebpasar','$ket')";
$hasil = mysql_query($query);
if ($hasil) echo "<script>alert('Data Telah Masuk');javascript:history.go(-1);</script>";
else echo "<script>alert('Data Gagal Masuk');javascript:history.go(-1);</script>";
}}else{
?> 
<script> alert('Anda Harus Login Terlebih Dahulu');setTimeout("location.href='login'", 1);</script> 
<?php }?>