<?php
include "connect.php";
$jk	= $_POST['jk'];
$sql = mysql_query("select * from t_gambar where komoditas='$jk'");
$row = mysql_num_rows($sql);
if ($row != 0){
if ((($_FILES["file"]["type"] == "image/gif") 
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/png"))
&& ($_FILES["file"]["size"] < 3000000))
    {
      //$jk	= $_POST['jk'];
      $raw = mysql_fetch_array($sql);
      $id = $raw['id'];
      if (file_exists("../pikcer/".$raw['gambar'])) {
      unlink("../pikcer/".$raw['gambar']);}
       $temp = explode(".",$_FILES["file"]["name"]);
       $today = date("His");
       $newfilename =$today . rand(1,99999) . '.' .end($temp);
       $upload_dir = "../pikcer"; 
              if(move_uploaded_file($_FILES['file']['tmp_name'], "$upload_dir/$newfilename")){
              $query = "update t_gambar set komoditas = '$jk', gambar = '$newfilename' where id = '$id'";
              $hasil = mysql_query($query);
                    if($hasil){
                        ?>
                        <script>alert('Data Berhasil di Ubah');setTimeout("location.href='inputg'", 1);</script>
                        <?php
                    }else{
                        ?>
                        <script>alert('Data Gagal di Ubah');setTimeout("location.href='inputg'", 1);</script>
                        <?php
                    }
            } 
    }else{
            echo "<script>alert('File bukan gambar / ukuran lebih dari 3 MB');javascript:history.go(-1);</script>";
    }
}else{
if ((($_FILES["file"]["type"] == "image/gif") 
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/png"))
&& ($_FILES["file"]["size"] < 3000000))
        {
            //$jk	= $_POST['jk'];
            $temp = explode(".",$_FILES["file"]["name"]);
            $today = date("His");
            $newfilename = $jk . '.' .end($temp);
            $upload_dir = "../pikcer"; 
             if(move_uploaded_file($_FILES['file']['tmp_name'], "$upload_dir/$newfilename")){
             $query = "insert into t_gambar values (NULL,'$jk','$newfilename')";
             $hasil = mysql_query($query);
                    if($hasil){
                        echo "<script>alert('Data telah masuk');javascript:history.go(-1);</script>";
                    }else{
                        echo "<script>alert('Data gagal masuk');javascript:history.go(-1);</script>";
                    }
            } 
        }else{
            echo "<script>alert('File bukan gambar / ukuran lebih dari 3 MB');javascript:history.go(-1);</script>";
        }
        
}
?>
</body>
