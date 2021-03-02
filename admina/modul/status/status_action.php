<?php
session_start();
include "../../inc/config.php";
session_check();
switch ($_GET["act"]) {
  case "in":
  
  
  
  $data = array(
    "modul"=>$_POST["modul"],
    "nm_status"=>$_POST["nm_status"],
    "deskripsi"=>$_POST["deskripsi"],
    "urutan"=>$_POST["urutan"],
  );
  
  
  
   
    $in = $db->insert("status",$data);
    
    if ($in=true) {
      echo "good";
    } else {
      return false;
    }
    break;
  case "delete":
    
    
    
    $db->delete("status","id",$_GET["id"]);
    break;
  case "up":
   $data = array(
    "modul"=>$_POST["modul"],
    "nm_status"=>$_POST["nm_status"],
    "deskripsi"=>$_POST["deskripsi"],
    "urutan"=>$_POST["urutan"],
  );
   
   
   

    
    $up = $db->update("status",$data,"id",$_POST["id"]);
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