<?php
require_once('inc-db.php');
$id_session=session_id();
//echo $id_session; exit;
$kode_ex=$_POST['frm_kode_buku'];
$id_anggota=$_SESSION['anggota_nis'];  
$pinjam			= date("d-m-Y");
$tiga_hari		= mktime(0,0,0,date("n"),date("j")+3,date("Y"));
$kembali		= date("d-m-Y", $tiga_hari);


$sql_status_pinjam="select * from pinjam where pinjam_status='1' and anggota_nis='".$id_anggota."'";
$result_pinjam=mysql_query($sql_status_pinjam);
$jml_sdng_dipjam=mysql_num_rows($result_pinjam);
//echo $jml_sdng_dipjam; exit;
if($jml_sdng_dipjam >=2){
    echo "<meta http-equiv='refresh' content='0; url=?page=pinjam.data-anggota'>";
	echo "<script>alert('anda masih pinjam dan belom dikembalikan, maksimal pinjam hanya 2');</script>";
    exit;
}

$sql="SELECT *
FROM
    buku
    INNER JOIN buku_detail 
        ON (buku.buku_id = buku_detail.buku_id) where bukdet_kode='".$kode_ex."'";
//echo $sql; exit;
$result=mysql_query($sql);
$data=mysql_fetch_array($result);
$buku_id=$data['buku_id'];
//echo $buku_id; exit;
//check kode buku detail ada apa tidak-------------------------------
$select_buku="SELECT *
FROM
    buku_detail where bukdet_kode='".$kode_ex."'";
$result_b=mysql_query($select_buku);
$rows_b=mysql_num_rows($result_b);
$data_buku=mysql_fetch_array($result_b);
if($rows_b == 0){  //jika tidak ditemukan maka tampilkan
    echo "<meta http-equiv='refresh' content='0; url=?page=pinjam.data-anggota'>";
	echo "<script>alert('kode buku tidak ditemukan');</script>";
    exit;
}
if($data_buku['bukdet_status']==2){
    echo "<meta http-equiv='refresh' content='0; url=?page=pinjam.data-anggota'>";
	echo "<script>alert('buku sedang dipinjam');</script>";
    exit;
}
//--------------------------------------------------------------------------------------------------------------
$select_anggota="select * from tmp_pinjam where anggota_nis='".$id_anggota."' and tmp_session='".$id_session."'";
//echo $select_anggota; exit;
$result=mysql_query($select_anggota);
$jumlah_rows=mysql_num_rows($result);
//echo $jumlah_rows; exit;   //jika jumlah_melebihirow melebihi 2 maka tidak diizikan pinjam

if($jumlah_rows >= 2 ){
    echo "<meta http-equiv='refresh' content='0; url=?page=pinjam.data-anggota'>";
	echo "<script>alert('maximal pinjam hanya 2 buku');</script>";
    exit;
}
//-----------------------------------------------------------------------------------------------------------
$query="insert into tmp_pinjam values ('','$id_session','$kode_ex','$buku_id','$id_anggota')";
$result=mysql_query($query);
//bukdet_kode = 2 menyatakan buku sedang dipinjam
$update_buku_detail="update buku_detail set bukdet_status='2',jatuh_tempo='$kembali' where bukdet_kode='".$kode_ex."'";
//echo $update_buku_detail; exit;
$result_buku_detail=mysql_query($update_buku_detail);
echo "<meta http-equiv='refresh' content='0; url=?page=pinjam.data-anggota'>";  

?>