
<?php

include "../../inc/config.php";


$tes=$dtable->get("serial_number", "serial_number.id", array('serial_number.legal','serial_number.form','serial_number.prefix','serial_number.penomoran','serial_number.user_id','Legal.Nama_Legal','Legal.Inisial','sys_users.first_name',"serial_number.id")," inner join Legal on serial_number.legal=Legal.Inisial inner join sys_users on serial_number.user_id=sys_users.id");


?>