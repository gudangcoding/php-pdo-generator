<?php
session_start();
include "../../inc/config.php";

$columns = array(
	'id',
	'nm_perusahaan',
	'legal',
	'almt_kantor',
	'email',
	'status',
	'web',
	'telp',
	'kota',
	'provinsi',
	'kecamatan',
	'nm_lengkap',
	'posisi',
	'no_hp',
	'npwp',
	'almt_penagihan',
	'nm_bank',
	'norek',
	'cb_bank'
	// 'no_penawaran',
	// 'pelanggan',
	// 'layanan',
	// 'tgl_penawaran',
	// 'prd_penawaran',
	// 'tujuan',
	// 'satuan',
	// 'jns_truk',
	// 'nilai',
	// 'sts_pajak',
	
	);

	$query = $datatable->get_custom("select * from pelanggan where tampil='Y'",$columns);

	$data = array();
	$i=1;
	foreach ($query	as $value) {


	$ResultData = array();
	$ResultData[] = $datatable->number($i);
	$ResultData[] = $value->nm_perusahaan;
	$ResultData[] = $value->legal;
	$ResultData[] = $value->almt_kantor;
	$ResultData[] = $value->email;
	$ResultData[] = $value->status;
	$ResultData[] = $value->web;
	$ResultData[] = $value->telp;
	$ResultData[] = $value->kota;
	$ResultData[] = $value->provinsi;
	$ResultData[] = $value->kecamatan;
	$ResultData[] = $value->nm_lengkap;
	$ResultData[] = $value->posisi;
	$ResultData[] = $value->no_hp;
	$ResultData[] = $value->npwp;
	$ResultData[] = $value->almt_penagihan;
	$ResultData[] = $value->nm_bank;
	$ResultData[] = $value->norek;
	$ResultData[] = $value->cb_bank;
	// $ResultData[] = $value->no_penawaran;
	// $ResultData[] = $value->pelanggan;
	// $ResultData[] = $value->layanan;
	// $ResultData[] = $value->tgl_penawaran;
	// $ResultData[] = $value->prd_penawaran;
	// $ResultData[] = $value->tujuan;
	// $ResultData[] = $value->satuan;
	// $ResultData[] = $value->jns_truk;
	// $ResultData[] = $value->nilai;
	// $ResultData[] = $value->sts_pajak;
 
	$ResultData[] = "<a href='".base_admin()."index.php/pelanggan/edit/".$value->id."' class='btn btn-xs btn-primary'><span class='glyphicon glyphicon-pencil' aria-hidden='true'></span></a> <a onclick=hapus('".$value->id."') class='btn btn-xs btn-danger'><span class='glyphicon glyphicon-trash' aria-hidden='true'></span></a> <a detail=edit('".$value->id."') class='btn btn-xs btn-primary'><span class='glyphicon glyphicon-list' aria-hidden='true'></span></a>";


	$data[] = $ResultData;
	$i++; 
}

$datatable->set_data($data);
$datatable->create_data();