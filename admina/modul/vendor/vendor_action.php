<?php
session_start();
include "../../inc/config.php";
session_check();
switch ($_GET["act"]) {
  case "in":
  
  
  
  $data = array("nm_perusahaan"=>$_POST["nm_perusahaan"],"alamat"=>$_POST["alamat"],"notlp"=>$_POST["notlp"],"nm_lengkap"=>$_POST["nm_lengkap"],"posisi"=>$_POST["posisi"],"nohp"=>$_POST["nohp"],"email"=>$_POST["email"],"nm_penagihan"=>$_POST["nm_penagihan"],"almt_penagihan"=>$_POST["almt_penagihan"],"kode_bank"=>$_POST["kode_bank"],"nm_bank"=>$_POST["nm_bank"],"cb_bank"=>$_POST["cb_bank"],"norek"=>$_POST["norek"],"no_truk"=>$_POST["no_truk"],"jns_truk"=>$_POST["jns_truk"],"stnk"=>$_POST["stnk"],"exp_stnk"=>$_POST["exp_stnk"],"pjg_bak"=>$_POST["pjg_bak"],"tinggi_bak"=>$_POST["tinggi_bak"],"lbr_bak"=>$_POST["lbr_bak"],"volume"=>$_POST["volume"],"kapasitas"=>$_POST["kapasitas"],"no_tarif"=>$_POST["no_tarif"],"tgl_penawaran"=>$_POST["tgl_penawaran"],"periode"=>$_POST["periode"],"tmp_bayar"=>$_POST["tmp_bayar"],"pelanggan"=>$_POST["pelanggan"],"dari"=>$_POST["dari"],"tujuan"=>$_POST["tujuan"],"satuan"=>$_POST["satuan"],"nilai"=>$_POST["nilai"],"satuan_penawaran"=>$_POST["satuan_penawaran"],);
  
  
  
   if(isset($_POST["status"])=="on")
    {
      $status = array("status"=>"Aktif");
      $data=array_merge($data,$status);
    } else { 
      $status = array("status"=>"Nonaktif");
      $data=array_merge($data,$status);
    }if(isset($_POST["sts_pajak"])=="on")
    {
      $sts_pajak = array("sts_pajak"=>"Inklusif");
      $data=array_merge($data,$sts_pajak);
    } else { 
      $sts_pajak = array("sts_pajak"=>"Eksklusif");
      $data=array_merge($data,$sts_pajak);
    }
    $in = $db->insert("vendor",$data);
    
    if ($in=true) {
      echo "good";
    } else {
      return false;
    }
    break;
  case "delete":
    
    
    
    $db->delete("vendor","id",$_GET["id"]);
    break;
  case "up":
   $data = array("nm_perusahaan"=>$_POST["nm_perusahaan"],"alamat"=>$_POST["alamat"],"notlp"=>$_POST["notlp"],"nm_lengkap"=>$_POST["nm_lengkap"],"posisi"=>$_POST["posisi"],"nohp"=>$_POST["nohp"],"email"=>$_POST["email"],"nm_penagihan"=>$_POST["nm_penagihan"],"almt_penagihan"=>$_POST["almt_penagihan"],"kode_bank"=>$_POST["kode_bank"],"nm_bank"=>$_POST["nm_bank"],"cb_bank"=>$_POST["cb_bank"],"norek"=>$_POST["norek"],"no_truk"=>$_POST["no_truk"],"jns_truk"=>$_POST["jns_truk"],"stnk"=>$_POST["stnk"],"exp_stnk"=>$_POST["exp_stnk"],"pjg_bak"=>$_POST["pjg_bak"],"tinggi_bak"=>$_POST["tinggi_bak"],"lbr_bak"=>$_POST["lbr_bak"],"volume"=>$_POST["volume"],"kapasitas"=>$_POST["kapasitas"],"no_tarif"=>$_POST["no_tarif"],"tgl_penawaran"=>$_POST["tgl_penawaran"],"periode"=>$_POST["periode"],"tmp_bayar"=>$_POST["tmp_bayar"],"pelanggan"=>$_POST["pelanggan"],"dari"=>$_POST["dari"],"tujuan"=>$_POST["tujuan"],"satuan"=>$_POST["satuan"],"nilai"=>$_POST["nilai"],"satuan_penawaran"=>$_POST["satuan_penawaran"],);
   
   
   

    if(isset($_POST["status"])=="on")
    {
      $status = array("status"=>"Y");
      $data=array_merge($data,$status);
    } else { 
      $status = array("status"=>"N");
      $data=array_merge($data,$status);
    }if(isset($_POST["sts_pajak"])=="on")
    {
      $sts_pajak = array("sts_pajak"=>"Y");
      $data=array_merge($data,$sts_pajak);
    } else { 
      $sts_pajak = array("sts_pajak"=>"N");
      $data=array_merge($data,$sts_pajak);
    }
    $up = $db->update("vendor",$data,"id",$_POST["id"]);
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