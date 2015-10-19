<?php
    $id=$_GET['id'];
    // echo $id; exit;
    $sql="select * from pinjam where pinjam_id='$id'";
    //echo $sql; exit;
    $result=mysql_query($sql);
    $data=mysql_fetch_array($result);
    $tgl_kembali=$data['tgl_kembali'];
    //echo "Tanggal Kembali : ".$tgl_kembali."<br>";// exit;
    
    
	$pecah			= explode("-",$tgl_kembali);
	$next_3_hari	= mktime(0,0,0,$pecah[1],$pecah[0]+3,$pecah[2]);
	$hari_next		= date("d-m-Y", $next_3_hari);
    
    //echo $hari_next; exit;
    //PERPANJANG DINYATAKAN FINE.
	$update_tgl_kembali="UPDATE pinjam SET tgl_kembali='$hari_next' WHERE pinjam_id='$id'";
    //echo $update_tgl_kembali; exit;
    $result1=mysql_query($update_tgl_kembali);
    echo "<meta http-equiv='refresh' content='0; url=?page=pinjam.data-anggota#pinjamansaatini'>";  
?>