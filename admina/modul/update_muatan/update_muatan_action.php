<?php
session_start();
include "../../inc/config.php";
session_check();
switch ($_GET["act"]) {
  case "in":
  
  
  
  $data = array(
    "dn_no"=>$_POST["dn_no"],
    "req_date"=>$_POST["req_date"],
    "shipment_type"=>$_POST["shipment_type"],
    "moda_transport"=>$_POST["moda_transport"],
    "truck_qty"=>$_POST["truck_qty"],
    "id_legal"=>$_POST["id_legal"],
    "id_customer"=>$_POST["id_customer"],
    "nama_proyek"=>$_POST["nama_proyek"],
    "job_order_status"=>$_POST["job_order_status"],
    "referensi"=>$_POST["referensi"],
    "req_ship_date"=>$_POST["req_ship_date"],
    "actual_dispath_date"=>$_POST["actual_dispath_date"],
    "actual_dispath_time"=>$_POST["actual_dispath_time"],
    "req_time_arrival"=>$_POST["req_time_arrival"],
    "destination"=>$_POST["destination"],
    "site_id"=>$_POST["site_id"],
    "site_address"=>$_POST["site_address"],
    "sub_cont"=>$_POST["sub_cont"],
    "pic_name"=>$_POST["pic_name"],
    "pic_hp"=>$_POST["pic_hp"],
    "remark"=>$_POST["remark"],
    "perusahaan_id"=>$_POST["perusahaan_id"],
  );
  
  
  
   
    $in = $db->insert("ltl",$data);
    
    if ($in=true) {
      echo "good";
    } else {
      return false;
    }
    break;
  case "delete":
    
    
    
    $db->delete("ltl","id",$_GET["id"]);
    break;
  case "up":
   $data = array(
    "dn_no"=>$_POST["dn_no"],
    "req_date"=>$_POST["req_date"],
    "shipment_type"=>$_POST["shipment_type"],
    "moda_transport"=>$_POST["moda_transport"],
    "truck_qty"=>$_POST["truck_qty"],
    "id_legal"=>$_POST["id_legal"],
    "id_customer"=>$_POST["id_customer"],
    "nama_proyek"=>$_POST["nama_proyek"],
    "job_order_status"=>$_POST["job_order_status"],
    "referensi"=>$_POST["referensi"],
    "req_ship_date"=>$_POST["req_ship_date"],
    "actual_dispath_date"=>$_POST["actual_dispath_date"],
    "actual_dispath_time"=>$_POST["actual_dispath_time"],
    "req_time_arrival"=>$_POST["req_time_arrival"],
    "destination"=>$_POST["destination"],
    "site_id"=>$_POST["site_id"],
    "site_address"=>$_POST["site_address"],
    "sub_cont"=>$_POST["sub_cont"],
    "pic_name"=>$_POST["pic_name"],
    "pic_hp"=>$_POST["pic_hp"],
    "remark"=>$_POST["remark"],
    "perusahaan_id"=>$_POST["perusahaan_id"],
  );
   
   
   

    
    $up = $db->update("ltl",$data,"id",$_POST["id"]);
    if ($up=true) {
      echo "good";
    } else {
      return false; 
    }
    break;

case 'destination':
    $response = [];
    $sql = "SELECT * FROM provinsi WHERE province_name LIKE '%".$_GET['q']."%'";
    foreach ($db->fetch_custom($sql) as $row) {
      $response[] = array("id"=>$row->province_code, "text"=>$row->province_name);
    }
     echo json_encode($response);
break;



  default:
    # code...
    break;
}

?>