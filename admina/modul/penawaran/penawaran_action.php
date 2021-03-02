<?php
session_start();
include "../../inc/config.php";
include "../../inc/fungsi.php";
session_check();
switch ($_GET["act"]) {
  case "in":
  
  
  
  $data = array("idnomorpenawaran"=>$_POST["idnomorpenawaran"],"legal"=>$_POST["legal"],"nm_perusahaan"=>$_POST["nm_perusahaan"],"jns_layanan"=>$_POST["jns_layanan"],"tgl_penawaran"=>$_POST["tgl_penawaran"],"tgl_exp"=>$_POST["tgl_exp"],"zona_asal"=>$_POST["zona_asal"],"dari_alamat"=>$_POST["dari_alamat"],"zona_tujuan"=>$_POST["zona_tujuan"],"ke_alamat"=>$_POST["ke_alamat"],"satuan"=>$_POST["satuan"],"jenis_truk"=>$_POST["jenis_truk"],"tarif"=>$_POST["tarif"],);
  
  
  
   if(isset($_POST["status"])=="on")
    {
      $status = array("status"=>"Aktif");
      $data=array_merge($data,$status);
    } else { 
      $status = array("status"=>"Nonaktif");
      $data=array_merge($data,$status);
    }if(isset($_POST["status_pajak"])=="on")
    {
      $status_pajak = array("status_pajak"=>"Y");
      $data=array_merge($data,$status_pajak);
    } else { 
      $status_pajak = array("status_pajak"=>"N");
      $data=array_merge($data,$status_pajak);
    }
    $in = $db->insert("penawaran1",$data);
    
    if ($in=true) {
      echo "good";
    } else {
      return false;
    }
    break;
  case "delete":
    
    
    
    $db->delete("penawaran1","id",$_GET["id"]);
    break;
  case "up":
   $data = array("idnomorpenawaran"=>$_POST["idnomorpenawaran"],"legal"=>$_POST["legal"],"nm_perusahaan"=>$_POST["nm_perusahaan"],"jns_layanan"=>$_POST["jns_layanan"],"tgl_penawaran"=>$_POST["tgl_penawaran"],"tgl_exp"=>$_POST["tgl_exp"],"zona_asal"=>$_POST["zona_asal"],"dari_alamat"=>$_POST["dari_alamat"],"zona_tujuan"=>$_POST["zona_tujuan"],"ke_alamat"=>$_POST["ke_alamat"],"satuan"=>$_POST["satuan"],"jenis_truk"=>$_POST["jenis_truk"],"tarif"=>$_POST["tarif"],);
   
   
   

    if(isset($_POST["status"])=="on")
    {
      $status = array("status"=>"Y");
      $data=array_merge($data,$status);
    } else { 
      $status = array("status"=>"N");
      $data=array_merge($data,$status);
    }if(isset($_POST["status_pajak"])=="on")
    {
      $status_pajak = array("status_pajak"=>"Y");
      $data=array_merge($data,$status_pajak);
    } else { 
      $status_pajak = array("status_pajak"=>"N");
      $data=array_merge($data,$status_pajak);
    }
    $up = $db->update("penawaran1",$data,"id",$_POST["id"]);
    if ($up=true) {
      echo "good";
    } else {
      return false; 
    }
    break;
    case 'kota':
      autocomplete('lokasi1','kota','kota');
    break;

   
  default:
    # code...
    break;
}

?>