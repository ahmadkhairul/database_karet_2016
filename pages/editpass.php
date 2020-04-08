<?php
include "connect.php";
$username   = $_POST['u'];
$pass       = $_POST['p'];
$query      = "UPDATE member SET username = '$username',password = '$pass' WHERE id = '1'";
$hasil      = mysql_query($query);
if($hasil){
?>
<script>alert('admin berhasil diubah silahkan login ulang');setTimeout("location.href='logout'", 1);</script>
<?php
}else{
?>
<script>alert('admin gagal diubah');setTimeout("location.href='pass'", 1);</script>
<?php
}
?>