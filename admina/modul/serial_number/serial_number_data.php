
<?php

include "../../inc/config.php";


$tes=$dtable->get(
	"serial_number", 
	"serial_number.id", 
	array(
		'serial_number.id_legal',
		'serial_number.awalan_kwitansi',
		'serial_number.inisial_dept',
		'serial_number.awal_nomor',
		"serial_number.id"),
	" ");


?>