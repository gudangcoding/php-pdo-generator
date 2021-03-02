<?php
session_start();
include "../../inc/config.php";
session_check();
switch ($_GET["act"]) {
  case "in":
  
  
  
  $data = array("dn_no"=>$_POST["dn_no"],"nama_biaya"=>$_POST["nama_biaya"],"nominal"=>$_POST["nominal"],"keterangan"=>$_POST["keterangan"],);
  
  
  
   
    $in = $db->insert("ltl_cost_details",$data);
    
    if ($in=true) {
      echo "good";
    } else {
      return false;
    }
    break;
  case "delete":
    
    
    
    $db->delete("ltl_cost_details","id",$_GET["id"]);
    break;
  case "up":
   $data = array("dn_no"=>$_POST["dn_no"],"nama_biaya"=>$_POST["nama_biaya"],"nominal"=>$_POST["nominal"],"keterangan"=>$_POST["keterangan"],);
   
   
   

    
    $up = $db->update("ltl_cost_details",$data,"id",$_POST["id"]);
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