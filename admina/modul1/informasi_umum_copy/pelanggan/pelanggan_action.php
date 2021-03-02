<?php 
include '../../inc/config.php';
if (condition) {
  # code...
}
$data = array(
    "nm_perusahaan"=>$_POST["nm_perusahaan"],
    "almt_kantor"=>$_POST["almt_kantor"],
    "telp"=>$_POST["telp"],
    "status"=>$_POST["status"],
    "nm_lengkap"=>$_POST["nm_lengkap"],
    "posisi"=>$_POST["posisi"],
    "no_hp"=>$_POST["no_hp"],
    "email"=>$_POST["email"],
    "npwp"=>$_POST["npwp"],
    "almt_penagihan"=>$_POST["almt_penagihan"],
    "no_penawaran"=>$_POST["no_penawaran"],
    "legal"=>$_POST["legal"],
    "pelanggan"=>$_POST["pelanggan"],
    "layanan"=>$_POST["layanan"],
    "tgl_penawaran"=>$_POST["tgl_penawaran"],
    "prd_penawaran"=>$_POST["prd_penawaran"],
    "dari"=>$_POST["dari"],
    "tujuan"=>$_POST["tujuan"],
    "satuan"=>$_POST["satuan"],
    "jns_truk"=>$_POST["jns_truk"],
    "nilai"=>$_POST["nilai"],
    "sts_pajak"=>$_POST["sts_pajak"]
  );
//var_dump($data);
if (empty($_POST['id'])) {
  $simpan=$db->insert("pelanggan",$data);
}else{
  $simpan=$db->update("pelanggan",$data,"id",$_POST['id']);
}

echo "sukses";

 ?>