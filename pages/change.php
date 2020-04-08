<?PHP
include "connect.php";
$naper		= $_POST['naper'];
$prov		= $_POST['prov'];
$napro		= $_POST['napro'];
$filename = "dataKaret" . date('Ymd') . ".xls"; 

$result = mysql_query("SELECT * FROM `t_produk` WHERE `namaperusahaan` LIKE '%$naper%' AND `provinsi` LIKE '%$prov%' AND `namaproduksi` LIKE '%$napro%'") or die('Query failed!');
// generate kolom
$header = "ID Perusahaan \t Nama Perusahaan \t Propinsi \t Alamat \t Nomor Kontak \t Kode KLBI \t Kode SNI \t Jenis Komoditas \t Kode HS \t Kelompok Industri \t Komoditas \t Jumlah Produksi \t Satuan Produksi \t Bahan1 \t Bahan2 \t Bahan3 \t Waktu Produksi \t E-mail \t Website \t Konsumsi \t Kebutuhan Konsumsi \t Keterangan \t \n";
 
// generate baris
while($row = mysql_fetch_array($result)) {
    $content .= "";
    for($x=0; $x<22; $x++) {
        $content .= $row[$x]." \t ";    
    }
    $content .= " \n ";
}
$content .= "";
$output = $header.$content;
 
header('Content-type: application/ms-excel');
header('Content-Disposition: attachment; filename='.$filename);
echo $output;
?>
