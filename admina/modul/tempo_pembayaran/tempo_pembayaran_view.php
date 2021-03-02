
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Manage Tempo Pembayaran
                    </h1>
                        <ol class="breadcrumb">
                        <li><a href="<?=base_index();?>"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="<?=base_index();?>tempo-pembayaran">Tempo Pembayaran</a></li>
                        <li class="active">Tempo Pembayaran List</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                <h3 class="box-title">List Tempo Pembayaran</h3>
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
                                    <table id="dtb_tempo_pembayaran" class="table table-bordered table-striped">
                                   <thead>
                                     <tr>

                          <th>Tempo Pembayaran</th>
													<th>Jumlah Hari</th>
                          <th>Keterangan</th>
													
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
  $edit = '<a href="'.base_index()."tempo-pembayaran/edit/'+aData[indek]+'".'" class="btn btn-xs btn-primary "><i class="fa fa-pencil"></i></a>';
  } else {
    $edit ="";
  }
  if ($role_act['del_act']=='Y') {
   $del = "<span data-id='+aData[indek]+' data-uri=".base_admin()."modul/tempo_pembayaran/tempo_pembayaran_action.php".' class="btn btn-xs btn-danger hapus "><i class="fa fa-trash"></i></span>';
  } else {
    $del="";
  }
                   } 
  }
  
?>  
                </section><!-- /.content -->
        <script type="text/javascript">
var dataTable = $("#dtb_tempo_pembayaran").dataTable({
           "fnCreatedRow": function( nRow, aData, iDataIndex ) {
            var indek = aData.length-1;           
     $('td:eq('+indek+')', nRow).html(' <a href="<?=base_index();?>tempo-pembayaran/detail/'+aData[indek]+'" class="btn btn-xs btn-success "><i class="fa fa-eye"></i></a> <?=$edit;?> <?=$del;?>');
       $(nRow).attr('id', 'line_'+aData[indek]);
   },
           'bProcessing': true,
            'bServerSide': true,
        'sAjaxSource': '<?=base_admin();?>modul/tempo_pembayaran/tempo_pembayaran_data.php',
         /*     'aoColumnDefs': [{
                'bSortable': false,
                'aTargets': [0]
            }]*/
        });

      function kosong() {
        $("#id").val("");
        $("#tempo").val("");
        $("#jumlah_hari").val("");
        $("#keterangan").val("");
    }

      function tambah() {
        $("#modal-tempo").modal('show');
        kosong();
        $(".modal-title");
    }
      </script> 


         <div class="modal fade" id="modal-tempo">
           <form id="input" method="post" class=" form-horizontal foto_banyak" action="<?=base_admin();?>modul/tempo_pembayaran/tempo_pembayaran_action.php?act=in">
           <div class="modal-dialog">
             <div class="modal-content">
               <div class="modal-header">
                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                 <h4 class="modal-title">Form Tempo Pembayaran</h4>
               </div>
               <div class="modal-body">
                      <div class="form-group">
                        <label for="Tempo Pembayaran" class="control-label col-lg-2">Tempo Pembayaran</label>
                        <div class="col-lg-10">
                          <input type="number" name="tempo" id="tempo" placeholder="Nama Tempo Pembayaran" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
                      <div class="form-group">
                        <label for="Jumlah Hari" class="control-label col-lg-2">Jumlah Hari</label>
                        <div class="col-lg-10">
                          <input type="number" name="jumlah_hari" id="jumlah_hari" placeholder="Jumlah Hari" class="form-control" required> 
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="Keterangan" class="control-label col-lg-2">Keterangan</label>
                        <div class="col-lg-10">
                          <input type="text" name="Keterangan" id="Keterangan" placeholder="Keterangan" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
               </div>
               <div class="modal-footer">
                 <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                 <button type="submit" class="btn btn-primary">Simpan</button>
               </div>
             </div>
           </div>
           </form>
         </div> 
            