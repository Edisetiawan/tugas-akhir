<?php
require_once('inc-db.php');
$var_id=$_POST['frm_hidden'];
$var_username=$_POST['frm_username'];
$var_password=$_POST['frm_password'];

if(empty($var_username)){
    echo "username tidak boleh kosong";
    exit;
}
//echo $var_password; exit;
if(empty($var_password)){
   $sql="update petugas set 
        petugas_username='".$var_username."' where petugas_id='".$var_id."'";
   //echo "pass tetap :".$sql; exit;
   $result=mysql_query($sql); 
   include_once('display.php');
   
    }else{  
        $sql="update petugas set 
        petugas_username='".$var_username."',petugas_password='".md5($var_password)."' where petugas_id='".$var_id."'";
   //echo $sql; exit;
   $result=mysql_query($sql); 
   include_once('display.php'); 
   
    }
?>