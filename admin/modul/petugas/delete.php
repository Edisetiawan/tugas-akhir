<?php
$id=$_GET['id'];
if($id==1){
    echo "<meta http-equiv='refresh' content='0; url=?page=petugas.display'>";
	echo "<script>alert('super petugas tidak bisa dihapus ');</script>";
    exit;
}
$sql_delete="delete from petugas where petugas_id='".$id."'";
$result=mysql_query($sql_delete);
require_once('display.php');
?>