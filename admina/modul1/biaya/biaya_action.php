<?php
session_start();
include "../../inc/config.php";
session_check();
switch ($_GET["act"]) {
  case "in":
  
  
  
  $data = array("Menu"=>$_POST["Menu"],"Nama_Biaya"=>$_POST["Nama_Biaya"],"Deskripsi"=>$_POST["Deskripsi"],"Layanan_Berlangganan"=>$_POST["Layanan_Berlangganan"],);
  
  
  
   
    $in = $db->insert("Biaya",$data);
    
    if ($in=true) {
      echo "good";
    } else {
      return false;
    }
    break;
  case "delete":
    
    
    
    $db->delete("Biaya","id",$_GET["id"]);
    break;
  case "up":
   $data = array("Menu"=>$_POST["Menu"],"Nama_Biaya"=>$_POST["Nama_Biaya"],"Deskripsi"=>$_POST["Deskripsi"],"Layanan_Berlangganan"=>$_POST["Layanan_Berlangganan"],);
   
   
   

    
    $up = $db->update("Biaya",$data,"id",$_POST["id"]);
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