
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
		"pelanggan.id"),
	" ");


?>