<?php
session_start();
error_reporting(0);
$session = $_SESSION['username'];
if($session != ""){
include "connect.php";
$id			= $_POST['id'];
$kdhs		= $_POST['kdhs'];
$konsumsi   = $_POST['konsumsi'];
$produk     = $_POST['produksi'];
$sp         = $_POST['sp'];
if (($konsumsi == "") && ($produk == "") && ($sp == "")){
echo "<script>alert('Tidak Boleh ada Yang Kosong');javascript:history.go(-1);</script>";
}else{
$query = "UPDATE t_hulu SET kodehs = '$kdhs', konsumsi = '$konsumsi', produksi = '$produk', satuan = '$sp' WHERE id = '$id'";
$hasil = mysql_query($query);
if($hasil){
?>
<script>alert('Data Berhasil di Ubah');setTimeout("location.href='inputk'", 1);</script>
<?php
}else{
?>
<script>alert('Data Gagal di Ubah Silahkan Cek Kembali');setTimeout("location.href='formeditk?id=<?php echo $id; ?>'", 1);</script>
<?php
}
}
}else{ 
?> 
<script> alert('Anda Harus Login Terlebih Dahulu');setTimeout("location.href='login'", 1);</script> 
<?php }?>