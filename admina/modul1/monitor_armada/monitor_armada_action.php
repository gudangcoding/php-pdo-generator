<?php
session_start();
include "../../inc/config.php";
session_check();
switch ($_GET["act"]) {
  case "in":
  
  
  
  $data = array("nama"=>$_POST["nama"],"kode"=>$_POST["kode"],);
  
  
  
   
    $in = $db->insert("Bank",$data);
    
    if ($in=true) {
      echo "good";
    } else {
      return false;
    }
    break;
  case "delete":
    
    
    
    $db->delete("Bank","id",$_GET["id"]);
    break;
  case "up":
   $data = array("nama"=>$_POST["nama"],"kode"=>$_POST["kode"],);
   
   
   

    
    $up = $db->update("Bank",$data,"id",$_POST["id"]);
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