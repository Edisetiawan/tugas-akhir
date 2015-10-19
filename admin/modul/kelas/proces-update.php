<?php
require_once('inc-db.php');
error_reporting(0);
$var_id=$_POST['frm_id'];
//echo $var_id; exit;
$var_kelas=$_POST['frm_kelas'];
if(empty($var_kelas)){
    $error=1;
}

$check="select * from kelas where kelas_id='".$var_id."'";
$result1=mysql_query($check);
$data=mysql_fetch_array($result1);
if($data['kelas_nama'] == $var_kelas){
    $error=2;
} 
if($error !=0){
    switch($error){
        case 1:
        $error_msg="kelas boleh kosong";
        break;
        case 2:
        $error_msg="<br>kelas sudah ada dalam database kik <a href='?page=kelas.display'>disini</a> untuk kembali";
        break;
        }
        echo $error_msg;
        exit;
        }
$query="update kelas set kelas_nama='".$var_kelas."' where kelas_id='".$var_id."'";
           //echo $query;
            //exit;
$result=mysql_query($query);
if ($result){
   include_once('display.php');
   //echo "berhasil";
}
?>