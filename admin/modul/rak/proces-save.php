<?php
require_once('inc-db.php');
error_reporting(0);
$var_rak=$_POST['frm_rak'];
$var_klasifikasi=$_POST['frm_klasifikasi'];
if(empty($var_rak)){
    $error=1;
}
if(empty($var_klasifikasi)){
    $error=2;
}
/*check rak tidak boleh ada yang sama */
$sql_check_rak = "
      SELECT rak_lokasi FROM rak WHERE rak_lokasi = '{$var_rak}'
   ";
    
   $result_check_rak = mysql_query($sql_check_rak);
   $total_check_rak = mysql_num_rows($result_check_rak);

   if($total_check_rak != 0){
      $error = 3;
   }
if($error != 0){
      switch ($error) {
         case 1:
         $error_msg="rak tidak boleh kosong";
         break;
         case 2:
         $error_msg="klasifikasi tidak boleh kosong";
         break;
         case 3:
         $error_msg="rak tidak boleh ada yang sama";
         break;
         
         }
      echo "<h3>$error_msg</h3>";
      echo "<a href='?page=rak.frm-insert'>kembali</a>";
      exit;
      }
      
      $sql="insert into rak values ('".$var_rak."','".$var_klasifikasi."')";
      //echo $sql; exit;
      $result=mysql_query($sql);
      require_once('display.php');
?>