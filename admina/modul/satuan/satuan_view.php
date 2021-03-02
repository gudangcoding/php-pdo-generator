
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Manage Satuan
                    </h1>
                        <ol class="breadcrumb">
                        <li><a href="<?=base_index();?>"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="<?=base_index();?>satuan">Satuan</a></li>
                        <li class="active">Satuan List</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                <h3 class="box-title">List Satuan</h3>
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
                                    <table id="dtb_satuan" class="table table-bordered table-striped">
                                   <thead>
                                     <tr>

                          <th>Nama Satuan</th>
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
  $edit = '<a href="'.base_index()."satuan/edit/'+aData[indek]+'".'" class="btn btn-xs btn-primary "><i class="fa fa-pencil"></i></a>';
  } else {
    $edit ="";
  }
  if ($role_act['del_act']=='Y') {
   $del = "<span data-id='+aData[indek]+' data-uri=".base_admin()."modul/satuan/satuan_action.php".' class="btn btn-xs btn-danger hapus "><i class="fa fa-trash"></i></span>';
  } else {
    $del="";
  }
                   } 
  }
  
?>  
                </section><!-- /.content -->
        <script type="text/javascript">
var dataTable = $("#dtb_satuan").dataTable({
           "fnCreatedRow": function( nRow, aData, iDataIndex ) {
            var indek = aData.length-1;           
     $('td:eq('+indek+')', nRow).html(' <a href="<?=base_index();?>satuan/detail/'+aData[indek]+'" class="btn btn-xs btn-success "><i class="fa fa-eye"></i></a> <?=$edit;?> <?=$del;?>');
       $(nRow).attr('id', 'line_'+aData[indek]);
   },
           'bProcessing': true,
            'bServerSide': true,
        'sAjaxSource': '<?=base_admin();?>modul/satuan/satuan_data.php',
         /*     'aoColumnDefs': [{
                'bSortable': false,
                'aTargets': [0]
            }]*/
        });

    function kosong() {
        $("#id").val("");
        $("#nm_satuan").val("");
        $("#keterangan").val("");
    }

      function tambah() {
        $("#modal-satuan").modal('show');
        kosong();
        $(".modal-title");
    }

       </script>  

   <div class="modal fade" id="modal-satuan">
    <form id="input" method="post" class="foto_banyak" action="<?=base_admin();?>modul/satuan/satuan_action.php?act=in">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Form Satuan</h4>
          </div>
          <div class="modal-body">
            <input type="hidden" name="id" id="id">
<div class="form-group">
              <label for="Nama Satuan">Nama Satuan</label>
                <input type="text" name="nm_satuan" id="nm_satuan" placeholder="Nama Satuan" class="form-control" required> 
            </div><!-- /.form-group -->
<div class="form-group">
              <label for="Keterangan">Keterangan</label>
                <input type="text" name="keterangan" id="keterangan" placeholder="Tulis Keterangan" class="form-control" required> 
            </div><!-- /.form-group -->   
            
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary" id="simpan" >Simpan</button>
          </div>
        </div>
      </div>
    </form>
    </div>      
            