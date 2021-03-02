<?php
session_start();
include "../../inc/config.php";


$columns = array(
	'id',
	'Modul',
	'Nama_Status',
	'Deskripsi',
	
);



$query = $datatable->get_custom("select * from Status where tampil = 'Y'",$columns);

	$data = array();
	$i=1;
	foreach ($query	as $value) {


	$ResultData = array();

	$ResultData[] = $datatable->number($i);
	$ResultData[] = $value->Modul;
	$ResultData[] = $value->Nama_Status;
	$ResultData[] = $value->Deskripsi;

$ResultData[] = "<a onclick=edit('".$value->id."') class='btn btn-primary'><span class='glyphicon glyphicon-pencil' aria-hidden='true'></span></a> <a onclick=hapus('".$value->id."') class='btn btn-danger'><span class='glyphicon glyphicon-trash' aria-hidden='true'></span></a> <a detail=edit('".$value->id."') class='btn btn-primary'><span class='glyphicon glyphicon-list' aria-hidden='true'></span></a>";


	$data[] = $ResultData;
	$i++;
}

$datatable->set_data($data);
$datatable->create_data();

?>