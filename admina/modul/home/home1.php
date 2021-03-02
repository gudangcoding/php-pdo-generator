
    
<?php 
$data = array('id' => $_SESSION['id_user'] );
  	$check = $db->check_exist('akun',$data);
  	if ($check==true) {
		include 'home_admin.php';
	}else{
	 	include 'home_setup.php';
	}
 ?> 