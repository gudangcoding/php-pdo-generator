<?php
session_start();
include "../../inc/config.php";
session_check();
switch ($_GET["act"]) {
  case "in":
  
  $data = array(
    "Nama_Perusahaan"	=> $_POST["Nama_Perusahaan"],
  	"Alamat_Perusahaan"	=> $_POST["Alamat_Perusahaan"],
  	"Nama_Kota"			=> $_POST["Nama_Kota"],
  	"Jenis_Usaha"		=> $_POST["Jenis_Usaha"],
  	"Logo_Perusahaan"	=> $_POST["Logo_Perusahaan"],
  	"No_NIB"			=> $_POST["No_NIB"],
  	"No_NPWP"			=> $_POST["No_NPWP"],
  	"Alamat_NPWP"		=> $_POST["Alamat_NPWP"],
  	"Jumlah_Truk"		=> $_POST["Jumlah_Truk"]
  );

 
  $in = $db->insert("Informasi_Umum",$data);
    
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
   $data = array(
    "Nama_Perusahaan"=>$_POST["Nama_Perusahaan"],
    "Alamat_Perusahaan"=>$_POST["Alamat_Perusahaan"],
    "Jenis_Usaha"=>$_POST["Jenis_Usaha"],
    "NIB"=>$_POST["NIB"],
    "Nomor_NIB"=>$_POST["Nomor_NIB"],
    "NPWP"=>$_POST["NPWP"],
    "No_NPWP"=>$_POST["No_NPWP"],
    "Alamat_NPWP"=>$_POST["Alamat_NPWP"],
  );

    $up = $db->update("Akun",$data,"id",$_POST["id"]);
    if ($up=true) {
      echo "good";
    } else {
      return false; 
    }
    break;

  case 'edit':
    $data =array();
    $edit = $db->fetch_custom("SELECT * FROM Informasi_Umum WHERE id='$_POST[id]'");
   
      foreach($edit as $row) {
        $data[] = $row;
      }
      echo json_encode($data);
  break;

  case 'hapus':
    $data = array('tampil' => 'N', );
    $hapus = $db->update("Informasi_Umum",$data,"id",$_POST["id"]);
    if ($hapus=true) {
      echo "good";
    } else {
      return false; 
    }
  break;

  case 'kota':
    
      $response = [];
      $sql = "SELECT * FROM Kecamatan WHERE Nama_Kecamatan LIKE '%".$_GET['q']."%'";
      foreach ($db->fetch_custom($sql) as $row) {
        $response[] = array("id"=>$row->ID_Kecamatan, "text"=>$row->Nama_Kecamatan);
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