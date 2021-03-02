<?php
session_start();
include "../../inc/config.php";
include "../../inc/fungsi.php";
session_check();
switch ($_GET["act"]) {
  case "in":
  
  
  
  $data = array("nm_perusahaan"=>$_POST["nm_perusahaan"],"lgl"=>$_POST["lgl"],"almt_kantor"=>$_POST["almt_kantor"],"email"=>$_POST["email"],"kecamatan"=>$_POST["kecamatan"],"website"=>$_POST["website"],"kota"=>$_POST["kota"],"tlp"=>$_POST["tlp"],"provinsi"=>$_POST["provinsi"],"nm_lengkap"=>$_POST["nm_lengkap"],"posisi"=>$_POST["posisi"],"no_hp"=>$_POST["no_hp"],"npwp"=>$_POST["npwp"],"nm_bank"=>$_POST["nm_bank"],"almt_penagihan"=>$_POST["almt_penagihan"],"rekening"=>$_POST["rekening"],"cabang"=>$_POST["cabang"],);
  
  
  
   if(isset($_POST["status"])=="on")
    {
      $status = array("status"=>"Aktif");
      $data=array_merge($data,$status);
    } else { 
      $status = array("status"=>"Nonaktif");
      $data=array_merge($data,$status);
    }
    $in = $db->insert("pelanggan",$data);
    
    if ($in=true) {
      echo "good";
    } else {
      return false;
    }
    break;
  case "delete":
    
    
    
    $db->delete("pelanggan","id",$_GET["id"]);
    break;
  case "up":
   $data = array("nm_perusahaan"=>$_POST["nm_perusahaan"],"lgl"=>$_POST["lgl"],"almt_kantor"=>$_POST["almt_kantor"],"email"=>$_POST["email"],"kecamatan"=>$_POST["kecamatan"],"website"=>$_POST["website"],"kota"=>$_POST["kota"],"tlp"=>$_POST["tlp"],"provinsi"=>$_POST["provinsi"],"nm_lengkap"=>$_POST["nm_lengkap"],"posisi"=>$_POST["posisi"],"no_hp"=>$_POST["no_hp"],"npwp"=>$_POST["npwp"],"nm_bank"=>$_POST["nm_bank"],"almt_penagihan"=>$_POST["almt_penagihan"],"rekening"=>$_POST["rekening"],"cabang"=>$_POST["cabang"],);
   
   
   

    if(isset($_POST["status"])=="on")
    {
      $status = array("status"=>"Aktif");
      $data=array_merge($data,$status);
    } else { 
      $status = array("status"=>"Nonaktif");
      $data=array_merge($data,$status);
    }
    $up = $db->update("pelanggan",$data,"id",$_POST["id"]);
    if ($up=true) {
      echo "good";
    } else {
      return false; 
    }
    break;
 case 'kota':
      autocomplete('lokasi1','kota','kota');
    break;

    case 'kecamatan':
      autocomplete('lokasi1','kecamatan','kecamatan'); 
    break;

    case 'provinsi':
      autocomplete('provinsi','nama_provinsi','nama_provinsi'); 
    break;

 case 'bank':
      autocomplete('bank','nama','nama'); 
    break;


  default:
    # code...
    break;
}

?>