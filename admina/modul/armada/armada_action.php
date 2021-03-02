<?php
session_start();
include "../../inc/config.php";
session_check();
switch ($_GET["act"]) {
  case "in":
  
  
  
  $data = array("nopol"=>$_POST["nopol"],"jenis_truk"=>$_POST["jenis_truk"],"tahun"=>$_POST["tahun"],"warna"=>$_POST["warna"],"stnk"=>$_POST["stnk"],"exp_stnk"=>$_POST["exp_stnk"],"bpkb"=>$_POST["bpkb"],"exp_bpkb"=>$_POST["exp_bpkb"],"panjang"=>$_POST["panjang"],"lebar"=>$_POST["lebar"],"tinggi"=>$_POST["tinggi"],"kapasitas_kubik"=>$_POST["kapasitas_kubik"],"kapasitas_kg"=>$_POST["kapasitas_kg"],);
  
  
  
   if(isset($_POST["status"])=="on")
    {
      $status = array("status"=>"Aktif");
      $data=array_merge($data,$status);
    } else { 
      $status = array("status"=>"Nonaktif");
      $data=array_merge($data,$status);
    }
    $in = $db->insert("armada",$data);
    
    if ($in=true) {
      echo "good";
    } else {
      return false;
    }
    break;
  case "delete":
    
    
    
    $db->delete("armada","id",$_GET["id"]);
    break;
  case "up":
   $data = array("nopol"=>$_POST["nopol"],"jenis_truk"=>$_POST["jenis_truk"],"tahun"=>$_POST["tahun"],"warna"=>$_POST["warna"],"stnk"=>$_POST["stnk"],"exp_stnk"=>$_POST["exp_stnk"],"bpkb"=>$_POST["bpkb"],"exp_bpkb"=>$_POST["exp_bpkb"],"panjang"=>$_POST["panjang"],"lebar"=>$_POST["lebar"],"tinggi"=>$_POST["tinggi"],"kapasitas_kubik"=>$_POST["kapasitas_kubik"],"kapasitas_kg"=>$_POST["kapasitas_kg"],);
   
   
   

    if(isset($_POST["status"])=="on")
    {
      $status = array("status"=>"Aktif");
      $data=array_merge($data,$status);
    } else { 
      $status = array("status"=>"Nonaktif");
      $data=array_merge($data,$status);
    }
    $up = $db->update("armada",$data,"id",$_POST["id"]);
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