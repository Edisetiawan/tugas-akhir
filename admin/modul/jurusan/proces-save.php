<?php
require_once('inc-db.php');
error_reporting(0);
$var_kode=htmlentities($_POST['frm_kode']);
$var_keterangan=htmlentities($_POST['frm_keterangan']);
if(empty($var_kode)){
    $error=1;
}
if(empty($var_keterangan)){
    $error=2;
}

/*check nama  tidak boleh ada yang sama */
$sql_check_kode = "
      SELECT jurusan_kode FROM jurusan WHERE jurusan_kode = '{$var_kode}'
   ";
//echo $sql_check_kode; exit;
   $result_check_kode = mysql_query($sql_check_kode);
   $total_check_kode = mysql_num_rows($result_check_kode);
//echo $total_check_kode; exit;
   if($total_check_kode != 0){
      $error = 3;
   }

if($error !=0){
    switch($error){
        case 1:
        $error_msg="nama jurusan tidak boleh kosong";
        break;
        case 2:
        $error_msg="keterangan tidak boleh kosong";
        break;
        case 3:
        $error_msg="<br>Kode  sudah ada dalam database <br><a href='?page=jurusan.frm-insert'>kembali</a>";
        break;
        }
        echo $error_msg;
        exit;
        }
$query="insert into jurusan values 
        ('".$var_kode."','".$var_keterangan."')";
           //echo $query;
            //exit;
$result=mysql_query($query);
if ($result){
   include_once('display.php');
   //echo "berhasil";
}
?>