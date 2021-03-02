<?php
session_start();
include "../../inc/config.php";
session_check();
switch ($_GET["act"]) {
  case "in":
  
  
  
  $data = array(
    "tempo"=>$_POST["tempo"],
    "jumlah_hari"=>$_POST["jumlah_hari"],
    "keterangan"=>$_POST["keterangan"],
  );
  
  
  
   
    $in = $db->insert("tempo_pembayaran",$data);
    
    if ($in=true) {
      echo "good";
    } else {
      return false;
    }
    break;
  case "delete":
    
    
    
    $db->delete("tempo_pembayaran","id",$_GET["id"]);
    break;
  case "up":
   $data = array("tempo"=>$_POST["tempo"],
    "jumlah_hari"=>$_POST["jumlah_hari"],
    "keterangan"=>$_POST["keterangan"],
  );
   
   
   

    
    $up = $db->update("tempo_pembayaran",$data,"id",$_POST["id"]);
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