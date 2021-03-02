<?php
session_start();
include "../../inc/config.php";
session_check();
switch ($_GET["act"]) {
  case "in":
  
  
  
  $data = array("dn_no"=>$_POST["dn_no"],"id_vendor"=>$_POST["id_vendor"],"no_pol"=>$_POST["no_pol"],"driver"=>$_POST["driver"],"hp_driver1"=>$_POST["hp_driver1"],"hp_driver2"=>$_POST["hp_driver2"],"co_driver"=>$_POST["co_driver"],"hp_co_driver1"=>$_POST["hp_co_driver1"],"hp_co_driver2"=>$_POST["hp_co_driver2"],"remark"=>$_POST["remark"],);
  
  
  
   
    $in = $db->insert("ltl_vehicle_detail",$data);
    
    if ($in=true) {
      echo "good";
    } else {
      return false;
    }
    break;
  case "delete":
    
    
    
    $db->delete("ltl_vehicle_detail","id",$_GET["id"]);
    break;
  case "up":
   $data = array("dn_no"=>$_POST["dn_no"],"id_vendor"=>$_POST["id_vendor"],"no_pol"=>$_POST["no_pol"],"driver"=>$_POST["driver"],"hp_driver1"=>$_POST["hp_driver1"],"hp_driver2"=>$_POST["hp_driver2"],"co_driver"=>$_POST["co_driver"],"hp_co_driver1"=>$_POST["hp_co_driver1"],"hp_co_driver2"=>$_POST["hp_co_driver2"],"remark"=>$_POST["remark"],);
   
   
   

    
    $up = $db->update("ltl_vehicle_detail",$data,"id",$_POST["id"]);
    if ($up=true) {
      echo "good";
    } else {
      return false; 
    }
    break;
  default:
    # code...
    break;
}

?>