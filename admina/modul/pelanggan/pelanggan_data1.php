
<?php

include "../../inc/config.php";


$tes=$dtable->get("pelanggan", "pelanggan.id", 
	array(
		'pelanggan.nm_perusahaan',
		'pelanggan.lgl',
		'pelanggan.almt_kantor',
		'pelanggan.status',
		'pelanggan.email',
		'pelanggan.kecamatan',
		'pelanggan.website',
		'pelanggan.kota',
		'pelanggan.tlp',
		'pelanggan.provinsi',
		'pelanggan.nm_lengkap',
		'pelanggan.posisi',
		'pelanggan.no_hp',
		'pelanggan.npwp',
		'pelanggan.nm_bank',
		'pelanggan.almt_penagihan',
		'pelanggan.rekening',
		'pelanggan.cabang',
		'legal.nm_legal',
		'lokasi1.kecamatan',
		'lokasi1.kota',
		'provinsi.nama_provinsi',
		'bank.nama',
		"pelanggan.id"),
	" inner join legal on pelanggan.lgl=legal.id inner join lokasi1 on pelanggan.kecamatan=lokasi1.id inner join provinsi on pelanggan.provinsi=provinsi.kode_provinsi inner join bank on pelanggan.nm_bank=bank.id");


?>