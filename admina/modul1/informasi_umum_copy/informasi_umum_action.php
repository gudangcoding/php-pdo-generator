<?php
session_start();
include "../../inc/config.php";
session_check();
switch ($_GET["act"]) {
  case "in":
  
  
  
  $data = array("Nama_Perusahaan"=>$_POST["Nama_Perusahaan"],"Alamat_Perusahaan"=>$_POST["Alamat_Perusahaan"],"Nama_Legal"=>$_POST["Nama_Legal"],"Alamat_Legal"=>$_POST["Alamat_Legal"],"Nama_Lengkap"=>$_POST["Nama_Lengkap"],"Alamat_Email"=>$_POST["Alamat_Email"],"No_HP"=>$_POST["No_HP"],"Posisi"=>$_POST["Posisi"],"Password"=>$_POST["Password"],);
  
  
  
   
    $in = $db->insert("Akun",$data);
    
    if ($in=true) {
      echo "good";
    } else {
      return false;
    }
    break;
  case "delete":
    
    
    
    $db->delete("Akun","id",$_GET["id"]);
    break;
  case "up":
   $data = array("Nama_Perusahaan"=>$_POST["Nama_Perusahaan"],"Alamat_Perusahaan"=>$_POST["Alamat_Perusahaan"],"Nama_Legal"=>$_POST["Nama_Legal"],"Alamat_Legal"=>$_POST["Alamat_Legal"],"Nama_Lengkap"=>$_POST["Nama_Lengkap"],"Alamat_Email"=>$_POST["Alamat_Email"],"No_HP"=>$_POST["No_HP"],"Posisi"=>$_POST["Posisi"],"Password"=>$_POST["Password"],);
   
   
   

    
    $up = $db->update("Akun",$data,"id",$_POST["id"]);
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