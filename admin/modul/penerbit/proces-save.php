<?php
require_once('inc-db.php');
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
  
  if($error != 0){
      switch ($error) {
         case 1:
            $error_msg = "nama penerbit tidak boleh kosong ";
            break;
         case 2:
            $error_msg = "alamat tidak boleh kosong";
            break;
         case 3:
            $error_msg = "kota tidak boleh kosong";
            break;
         case 4:
            $error_msg = "telephone tidak boleh kosong";
            break;
         case 5:
            $error_msg = "email tidak boleh kosong ";
            break;
         case 6:
            $error_msg = "nomor telephone tidak boleh mengndung huruf";
            break;
         case 7:
            $error_msg = "email tidak valid, contoh email yang valid: email@yahoo.com";
            break;
        
      }
      echo "<h3>$error_msg</h3>";
      echo "<a href='?page=penerbit.frm-insert'>kembali</a>";
      exit;
   }
  $sql1="SELECT MAX(RIGHT(penerbit_kode,3)) AS kd_max FROM penerbit;";    //ambil 4 digit dari belakang
  $result1=mysql_query($sql1);
  $data=mysql_fetch_array($result1);
  //echo $data['kd_max'];
  //exit;
  $isi_reqord=$data['kd_max']+1;
  $tmp=$isi_reqord++;
  $kd = sprintf("%03s", $tmp);  //0 lima kali
  //echo
  $kode="P-".$kd;
  
  //echo $kode; exit;

$query="insert into penerbit values 
            ('".$kode."',
            '".$var_penerbit."',
            '".$var_alamat."',
            '".$var_kota."',
            '".$var_tlp."',
            '".$var_email."')";
           //echo $query;
           //exit;
$result=mysql_query($query);
if ($result){
   include_once('display.php');
   //echo "berhasil";
}
?>