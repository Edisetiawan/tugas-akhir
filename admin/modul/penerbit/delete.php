<?php
require_once('inc-db.php');
$id=$_GET['id'];
//echo $id; exit;
$sql="delete from penerbit where penerbit_kode='".$id."'";
//echo $sql; exit;
$result=mysql_query($sql);
if($result){
    require_once('display.php');
}
?>