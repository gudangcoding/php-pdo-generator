
<?php

include "../../inc/config.php";


$tes=$dtable->get("status", "status.id", 
	array('status.modul',
		'status.nm_status',
		'status.deskripsi',
		'status.urutan',
		"status.id"),"");


?>