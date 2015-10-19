<?php
$id=$_GET['id'];
$sql="delete from buku_detail where bukdet_kode='".$id."'";
//echo $sql; exit;
$result=mysql_query($sql);
include_once('display.php');
?>