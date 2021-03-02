
<?php

include "../../inc/config.php";


$tes=$dtable->get("ltl_good_details", "ltl_good_details.id", array('ltl_good_details.dn_no','ltl_good_details.item_name','ltl_good_details.Satuan','ltl_good_details.qty','ltl_good_details.remark','satuan.nm_satuan',"ltl_good_details.id")," inner join satuan on ltl_good_details.Satuan=satuan.id");


?>