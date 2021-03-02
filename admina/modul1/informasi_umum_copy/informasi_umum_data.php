
<?php

include "../../inc/config.php";


$tes=$dtable->get("Akun", "Akun.id", array('Akun.Nama_Perusahaan','Akun.Alamat_Perusahaan','Akun.Nama_Legal','Akun.Alamat_Legal','Akun.Nama_Lengkap','Akun.Alamat_Email','Akun.No_HP','Akun.Posisi','Akun.Password',"Akun.id"),"");


?>