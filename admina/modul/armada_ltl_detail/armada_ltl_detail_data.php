
<?php

include "../../inc/config.php";


$tes=$dtable->get("ltl_vehicle_detail", "ltl_vehicle_detail.id", array('ltl_vehicle_detail.dn_no','ltl_vehicle_detail.id_vendor','ltl_vehicle_detail.no_pol','ltl_vehicle_detail.driver','ltl_vehicle_detail.hp_driver1','ltl_vehicle_detail.co_driver','ltl_vehicle_detail.hp_co_driver1','ltl_vehicle_detail.remark','vendor.nm_perusahaan',"ltl_vehicle_detail.id")," inner join vendor on ltl_vehicle_detail.id_vendor=vendor.id");


?>