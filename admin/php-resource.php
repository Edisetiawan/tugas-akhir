<?php
require_once('inc-db.php');
$klasifikasi_id = $_GET['klasifikasi_id'];
$query = mysql_query("SELECT * FROM rak WHERE klasifikasi_id = '{$klasifikasi_id}'");
$raks = array();
if ($query) {
	while ($rak = mysql_fetch_object($query)){
		$data = array(
			'id' => $rak->klasifikasi_id,
			'name' => $rak->rak_lokasi
		);
		array_push($raks, $data);
	}
}
else {
	$raks = array('error' => 'cannot find rak with klasifikasi_id '.$klasifikasi_id);
}
echo json_encode($raks);