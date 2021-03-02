<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Manage Dashboard Operasional
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?=base_index();?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?=base_index();?>dashboard-operasional">Dashboard Operasional</a></li>
        <li class="active">Dashboard Operasional List</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Dashboard Operasional</h3>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive">
                  <div role="tabpanel">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                      <li role="presentation" class="active">
                        <a href="#ftldashboard" aria-controls="tab" role="tab" data-toggle="tab">FTL Dashboard</a>
                      </li>
                      <li role="presentation">
                        <a href="#ltldashboard" aria-controls="tab" role="tab" data-toggle="tab">LTL Dashboard</a>
                      </li>

                    </ul>
                  
                    <!-- Tab panes -->
                    <div class="tab-content">
                      <div role="tabpanel" class="tab-pane active" id="ftldashboard">
                        <h3 class="btn btn-primary btn-block">Dashboard LTL</h3><hr>
                        <?php 
                          foreach ($db->fetch_all("sys_menu") as $isi) {
                            if ($path_url==$isi->url) {
                              if ($role_act["insert_act"]=="Y") {
                              ?>
                              <!-- <a href="<?=base_index();?>dashboard-operasional/tambah" class="btn btn-primary "><i class="fa fa-plus"></i> Buat Order LTL</a> -->
                              <a href="<?=base_admin();?>index.php/armada-ltl-detail/tambah" class="btn btn-warning "><i class="fa fa-plus"></i> Tambah Armada LTL</a>
                              <a href="<?=base_admin();?>index.php/tambah-barang/tambah" class="btn btn-info "><i class="fa fa-plus"></i> Tambah Barang LTL</a>
                              <a href="<?=base_admin();?>index.php/tambah-barang/tambah" class="btn btn-success "><i class="fa fa-money"></i> Tambah Biaya LTL</a>
                              <a href="<?=base_admin();?>index.php/ltl-tracking" class="btn btn-danger "><i class="fa fa-map-marker"></i> Update Tracking LTL</a>
                              <hr>
                              <?php
                              } 
                            } 
                          }
                          ?>
                          <table id="dtbftl" class="table table-bordered table-striped responsive nowrap" width="100%">
                              <thead>
                                  <tr>

                                      <th><input type="checkbox" name="pilih[]"></th>
                                      <th>DN No.</th>
                                      <th>Request date</th>
                                      <th>Status</th>
                                      <th>PIC Name</th>
                                      <th>PIC No.</th>
                                      <th>Nama Legal</th>
                                      <th>Customer</th>
                                      <th>Cust. PIC</th>
                                      <th>Cust. No</th>
                                      <th>Status</th>
                                      <th>Tujuan</th>
                                      <th>Site</th>
                                      <th>Username</th>
                                      <th>Action</th>
                                  </tr>
                              </thead>
                              <tbody>
                              </tbody>
                          </table>
                          <?php   
                            foreach ($db->fetch_all("sys_menu") as $isi) {

                            //jika url = url dari table menu
                            if ($path_url==$isi->url) {
                              //check edit permission
                            if ($role_act["up_act"]=="Y") {
                            $edit = '<a href="'.base_index()."dashboard-operasional/edit/'+aData[indek]+'".'" class="btn btn-xs btn-primary "><i class="fa fa-pencil"></i></a>';
                            } else {
                              $edit ="";
                            }
                            if ($role_act['del_act']=='Y') {
                             $del = "<span data-id='+aData[indek]+' data-uri=".base_admin()."modul/dashboard_operasional/dashboard_operasional_action.php".' class="btn btn-xs btn-danger hapus "><i class="fa fa-trash"></i></span>';
                            } else {
                              $del="";
                            }
                                             } 
                            }
                            
                          ?>
                          <script type="text/javascript">
                            var dataTable = $("#dtbftl").dataTable({
                                "fnCreatedRow": function(nRow, aData, iDataIndex) {
                                    var indek = aData.length - 1;
                                    $('td:eq(' + indek + ')', nRow).html(' <a href="<?=base_index();?>dashboard-operasional/detail/' +
                                        aData[indek] +
                                        '" class="btn btn-success "><i class="fa fa-eye"></i></a> <?=$edit;?> <?=$del;?>');
                                    $(nRow).attr('id', 'line_' + aData[indek]);
                                },
                                'bProcessing': true,
                                'bServerSide': true,
                                'sAjaxSource': '<?=base_admin();?>modul/dashboard_operasional/dashboard_operasional_data.php',
                                /*     'aoColumnDefs': [{
                                       'bSortable': false,
                                       'aTargets': [0]
                                   }]*/
                            });
                            </script>
                      </div><!-- FTL Dashboard -->
                      <div role="tabpanel" class="tab-pane" id="ltldashboard">
                        <h3 class="btn btn-primary btn-block">Dashboard LTL</h3><hr>
                        <?php 
                          foreach ($db->fetch_all("sys_menu") as $isi) {
                            if ($path_url==$isi->url) {
                              if ($role_act["insert_act"]=="Y") {
                              ?>
                              <!-- <a href="<?=base_index();?>dashboard-operasional/tambah" class="btn btn-primary "><i class="fa fa-plus"></i> Buat Order LTL</a> -->
                              <a href="<?=base_admin();?>index.php/armada-ltl-detail/tambah" class="btn btn-warning "><i class="fa fa-plus"></i> Tambah Armada LTL</a>
                              <a href="<?=base_admin();?>index.php/tambah-barang/tambah" class="btn btn-info "><i class="fa fa-plus"></i> Tambah Barang LTL</a>
                              <a href="<?=base_admin();?>index.php/tambah-barang/tambah" class="btn btn-success "><i class="fa fa-money"></i> Tambah Biaya LTL</a>
                              <a href="<?=base_admin();?>index.php/ltl-tracking" class="btn btn-danger "><i class="fa fa-map-marker"></i> Update Tracking LTL</a>
                              <hr>
                              <?php
                              } 
                            } 
                          }
                          ?>
                          <table id="dtb_dashboard_operasional" class="table table-bordered table-striped responsive nowrap" width="100%">
                              <thead>
                                  <tr>

                                      <th><input type="checkbox" name="pilih[]"></th>
                                      <th>DN No.</th>
                                      <th>Request date</th>
                                      <th>Status</th>
                                      <th>PIC Name</th>
                                      <th>PIC No.</th>
                                      <th>Nama Legal</th>
                                      <th>Customer</th>
                                      <th>Cust. PIC</th>
                                      <th>Cust. No</th>
                                      <th>Status</th>
                                      <th>Tujuan</th>
                                      <th>Site</th>
                                      <th>Username</th>
                                      <th>Action</th>
                                  </tr>
                              </thead>
                              <tbody>
                              </tbody>
                          </table>
                          <?php   
                            foreach ($db->fetch_all("sys_menu") as $isi) {

                            //jika url = url dari table menu
                            if ($path_url==$isi->url) {
                              //check edit permission
                            if ($role_act["up_act"]=="Y") {
                            $edit = '<a href="'.base_index()."dashboard-operasional/edit/'+aData[indek]+'".'" class="btn btn-xs btn-primary "><i class="fa fa-pencil"></i></a>';
                            } else {
                              $edit ="";
                            }
                            if ($role_act['del_act']=='Y') {
                             $del = "<span data-id='+aData[indek]+' data-uri=".base_admin()."modul/dashboard_operasional/dashboard_operasional_action.php".' class="btn btn-xs btn-danger hapus "><i class="fa fa-trash"></i></span>';
                            } else {
                              $del="";
                            }
                                             } 
                            }
                            
                          ?>
                          <script type="text/javascript">
                            var dataTable = $("#dtb_dashboard_operasional").dataTable({
                                "fnCreatedRow": function(nRow, aData, iDataIndex) {
                                    var indek = aData.length - 1;
                                    $('td:eq(' + indek + ')', nRow).html(' <a href="<?=base_index();?>dashboard-operasional/detail/' +
                                        aData[indek] +
                                        '" class="btn btn-xs btn-success "><i class="fa fa-eye"></i></a> <?=$edit;?> <?=$del;?>');
                                    $(nRow).attr('id', 'line_' + aData[indek]);
                                },
                                'bProcessing': true,
                                'bServerSide': true,
                                'sAjaxSource': '<?=base_admin();?>modul/dashboard_operasional/dashboard_operasional_data.php',
                                /*     'aoColumnDefs': [{
                                       'bSortable': false,
                                       'aTargets': [0]
                                   }]*/
                            });
                            </script>
                      </div><!-- LTL Dashboard -->
                    </div>
                  </div>
                    
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>
    </div>

</section><!-- /.content -->
