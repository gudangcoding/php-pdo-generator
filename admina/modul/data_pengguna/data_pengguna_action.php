<?php
session_start();
include "../../inc/config.php";
session_check();
switch ($_GET["act"]) {
  case "in":
  
  
  
  $data = array("id_menu"=>$_POST["id_menu"],"group_id"=>$_POST["group_id"],);
  
  
  
   if(isset($_POST["read_act"])=="on")
    {
      $read_act = array("read_act"=>"Y");
      $data=array_merge($data,$read_act);
    } else { 
      $read_act = array("read_act"=>"N");
      $data=array_merge($data,$read_act);
    }if(isset($_POST["insert_act"])=="on")
    {
      $insert_act = array("insert_act"=>"Y");
      $data=array_merge($data,$insert_act);
    } else { 
      $insert_act = array("insert_act"=>"N");
      $data=array_merge($data,$insert_act);
    }if(isset($_POST["update_act"])=="on")
    {
      $update_act = array("update_act"=>"Y");
      $data=array_merge($data,$update_act);
    } else { 
      $update_act = array("update_act"=>"N");
      $data=array_merge($data,$update_act);
    }if(isset($_POST["delete_act"])=="on")
    {
      $delete_act = array("delete_act"=>"Y");
      $data=array_merge($data,$delete_act);
    } else { 
      $delete_act = array("delete_act"=>"N");
      $data=array_merge($data,$delete_act);
    }
    $in = $db->insert("sys_menu_role",$data);
    
    if ($in=true) {
      echo "good";
    } else {
      return false;
    }
    break;
  case "delete":
    
    
    
    $db->delete("sys_menu_role","id",$_GET["id"]);
    break;
  case "up":
   $data = array("id_menu"=>$_POST["id_menu"],"group_id"=>$_POST["group_id"],);
   
   
   

    if(isset($_POST["read_act"])=="on")
    {
      $read_act = array("read_act"=>"Y");
      $data=array_merge($data,$read_act);
    } else { 
      $read_act = array("read_act"=>"N");
      $data=array_merge($data,$read_act);
    }if(isset($_POST["insert_act"])=="on")
    {
      $insert_act = array("insert_act"=>"Y");
      $data=array_merge($data,$insert_act);
    } else { 
      $insert_act = array("insert_act"=>"N");
      $data=array_merge($data,$insert_act);
    }if(isset($_POST["update_act"])=="on")
    {
      $update_act = array("update_act"=>"Y");
      $data=array_merge($data,$update_act);
    } else { 
      $update_act = array("update_act"=>"N");
      $data=array_merge($data,$update_act);
    }if(isset($_POST["delete_act"])=="on")
    {
      $delete_act = array("delete_act"=>"Y");
      $data=array_merge($data,$delete_act);
    } else { 
      $delete_act = array("delete_act"=>"N");
      $data=array_merge($data,$delete_act);
    }
    $up = $db->update("sys_menu_role",$data,"id",$_POST["id"]);
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