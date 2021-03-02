
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Manage Legal
                    </h1>
                        <ol class="breadcrumb">
                        <li><a href="<?=base_index();?>"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="<?=base_index();?>legal">Legal</a></li>
                        <li class="active">Legal List</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                <h3 class="box-title">List Legal</h3>
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
                                    <table id="dtb_legal" class="table table-bordered table-striped">
                                   <thead>
                                     <tr>

                          <th>Nama Legal</th>
													<th>Inisial</th>
													
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
  $edit = '<a href="'.base_index()."legal/edit/'+aData[indek]+'".'" class="btn btn-xs btn-primary "><i class="fa fa-pencil"></i></a>';
  } else {
    $edit ="";
  }
  if ($role_act['del_act']=='Y') {
   $del = "<span data-id='+aData[indek]+' data-uri=".base_admin()."modul/legal/legal_action.php".' class="btn btn-xs btn-danger hapus "><i class="fa fa-trash"></i></span>';
  } else {
    $del="";
  }
                   } 
  }
  
?>  
                </section><!-- /.content -->
        <script type="text/javascript">
var dataTable = $("#dtb_legal").dataTable({
           "fnCreatedRow": function( nRow, aData, iDataIndex ) {
            var indek = aData.length-1;           
     $('td:eq('+indek+')', nRow).html(' <a href="<?=base_index();?>legal/detail/'+aData[indek]+'" class="btn btn-xs btn-success "><i class="fa fa-eye"></i></a> <?=$edit;?> <?=$del;?>');
       $(nRow).attr('id', 'line_'+aData[indek]);
   },
           'bProcessing': true,
            'bServerSide': true,
        'sAjaxSource': '<?=base_admin();?>modul/legal/legal_data.php',
         /*     'aoColumnDefs': [{
                'bSortable': false,
                'aTargets': [0]
            }]*/
        });

        function kosong() {
        $("#id").val("");
        $("#nm_legal").val("");
        $("#inisial").val("");
    }
    
        function tambah() {
        $("#modal-legal").modal('show');
        kosong();
        $(".modal-title").text('form Tambah');
    }

      </script>  


  <div class="modal fade" id="modal-legal">
    <form id="input" method="post" class="foto_banyak" action="<?=base_admin();?>modul/legal/legal_action.php?act=in">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Pengisian Form Legal</h4>
          </div>
          <div class="modal-body">
          <input type="hidden" name="id" id="id">
            <div class="form-group col-xs-6">
              <label for="Nama Legal" class="control-label ">Nama Legal</label>
                <input type="text" name="nm_legal" id="nm_legal" placeholder="Nama Legal" class="form-control" required> 
              </div>
<div class="form-group col-xs-6">
              <label for="Inisial" class="control-label">Inisial</label>
                <input type="text" name="inisial" id="inisial" placeholder="Inisial" class="form-control" required>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary" id="simpan" >Simpan</button>
          </div>
        </div>
      </div>
    </form>
    </div>      
            