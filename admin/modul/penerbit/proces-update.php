<?php
require_once('inc-db.php');
$var_kode=$_POST['frm_hidden'];
$var_penerbit=$_POST['frm_penerbit'];
$var_alamat=$_POST['frm_alamat'];
$var_kota=$_POST['frm_kota'];
$var_tlp=$_POST['frm_tlp'];
$var_email=$_POST['frm_email'];

  if(empty($var_penerbit)){
    $error=1;
  }
  if(empty($var_alamat)){
    $error=2;
  }
  if(empty($var_kota)){
    $error=3;
  }
  if(empty($var_tlp)){
    $error=4;
  }
  if(empty($var_email)){
    $error=5;
  }
  if (!preg_match("/^[0-9]*$/",$var_tlp)) {    /* hanya angka yang dizinkan */
    $error=6;  
  }  
  if(preg_match("/[a-z0-9\._]+?@[a-z-\.]+\.[a-z]{2,6}$/",$var_email)==false){
    $error=7;   
  }
$query="update penerbit set 
        penerbit_nama='".$var_penerbit."',
        penerbit_alamat='".$var_alamat."',
        penerbit_kota='".$var_kota."',
        penerbit_tlp='".$var_tlp."',
        penerbit_email='".$var_email."' 
        where penerbit_kode='".$var_kode."'";
           //echo $query;
            //exit;
$result=mysql_query($query);
if ($result){
   include_once('display.php');
   //echo "berhasil";
}
?>