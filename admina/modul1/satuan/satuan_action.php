<?php
session_start();
include "../../inc/config.php";
session_check();
switch ($_GET["act"]) {
  case "in":
$data = array(
        "Nama_Satuan"=>$_POST["Nama_Satuan"],
        "Keterangan"=>$_POST["Keterangan"],
        
  );
//var_dump($data);
if (empty($_POST['id'])) {
  $simpan=$db->insert("Satuan",$data);
}else{
  $simpan=$db->update("Satuan",$data,"id",$_POST['id']);
}

echo "sukses";
break;
case 'edit':
$data=array();
  $satuan=$db->fetch_custom("select * from Satuan where id='$_POST[id]'");
foreach ($satuan as $s) {
  $data=$s;
}
echo json_encode($data);
  break;
  case 'hapus':
     $data = array(
        "tampil"=>'N',
      );
    $simpan=$db->update("Satuan",$data,"id",$_POST['id']);
    echo "sukses";
    break;
}
 ?>