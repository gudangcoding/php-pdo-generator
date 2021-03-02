
<?php

include "../../inc/config.php";


$tes=$dtable->get("jenis_truk", "jenis_truk.id", 
	array(
		'jenis_truk.kode_jenis_truk',
		'jenis_truk.nama_jenis_truk',
		'jenis_truk.kapasitaston',
		'jenis_truk.kapasitaskubik',
		"jenis_truk.id"),"");


?>