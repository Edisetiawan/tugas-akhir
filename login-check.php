<?php
require_once('inc-db.php');
$var_username=mysql_real_escape_string(strip_tags($_POST['frm_username']));
$var_password=mysql_real_escape_string(strip_tags($_POST['frm_password']));

$sql_check="select anggota_nis,anggota_username,anggota_password from anggota where
            anggota_username='".$var_username."' and 
            anggota_password='".md5($var_password)."'";
//echo $sql_check; exit;
$result=mysql_query($sql_check);
$rows=mysql_num_rows($result);
//echo "Rows :".$rows; exit;
if($rows > 0){
    session_start();
    $data=mysql_fetch_array($result);
    $_SESSION['nis']=$data['anggota_nis'];
    //echo $_SESSION['nis']; exit;
    header('location: index.php?page=area_anggota');
}else{
    echo "gagal Login";
}


?>