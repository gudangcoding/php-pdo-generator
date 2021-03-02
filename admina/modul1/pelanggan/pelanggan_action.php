
 <?php
session_start();
include "../../inc/config.php";
session_check();
switch ($_GET["act"]) {
  case "in":
    $data = array(
        "nm_perusahaan"=>$_POST["nm_perusahaan"],
        "legal"=>$_POST["legal"],
        "almt_kantor"=>$_POST["almt_kantor"],
        "email"=>$_POST["email"],
        "status"=>$_POST["status"],
        "web"=>$_POST["web"],
        "telp"=>$_POST["telp"],
        "kota"=>$_POST["kota"],
        "provinsi"=>$_POST["provinsi"],
        "kecamatan"=>$_POST["kecamatan"],
        "nm_lengkap"=>$_POST["nm_lengkap"],
        "posisi"=>$_POST["posisi"],
        "no_hp"=>$_POST["no_hp"],
        "npwp"=>$_POST["npwp"],
        "almt_penagihan"=>$_POST["almt_penagihan"],
        "nm_bank"=>$_POST["nm_bank"],
        "norek"=>$_POST["norek"],
        "cb_bank"=>$_POST["cb_bank"],
        //"no_penawaran"=>$_POST["no_penawaran"],
        //"pelanggan"=>$_POST["pelanggan"],
        //"layanan"=>$_POST["layanan"],
        //"tgl_penawaran"=>$_POST["tgl_penawaran"],
        //"prd_penawaran"=>$_POST["prd_penawaran"],
        //"tujuan"=>$_POST["tujuan"],
        //"satuan"=>$_POST["satuan"],
        //"jns_truk"=>$_POST["jns_truk"],
        //"nilai"=>$_POST["nilai"],
        //"sts_pajak"=>$_POST["sts_pajak"],
        
        );
      //var_dump($data);
      if (empty($_POST['id'])) {
        $simpan=$db->insert("pelanggan",$data);
      }else{
        $simpan=$db->update("pelanggan",$data,"id",$_POST['id']);
      }

      echo "sukses";

break;

case 'edit':
    $data=array();
    $pelanggan=$db->fetch_custom("select * from pelanggan where id='$_POST[id]'");
    foreach ($pelanggan as $p) {
      $data=$p;
    }
echo json_encode($data);
break;
case 'hapus':
     $data = array(
        "tampil"=>'N',
      );
    $simpan=$db->update("pelanggan",$data,"id",$_POST['id']);
break;
 case 'kota':
    
      $response = [];
      $sql = "SELECT * FROM Kecamatan WHERE Nama_Kecamatan LIKE '%".$_GET['q']."%'";
      foreach ($db->fetch_custom($sql) as $row) {
        $response[] = array("id"=>$row->ID_Kecamatan, "text"=>$row->Nama_Kecamatan);
      }
       echo json_encode($response);
    
    break;
case 'provinsi':
    
      $response = [];
      $sql = "SELECT * FROM Provinsi WHERE nm_provinsi LIKE '%".$_GET['q']."%'";
      foreach ($db->fetch_custom($sql) as $row) {
        $response[] = array("id"=>$row->id_provinsi, "text"=>$row->nm_provinsi);
      }
       echo json_encode($response);
    
    break;

    case 'kabupaten':
    
      $response = [];
      $sql = "SELECT * FROM Kabupaten WHERE Nama_Kabupaten LIKE '%".$_GET['q']."%'";
      foreach ($db->fetch_custom($sql) as $row) {
        $response[] = array("id"=>$row->ID_Kabupaten, "text"=>$row->Nama_Kabupaten);
      }
       echo json_encode($response);
    
    break;
case 'list_bank':

$response = [];
$sql = "SELECT * FROM list_bank WHERE name LIKE '%".$_GET['q']."%'";
foreach ($db->fetch_custom($sql) as $row) {
  $response[] = array("id"=>$row->id, "text"=>$row->name);
}
 echo json_encode($response);

break;

case 'legal':
$sql = "SELECT * FROM Legal WHERE Nama_Legal LIKE '%".$_GET['q']."%'";
$response = [];

foreach ($db->fetch_custom($sql) as $row) {
  $response[] = array("id"=>$row->id, "text"=>$row->Nama_Legal);
}
 echo json_encode($response);

break;

default:
break;
}

?>