<?php
session_start();
error_reporting(0);
$session = $_SESSION['username'];
if($session != ""){
include "connect.php";
$jk			= $_POST['jk'];
$tahun		= $_POST['tahun'];
$kdhs		= $_POST['kdhs'];
$impor      = $_POST['impor'];
$ekspor     = $_POST['ekspor'];
$sp         = $_POST['sp'];
$thn	    = $_POST['thn'];
if (($kdhs == "") && ($konsumsi == "") && ($produk == "") && ($sp == "")){
echo "<script>alert('Data Tidak Boleh ada Yang Kosong');javascript:history.go(-1);</script>";
}else{
$quero = mysql_query("select * from t_ie where produk = '$jk' and tahun = '$tahun'");
$row = mysql_num_rows($quero);
if ($row != 0){
echo "<script>alert('Jenis Komoditas $jk dengan Tahun $tahun Sudah Ada');javascript:history.go(-1);</script>";
}else{
$query = "insert into t_ie values (NULL,'$kdhs','$jk','$tahun','$impor','$ekspor','$thn','$sp')";
$hasil = mysql_query($query);
if ($hasil) echo "<script>alert('Data Telah Masuk');javascript:history.go(-1);</script>";
else echo "<script>alert('Data Gagal Masuk');javascript:history.go(-1);</script>";
}
}
}else{
?> 
<script> alert('Anda Harus Login Terlebih Dahulu');setTimeout("location.href='login'", 1);</script> 
<?php }?>