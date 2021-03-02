<?php 
//teskota
include 'inc/config.php';
 $response = [];
      $sql = "SELECT * FROM Kecamatan WHERE Nama_Kecamatan LIKE '%".$_GET['q']."%'";
      foreach ($db->fetch_custom($sql) as $row) {
        $response[] = array("id"=>$row->ID_Kecamatan, "text"=>$row->Nama_Kecamatan);
      }
       echo json_encode($response);
 ?>