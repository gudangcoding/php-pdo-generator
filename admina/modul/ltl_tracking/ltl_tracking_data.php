
<?php

include "../../inc/config.php";


$tes=$dtable->get("ltl_tracking_details", "ltl_tracking_details.id", array('ltl_tracking_details.dn_no','ltl_tracking_details.id_status','ltl_tracking_details.status_date','ltl_tracking_details.keterangan','status.nm_status',"ltl_tracking_details.id")," inner join status on ltl_tracking_details.id_status=status.id");


?>