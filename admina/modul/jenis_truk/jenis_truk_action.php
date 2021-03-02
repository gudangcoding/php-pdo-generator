<?php
session_start();
include "../../inc/config.php";
session_check();
switch ($_GET["act"]) {
  case "in":
  
  
  
  $data = array(
    "kode_jenis_truk"=>$_POST["kode_jenis_truk"],
    "nama_jenis_truk"=>$_POST["nama_jenis_truk"],
    "kapasitaston"=>$_POST["kapasitaston"],
    "kapasitaskubik"=>$_POST["kapasitaskubik"],
  );
  
  
  
   
    $in = $db->insert("jenis_truk",$data);
    
    if ($in=true) {
      echo "good";
    } else {
      return false;
    }
    break;
  case "delete":
    
    
    
    $db->delete("jenis_truk","id",$_GET["id"]);
    break;
  case "up":
   $data = array(
    "kode_jenis_truk"=>$_POST["kode_jenis_truk"],
    "nama_jenis_truk"=>$_POST["nama_jenis_truk"],
    "kapasitaston"=>$_POST["kapasitaston"],
    "kapasitaskubik"=>$_POST["kapasitaskubik"],
  );
   
   
   

    
    $up = $db->update("jenis_truk",$data,"id",$_POST["id"]);
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