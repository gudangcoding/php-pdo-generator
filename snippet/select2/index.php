 <select id="lang" >
       <option value="php">php</option>
        <option value="asp">asp</option>
       <option value="java">java</option>
  </select>

  <!-- responsive css select2 -->
  <style type="text/css">
    .select2 {
      width:100%!important;
      }
  </style>
<script>
  $(document).ready(function() {
    $('#destination').select2({
          placeholder: 'Pilih Salah Satu',
           language: {
               noResults: function() {
              return `<button style="width: 100%" type="button"
              class="btn btn-primary" 
              onClick='tambah()'>+ Tambah</button>
              </li>`;
              }
           },
          ajax: {
            url: '<?=base_admin();?>modul/dashboard-operasional/dashboard_operasional.php?act=destination',
            dataType: 'json',
            delay: 250,
            processResults: function (data) {
              return {
                results: data
              };
            },
            cache: true
          },
          escapeMarkup: function (markup) {
              return markup;
          }
      });
      //untuk selected saat update
      $("#destination").select2().select2('val','<?=$data_edit->destination?>');
  });
</script>

  

  //narik data via api 
<?php 
case 'destination':
    $response = [];
    $sql = "SELECT * FROM provinsi WHERE province_name LIKE '%".$_GET['q']."%'";
    foreach ($db->fetch_custom($sql) as $row) {
      $response[] = array("id"=>$row->province_code, "text"=>$row->province_name);
    }
     echo json_encode($response);
break;
   ?>