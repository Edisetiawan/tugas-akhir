<?php
//require_once('inc-db.php');
$var_id=$_POST['frm_hidden'];

//echo "ID :".$var_id; exit;

$var_judul=htmlentities($_POST['frm_judul']);
$var_kodeklasifikasi=htmlentities($_POST['frm_kodeklasifikasi']);
$var_klasifikasi=htmlentities($_POST['frm_klasifikasi']);
$var_pengarang=htmlentities($_POST['frm_pengarang']);
$var_penerbit=htmlentities($_POST['frm_penerbit']);
$var_tahun_terbit=htmlentities($_POST['frm_tahun']);
$var_isbn=htmlentities($_POST['frm_isbn']);
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
    if(empty($var_sinopsis)){
        $error=7;
    }
    if(!empty($nama_file)){
    if($type_file != 'image/jpeg' AND $type_file != 'image/gif' AND $type_file != 'image/pjpeg' AND $type_file !='image/png'){
    
     $error=8;
    }
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
            $error_msg = "sinopsis tidak boleh kosong";
            break;
         case 8:
            $error_msg = "type file <b>".$nama_file."</b> : ".$type_file."<br>Type file yang boleh di uploaud : gif,jpg dan png";
            break;
         
      }
      echo "<h3>$error_msg</h3>";
      echo "<a href='?page=buku.frm-update&id={$var_id}'>kembali</a>";
      exit;
   }
  if(empty($nama_file)){
      $sql="update buku set 
                buku_kode='".$var_kodeklasifikasi."',
                buku_judul='".$var_judul."',
                klasifikasi_id='".$var_klasifikasi."',
                buku_pengarang='".$var_pengarang."',
                penerbit_kode='".$var_penerbit."',
                buku_tahun_terbit='".$var_tahun_terbit."',
                buku_isbn='".$var_isbn."',
                buku_sinopsis='".$var_sinopsis."',
                buku_tgl_update='".$var_tanggal."' where buku_id='".$var_id."'";
                //echo $sql;
                //exit;   
       $result=mysql_query($sql);
       include_once('display.php');
    }else{
     
       $query="update buku set 
                buku_kode='".$var_kodeklasifikasi."',
                buku_judul='".$var_judul."',
                klasifikasi_id='".$var_klasifikasi."',
                buku_foto='".$nama_file."',
                buku_pengarang='".$var_pengarang."',
                penerbit_kode='".$var_penerbit."',
                buku_tahun_terbit='".$var_tahun_terbit."',
                buku_isbn='".$var_isbn."',
                buku_sinopsis='".$var_sinopsis."',
                buku_tgl_update='".$var_tanggal."' where buku_id='".$var_id."'";
          // echo $query;
           // exit;          
    $result=mysql_query($query);
    $derektori="../images/".$nama_file;
    move_uploaded_file($lokasi_file,"$derektori");
    include_once('display.php');
    } 
?>