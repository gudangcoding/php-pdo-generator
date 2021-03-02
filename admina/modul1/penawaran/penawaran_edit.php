<?php 
include '../../inc/config.php';

foreach ($db->fetch_custom("select * from penawaran where id='$_POST[id]'") as $a) {
  $data=$a;
}
echo json_encode($data);

 ?>