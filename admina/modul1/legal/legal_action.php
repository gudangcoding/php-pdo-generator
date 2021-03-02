<?php
session_start();
include "../../inc/config.php";
session_check();
switch ($_GET["act"]) {
  case "in":
  
  $data = array(
      "Nama_Legal"=>$_POST["Nama_Legal"],
      "Inisial"=>$_POST["Inisial"]
  );
  
  
  
   
    if (empty($_POST['id'])) {
  $simpan=$db->insert("Legal",$data);
}else{
  $simpan=$db->update("Legal",$data,"id",$_POST['id']);
}

echo "sukses";
break;
case 'edit':
$data=array();
  $legal=$db->fetch_custom("select * from Legal where id='$_POST[id]'");
foreach ($legal as $l) {
  $data=$l;
}
echo json_encode($data);
  break;
  case 'hapus':
     $data = array(
        "tampil"=>'N',
      );
    $simpan=$db->update("Legal",$data,"id",$_POST['id']);
    echo "sukses";
    break;
}

?>