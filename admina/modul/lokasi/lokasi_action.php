<?php
session_start();
include "../../inc/config.php";
session_check();
switch ($_GET["act"]) {
  case "in":
  
  
  
  $data = array(
    "id_perusahaan"=>$_POST["id_perusahaan"],
    "alamat"=>$_POST["alamat"],
    "urban"=>$_POST["urban"],
    "sub_district"=>$_POST["sub_district"],
    "city"=>$_POST["city"],
    "postal_code"=>$_POST["postal_code"],
    "province_code"=>$_POST["province_code"],
  );
  
  
  
   
    $in = $db->insert("lokasi_kantor",$data);
    
    if ($in=true) {
      echo "good";
    } else {
      return false;
    }
    break;
  case "delete":
    
    
    
    $db->delete("lokasi_kantor","id",$_GET["id"]);
    break;
  case "up":
   $data = array(
    "id_perusahaan"=>$_POST["id_perusahaan"],
    "alamat"=>$_POST["alamat"],
    "urban"=>$_POST["urban"],
    "sub_district"=>$_POST["sub_district"],
    "city"=>$_POST["city"],
    "postal_code"=>$_POST["postal_code"],
    "province_code"=>$_POST["province_code"],
  );
   
   
   

    
    $up = $db->update("lokasi_kantor",$data,"id",$_POST["id"]);
    if ($up=true) {
      echo "good";
    } else {
      return false; 
    }
    break;

    case 'kodepos':
    $response = [];
    $sql = "SELECT * FROM lokasi1 WHERE postal_code LIKE '%".$_GET['q']."%'";
    foreach ($db->fetch_custom($sql) as $row) {
      $response[] = array("id"=>$row->id, "text"=>$row->postal_code);
    }
     echo json_encode($response);
break;

case 'kodeprovinsi':
    $response = [];
    $sql = "SELECT * FROM provinsi WHERE province_code LIKE '%".$_GET['q']."%'";
    foreach ($db->fetch_custom($sql) as $row) {
      $response[] = array("province_name"=>$row->province_name, "text"=>$row->province_code);
    }
    echo json_encode($response);
break;

  default:
    # code...
    break;
}

?>