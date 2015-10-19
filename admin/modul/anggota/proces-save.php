<?php
require_once('inc-db.php');
error_reporting(0);
$var_nis=htmlentities($_POST['frm_nis']); //htmlentities() sebuah fungsi untuk merubah semua tag HTML menjadi text biasa
$var_nama=htmlentities($_POST['frm_nama']);
$var_kelas=htmlentities($_POST['frm_kelas']);
$var_jurusan=htmlentities($_POST['frm_jurusan']);

$var_tempat=htmlentities($_POST['frm_tempat']);
$var_tgl_lahir=$_POST['tgl_lahir'].' '.$_POST['bln_lahir'].' '.$_POST['thn_lahir'];
$var_masa_berlaku=$_POST['tgl_berlaku'].' '.$_POST['bln_berlaku'].' '.$_POST['thn_berlaku'];

//echo $var_tgl_lahir; exit();
$var_jns_kelamin=htmlentities($_POST['frm_jns_kel']);
$var_email=htmlentities($_POST['frm_email']);
$var_hp=htmlentities($_POST['frm_hp']);
$var_alamat=htmlentities($_POST['frm_alamat']);
$var_username=htmlentities($_POST['frm_nis']);
$var_password=md5($_POST['frm_nis']);
$var_tanggal=date("Y-m-d, H:i");
//-----------------------ambil gambar
$type_file  = $_FILES['fupload']['type'];
$lokasi_file =   $_FILES['fupload']['tmp_name'];
$nama_file =     $_FILES['fupload']['name'];
$ukuran_file =   $_FILES['fupload']['size'];
 /*nis tidak boleh kosong */
if(empty($var_nis)){
    $error=1;
}
/*nama tidak boleh kosong */
if(empty($var_nama)){
    $error=2;
}
/*kelas tidak boleh kosong */
if(empty($var_kelas)){
    $error=3;
}
/*jurusan tidak boleh kosong */
if(empty($var_jurusan)){
    $error=4;
}
/*angkatan tidak boleh kosong */
if(empty($var_tempat)){
    $error=5;
}
/*jenis kelamin tidak boleh kosong */
if(empty($var_jns_kelamin)){
    $error=6;
}
/* email tidak boleh kosong */
if(empty($var_email)){
    $error=7;
}
/* nomor hp tidak boleh kosong */
if(empty($var_hp)){
    $error=8;
}
/* alamat tidak boleh kosong */
if(empty($var_alamat)){
    $error=9;
}
if(empty($nama_file)){    /* foto tidak boleh kosong */
    $error=10;
}
if (!preg_match("/^[0-9]*$/",$var_nis)) {    /* hanya angka yang dizinkan */
    $error=11;  
} 
if(preg_match("/^[a-zA-Z ]+$/",$var_nama)==false){
    $error=12;  
}
if (!preg_match("/^[0-9]*$/",$var_hp)) {    /* hanya angka yang dizinkan */
    $error=13;  
}  
if(preg_match("/[a-z0-9\._]+?@[a-z-\.]+\.[a-z]{2,6}$/",$var_email)==false){
    $error=14;   
}
if($type_file != 'image/jpeg' AND $type_file != 'image/gif' AND $type_file != 'image/pjpeg' AND $type_file !='image/png'){
    $error=15;    
}
/*check nis tidak boleh ada yang sama */
$sql_check_nis = "
      SELECT anggota_nis FROM anggota WHERE anggota_nis = '{$var_nis}'
   ";

   $result_check_nis = mysql_query($sql_check_nis);
   $total_check_nis = mysql_num_rows($result_check_nis);

   if($total_check_nis != 0){
      $error = 16;
   }
 if($error != 0){
      switch ($error) {
         case 1:
            $error_msg = "nis tidak boleh kosong ";
            break;
         case 2:
            $error_msg = "nama tidak boleh kosong";
            break;
         case 3:
            $error_msg = "kelas tidak boleh kosong";
            break;
         case 4:
            $error_msg = "jurusan tidak boleh kosong";
            break;
         case 5:
            $error_msg = "tempat tidak boleh kosong ";
            break;
         case 6:
            $error_msg = "jenis kelamin tidak boleh kosong";
            break;
         case 7:
            $error_msg = "email tidak boleh kosong";
            break;
         case 8:
            $error_msg = "nomor hp tidak boleh kosong";
            break;
         case 9:
            $error_msg = "alamat tidak boleh kosong";
            break;
         case 10:
            $error_msg = "foto tidak boleh kosong";  //tidak boleh kosong
            break;
         case 11:
            $error_msg = "nis tidak boleh mengandung karakter";
            break;
         case 12:
            $error_msg= "nama tidak boleh mangandung angka";
            break;
         case 13:
            $error_msg = "nis tidak boleh ada yang sama";
            break;
         case 14:
            $error_msg = "email tidak valid, contoh email yang valid: email@yahoo.com";
            break;
         case 15:
            $error_msg = "type file <b>".$nama_file."</b> : ".$type_file."<br>Type file yang boleh di uploaud : gif,jpg dan png";
            break;
         case 16:
            $error_msg = "nis tidak boleh ada yang sama";
            break; 
      }
      echo "<h3>$error_msg</h3>";
      echo "<a href='?page=anggota.frm-insert'>kembali</a>";
      exit;
   }
   

$query="insert into anggota values 
        ('".$var_nis."',
            '".$var_nama."',
            '".$nama_file."',
            '".$var_kelas."',
            '".$var_jurusan."',
            '".$var_tempat."',
            '".$var_tgl_lahir."',
            '".$var_masa_berlaku."',
            '".$var_jns_kelamin."',
            '".$var_email."',
            '".$var_hp."',
            '".$var_alamat."',
            '".$var_username."',
            '".$var_password."',
            '".$var_tanggal."')";
           //echo $query;
           //exit;
$result=mysql_query($query);

if ($result){
    $derektori="../images/".$nama_file;
    move_uploaded_file($lokasi_file,"$derektori");
    include_once('display.php');
   //echo "berhasil";
}
//echo $nama_file;
//exit; 
//$derektori="../images/".$nama_file;
//move_uploaded_file($lokasi_file,"$derektori");
//header('location: ?page=project.display');

?>