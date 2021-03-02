
<?php

session_start();
include "../../inc/config.php";


$columns = array(
	'id',
	'legal',
	'jns_penawaran',
	'nm_perusahaan',
	'no_penawaran',
	'tgl_penawaran',
	'prd_penawaran',
	'layanan',
	'sts_pajak',
	'dari',
	'tujuan',
	'satuan',
	'jns_truk',
	'nominal',
	'wkt_tempuh',
	
);

$query = $datatable->get_custom("select * from penawaran where tampil='Y'",$columns);

	$data = array();
	$i=1;
	foreach ($query	as $value) {

		$ResultData = array();
	

	$ResultData[] = $datatable->number($i);
	$ResultData[] = $value->legal;
	$ResultData[] = $value->jns_penawaran;
	$ResultData[] = $value->nm_perusahaan;
	$ResultData[] = $value->no_penawaran;
	$ResultData[] = $value->tgl_penawaran;
	$ResultData[] = $value->prd_penawaran;
	$ResultData[] = $value->layanan;
	$ResultData[] = $value->sts_pajak;
	$ResultData[] = $value->dari;
	$ResultData[] = $value->tujuan;
	$ResultData[] = $value->satuan;
	$ResultData[] = $value->jns_truk;
	$ResultData[] = $value->nominal;
	$ResultData[] = $value->wkt_tempuh;


	$ResultData[] = "<a onclick=edit('".$value->id."') class='btn btn-xs btn-primary'><span class='glyphicon glyphicon-pencil' aria-hidden='true'></span></a> <a onclick=hapus('".$value->id."') class='btn btn-xs btn-danger'><span class='glyphicon glyphicon-trash' aria-hidden='true'></span></a> <a detail=edit('".$value->id."') class='btn btn-xs btn-primary'><span class='glyphicon glyphicon-list' aria-hidden='true'></span></a>";


	$data[] = $ResultData;
	$i++; 
}

$datatable->set_data($data);
$datatable->create_data();


?>