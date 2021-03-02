
<?php

include "../../inc/config.php";


$tes=$dtable->get("Biaya", "Biaya.id", array('Biaya.Menu','Biaya.Nama_Biaya','Biaya.Deskripsi','Biaya.Layanan_Berlangganan',"Biaya.id"),"");


?>