<?php
session_start();
include "../../inc/config.php";
session_check();
switch ($_GET["act"]) {
  case "in":
  
  
  
  $data = array("nm_legal"=>$_POST["nm_legal"],"inisial"=>$_POST["inisial"],);
  
  
  
   
    $in = $db->insert("legal",$data);
    
    if ($in=true) {
      echo "good";
    } else {
      return false;
    }
    break;
  case "delete":
    
    
    
    $db->delete("legal","id",$_GET["id"]);
    break;
  case "up":
   $data = array("nm_legal"=>$_POST["nm_legal"],"inisial"=>$_POST["inisial"],);
   
   
   

    
    $up = $db->update("legal",$data,"id",$_POST["id"]);
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