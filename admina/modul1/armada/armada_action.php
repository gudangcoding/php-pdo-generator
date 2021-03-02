<?php
session_start();
include "../../inc/config.php";
session_check();
switch ($_GET["act"]) {
  case "in":
  
  
  
  $data = array(
    "NOPOL"=>$_POST["NOPOL"],
    "Jenis_Truk"=>$_POST["Jenis_Truk"],
    "Tahun"=>$_POST["Tahun"],
    "Warna"=>$_POST["Warna"],
    "No_STNK"=>$_POST["No_STNK"],
    "Tgl_Exp_STNK"=>$_POST["Tgl_Exp_STNK"],
    "No_BPKB"=>$_POST["No_BPKB"],
    "Tgl_Exp_BPKB"=>$_POST["Tgl_Exp_BPKB"],
    "Panjang"=>$_POST["Panjang"],
    "Lebar"=>$_POST["Lebar"],
    "Tinggi"=>$_POST["Tinggi"],
    "Kapasitas_Kubik"=>$_POST["Kapasitas_Kubik"],
    "Kapasitas_KG"=>$_POST["Kapasitas_KG"],
    "Status"=>$_POST["Status"],
  );
  
  
  
  if (empty($_POST['id'])) {
  $simpan=$db->insert("Armada",$data);
}else{
  $simpan=$db->update("Armada",$data,"id",$_POST['id']);
}

echo "sukses";
break;
case 'edit':
$data=array();
  $armada=$db->fetch_custom("select * from Armada where id='$_POST[id]'");
foreach ($armada as $a) {
  $data=$a;
}
echo json_encode($data);
  break;
  case 'hapus':
     $data = array(
        "tampil"=>'N',
      );
    $simpan=$db->update("Armada",$data,"id",$_POST['id']);
    echo "sukses";
    break;
}

?>