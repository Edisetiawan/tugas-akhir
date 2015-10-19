<?php
$var_bukdet_kode=$_POST['frm_bukdet_kode'];
//$var_kode=$_POST['frm_kode'];
$var_rak=$_POST['frm_rak'];

$sql="update buku_detail set rak_lokasi='".$var_rak."' where bukdet_kode='".$var_bukdet_kode."'";
//echo $sql; exit;
$result=mysql_query($sql);
include_once('display.php');
//echo $var_buku_id;


?>