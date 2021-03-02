<?php
session_start();
include "../../inc/config.php";
session_check();
switch ($_GET["act"]) {
  case "in":
  
  
  
  $data = array(
    "Tempo_Pembayaran"=>$_POST["Tempo_Pembayaran"],
    "Jumlah_Hari"=>$_POST["Jumlah_Hari"],
  );
  
  
  
   
    if (empty($_POST['id'])) {
  $simpan=$db->insert("Tempo_Pembayaran",$data);
}else{
  $simpan=$db->update("Tempo_Pembayaran",$data,"id",$_POST['id']);
}

echo "sukses";
break;
case 'edit':
$data=array();
  $truk=$db->fetch_custom("select * from Tempo_Pembayaran where id='$_POST[id]'");
foreach ($truk as $t) {
  $data=$t;
}
echo json_encode($data);
  break;
  case 'hapus':
     $data = array(
        "tampil"=>'N',
      );
    $simpan=$db->update("Tempo_Pembayaran",$data,"id",$_POST['id']);
    echo "sukses";
    break;
}

?>