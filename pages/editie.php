<?php
session_start();
error_reporting(0);
$session = $_SESSION['username'];
if($session != ""){
include "connect.php";
$id		  = $_POST['id'];
$kdhs	  = $_POST['kdhs'];
$ekspor   = $_POST['ekspor'];
$impor    = $_POST['impor'];
$sp       = $_POST['sp'];
if (($ekspor == "") && ($impor == "") && ($sp == "")){
echo "<script>alert('Tidak Boleh ada Yang Kosong');javascript:history.go(-1);</script>";
}else{
$query = "UPDATE t_ie SET kodehs = '$kdhs', ekspor = '$ekspor', impor = '$impor', satuan = '$sp' WHERE id = '$id'";
$hasil = mysql_query($query);
if($hasil){
?>
<script>alert('Data Berhasil di Ubah');setTimeout("location.href='inputie'", 1);</script>
<?php
}else{
?>
<script>alert('Data Gagal di Ubah Silahkan Cek Kembali');setTimeout("location.href='formeditie?id=<?php echo $id; ?>'", 1);</script>
<?php
}
}
}else{ 
?> 
<script> alert('Anda Harus Login Terlebih Dahulu');setTimeout("location.href='login'", 1);</script> 
<?php }?>