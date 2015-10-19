<?php
require_once('inc-db.php');
$var_nama=mysql_real_escape_string(strip_tags($_POST['frm_nama']));
$var_email=mysql_real_escape_string(strip_tags($_POST['frm_email']));
$var_pesan=mysql_real_escape_string(strip_tags($_POST['frm_pesan']));
$var_tanggal=date("Y-m-d, H:i");

if(empty($var_nama)){
    $error=1;
}
if(empty($var_email)){
    $error=2;
}
if(empty($var_pesan)){
    $error=3;
}
if(preg_match("/[a-z0-9\._]+?@[a-z-\.]+\.[a-z]{2,6}$/",$var_email)==false){
    $error=4;   
}
 if($error != 0){
      switch ($error) {
         case 1:
            $error_msg = "nama tidak boleh kosong ";
            break;
         case 2:
            $error_msg = "email tidak boleh kosong";
            break;
         case 3:
            $error_msg = "pesan tidak boleh kosong ";
            break;
         case 4:
            $error_msg ="Email harus valid";
            break;
    
      }
      echo "<h3>$error_msg</h3>";
      echo "<a href='index.php?page=testimoni'>kembali</a>";
      exit;
   }

$sql_save="insert into bukutamu values ('','$var_nama','$var_email','$var_pesan','$var_tanggal')";
echo $sql_save; exit;
$result=mysql_query($sql_save);
if($result){
    header('location: index.php?page=testimoni');
}

?>