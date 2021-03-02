<?php
session_start();
include "../../inc/config.php";
session_check();
switch ($_GET["act"]) {
  case "in":
  
  
  
  $data = array("id_legal"=>$_POST["id_legal"],"awalan_kwitansi"=>$_POST["awalan_kwitansi"],"inisial_dept"=>$_POST["inisial_dept"],"awal_nomor"=>$_POST["awal_nomor"],);
  
  
  
   
    $in = $db->insert("serial_number",$data);
    
    if ($in=true) {
      echo "good";
    } else {
      return false;
    }
    break;
  case "delete":
    
    
    
    $db->delete("serial_number","id",$_GET["id"]);
    break;
  case "up":
   $data = array("id_legal"=>$_POST["id_legal"],"awalan_kwitansi"=>$_POST["awalan_kwitansi"],"inisial_dept"=>$_POST["inisial_dept"],"awal_nomor"=>$_POST["awal_nomor"],);
   
   
   

    
    $up = $db->update("serial_number",$data,"id",$_POST["id"]);
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