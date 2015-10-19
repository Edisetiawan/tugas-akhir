<?php
require_once('inc-db.php');
$pinjam_id=$_POST['pinjam_id'];
$bukdet_kode=$_POST['bukdet_kode'];
$sql_kembali="update buku_detail set bukdet_status='1' where bukdet_kode='".$bukdet_kode."'";
//echo $sql_kembali; exit;
$result=mysql_query($sql_kembali); 
//merubah status pinjam menjadi sudah dikembalikan
$sql_pinjam="update pinjam set pinjam_status='2' where bukdet_kode='".$bukdet_kode."' and pinjam_id='".$pinjam_id."'";
//echo $sql_pinjam; exit;
$result1=mysql_query($sql_pinjam);
echo "<meta http-equiv='refresh' content='0; url=?page=pinjam.data-anggota#pinjamsaatini'>";  
?>