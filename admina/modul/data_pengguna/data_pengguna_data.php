
<?php

include "../../inc/config.php";


$tes=$dtable->get("sys_menu_role", "sys_menu_role.id", array('sys_menu_role.id_menu','sys_menu_role.group_id','sys_menu_role.read_act','sys_menu_role.insert_act','sys_menu_role.update_act','sys_menu_role.delete_act',"sys_menu_role.id"),"");


?>