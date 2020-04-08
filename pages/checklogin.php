<?php   
    include "connect.php";
    $u = $_POST['u'];
	$p = $_POST['p'];
	$query = mysql_query("select * from member where username='$u'");
	$result = mysql_fetch_array($query);
	$row = mysql_num_rows($query);
	if (($u == "") && ($p == "")){
		echo "<script>alert('Maaf username atau password belum terisi');javascript:history.go(-1);</script>";
	}
	if ($row != 0){
		if ($p != $result['password']){
			echo "<script>alert('Maaf username atau password salah');javascript:history.go(-1);</script>";
		}else{
			echo "<script>alert('Login Success');</script>";
			session_start();
			$_SESSION['username']=$result['username'];
            ?> <script> setTimeout("location.href='input'", 1);</script> <?php
		}
	}else{
		echo "<script>alert('Maaf username belum terdaftar');javascript:history.go(-1);</script>";
	}
    
?>