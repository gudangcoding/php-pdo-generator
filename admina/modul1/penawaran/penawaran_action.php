<?php
session_start();
include "../../inc/config.php";
session_check();
switch ($_GET["act"]) {
  case "in":
  
  
  
  $data = array(
    "legal"=>$_POST["legal"],
    "jns_penawaran"=>$_POST["jns_penawaran"],
    "nm_perusahaan"=>$_POST["nm_perusahaan"],
    "no_penawaran"=>$_POST["no_penawaran"],
    "tgl_penawaran"=>$_POST["tgl_penawaran"],
    "prd_penawaran"=>$_POST["prd_penawaran"],
    "layanan"=>$_POST["layanan"],
    "sts_pajak"=>$_POST["sts_pajak"],
    "dari"=>$_POST["dari"],
    "tujuan"=>$_POST["tujuan"],
    "satuan"=>$_POST["satuan"],
    "jns_truk"=>$_POST["jns_truk"],
    "nominal"=>$_POST["nominal"],
    "wkt_tempuh"=>$_POST["wkt_tempuh"],
  );
  
  
  if (empty($_POST['id'])) {
        $simpan=$db->insert("penawaran",$data);
      }else{
        $simpan=$db->update("penawaran",$data,"id",$_POST['id']);
      }

      echo "sukses";
  case 'hapus':
     $data = array(
        "tampil"=>'N',
      );
    $simpan=$db->update("penawaran",$data,"id",$_POST['id']);
    break;
}

   
//     $in = $db->insert("penawaran",$data);
    
//     if ($in=true) {
//       echo "good";
//     } else {
//       return false;
//     }
//     break;
//   case "delete":
    
    
    
//     $db->delete("penawaran","id",$_GET["id"]);
//     break;
//   case "up":
//    $data = array("legal"=>$_POST["legal"],
//     "jns_penawaran"=>$_POST["jns_penawaran"],
//     "nm_perusahaan"=>$_POST["nm_perusahaan"],
//     "no_penawaran"=>$_POST["no_penawaran"],
//     "tgl_penawaran"=>$_POST["tgl_penawaran"],
//     "prd_penawaran"=>$_POST["prd_penawaran"],
//     "layanan"=>$_POST["layanan"],
//     "sts_pajak"=>$_POST["sts_pajak"],
//     "dari"=>$_POST["dari"],
//     "tujuan"=>$_POST["tujuan"],
//     "satuan"=>$_POST["satuan"],
//     "jns_truk"=>$_POST["jns_truk"],
//     "nominal"=>$_POST["nominal"],
//     "wkt_tempuh"=>$_POST["wkt_tempuh"],
//   );
   
   
   

    
//     $up = $db->update("penawaran",$data,"id",$_POST["id"]);
//     if ($up=true) {
//       echo "good";
//     } else {
//       return false; 
//     }
//     break;
//   default:
//     # code...
//     break;
// }

?>