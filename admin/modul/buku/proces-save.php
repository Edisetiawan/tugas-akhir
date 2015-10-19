<?php
//require_once('inc-db.php');
$var_judul=htmlentities($_POST['frm_judul']);
$var_kodeklasifikasi=htmlentities($_POST['frm_kodeklasifikasi']);
$var_klasifikasi=htmlentities($_POST['frm_klasifikasi']);
$var_pengarang=htmlentities($_POST['frm_pengarang']);
$var_penerbit=htmlentities($_POST['frm_penerbit']);
$var_tahun_terbit=htmlentities($_POST['frm_tahun']);
$var_isbn=htmlentities($_POST['frm_isbn']);
$var_jumlah=htmlentities($_POST['frm_jumlah']);
$var_rak=htmlentities($_POST['rak']);
$var_sinopsis=htmlentities($_POST['frm_sinopsis']);
$var_tanggal=date("Y-m-d, H:i");
//-----------------------ambil gambar
$type_file= $_FILES['fupload']['type'];
$lokasi_file =   $_FILES['fupload']['tmp_name'];
$nama_file =     $_FILES['fupload']['name'];
$ukuran_file =   $_FILES['fupload']['size'];

    if(empty($var_judul)){
        $error=1;
    }
    if(empty($var_klasifikasi)){
        $error=2;
    }
    if(empty($var_pengarang)){
        $error=3;
    }
    if(empty($var_penerbit)){
        $error=4;
    }
    if(empty($var_tahun_terbit)){
        $error=5;
    }
    if(empty($var_isbn)){
        $error=6;
    }
    if(empty($var_jumlah)){
        $error=7;
    }
    if(empty($var_rak)){
        $error=8;
    }
    if(empty($var_sinopsis)){
        $error=9;
    }
    if($type_file != 'image/jpeg' AND $type_file != 'image/gif' AND $type_file != 'image/pjpeg' AND $type_file !='image/png'){
    $error=10;    
    }
    if (!preg_match("/^[0-9]*$/",$var_jumlah)) {    /* hanya angka yang dizinkan */
    $error=11;  
}
    
    if($error != 0){
      switch ($error) {
         case 1:
            $error_msg = "judul tidak boleh kosong ";
            break;
         case 2:
            $error_msg = "klasifikasi tidak boleh kosong";
            break;
         case 3:
            $error_msg = "pengarang tidak boleh kosong ";
            break;
         case 4:
            $error_msg = "penerbit tidak boleh kosong";
            break;
         case 5:
            $error_msg = "tahun terbit tidak boleh kosong ";
            break;
         case 6:
            $error_msg = "ISBN tidak boleh kosong";
            break;
         case 7:
            $error_msg = "jumlah tidak boleh kosong ";
            break;
         case 8:
            $error_msg = "rak tidak boleh kosong";
            break;
         case 9:
            $error_msg = "sinopsis tidak boleh kosong";
            break;
         case 10:
            $error_msg = "type file <b>".$nama_file."</b> : ".$type_file."<br>Type file yang boleh di uploaud : gif,jpg dan png";
            break;
         case 11:
            $error_msg = "maaf yang di izinkan hanya angka";
            break;
      }
      echo "<h3>$error_msg</h3>";
      echo "<a href='?page=buku.frm-insert'>kembali</a>";
      exit;
   }
   
$query="insert into buku values 
        ('','".$var_kodeklasifikasi."',
            '".$var_judul."',
            '".$var_klasifikasi."',
            '".$nama_file."',
            '".$var_pengarang."',
            '".$var_penerbit."',
            '".$var_tahun_terbit."',
            '".$var_isbn."',
            '".$var_jumlah."',
            '".$var_sinopsis."',
            '".$var_tanggal."')";
            //echo $query;
            //exit;          
$result=mysql_query($query);
$buku_id=mysql_insert_id();
if($result){
    
 //$jumlah_buku=9;
  $sql1="SELECT MAX(RIGHT(bukdet_kode,5)) AS kd_max FROM buku_detail;";    //ambil 4 digit dari belakang
  $result1=mysql_query($sql1);
  $data=mysql_fetch_array($result1);
  //echo $data['kd_max'];
  //exit;
  $isi_reqord=$data['kd_max']+1;
  for($i=1;$i<=$var_jumlah;$i++){
  $tmp=$isi_reqord++;
  $kd = sprintf("%05s", $tmp);  //0 lima kali
  //echo
  $kode="B".$kd;
  $sql11="insert into buku_detail values ('$kode','$buku_id','1','$var_rak','')";
  //echo $sql11; exit;
  $result11=mysql_query($sql11);
  
}
}
$derektori="../images/".$nama_file;
move_uploaded_file($lokasi_file,"$derektori");
include_once('display.php');
   //echo "berhasil";
?>