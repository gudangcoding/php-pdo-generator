
<?php
switch ($path_act) {
  case "tambah":
          foreach ($db->fetch_all("sys_menu") as $isi) {
               if ($path_url==$isi->url&&$path_act=="tambah") {
                          if ($role_act["insert_act"]=="Y") {
                             include "update_muatan_add.php";
                          } else {
                            echo "permission denied";
                          }
                       } 

      }
    break;
  case "edit":
    $data_edit = $db->fetch_single_row("ltl","id",$path_id);
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
    $data_edit = $db->fetch_single_row("ltl","id",$path_id);
    include "update_muatan_detail.php";
    break;
  default:
    include "update_muatan_view.php";
    break;
}

?>