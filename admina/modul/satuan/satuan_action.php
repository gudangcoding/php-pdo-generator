<?php
session_start();
include "../../inc/config.php";
session_check();
switch ($_GET["act"]) {
  case "in":
  
  
  
  $data = array("nm_satuan"=>$_POST["nm_satuan"],"keterangan"=>$_POST["keterangan"],);
  
  
  
   
    $in = $db->insert("satuan",$data);
    
    if ($in=true) {
      echo "good";
    } else {
      return false;
    }
    break;
  case "delete":
    
    
    
    $db->delete("satuan","id",$_GET["id"]);
    break;
  case "up":
   $data = array("nm_satuan"=>$_POST["nm_satuan"],"keterangan"=>$_POST["keterangan"],);
   
   
   

    
    $up = $db->update("satuan",$data,"id",$_POST["id"]);
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