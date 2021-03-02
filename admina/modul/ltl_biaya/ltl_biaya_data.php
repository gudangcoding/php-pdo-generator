
<?php

include "../../inc/config.php";


$tes=$dtable->get("ltl_cost_details", "ltl_cost_details.id", array('ltl_cost_details.dn_no','ltl_cost_details.nama_biaya','ltl_cost_details.nominal','ltl_cost_details.keterangan',"ltl_cost_details.id"),"");


?>