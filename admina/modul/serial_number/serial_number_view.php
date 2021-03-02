
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
                                      <a onclick="tambah()" class="btn btn-primary "><i class="fa fa-plus"></i> Tambah</a>
                                     <hr>
                                  <?php
                                  } 
                                  } 
                                  }
                                   ?>
                                    <table id="dtb_serial_number" class="table table-bordered table-striped">
                                   <thead>
                                     <tr>

                          <th>Nama Legal</th>
													<th>Prefix</th>
													<th>Form</th>
													<th>Awalan Nomor</th>
													
                          <th>Action</th>
                         
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
  $edit = '<a href="'.base_index()."serial-number/edit/'+aData[indek]+'".'" class="btn btn-xs btn-primary "><i class="fa fa-pencil"></i></a>';
  } else {
    $edit ="";
  }
  if ($role_act['del_act']=='Y') {
   $del = "<span data-id='+aData[indek]+' data-uri=".base_admin()."modul/serial_number/serial_number_action.php".' class="btn btn-xs btn-danger hapus "><i class="fa fa-trash"></i></span>';
  } else {
    $del="";
  }
                   } 
  }
  
?>  
                </section><!-- /.content -->
        <script type="text/javascript">
var dataTable = $("#dtb_serial_number").dataTable({
           "fnCreatedRow": function( nRow, aData, iDataIndex ) {
            var indek = aData.length-1;           
     $('td:eq('+indek+')', nRow).html(' <a href="<?=base_index();?>serial-number/detail/'+aData[indek]+'" class="btn btn-xs btn-success "><i class="fa fa-eye"></i></a> <?=$edit;?> <?=$del;?>');
       $(nRow).attr('id', 'line_'+aData[indek]);
   },
           'bProcessing': true,
            'bServerSide': true,
        'sAjaxSource': '<?=base_admin();?>modul/serial_number/serial_number_data.php',
         /*     'aoColumnDefs': [{
                'bSortable': false,
                'aTargets': [0]
            }]*/
        });

         function kosong() {
        $("#id").val("");
        $("#id_legal").val("");
        $("#awalan_kwitansi").val("");
        $("#inisial_dept").val("");
        $("#awal_nomor").val("");
        $("#inisial_dept").val("");
        $("#awal_nomor").val("");
    }

      function tambah() {
        $("#modal-snumber").modal('show');
        kosong();
        $(".modal-title");
    }

      </script> 


       <div class="modal fade" id="modal-snumber">
        <form id="input" method="post" class="form-horizontal foto_banyak" action="<?=base_admin();?>modul/serial_number/serial_number_action.php?act=in">
        <div class="col-xs-6">
         <div class="modal-dialog">
           <div class="modal-content">
             <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
               <h4 class="modal-title">Form Serial Number</h4>
             </div>
             <div class="modal-body">
              <div class="row">
              <div class="col-xs-6">
                        <label for="ID Legal" class="control-label ">ID Legal</label>
                        
                          <select name="id_legal" id="id_legal" data-placeholder="Pilih ID Legal ..." class="form-control chzn-select" tabindex="2" required>
               <option value=""></option>
               <?php foreach ($db->fetch_all("legal") as $isi) {
                  echo "<option value='$isi->id'>$isi->nm_legal</option>";
               } ?>
              </select>
                        </div>
                      <!-- /.col-xs-6 -->
<div class="col-xs-6">
                        <label for="Awalan" class="control-label ">Prefix</label>
                        
                          <input type="text" name="awalan_kwitansi" id="awalan_kwitansi" placeholder="Awalan Kwitansi" class="form-control" required> 
                        </div>
                      </div>
                <div class="row"><!-- /.col-xs-6 -->
<div class="col-xs-6">
                        <label for="Prefix" class="control-label ">Form</label>
                    <select name="inisial_dept" id="inisial_dept" data-placeholder="Pilih Form" class="form-control chzn-select" tabindex="2" required>
                        <option value=""></option>
                        <option value="penawaran">Penawaran</option>
                        <option value="muatan">Muatan</option>
                        <option value="invoice">Invoice</option>
                    </select> 
                        </div><!-- /.col-xs-6 -->
<div class="col-xs-6">
                        <label for="Awal Nomor" class="control-label ">Awal Nomor</label>
                        
                          <input type="text" name="awal_nomor" id="awal_nomor" placeholder="Awal Nomor" class="form-control" required> 
                        </div>
                      </div>
                      </div>
             <div class="modal-footer">
               <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
               <button type="submit" class="btn btn-primary">Simpan</button>
             </div>
           </div>
         </div>
       </div>
        </form>
       </div> 
            