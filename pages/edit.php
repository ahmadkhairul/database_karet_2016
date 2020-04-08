<?php
session_start();
error_reporting(0);
$session = $_SESSION['username'];
if($session != ""){
include "connect.php";
$id                 = $_POST['id'];
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
if (($namap == "") && ($namapr == "") && ($kodepr == "") && ($alamat == "") && ($alamatl == "")){
echo "<script>alert('Nama Perusahaan Tidak Boleh Kosong');javascript:history.go(-1);</script>";
}else{
$query = "UPDATE t_produk SET namaperusahaan = '$naper', provinsi = '$prov', alamat = '$alamat', 
          nokontak = '$nokontak', kodeklbi = '$klbi', kodesni = '$sni', namaproduksi = '$napro',
          kodehs = '$hs', kelompokindustri = '$keli', kelompokkomoditas = '$kapro', 
          jumlahproduksi = '$kpro', satuanprod = '$spro', bahan1 = '$bhn1', bahan2 = '$bhn2', 
          bahan3 = '$bhn3', waktuprod = '$wpro', email = '$email', website = '$website', 
          pasar = '$pasar', kebutuhanpasar = '$kebpasar', keterangan = '$ket' WHERE id = '$id'";
$hasil = mysql_query($query);
if($hasil){
?>
<script>alert('Data Berhasil di Ubah');setTimeout("location.href='input'", 1);</script>
<?php
}else{
?>
<script>alert('Data Gagal di Ubah Silahkan Cek Kembali');setTimeout("location.href='formedit?id=<?php echo $id;?>'", 1);</script>
<?php
}
}
}else{ 
?> 
<script> alert('Anda Harus Login Terlebih Dahulu');setTimeout("location.href='login'", 1);</script> 
<?php }?>