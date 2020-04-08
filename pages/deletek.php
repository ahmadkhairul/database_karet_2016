<?php
session_start();
error_reporting(0);
$session = $_SESSION['username'];
if($session != ""){
include "connect.php";
$id     = $_GET['id'];   
$sql    = mysql_query("Delete FROM t_hulu where id='$id'");
if($sql){
?>
<script>alert('Data Berhasil di Hapus');setTimeout("location.href='inputk'", 1);</script>
<?php
}else{
?>
<script>alert('Data Gagal di Hapus');setTimeout("location.href='inputk'", 1);</script>
<?php
}
}else{ 
?> 
<script>alert('Anda Harus Login Terlebih Dahulu');setTimeout("location.href='login'", 1);</script> 
<?php }?>