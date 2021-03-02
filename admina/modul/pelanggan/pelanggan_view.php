
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Manage Pelanggan
                    </h1>
                        <ol class="breadcrumb">
                        <li><a href="<?=base_index();?>"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="<?=base_index();?>pelanggan">Pelanggan</a></li>
                        <li class="active">Pelanggan List</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                <h3 class="box-title">List Pelanggan</h3>
                                </div><!-- /.box-header -->
                                <br>
                                <a href="<?=base_index();?>pelanggan/tambah" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Pelanggan</a>
                                <div class="box-body table-responsive">
                                    <table id="dtb_pelanggan" class="table table-bordered table-striped">
                                   <thead>
                                     <tr>

                          <th>Nama Perusahaan</th>
													<th>Legal</th>
													<th>Alamat Kantor</th>
													<th>Status</th>
													<th>Email</th>
													<th>Kecamatan</th>
													<th>Website</th>
													<th>Kota</th>
													<th>Telepon</th>
													<th>Provinsi</th>
													<th>Nama Lengkap</th>
													<th>Posisi</th>
													<th>No Handphone</th>
													<th>NPWP</th>
													<th>Nama Bank</th>
													<th>Alamat Penagihan</th>
													<th>Rekening</th>
													<th>Cabang Bank</th>
													<!-- <th>Nama Legal</th>
													<th>Kecamatan</th>
													<th>Kota</th>
													<th>Provinsi</th>
													<th>Nama Bank</th>
													 -->
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
          
                          <?php
                          } 
                       } 
}
      
  foreach ($db->fetch_all("sys_menu") as $isi) {

  //jika url = url dari table menu
  if ($path_url==$isi->url) {
    //check edit permission
  if ($role_act["up_act"]=="Y") {
  $edit = '<a href="'.base_index()."pelanggan/edit/'+aData[indek]+'".'" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>';
  } else {
    $edit ="";
  }
  if ($role_act['del_act']=='Y') {
   $del = "<span data-id='+aData[indek]+' data-uri=".base_admin()."modul/pelanggan/pelanggan_action.php".' class="btn btn-danger hapus btn-xs"><i class="fa fa-trash"></i></span>';
  } else {
    $del="";
  }
                   } 
  }
  
?>  
                </section><!-- /.content -->
        <script type="text/javascript">
var dataTable = $("#dtb_pelanggan").dataTable({
           "fnCreatedRow": function( nRow, aData, iDataIndex ) {
            var indek = aData.length-1;           
     $('td:eq('+indek+')', nRow).html(' <a href="<?=base_index();?>pelanggan/detail/'+aData[indek]+'" class="btn btn-success btn-xs"><i class="fa fa-eye"></i></a> <?=$edit;?> <?=$del;?>');
       $(nRow).attr('id', 'line_'+aData[indek]);
   },
           'bProcessing': true,
            'bServerSide': true,
        'sAjaxSource': '<?=base_admin();?>modul/pelanggan/pelanggan_data.php',
         /*     'aoColumnDefs': [{
                'bSortable': false,
                'aTargets': [0]
            }]*/
        });</script>  
            