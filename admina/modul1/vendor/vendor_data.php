<?php
session_start();
include "../../inc/config.php";

$columns = array(
	'id',
	'nm_perusahaan',
	'alamat',
	'notlp',
	'status',
	// 'nm_lengkap',
	// 'posisi',
	// 'nohp',
	// 'email',
	// 'npwp',
	// 'nm_penagihan',
	// 'almt_penagihan',
	// 'nm_bank',
	// 'norek',
	// 'no_truk',
	// 'jns_truk',
	// 'stnk',
	// 'exp_stnk',
	// 'pjg_bak',
	// 'tinggi_bak',
	// 'lbr_bak',
	// 'volume',
	// 'kapasitas',
	// 'no_tarif',
	// 'tgl_penawaran',
	// 'periode',
	// 'tmp_bayar',
	// 'pelanggan',
	// 'dari',
	// 'tujuan',
	// 'satuan',
	// 'nilai',
	// 'satuan_pajak',
	// 'satuan_penawaran'
	);

	$query = $datatable->get_custom("select * from vendor where tampil='Y'",$columns);

	$data = array();
	$i=1;
	foreach ($query	as $value) {


	$ResultData = array();
	

	$ResultData[] = $datatable->number($i);
	$ResultData[] = $value->nm_perusahaan;
	$ResultData[] = $value->alamat;
	$ResultData[] = $value->notlp;
	$ResultData[] = $value->status;
	// $ResultData[] = $value->nm_lengkap;
	// $ResultData[] = $value->posisi;
	// $ResultData[] = $value->nohp;
	// $ResultData[] = $value->email;
	// $ResultData[] = $value->npwp;
	// $ResultData[] = $value->nm_penagihan;
	// $ResultData[] = $value->almt_penagihan;
	// $ResultData[] = $value->nm_bank;
	// $ResultData[] = $value->norek;
	// $ResultData[] = $value->no_truk;
	// $ResultData[] = $value->jns_truk;
	// $ResultData[] = $value->stnk;
	// $ResultData[] = $value->exp_stnk;
	// $ResultData[] = $value->pjg_bak;
	// $ResultData[] = $value->tinggi_bak;
	// $ResultData[] = $value->lbr_bak;
	// $ResultData[] = $value->volume;
	// $ResultData[] = $value->kapasitas;
	// $ResultData[] = $value->no_tarif;
	// $ResultData[] = $value->tgl_penawaran;
	// $ResultData[] = $value->periode;
	// $ResultData[] = $value->tmp_bayar;
	// $ResultData[] = $value->pelanggan;
	// $ResultData[] = $value->dari;
	// $ResultData[] = $value->tujuan;
	// $ResultData[] = $value->satuan;
	// $ResultData[] = $value->nilai;
	// $ResultData[] = $value->satuan_pajak;
	// $ResultData[] = $value->satuan_penawaran;
 
	$ResultData[] = "<a onclick=edit('".$value->id."') class='btn btn-xs btn-primary'><span class='glyphicon glyphicon-pencil' aria-hidden='true'></span></a> <a onclick=hapus('".$value->id."') class='btn btn-xs btn-danger'><span class='glyphicon glyphicon-trash' aria-hidden='true'></span></a> <a detail=edit('".$value->id."') class='btn btn-xs btn-primary'><span class='glyphicon glyphicon-list' aria-hidden='true'></span></a>";


	$data[] = $ResultData;
	$i++; 
}

$datatable->set_data($data);
$datatable->create_data();