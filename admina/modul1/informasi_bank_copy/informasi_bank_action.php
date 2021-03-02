<?php
session_start();
include "../../inc/config.php";
session_check();
switch ($_GET["act"]) {
  case "in":
  
  
  
  $data = array("nama_lengkap"=>$_POST["nama_lengkap"],"nama_bank"=>$_POST["nama_bank"],"nomor_rek"=>$_POST["nomor_rek"],);
  
  
  
   
    $in = $db->insert("msbank",$data);
    
    if ($in=true) {
      echo "good";
    } else {
      return false;
    }
    break;
  case "delete":
    
    
    
    $db->delete("msbank","id_bank",$_GET["id"]);
    break;
  case "up":
   $data = array("nama_lengkap"=>$_POST["nama_lengkap"],"nama_bank"=>$_POST["nama_bank"],"nomor_rek"=>$_POST["nomor_rek"],);
   
   
   

    
    $up = $db->update("msbank",$data,"id_bank",$_POST["id"]);
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