<?php
session_start();
include "../../inc/config.php";
include "../../inc/fungsi.php";
session_check();
switch ($_GET["act"]) {
  case "in":
  
  
  
  $data = array();
  
  
  
   
    $in = $db->insert("",$data);
    
    if ($in=true) {
      echo "good";
    } else {
      return false;
    }
    break;
  case "delete":
    
    
    
    $db->delete("","",$_GET["id"]);
    break;
  case "up":
   $data = array();
   
   
   

    
    $up = $db->update("",$data,"",$_POST["id"]);
    if ($up=true) {
      echo "good";
    } else {
      return false; 
    }
    break;

  case 'legal':
    $response = [];
    $sql = "SELECT * FROM Legal WHERE Nama_Legal LIKE '%".$_GET['q']."%'";
    foreach ($db->fetch_custom($sql) as $row) {
      $response[] = array("id"=>$row->id, "text"=>$row->Nama_Legal);
    }
     echo json_encode($response);

  break;

  case 'pelanggan':
    $sql = "SELECT * FROM pelanggan WHERE nm_perusahaan LIKE '%".$_GET['q']."%'";
    $result = $db->fetch_custom($sql);
    $response = [];
    foreach($result as $row){
       $response[] = array("id"=>$row->id, "text"=>$row->nm_perusahaan);
    }
 
    echo json_encode($response);
  break;

  case 'status_job':
      $sql = "SELECT * FROM master_status WHERE name LIKE '%".$_GET['q']."%'";
 
    $result = $db->fetch_custom($sql);
    $response = [];
    foreach($result as $row){
       $response[] = array("id"=>$row->id, "text"=>$row->name);
    }
 
    echo json_encode($response);
  break;

  case 'shipment_type':
    $sql = "SELECT * FROM shipment_type WHERE name LIKE '%".$_GET['q']."%'";
    $result = $db->fetch_custom($sql);
    $response = [];
    foreach($result as $row){
       $response[] = array("id"=>$row->id, "text"=>$row->name);
    }
 
    echo json_encode($response);
  break;

  case 'mode_transport':
    $sql = "SELECT * FROM Jenis_Truk WHERE Nama_Jenis_Truk LIKE '%".$_GET['q']."%'";
    $result = $db->fetch_custom($sql);
    $response = [];
    foreach($result as $row){
       $response[] = array("id"=>$row->id, "text"=>$row->Nama_Jenis_Truk);
    }
 
    echo json_encode($response);
  break;

  case 'site_destination':
    $sql = "SELECT * FROM Provinsi WHERE nm_provinsi LIKE '%".$_GET['q']."%'";
    $result = $db->fetch_custom($sql);
    $response = [];
    foreach($result as $row){
       $response[] = array("id"=>$row->id_provinsi, "text"=>$row->nm_provinsi);
    }
 
    echo json_encode($response);
  break;

  case 'site_id':
    $sql = "SELECT * FROM site WHERE name LIKE '%".$_GET['q']."%'";
    $result = $db->fetch_custom($sql);
    $response = [];
    foreach($result as $row){
       $response[] = array("id"=>$row->id, "text"=>$row->name);
    }
 
    echo json_encode($response);
  break;

  case 'insert_detail_muatan':
    print_r($_POST);
      
  break;

  case 'buat_nomor_order':
      $kodenya = kodeOtomatis('log_no_order','no_order','DN-');
      echo json_encode($kodenya);
  break;
  default:
    # code...
    break;
}

?>