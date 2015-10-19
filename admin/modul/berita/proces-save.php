<?php
require_once('inc-db.php');
$var_judul=$_POST['frm_judul'];
$var_isi=$_POST['frm_isi'];
$var_tanggal=date("Y-m-d, H:i");
//-----------------------ambil gambar
$type_file=$_FILES['fupload']['type'];
$lokasi_file =   $_FILES['fupload']['tmp_name'];
$nama_file =     $_FILES['fupload']['name'];
$ukuran_file =   $_FILES['fupload']['size'];

if(empty($var_judul)){
    $error=1;
}
if(empty($var_isi)){
    $error=2;
}
if($type_file != 'image/jpeg' AND $type_file != 'image/gif' AND $type_file != 'image/pjpeg' AND $type_file !='image/png'){
    $error=3;    
}
 if($error != 0){
      switch ($error) {
         case 1:
            $error_msg = "judul tidak boleh kosong ";
            break;
         case 2:
            $error_msg = "isi tidak boleh kosong";
            break;
         case 3:
            $error_msg = "type file <b>".$nama_file."</b> : ".$type_file."<br>Type file yang boleh di uploaud : gif,jpg dan png";
            break;
      }
      echo "<h3>$error_msg</h3>";
      echo "<a href='?page=barita.frm-insert'>kembali</a>";
      exit;
   }
$query="insert into berita values 
        ('','".$var_judul."',
            '".$nama_file."',
            '".$var_isi."',
            '".$var_tanggal."')";
           //echo $query;
            //exit;
$result=mysql_query($query);
$derektori="../images/".$nama_file;
move_uploaded_file($lokasi_file,"$derektori");
include_once('display.php');
   //echo "berhasil";
?>