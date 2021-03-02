
<?php
session_start();
include "../../inc/config.php";


$columns = array(
	'id',
	'NOPOL',
	'Jenis_Truk',
	'Tahun',
	'Warna',
	'No_STNK',
	'Tgl_Exp_STNK',
	'No_BPKB',
	'Tgl_Exp_BPKB',
	'Panjang',
	'Lebar',
	'Tinggi',
	'Kapasitas_Kubik',
	'Kapasitas_KG',
	'Status',
);

$query = $datatable->get_custom("select * from Armada where tampil='Y'",$columns);

	$data=array();
	$i=1;
	foreach ($query as $value) {
		$ResultData = array();

		$ResultData[] = $datatable->number($i);
		$ResultData[] = $value->NOPOL;
		$ResultData[]= $value->Jenis_Truk;
		$ResultData[] = $value->Tahun;
		$ResultData[] = $value->Warna;
		$ResultData[] = $value->No_STNK;
		$ResultData[] = $value->Tgl_Exp_STNK;
		$ResultData[] = $value->No_BPKB;
		$ResultData[] = $value->Tgl_Exp_BPKB;
		$ResultData[] = $value->Panjang;
		$ResultData[] = $value->Lebar;
		$ResultData[] = $value->Tinggi;
		$ResultData[] = $value->Kapasitas_Kubik;
		$ResultData[] = $value->Kapasitas_KG;
		$ResultData[] = $value->Status;


		$ResultData[] = "<a onclick=edit('".$value->id."') class='btn btn-xs btn-primary'><span class='glyphicon glyphicon-pencil' aria-hidden='true'></span></a> <a onclick=hapus('".$value->id."') class='btn btn-xs btn-danger'><span class='glyphicon glyphicon-trash' aria-hidden='true'></span></a> <a detail=edit('".$value->id."') class='btn btn-xs btn-primary'><span class='glyphicon glyphicon-list' aria-hidden='true'></span></a>";

		$data[] = $ResultData;
		$i++;
	}

$datatable->set_data($data);
$datatable->create_data();


?>