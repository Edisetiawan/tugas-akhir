<?php

$var_buku_id=$_POST['frm_buku_id'];
$var_bukdet_kode=$_POST['frm_kode'];
$var_rak=$_POST['frm_rak'];

$sql_save="insert into buku_detail values ('$var_bukdet_kode','$var_buku_id','1','$var_rak','')";
//echo $sql_save; exit;
$result=mysql_query($sql_save);

include_once('display.php');

?>