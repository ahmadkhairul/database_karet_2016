<?php
session_start();
error_reporting(0);
$session = $_SESSION['username'];
if($session != ""){
include "connect.php";
$id     = $_GET['id']; 
$sql2 = mysql_query("select * from t_gambar where id='$id'");
$ar = mysql_fetch_array($sql2);
if (file_exists("../pikcer/".$ar['gambar'])) {
unlink("../pikcer/".$ar['gambar']); }  
$sql    = mysql_query("Delete FROM t_gambar where id='$id'");
if($sql){
?>
<script>alert('Data Berhasil di Hapus');setTimeout("location.href='inputg'", 1);</script>
<?php
}else{
?>
<script>alert('Data Gagal di Hapus');setTimeout("location.href='inputg'", 1);</script>
<?php
}
}else{ 
?> 
<script>alert('Anda Harus Login Terlebih Dahulu');setTimeout("location.href='login'", 1);</script> 
<?php }?>