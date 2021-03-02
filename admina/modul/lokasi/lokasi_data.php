
<?php

include "../../inc/config.php";


$tes=$dtable->get("lokasi_kantor", "lokasi_kantor.id", 
	array(
		'sys_users.first_name',
		'lokasi_kantor.alamat',
		'lokasi_kantor.urban',
		'lokasi_kantor.sub_district',
		'lokasi_kantor.city',
		'lokasi_kantor.postal_code',
		'lokasi_kantor.province_code',
		"lokasi_kantor.id"),
		"inner join sys_users on lokasi_kantor.id_perusahaan=sys_users.id");


?>