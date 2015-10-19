<?php
require_once('inc-db.php');
$id=$_GET['id'];
$sql="delete from tmp_pinjam where bukdet_kode='".$id."'";
//echo $sql; exit;
$result=mysql_query($sql);
//if($result){
    //require_once('data-anggota.php');
    $update_buku_detail="update buku_detail set bukdet_status='1' where bukdet_kode='".$id."'";
    $result_buku_detail=mysql_query($update_buku_detail);
    echo "<meta http-equiv='refresh' content='0; url=?page=pinjam.data-anggota'>";  
//}
//echo $id;
?>