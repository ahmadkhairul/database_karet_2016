<?php
include "connect.php";
$poe =$_POST['prop'];
$sql = "SELECT * FROM `t_produk` WHERE `provinsi` = '$poe'";
$query = mysql_query($sql);
while($data = mysql_fetch_array($query)){
echo '<label class="fa fa-angle-double-right"></label> <a href="see?id='.$data['id'].'">'.$data['namaperusahaan'].'</a><br />';
}
?>            