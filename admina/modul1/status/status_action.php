<?php
session_start();
include "../../inc/config.php";
session_check();
switch ($_GET["act"]) {
  case "in":
  
  
  
  $data = array(
    "Modul"=>$_POST["Modul"],
    "Nama_Status"=>$_POST["Nama_Status"],
    "Deskripsi"=>$_POST["Deskripsi"],
  );
  
  
  
   
    if (empty($_POST['id'])) {
  $simpan=$db->insert("Status",$data);
}else{
  $simpan=$db->update("Status",$data,"id",$_POST['id']);
}

echo "sukses";
break;
case 'edit':
$data=array();
  $status=$db->fetch_custom("select * from Status where id='$_POST[id]'");
foreach ($status as $s) {
  $data=$s;
}
echo json_encode($data);
  break;
  case 'hapus':
     $data = array(
        "tampil"=>'N',
      );
    $simpan=$db->update("Status",$data,"id",$_POST['id']);
    echo "sukses";
    break;
    case 'modul':
      case 'site_id':
    $sql = "SELECT * FROM sys_group_users WHERE level LIKE '%".$_GET['q']."%'";
    $result = $db->fetch_custom($sql);
    $response = [];
    foreach($result as $row){
       $response[] = array("id"=>$row->id, "text"=>$row->level);
    }
 
    echo json_encode($response);
  break;
      break;
}

?>