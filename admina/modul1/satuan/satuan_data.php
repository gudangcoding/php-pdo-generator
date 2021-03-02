
<?php
session_start();
include "../../inc/config.php";


$columns = array(
	'id',
	'Nama_Satuan',
	'Keterangan',
	
);

$query = $datatable->get_custom("select * from Satuan where tampil = 'Y'",$columns);

	$data = array();
	$i=1;
	foreach ($query	as $value) {


	$ResultData = array();

	$ResultData[] = $datatable->number($i);
	$ResultData[] = $value->Nama_Satuan;
	$ResultData[] = $value->Keterangan;

$ResultData[] = "<a onclick=edit('".$value->id."') class='btn btn-xs btn-primary'><span class='glyphicon glyphicon-pencil' aria-hidden='true'></span></a> <a onclick=hapus('".$value->id."') class='btn btn-xs btn-danger'><span class='glyphicon glyphicon-trash' aria-hidden='true'></span></a> <a detail=edit('".$value->id."') class='btn btn-xs btn-primary'><span class='glyphicon glyphicon-list' aria-hidden='true'></span></a>";


	$data[] = $ResultData;
	$i++;
}

$datatable->set_data($data);
$datatable->create_data();

?>