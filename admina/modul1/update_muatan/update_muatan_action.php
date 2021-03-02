<?php
session_start();
include "../../inc/config.php";
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
    // $sql = "SELECT * FROM Legal WHERE Nama_Legal LIKE '%".$_GET['name']."%'";
 
    // $result = $db->fetch_custom($sql);
    // $response = [];
    // foreach($result as $row){
    //    $response[] = array("id"=>$row->id, "name"=>$row->Nama_Legal);
    // }
 
    // echo json_encode($response);

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

  case 'insert_detail':
    $data[] = $_POST['dn_no'];
    print_r($data);
      $jumlah = count($_POST['dn_no']);
       for($i = 0; $i <= $jumlah; $i++)
      {  
          $cek = $_POST['dn_no'];
          var_dump($cek[$i]);
      }
    // $data = array(
    //   'dn_no' => $_POST['dn_no'] 
    // );
    // json_encode($data);
    // $data=array(
    //   "title"=>$$_POST[],
    //   "author"=>$author,
    //   "author"=>$author,
    //   "author"=>$author,
    // );
    // print(json_encode($r));
  break;
  default:
    # code...
    break;
}

?>