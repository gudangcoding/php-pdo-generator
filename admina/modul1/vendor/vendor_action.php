<?php
session_start();
include "../../inc/config.php";
session_check();
switch ($_GET["act"]) {
  case "in":
    $data = array(
    "nm_perusahaan"=>$_POST["nm_perusahaan"],
    "alamat"=>$_POST["alamat"],
    "notlp"=>$_POST["notlp"],
    "status"=>$_POST["status"],
    // "nm_lengkap"=>$_POST["nm_lengkap"],
    // "posisi"=>$_POST["posisi"],
    // "nohp"=>$_POST["nohp"],
    // "email"=>$_POST["email"],
    // "nm_penagihan"=>$_POST["nm_penagihan"],
    // "almt_penagihan"=>$_POST["almt_penagihan"],
    // "nm_bank"=>$_POST["nm_bank"],
    // "norek"=>$_POST["norek"],
    // "no_truk"=>$_POST["no_truk"],
    // "jns_truk"=>$_POST["jns_truk"],
    // "stnk"=>$_POST["stnk"],
    // "exp_stnk"=>$_POST["exp_stnk"],
    // "pjg_bak"=>$_POST["pjg_bak"],
    // "tinggi_bak"=>$_POST["tinggi_bak"],
    // "lbr_bak"=>$_POST["lbr_bak"],
    // "volume"=>$_POST["volume"],
    // "kapasitas"=>$_POST["kapasitas"],
    // "no_tarif"=>$_POST["no_tarif"],
    // "tgl_penawaran"=>$_POST["tgl_penawaran"],
    // "periode"=>$_POST["periode"],
    // "tmp_bayar"=>$_POST["tmp_bayar"],
    // "pelanggan"=>$_POST["pelanggan"],
    // "dari"=>$_POST["dari"],
    // "tujuan"=>$_POST["tujuan"],
    // "satuan"=>$_POST["satuan"],
    // "nilai"=>$_POST["nilai"],
    // "satuan_pajak"=>$_POST["satuan_pajak"],
    // "satuan_penawaran"=>$_POST["satuan_penawaran"],
      );
      //var_dump($data);
      if (empty($_POST['id'])) {
        $simpan=$db->insert("vendor",$data);
      }else{
        $simpan=$db->update("vendor",$data,"id",$_POST['id']);
      }

      echo "sukses";
  case 'hapus':
     $data = array(
        "tampil"=>'N',
      );
    $simpan=$db->update("vendor",$data,"id",$_POST['id']);
    break;
}
 ?>