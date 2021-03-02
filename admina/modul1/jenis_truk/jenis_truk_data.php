
<?php
session_start();
include "../../inc/config.php";


$columns = array(
	'id',
	'Kode_Jenis_Truk',
	'Nama_Jenis_Truk',
	
);

$query = $datatable->get_custom("select * from Jenis_Truk where tampil='Y'",$columns);

	$data = array();
	$i=1;
	foreach ($query	as $value) {


	$ResultData = array();

	$ResultData[] = $datatable->number($i);
	$ResultData[] = $value->Kode_Jenis_Truk;
	$ResultData[] = $value->Nama_Jenis_Truk;

$ResultData[] = "<a onclick=edit('".$value->id."') class='btn btn-xs btn-primary'><span class='glyphicon glyphicon-pencil' aria-hidden='true'></span></a> <a onclick=hapus('".$value->id."') class='btn btn-xs btn-danger'><span class='glyphicon glyphicon-trash' aria-hidden='true'></span></a> <a detail=edit('".$value->id."') class='btn btn-xs btn-primary'><span class='glyphicon glyphicon-list' aria-hidden='true'></span></a>";


	$data[] = $ResultData;
	$i++;
}

$datatable->set_data($data);
$datatable->create_data();

?>