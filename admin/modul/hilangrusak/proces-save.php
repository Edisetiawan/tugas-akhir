<?php
require_once('inc-db.php');
error_reporting(0);
$var_tanggal=$_POST['frm_tanggal'];
$var_kode_exemplar=$_POST['frm_kdexemplar'];
$var_keterangan=$_POST['frm_keterangan'];
$var_idanggota=$_POST['frm_idanggota'];
$var_biayaganti=$_POST['frm_biayaganti'];
echo $var_tanggal;
exit();
$var_kelas=$_POST['frm_kelas'];
if(empty($var_kelas)){
    $error=1;
}
$sql_check_kelas = "
      SELECT kelas_nama FROM kelas WHERE kelas_nama = '{$var_kelas}'
   ";
//echo $sql_check_kelas; exit;
   $result_check_kelas = mysql_query($sql_check_kelas);
   $total_check_kelas = mysql_num_rows($result_check_kelas);
//echo $total_check_kelas; exit;
   if($total_check_kelas != 0){
      $error = 2;
   }
if($error !=0){
    switch($error){
        case 1:
        $error_msg="kelas boleh kosong";
        break;
        case 2:
        $error_msg="<br>kelas kelas tidak boleh sama <a href='?page=kelas.frm-insert'> kembali</a>";
        break;
        }
        echo $error_msg;
        exit;
        }
$query="insert into kelas values 
        ('','".$var_kelas."')";
           //echo $query;
            //exit;
$result=mysql_query($query);
if ($result){
   include_once('display.php');
   //echo "berhasil";
}
?>