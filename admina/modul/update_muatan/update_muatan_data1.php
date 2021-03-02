
<?php
include "../../inc/config.php";


$tes=$dtable->get(
	"ltl", "ltl.id", array(
		'',
		'ltl.dn_no',
		'ltl.req_date',
		'ltl.job_order_status',
		'ltl.pic_name',
		'ltl.pic_hp',
		'legal.nm_legal',
		'customer.Nama_Legal',
		'customer.pic_name',
		'customer.pic_no',
		'status.nm_status',
		'provinsi.province_name_en',
		'site.name',
		'sys_users.username',
		"ltl.id"),
	" inner join shipment_type on ltl.shipment_type=shipment_type.id 
	  inner join transport_mode on ltl.moda_transport=transport_mode.id 
	  inner join legal on ltl.id_legal=legal.id 
	  inner join customer on ltl.id_customer=customer.id 
	  inner join status on ltl.job_order_status=status.id 
	  inner join provinsi on ltl.destination=provinsi.province_code 
	  inner join site on ltl.site_id=site.id 
	  inner join sys_users on ltl.perusahaan_id=sys_users.id
	  ");

?>