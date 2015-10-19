<?php
require_once('inc-db.php');
$var_nis=$_POST['frm_nis'];
//echo $var_nis; exit;
$query="select * from anggota where anggota_nis='".$var_nis."'";
$result=mysql_query($query);
$rows=mysql_num_rows($result);
//echo $rows; exit;
if($rows > 0){
$data=mysql_fetch_array($result);
$_SESSION['anggota_nis']=$data['anggota_nis'];
//include('data-anggota.php');
echo "<meta http-equiv='refresh' content='0; url=?page=pinjam.data-anggota'>";  
}else{
    echo "<meta http-equiv='refresh' content='0; url=?page=pinjam.frm-idanggota'>";
	echo "<script>alert('id anggota tidak ditemukan');</script>";
}
/*
$sql="select * from pinjam where anggota_nis='".$var_id."'";
$result1=mysql_query($sql);
$rows1=mysql_num_rows($result1);
//echo $rows1; exit;
if($rows1 > 0){
    header('location: data-anggota.php#tabs-2');
}else{
    header('llocation: data-anggota.php#tabs-1');
} */
?>
