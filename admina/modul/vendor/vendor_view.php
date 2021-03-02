
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Manage Vendor
                    </h1>
                        <ol class="breadcrumb">
                        <li><a href="<?=base_index();?>"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="<?=base_index();?>vendor">Vendor</a></li>
                        <li class="active">Vendor List</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                <h3 class="box-title">List Vendor</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
                                    <table id="dtb_vendor" class="table table-bordered table-striped">
                                   <thead>
                                     <tr>

                          <th>Nama Perusahaan</th>
													<th>Alamat</th>
													<th>No Telp</th>
													<th>Status</th>
													<th>Nama Lengkap</th>
													<th>Posisi</th>
													<th>No Hp</th>
													<th>Email</th>
													<th>Nama Penagihan</th>
													<th>Alamat Penagihan</th>
													<th>Kode Bank</th>
													<th>Nama Bank</th>
													<th>Cabang Bank</th>
													<th>Nomor Rek</th>
													<th>No Truk</th>
													<th>Jenis Truk</th>
													<th>STNK</th>
													<th>Exp STNK</th>
													<th>Panjang Bak</th>
													<th>Tinggi Bak</th>
													<th>Lebar Bak</th>
													<th>Volume</th>
													<th>Kapasitas</th>
													<th>No Tarif</th>
													<th>Tanggal Penawaran</th>
													<th>Periode</th>
													<th>Tempo Bayar</th>
													<th>Pelanggan</th>
													<th>Dari</th>
													<th>Tujuan</th>
													<th>Satuan</th>
													<th>Nilai</th>
													<th>Status Pajak</th>
													<th>Satuan Penawaran</th>
													
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
          <a href="<?=base_index();?>vendor/tambah" class="btn btn-primary "><i class="fa fa-plus"></i> Tambah</a>
                          <?php
                          } 
                       } 
}
      
  foreach ($db->fetch_all("sys_menu") as $isi) {

  //jika url = url dari table menu
  if ($path_url==$isi->url) {
    //check edit permission
  if ($role_act["up_act"]=="Y") {
  $edit = '<a href="'.base_index()."vendor/edit/'+aData[indek]+'".'" class="btn btn-xs btn-primary "><i class="fa fa-pencil"></i></a>';
  } else {
    $edit ="";
  }
  if ($role_act['del_act']=='Y') {
   $del = "<span data-id='+aData[indek]+' data-uri=".base_admin()."modul/vendor/vendor_action.php".' class="btn btn-xs btn-danger hapus "><i class="fa fa-trash"></i></span>';
  } else {
    $del="";
  }
                   } 
  }
  
?>  
                </section><!-- /.content -->
        <script type="text/javascript">
var dataTable = $("#dtb_vendor").dataTable({
           "fnCreatedRow": function( nRow, aData, iDataIndex ) {
            var indek = aData.length-1;           
     $('td:eq('+indek+')', nRow).html(' <a href="<?=base_index();?>vendor/detail/'+aData[indek]+'" class="btn btn-xs btn-success "><i class="fa fa-eye"></i></a> <?=$edit;?> <?=$del;?>');
       $(nRow).attr('id', 'line_'+aData[indek]);
   },
           'bProcessing': true,
            'bServerSide': true,
        'sAjaxSource': '<?=base_admin();?>modul/vendor/vendor_data.php',
         /*     'aoColumnDefs': [{
                'bSortable': false,
                'aTargets': [0]
            }]*/
        });</script>  
            