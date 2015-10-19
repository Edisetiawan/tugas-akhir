<?php
require_once('inc-db.php');
$var_username=mysql_real_escape_string($_POST['frm_username']);
$var_password=mysql_real_escape_string(md5($_POST['frm_password']));
$sql_check="select petugas_username,petugas_password from petugas 
            where petugas_username='".$var_username."' and 
            petugas_password='".$var_password."'";
//echo $sql_check; exit;
$result=mysql_query($sql_check);
$rows=mysql_num_rows($result);
//echo $rows; exit;
if($rows > 0 ){
    session_start();
    $data=mysql_fetch_array($result);
    $_SESSION['petugas_id']=$data['petuigas_id'];
    $_SESSION['username']=$data['petugas_username'];
    header('location: admin_area.php');
}else{
    header('location: index.php?action=gagal');
}
?>