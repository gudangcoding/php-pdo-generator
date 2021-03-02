
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Manage Penawaran
                    </h1>
                        <ol class="breadcrumb">
                        <li><a href="<?=base_index();?>"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="<?=base_index();?>penawaran">Penawaran</a></li>
                        <li class="active">Penawaran List</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                <h3 class="box-title">List Penawaran</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
                                    <table id="dtb_penawaran" class="table table-bordered table-striped">
                                   <thead>
                                     <tr>

                          <th>Nomor Penawaran</th>
													<th>Legal</th>
													<th>Nama Perusahaan</th>
													<th>Jenis Layanan</th>
													<th>Tanggal Penawaran</th>
													<th>Status</th>
													<th>Tanggal Expired</th>
													<th>Status Pajak</th>
													<th>Zona Asal</th>
													<th>Dari Alamat</th>
													<th>Zona Tujuan</th>
													<th>Ke Alamat</th>
													<th>Satuan</th>
													<th>Jenis Truk</th>
													<th>Tarif</th>
													
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
                      if ($path_url==$isi->url) {
                          if ($role_act["insert_act"]=="Y") {
                    ?>
          <a href="<?=base_index();?>penawaran/tambah" class="btn btn-primary "><i class="fa fa-plus"></i> Tambah Penawaran</a>
                          <?php
                          } 
                       } 
}
      
  foreach ($db->fetch_all("sys_menu") as $isi) {

  //jika url = url dari table menu
  if ($path_url==$isi->url) {
    //check edit permission
  if ($role_act["up_act"]=="Y") {
  $edit = '<a href="'.base_index()."penawaran/edit/'+aData[indek]+'".'" class="btn btn-primary "><i class="fa fa-pencil"></i></a>';
  } else {
    $edit ="";
  }
  if ($role_act['del_act']=='Y') {
   $del = "<span data-id='+aData[indek]+' data-uri=".base_admin()."modul/penawaran/penawaran_action.php".' class="btn btn-danger hapus "><i class="fa fa-trash"></i></span>';
  } else {
    $del="";
  }
                   } 
  }
  
?>  
                </section><!-- /.content -->
        <script type="text/javascript">
var dataTable = $("#dtb_penawaran").dataTable({
           "fnCreatedRow": function( nRow, aData, iDataIndex ) {
            var indek = aData.length-1;           
     $('td:eq('+indek+')', nRow).html(' <a href="<?=base_index();?>penawaran/detail/'+aData[indek]+'" class="btn btn-success "><i class="fa fa-eye"></i></a> <?=$edit;?> <?=$del;?>');
       $(nRow).attr('id', 'line_'+aData[indek]);
   },
           'bProcessing': true,
            'bServerSide': true,
        'sAjaxSource': '<?=base_admin();?>modul/penawaran/penawaran_data.php',
         /*     'aoColumnDefs': [{
                'bSortable': false,
                'aTargets': [0]
            }]*/
        });</script>  
            