<?php
session_start();
include "../../inc/config.php";
session_check();
switch ($_GET["act"]) {
  case "in":
  
  $data = array(
      "Kode_Jenis_Truk"=>$_POST["Kode_Jenis_Truk"],
      "Nama_Jenis_Truk"=>$_POST["Nama_Jenis_Truk"],
  );
  
  
  
   
    if (empty($_POST['id'])) {
  $simpan=$db->insert("Jenis_Truk",$data);
}else{
  $simpan=$db->update("Jenis_Truk",$data,"id",$_POST['id']);
}

echo "sukses";
break;
case 'edit':
$data=array();
  $truk=$db->fetch_custom("select * from Jenis_Truk where id='$_POST[id]'");
foreach ($truk as $t) {
  $data=$t;
}
echo json_encode($data);
  break;
  case 'hapus':
     $data = array(
        "tampil"=>'N',
      );
    $simpan=$db->update("Jenis_Truk",$data,"id",$_POST['id']);
    echo "sukses";
    break;
}

?>