<?php
require_once('inc-db.php');
error_reporting(0);
$var_hidden_kode=$_POST['frm_hidden'];
$var_new_kode=$_POST['frm_kode'];
$var_keterangan=$_POST['frm_keterangan'];


if(empty($var_new_kode)){
    $error=1;
}
if(empty($var_keterangan)){
    $error=2;
} 
//jika kode baru tidak sama dengan kode lama, maka lakukan pengecekan kode baru
   if($var_new_kode != $var_hidden_kode){

      //check kode tidak boleh ada yang sama
      $sql_check_kode = "
         SELECT jurusan_kode FROM jurusan WHERE jurusan_kode = '{$var_new_kode}'
      ";
      //echo $sql_check_kode; exit;
      $result_check_kode = mysql_query($sql_check_kode);
      $total_check_kode = mysql_num_rows($result_check_kode);
        //echo $total_check_kode; exit;
      if($total_check_kode != 0){
         $error = 3;
      }
   }   
   
if($error !=0){
    switch($error){
        case 1:
        $error_msg="nama jurusan tidak boleh kosong";
        break;
        case 2:
        $error_msg="keterangan jurusan tidak boleh kosong";
        break;
        case 3:
        $error_msg="<br>Kode  sudah ada dalam database kik <a href='?page=jurusan.frm-update&id={$var_hidden_kode}'>disini</a> untuk kembali";
        break;
        }
        echo $error_msg;
        exit;
        } 
$query="update jurusan set jurusan_kode='".$var_new_kode."',jurusan_keterangan='".$var_keterangan."' 
        where jurusan_kode='".$var_hidden_kode."'";
          //echo $query;
            //exit;
$result=mysql_query($query);
if ($result){
   require_once('display.php');
   //echo "berhasil";
}else{
    echo "gagal";
}
?>