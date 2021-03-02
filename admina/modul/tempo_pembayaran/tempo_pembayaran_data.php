
<?php

include "../../inc/config.php";


$tes=$dtable->get("tempo_pembayaran", "tempo_pembayaran.id", 
	array(
		'tempo_pembayaran.tempo',
		'tempo_pembayaran.jumlah_hari',
		'tempo_pembayaran.keterangan',
		"tempo_pembayaran.id"),"");


?>