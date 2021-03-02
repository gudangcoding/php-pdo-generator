<?php 
include '../../inc/config.php';

$simpan=$db->delete("pelanggan","id",$_POST['id']);
echo "sukses";

 ?>