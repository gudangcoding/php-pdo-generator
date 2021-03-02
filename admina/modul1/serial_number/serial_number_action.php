<?php
session_start();
include "../../inc/config.php";
session_check();
switch ($_GET["act"]) {
  case "in":
  
  
  
  $data = array("legal"=>$_POST["legal"],"form"=>$_POST["form"],"prefix"=>$_POST["prefix"],"penomoran"=>$_POST["penomoran"],"user_id"=>$_POST["user_id"],);
  
  
  
   
    $in = $db->insert("serial_number",$data);
    
    if ($in=true) {
      echo "good";
    } else {
      return false;
    }
    break;
  case "delete":
    
    
    
    $db->delete("serial_number","id",$_GET["id"]);
    break;
  case "up":
   $data = array("legal"=>$_POST["legal"],"form"=>$_POST["form"],"prefix"=>$_POST["prefix"],"penomoran"=>$_POST["penomoran"],"user_id"=>$_POST["user_id"],);
   
   
   

    
    $up = $db->update("serial_number",$data,"id",$_POST["id"]);
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