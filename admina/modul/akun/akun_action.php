<?php
session_start();
include "../../inc/config.php";
session_check();
switch ($_GET["act"]) {
  case "in":
  
  if (!is_dir("../../../upload/akun")) {
              mkdir("../../../upload/akun");
            }
  
  $data = array("nama_perusahaan"=>$_POST["nama_perusahaan"],"alamat_perusahaan"=>$_POST["alamat_perusahaan"],"nama_kota"=>$_POST["nama_kota"],"jenis_usaha"=>$_POST["jenis_usaha"],"nib"=>$_POST["nib"],"npwp"=>$_POST["npwp"],"alamat_npwp"=>$_POST["alamat_npwp"],"jumlah_truk"=>$_POST["jumlah_truk"],"nm_lengkap"=>$_POST["nm_lengkap"],"alamat_email_akun"=>$_POST["alamat_email_akun"],"status"=>$_POST["status"],"posisi"=>$_POST["posisi"],"hp"=>$_POST["hp"],"nm_lengkap_akun_bank"=>$_POST["nm_lengkap_akun_bank"],"rekening"=>$_POST["rekening"],"bank"=>$_POST["bank"],"menu"=>$_POST["menu"],"nama_biaya"=>$_POST["nama_biaya"],"deskripsi"=>$_POST["deskripsi"],"layanan_berlangganan"=>$_POST["layanan_berlangganan"],);
  
  
                    if (!preg_match("/.(png|jpg|jpeg|gif|bmp)$/i", $_FILES["logo_perusahaan"]["name"]) ) {

              echo "pastikan file yang anda pilih png|jpg|jpeg|gif";
              exit();

            } else {
$db->compressImage($_FILES["logo_perusahaan"]["type"],$_FILES["logo_perusahaan"]["tmp_name"],"../../../upload/akun/",$_FILES["logo_perusahaan"]["name"],512,512);
            $logo_perusahaan = array("logo_perusahaan"=>$_FILES["logo_perusahaan"]["name"]);
              $data = array_merge($data,$logo_perusahaan);
            }
  
   
    $in = $db->insert("akun",$data);
    
    if ($in=true) {
      echo "good";
    } else {
      return false;
    }
    break;
  case "delete":
    
    
    $db->deleteDirectory("../../../upload/akun/".$db->fetch_single_row("akun","id",$_POST["id"])->logo_perusahaan);
    
    $db->delete("akun","id",$_GET["id"]);
    break;
  case "up":
   $data = array("nama_perusahaan"=>$_POST["nama_perusahaan"],"alamat_perusahaan"=>$_POST["alamat_perusahaan"],"nama_kota"=>$_POST["nama_kota"],"jenis_usaha"=>$_POST["jenis_usaha"],"nib"=>$_POST["nib"],"npwp"=>$_POST["npwp"],"alamat_npwp"=>$_POST["alamat_npwp"],"jumlah_truk"=>$_POST["jumlah_truk"],"nm_lengkap"=>$_POST["nm_lengkap"],"alamat_email_akun"=>$_POST["alamat_email_akun"],"status"=>$_POST["status"],"posisi"=>$_POST["posisi"],"hp"=>$_POST["hp"],"nm_lengkap_akun_bank"=>$_POST["nm_lengkap_akun_bank"],"rekening"=>$_POST["rekening"],"bank"=>$_POST["bank"],"menu"=>$_POST["menu"],"nama_biaya"=>$_POST["nama_biaya"],"deskripsi"=>$_POST["deskripsi"],"layanan_berlangganan"=>$_POST["layanan_berlangganan"],);
   
   
                         if(isset($_FILES["logo_perusahaan"]["name"])) {
                        if (!preg_match("/.(png|jpg|jpeg|gif|bmp)$/i", $_FILES["logo_perusahaan"]["name"]) ) {

              echo "pastikan file yang anda pilih gambar";
              exit();

            } else {
$db->compressImage($_FILES["logo_perusahaan"]["type"],$_FILES["logo_perusahaan"]["tmp_name"],"../../../upload/akun/",$_FILES["logo_perusahaan"]["name"],512,512);
              $db->deleteDirectory("../../../upload/akun/".$db->fetch_single_row("akun","id",$_POST["id"])->logo_perusahaan);
              $logo_perusahaan = array("logo_perusahaan"=>$_FILES["logo_perusahaan"]["name"]);
              $data = array_merge($data,$logo_perusahaan);
            }

                         }
   

    
    $up = $db->update("akun",$data,"id",$_POST["id"]);
    if ($up=true) {
      echo "good";
    } else {
      return false; 
    }
    break;

    case 'kota':
    $response = [];
    $sql = "SELECT * FROM lokasi1 WHERE city LIKE '%".$_GET['q']."%'";
    foreach ($db->fetch_custom($sql) as $row) {
      $response[] = array("id"=>$row->id, "text"=>$row->city);
    }
     echo json_encode($response);
break;

 case 'jenis_usaha':
    
      $response = [];
      $sql = "SELECT * FROM jenis_usaha WHERE jenis_usaha LIKE '%".$_GET['q']."%'";
      foreach ($db->fetch_custom($sql) as $row) {
        $response[] = array("id"=>$row->id, "text"=>$row->jenis_usaha);
      }
       echo json_encode($response);
    
    break;
  default:
    # code...
    break;
}

?>