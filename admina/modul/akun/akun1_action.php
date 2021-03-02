<?php
session_start();
include "../../inc/config.php";
session_check();
switch ($_GET["act"]) {
  case "in":
  if (!is_dir("../../../upload/akun1")) {
              mkdir("../../../upload/akun1");
            }
  
  
  $data = array("nama_perusahaan"=>$_POST["nama_perusahaan"],"alamat_perusahaan"=>$_POST["alamat_perusahaan"],"nama_kota"=>$_POST["nama_kota"],"jenis_usaha"=>$_POST["jenis_usaha"],"nib"=>$_POST["nib"],"npwp"=>$_POST["npwp"],"alamat_npwp"=>$_POST["alamat_npwp"],"jumlah_truk"=>$_POST["jumlah_truk"],"nm_lengkap"=>$_POST["nm_lengkap"],"alamat_email_akun"=>$_POST["alamat_email_akun"],"posisi"=>$_POST["posisi"],"hp"=>$_POST["hp"],"nm_lengkap_akun_bank"=>$_POST["nm_lengkap_akun_bank"],"rekening"=>$_POST["rekening"],"bank"=>$_POST["bank"],"menu"=>$_POST["menu"],"nama_biaya"=>$_POST["nama_biaya"],"deskripsi"=>$_POST["deskripsi"],"layanan_berlangganan"=>$_POST["layanan_berlangganan"],);
  
                    if (!preg_match("/.(pdf|png|docx|jpg)$/i", $_FILES["logo_perusahaan"]["name"]) ) {

              echo "pastikan file yang anda pilih pdf|png|docx|jpg";
              exit();

            } else {
              move_uploaded_file($_FILES["logo_perusahaan"]["tmp_name"], "../../../upload/akun1/".$_FILES['logo_perusahaan']['name']);
              $logo_perusahaan = array("logo_perusahaan"=>$_FILES["logo_perusahaan"]["name"]);
              $data = array_merge($data,$logo_perusahaan);
            }
  
  
   if(isset($_POST["status"])=="on")
    {
      $status = array("status"=>"Y");
      $data=array_merge($data,$status);
    } else { 
      $status = array("status"=>"N");
      $data=array_merge($data,$status);
    }
    $in = $db->insert("akun",$data);
    
    if ($in=true) {
      echo "good";
    } else {
      return false;
    }
    break;
  case "delete":
    
    
    $db->deleteDirectory("../../../upload/akun1/".$db->fetch_single_row("akun","id",$_POST["id"])->logo_perusahaan);
    $db->delete("akun","id",$_GET["id"]);
    break;
  case "up":
   $data = array("nama_perusahaan"=>$_POST["nama_perusahaan"],"alamat_perusahaan"=>$_POST["alamat_perusahaan"],"nama_kota"=>$_POST["nama_kota"],"jenis_usaha"=>$_POST["jenis_usaha"],"nib"=>$_POST["nib"],"npwp"=>$_POST["npwp"],"alamat_npwp"=>$_POST["alamat_npwp"],"jumlah_truk"=>$_POST["jumlah_truk"],"nm_lengkap"=>$_POST["nm_lengkap"],"alamat_email_akun"=>$_POST["alamat_email_akun"],"posisi"=>$_POST["posisi"],"hp"=>$_POST["hp"],"nm_lengkap_akun_bank"=>$_POST["nm_lengkap_akun_bank"],"rekening"=>$_POST["rekening"],"bank"=>$_POST["bank"],"menu"=>$_POST["menu"],"nama_biaya"=>$_POST["nama_biaya"],"deskripsi"=>$_POST["deskripsi"],"layanan_berlangganan"=>$_POST["layanan_berlangganan"],);
   
                         if(isset($_FILES["logo_perusahaan"]["name"])) {
                        if (!preg_match("/.(pdf|png|docx|jpg)$/i", $_FILES["logo_perusahaan"]["name"]) ) {

              echo "pastikan file yang anda pilih pdf|png|docx|jpg";
              exit();

            } else {
              move_uploaded_file($_FILES["logo_perusahaan"]["tmp_name"], "../../../upload/akun1/".$_FILES['logo_perusahaan']['name']);
              $db->deleteDirectory("../../../upload/akun1/".$db->fetch_single_row("akun","id",$_POST["id"])->logo_perusahaan);
              $logo_perusahaan = array("logo_perusahaan"=>$_FILES["logo_perusahaan"]["name"]);
              $data = array_merge($data,$logo_perusahaan);
            }

                         }
   
   

    if(isset($_POST["status"])=="on")
    {
      $status = array("status"=>"Y");
      $data=array_merge($data,$status);
    } else { 
      $status = array("status"=>"N");
      $data=array_merge($data,$status);
    }
    $up = $db->update("akun",$data,"id",$_POST["id"]);
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