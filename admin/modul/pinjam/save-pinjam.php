<?php
//echo "selesai cuk"; exit;
require_once('inc-db.php');
$id_session = session_id();
//echo $id_session;
//exit;
$pinjam			= date("d-m-Y");
$tiga_hari		= mktime(0,0,0,date("n"),date("j")+3,date("Y"));
$kembali		= date("d-m-Y", $tiga_hari);



$var_anggota_nis=$_SESSION['anggota_nis'];    //session
$var_petugas_id=$_SESSION['petugas_id'];    //session
$status=1;
function cart_content(){
    $id_session = session_id();
	$ct_content = array();
    $sql="select * from tmp_pinjam WHERE tmp_session='".$id_session."'";
	$result=mysql_query($sql);
    //$sql = mysql_query("SELECT * FROM tmp_pinjam WHERE tmp_session='".$id_session."'");
    //echo $sql; exit;
	while ($data=mysql_fetch_array($result)) {
		$ct_content[] = $data;    //$data['isi_dalam_database'];
	}
	return $ct_content;       //return $data;
    }
	$ct_content = cart_content();
	$jml = count($ct_content);
	for($i=0; $i<$jml; $i++){
       $query_pinjam="insert into pinjam values ('','$pinjam','$kembali','$status','{$ct_content[$i]['bukdet_kode']}','$var_anggota_nis','$var_petugas_id','{$ct_content[$i]['buku_id']}')";//,'{$ct_content[$i]['tmp_qty']}','$var_anggota_id','{$ct_content[$i]['buku_id']}')";    
       //echo $query_pinjam;
       //exit;
       $result_o=mysql_query($query_pinjam);
       $query_delete="delete from tmp_pinjam where tmp_session='{$ct_content[$i]['tmp_session']}'";
       $result1=mysql_query($query_delete);
       }
       unset($_SESSION['anggota_nis']);
       echo "<meta http-equiv='refresh' content='0; url=?page=pinjam.frm-idanggota'>";  
//header('location:index.php ');
?>