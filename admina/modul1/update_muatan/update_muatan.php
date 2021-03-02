
<?php
switch ($path_act) {
  case "tambah-ftl":
      include "update_muatan_add_ftl.php";                     
  break;
  case "tambah-ltl":
          include "update_muatan_add_ltl.php";
  
  break;
  case "tambah-rental":
        include "update_muatan_add_rental.php";
        
  break;
  case "tambah-fcl":
       include "update_muatan_add_fcl.php";
  break;
  case "tambah-lcl":
        include "update_muatan_add_lcl.php";
  break;

  case "edit":
    $data_edit = $db->fetch_single_row("","",$path_id);
        foreach ($db->fetch_all("sys_menu") as $isi) {
                      if ($path_url==$isi->url&&$path_act=="edit") {
                          if ($role_act["up_act"]=="Y") {
                             include "update_muatan_edit.php";
                          } else {
                            echo "permission denied";
                          }
                       } 

      }

    break;
      case "detail":
    $data_edit = $db->fetch_single_row("","",$path_id);
    include "update_muatan_detail.php";
    break;
    case "tes":
          foreach ($db->fetch_all("sys_menu") as $isi) {
               if ($path_url==$isi->url&&$path_act=="tambah") {
                          if ($role_act["insert_act"]=="Y") {
                             include "update_muatan_add_ftl.php";
                          } else {
                            echo "permission denied";
                          }
                       } 

      }
  break;
  default:
    include "update_muatan_view.php";
    break;
}

?>