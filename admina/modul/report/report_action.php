<?php
session_start();
include "../../inc/config.php";
session_check();
switch ($_GET["act"]) {
  case "in":
  
  
  
  $data = array("kode_layanan"=>$_POST["kode_layanan"],);
  
  
  
   
    $in = $db->insert("ltl",$data);
    
    if ($in=true) {
      echo "good";
    } else {
      return false;
    }
    break;
  case "delete":
    
    
    
    $db->delete("ltl","dn_no",$_GET["id"]);
    break;
  case "up":
   $data = array("kode_layanan"=>$_POST["kode_layanan"],);
   
   
   

    
    $up = $db->update("ltl",$data,"dn_no",$_POST["id"]);
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