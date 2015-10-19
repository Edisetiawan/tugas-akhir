<?php
require_once('inc-db.php');
$var_username=htmlentities($_POST['frm_username']);
$var_password=htmlentities($_POST['frm_password']);
if(empty($var_username)){
    $error=1;
}
if(empty($var_password)){
    $error=2;
}
if($error !=0){
switch($error){
    case 1:
    $error_mgs="username tidak boleh kosong";
    break;
    case 2:
    $error_msg="password tidak boleh kosong";
    break;
}
echo $error_msg;
exit;
}

$query="insert into petugas values 
        ('','".$var_username."',
            '".md5($var_password)."')";
 //echo $query;
            //exit;
$result=mysql_query($query);
          
include_once('display.php');
?>