
<?php

include "../../inc/config.php";


$tes=$dtable->get("armada", "armada.id", array('armada.nopol','armada.jenis_truk','armada.tahun','armada.warna','armada.stnk','armada.exp_stnk','armada.bpkb','armada.exp_bpkb','armada.panjang','armada.lebar','armada.tinggi','armada.kapasitas_kubik','armada.kapasitas_kg','armada.status',"armada.id"),"");


?>