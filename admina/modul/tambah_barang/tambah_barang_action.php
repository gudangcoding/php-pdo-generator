<?php
session_start();
include "../../inc/config.php";
session_check();
switch ($_GET["act"]) {
  case "in":
  
  
  
  $data = array("dn_no"=>$_POST["dn_no"],"item_name"=>$_POST["item_name"],"Satuan"=>$_POST["Satuan"],"qty"=>$_POST["qty"],"remark"=>$_POST["remark"],);
  
  
  
   
    $in = $db->insert("ltl_good_details",$data);
    
    if ($in=true) {
      echo "good";
    } else {
      return false;
    }
    break;
  case "delete":
    
    
    
    $db->delete("ltl_good_details","id",$_GET["id"]);
    break;
  case "up":
   $data = array("dn_no"=>$_POST["dn_no"],"item_name"=>$_POST["item_name"],"Satuan"=>$_POST["Satuan"],"qty"=>$_POST["qty"],"remark"=>$_POST["remark"],);
   
   
   

    
    $up = $db->update("ltl_good_details",$data,"id",$_POST["id"]);
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