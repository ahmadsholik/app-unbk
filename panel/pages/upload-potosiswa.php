
<?php
include "../../config/server.php";
$sql2 = mysql_query("select * from cbt_siswa WHERE XNomerUjian='$_COOKIE[beeuser]'");
$sis = mysql_fetch_array($sql2);
$userid = $sis['XNamaSiswa'];
//$userid=$_COOKIE['beeuser'];
$users=$_REQUEST[photo];
$nfoto="../../fotosiswa/".$userid.".jpg";
$nfhoto=$userid.".jpg";

$sql = mysql_query("update cbt_siswa set XFoto = '$nfhoto' WHERE XNomerUjian='$_COOKIE[beeuser]'");
$namafile = basename($_FILES['uploadfile']['name']);
$file = $uploaddir . basename($_FILES['uploadfile']['name']); 
 if (move_uploaded_file($_FILES['uploadfile']['tmp_name'], $file)) { 
 
	rename ($file, $nfoto);
  echo "success"; 
} else {
	echo "error";
}

?>