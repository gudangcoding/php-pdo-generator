
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Manage Jenis Truk
                    </h1>
                        <ol class="breadcrumb">
                        <li><a href="<?=base_index();?>"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="<?=base_index();?>jenis-truk">Jenis Truk</a></li>
                        <li class="active">Jenis Truk List</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                <h3 class="box-title">List Jenis Truk</h3>
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
                                    <table id="dtb_jenis_truk" class="table table-bordered table-striped">
                                   <thead>
                                     <tr>
                          <th>Kode Jenis Truk</th>
													<th>Nama Jenis Truk</th>
                          <th>Kapasitas/ton</th>
                          <th>kapasitas/kubik</th>
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
  $edit = '<a href="'.base_index()."jenis-truk/edit/'+aData[indek]+'".'" class="btn btn-xs btn-primary "><i class="fa fa-pencil"></i></a>';
  } else {
    $edit ="";
  }
  if ($role_act['del_act']=='Y') {
   $del = "<span data-id='+aData[indek]+' data-uri=".base_admin()."modul/jenis_truk/jenis_truk_action.php".' class="btn btn-xs btn-danger hapus "><i class="fa fa-trash"></i></span>';
  } else {
    $del="";
  }
                   } 
  }
  
?>  
                </section><!-- /.content -->
        <script type="text/javascript">
var dataTable = $("#dtb_jenis_truk").dataTable({
           "fnCreatedRow": function( nRow, aData, iDataIndex ) {
            var indek = aData.length-1;           
     $('td:eq('+indek+')', nRow).html(' <a href="<?=base_index();?>jenis-truk/detail/'+aData[indek]+'" class="btn btn-xs btn-success "><i class="fa fa-eye"></i></a> <?=$edit;?> <?=$del;?>');
       $(nRow).attr('id', 'line_'+aData[indek]);
   },
           'bProcessing': true,
            'bServerSide': true,
        'sAjaxSource': '<?=base_admin();?>modul/jenis_truk/jenis_truk_data.php',
         /*     'aoColumnDefs': [{
                'bSortable': false,
                'aTargets': [0]
            }]*/
        });

       function kosong() {
        $("#id").val("");
        $("#kode_jenis_truk").val("");
        $("#nama_jenis_truk").val("");
        $("#kapasitaston").val("");
        $("#kapasitaskubik").val("");
    }

      function tambah() {
        $("#modal-truk").modal('show');
        kosong();
        $(".modal-title");
    }

      </script>  

    <div class="modal fade" id="modal-truk">
      <form id="input" method="post" class="foto_banyak" action="<?=base_admin();?>modul/jenis_truk/jenis_truk_action.php?act=in">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Form Jenis Truk</h4>
      </div>
      <div class="modal-body">
        <div class="row">
        <div class="form-group col-xs-6">
          <input type="hidden" name="id" id="id">
          <label for="Kode Jenis">Kode Jenis Truk</label>
          <input type="text" name="kode_jenis_truk" id="kode_jenis_truk" placeholder="Masukkan Kode Jenis Truk" class="form-control"
            required>
        </div><!-- /.form-group -->

        <div class="form-group col-xs-6">
          <label for="Nama Jenis Truk">Nama Jenis Truk</label>
          <input type="text" name="nama_jenis_truk" id="nama_jenis_truk" placeholder="Masukkan Nama Jenis Truk" class="form-control"
            required>
        </div>
        </div> <!-- /.form-group -->
        <div class="row">
        <div class="form-group col-xs-6">
          <label for="Kapasitas /ton">Kapasitas /ton</label>
          <input type="number" name="kapasitaston" id="kapasitaston" placeholder="Kapasitas Muatan" class="form-control"
            required>
        </div>
        <div class="form-group col-xs-6">
          <label for="Kapasitas /kubik">Kapasitas /kubik</label>
          <input type="number" name="kapasitaskubik" id="kapasitaskubik" placeholder="Kapasitas Muatan" class="form-control"
            required>
        </div>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary" id="simpan">Simpan</button>
      </div>
    </div>
  </div>
</form>
</div>
            