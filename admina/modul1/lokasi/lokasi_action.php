<?php
session_start();
include "../../inc/config.php";
session_check();
switch ($_GET["act"]) {
  case "in":
  
  
  
  $data = array("level_user"=>$_POST["level_user"],"ket"=>$_POST["ket"],);
  
  
  
   
    $in = $db->insert("level",$data);
    
    if ($in=true) {
      echo "good";
    } else {
      return false;
    }
    break;
  case "delete":
    
    
    
    $db->delete("level","id_level",$_GET["id"]);
    break;
  case "up":
   $data = array("level_user"=>$_POST["level_user"],"ket"=>$_POST["ket"],);
   
   
   

    
    $up = $db->update("level",$data,"id_level",$_POST["id"]);
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