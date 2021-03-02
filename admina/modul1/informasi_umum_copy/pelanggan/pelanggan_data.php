<?php
session_start();
include "../../inc/config.php";

$columns = array(
	'id',
	'nm_perusahaan',
	'almt_kantor',
	'telp',
	'status',
	'nm_lengkap',
	'posisi',
	'no_hp',
	'email',
	'npwp',
	'almt_penagihan',
	'no_penawaran',
	'legal',
	'pelanggan',
	'layanan',
	'tgl_penawaran',
	'prd_penawaran',
	'dari',
	'tujuan',
	'satuan',
	'jns_truk',
	'nilai',
	'sts_pajak',
	);

	$query = $datatable->get_custom("select * from pelanggan ",$columns);

	$data = array();
	$i=1;
	foreach ($query	as $value) {


	$ResultData = array();
	

	$ResultData[] = $datatable->number($i);
	$ResultData[] = $value->nm_perusahaan;
	$ResultData[] = $value->almt_kantor;
	$ResultData[] = $value->telp;
	$ResultData[] = $value->status;
	$ResultData[] = $value->nm_lengkap;
	$ResultData[] = $value->posisi;
	$ResultData[] = $value->no_hp;
	$ResultData[] = $value->email;
	$ResultData[] = $value->npwp;
	$ResultData[] = $value->almt_penagihan;
	$ResultData[] = $value->no_penawaran;
	$ResultData[] = $value->legal;
	$ResultData[] = $value->pelanggan;
	$ResultData[] = $value->layanan;
	$ResultData[] = $value->tgl_penawaran;
	$ResultData[] = $value->prd_penawaran;
	$ResultData[] = $value->dari;
	$ResultData[] = $value->tujuan;
	$ResultData[] = $value->satuan;
	$ResultData[] = $value->jns_truk;
	$ResultData[] = $value->nilai;
	$ResultData[] = $value->sts_pajak;
 
	$ResultData[] = "<a onclick=edit('".$value->id."') class='btn btn-primary'><span class='glyphicon glyphicon-pencil' aria-hidden='true'></span></a> <a onclick=hapus('".$value->id."') class='btn btn-danger'><span class='glyphicon glyphicon-trash' aria-hidden='true'></span></a> <a detail=edit('".$value->id."') class='btn btn-primary'><span class='glyphicon glyphicon-list' aria-hidden='true'></span></a>";


	$data[] = $ResultData;
	$i++; 
}

$datatable->set_data($data);
$datatable->create_data();