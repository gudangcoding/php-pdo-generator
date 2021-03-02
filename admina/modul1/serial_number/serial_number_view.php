<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Manage Serial Number
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?=base_index();?>"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="<?=base_index();?>serial-number">Serial Number</a></li>
    <li class="active">Serial Number List</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">List Serial Number</h3>
        </div><!-- /.box-header -->
        <div class="box-body table-responsive">
          <?php 
             foreach ($db->fetch_all("sys_menu") as $isi) {
                    if ($path_url==$isi->url) {
                        if ($role_act["insert_act"]=="Y") {
                              ?>
              <a class="btn btn-primary" data-toggle="modal" href='#modal-status'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Tambah</a><hr>
              <?php
                                    } 
                                 } 
            }
               
          ?>
          <table id="dtb_serial_number" class="table table-bordered table-striped">
            <thead>
              <tr>

                <th>Legal</th>
                <th>Form</th>
                <th>Prefix</th>
                <th>penomoran</th>
                <th>Aksi</th>

              </tr>
            </thead>
            <tbody>
            </tbody>
          </table>
        </div><!-- /.box-body -->
      </div><!-- /.box -->
    </div>
  </div>
  <?php
     
foreach ($db->fetch_all("sys_menu") as $isi) {

//jika url = url dari table menu
if ($path_url==$isi->url) {
  //check edit permission
if ($role_act["up_act"]=="Y") {
$edit = '<a href="'.base_index()."serial-number/edit/'+aData[indek]+'".'" class="btn btn-primary btn-flat"><i class="fa fa-pencil"></i></a>';
} else {
  $edit ="";
}
if ($role_act['del_act']=='Y') {
 $del = "<span data-id='+aData[indek]+' data-uri=".base_admin()."modul/serial_number/serial_number_action.php".' class="btn btn-danger hapus btn-flat"><i class="fa fa-trash"></i></span>';
} else {
  $del="";
}
                 } 
}

?>
</section><!-- /.content -->
<script type="text/javascript">
  var dataTable = $("#dtb_serial_number").dataTable({
    "fnCreatedRow": function (nRow, aData, iDataIndex) {
      var indek = aData.length - 1;
      $('td:eq(' + indek + ')', nRow).html(' <a href="<?=base_index();?>serial-number/detail/' + aData[indek] + '" class="btn btn-success btn-flat"><i class="fa fa-eye"></i></a> <?=$edit;?> <?=$del;?>');
      $(nRow).attr('id', 'line_' + aData[indek]);
    },
    'bProcessing': true,
    'bServerSide': true,
    'sAjaxSource': '<?=base_admin();?>modul/serial_number/serial_number_data.php',
    /*     'aoColumnDefs': [{
           'bSortable': false,
           'aTargets': [0]
       }]*/
  });
</script>

<div class="modal fade" id="modal-status">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                 <h4 class="modal-title">Form Status</h4>
             </div>
             <div class="modal-body">
                 <div class='row'>
                            <div class='form-group col-xs-6'>
                                <label for=legal>legal</label>
                                <select name="legal" data-placeholder="Pilih legal ..." class="form-control chzn-select"
                                    tabindex="2" required>
                                    <option value=""></option>
                                    <?php foreach ($db->fetch_all("Legal") as $isi) {
                              echo "<option value='$isi->Inisial'>$isi->Nama_Legal</option>";
                           } ?>
                                </select>
                            </div>
                            <div class='form-group col-xs-6'>
                                <label for=Inisial Departement>Inisial Departement</label>
                                <input type="text" name="form" placeholder="Inisial Departement" class="form-control"
                                    required>
                            </div>
                        </div><!-- /.form-group -->

                        <div class='row'>
                            <div class='form-group col-xs-6'>
                                <label for=Awalan Kwitansi>Awalan Kwitansi</label>
                                <input type="text" name="prefix" placeholder="Awalan Kwitansi" class="form-control"
                                    required>
                            </div>
                            <div class='form-group col-xs-6'>
                                <label for=Awal Nomor>Awal Nomor</label>
                                <input type="text" name="penomoran" placeholder="Awal Nomor" class="form-control">
                            </div>
                        </div><!-- /.form-group -->

                        <div class='row'>
                            <div class='form-group col-xs-6'>
                                <label for=user_id>user_id</label>
                                <input type="text" name="user_id" placeholder="user_id" class="form-control">
                            </div>
                        </div><!-- /.form-group -->
             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                 <button type="button" class="btn btn-primary">Save changes</button>
             </div>
         </div>
     </div>
 </div>