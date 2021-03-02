

                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                     Dashboard Operasional
                    </h1>
                   <ol class="breadcrumb">
                        <li><a href="<?=base_index();?>"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="<?=base_index();?>dashboard-operasional">Dashboard Operasional</a></li>
                        <li class="active">Detail Dashboard Operasional</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
<div class="row">
    <div class="col-lg-12">
        <div class="box box-solid box-primary">
                                   <div class="box-header">
                                    <h3 class="box-title">Detail Dashboard Operasional</h3>
                                    <div class="box-tools pull-right">
                                        <button class="btn btn-info btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                        <button class="btn btn-info btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>

                  <div class="box-body">
                   <form class="form-horizontal">
                      <div class="form-group">
                        <label for="DN No." class="control-label col-lg-2">DN No.</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->dn_no;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Request Date" class="control-label col-lg-2">Request Date</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=tgl_indo($data_edit->req_date);?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Shipment Type" class="control-label col-lg-2">Shipment Type</label>
                        <div class="col-lg-10">
                          <?php foreach ($db->fetch_all("shipment_type") as $isi) {
                  if ($data_edit->shipment_type==$isi->id) {

                    echo "<input disabled class='form-control' type='text' value='$isi->name'>";
                  }
               } ?>
              
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Moda Transport" class="control-label col-lg-2">Moda Transport</label>
                        <div class="col-lg-10">
                          <?php foreach ($db->fetch_all("transport_mode") as $isi) {
                  if ($data_edit->moda_transport==$isi->id) {

                    echo "<input disabled class='form-control' type='text' value='$isi->id'>";
                  }
               } ?>
              
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Truck Qty" class="control-label col-lg-2">Truck Qty</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->truck_qty;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Legal" class="control-label col-lg-2">Legal</label>
                        <div class="col-lg-10">
                          <?php foreach ($db->fetch_all("legal") as $isi) {
                  if ($data_edit->id_legal==$isi->id) {

                    echo "<input disabled class='form-control' type='text' value='$isi->nm_legal'>";
                  }
               } ?>
              
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Customer" class="control-label col-lg-2">Customer</label>
                        <div class="col-lg-10">
                          <?php foreach ($db->fetch_all("customer") as $isi) {
                  if ($data_edit->id_customer==$isi->id) {

                    echo "<input disabled class='form-control' type='text' value='$isi->Nama_Legal'>";
                  }
               } ?>
              
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="nama_proyek" class="control-label col-lg-2">nama_proyek</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->nama_proyek;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Job Order Status" class="control-label col-lg-2">Job Order Status</label>
                        <div class="col-lg-10">
                          <?php foreach ($db->fetch_all("status") as $isi) {
                  if ($data_edit->job_order_status==$isi->id) {

                    echo "<input disabled class='form-control' type='text' value='$isi->nm_status'>";
                  }
               } ?>
              
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Referensi" class="control-label col-lg-2">Referensi</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->referensi;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Requset Ship Date" class="control-label col-lg-2">Requset Ship Date</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=tgl_indo($data_edit->req_ship_date);?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Actual Dispath Date" class="control-label col-lg-2">Actual Dispath Date</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=tgl_indo($data_edit->actual_dispath_date);?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Actual Dispath Time" class="control-label col-lg-2">Actual Dispath Time</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=tgl_indo($data_edit->actual_dispath_time);?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Request Time Arrival" class="control-label col-lg-2">Request Time Arrival</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=tgl_indo($data_edit->req_time_arrival);?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Destination" class="control-label col-lg-2">Destination</label>
                        <div class="col-lg-10">
                          <?php foreach ($db->fetch_all("lokasi1") as $isi) {
                  if ($data_edit->destination==$isi->id) {

                    echo "<input disabled class='form-control' type='text' value='$isi->city'>";
                  }
               } ?>
              
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Site" class="control-label col-lg-2">Site</label>
                        <div class="col-lg-10">
                          <?php foreach ($db->fetch_all("site") as $isi) {
                  if ($data_edit->site_id==$isi->id) {

                    echo "<input disabled class='form-control' type='text' value='$isi->name'>";
                  }
               } ?>
              
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Site Address" class="control-label col-lg-2">Site Address</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->site_address;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="sub_cont" class="control-label col-lg-2">sub_cont</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->sub_cont;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="pic_name" class="control-label col-lg-2">pic_name</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->pic_name;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="pic_hp" class="control-label col-lg-2">pic_hp</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->pic_hp;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="remark" class="control-label col-lg-2">remark</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->remark;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="perusahaan_id" class="control-label col-lg-2">perusahaan_id</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->perusahaan_id;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->

                   
                    </form>
                    <a href="<?=base_index();?>dashboard-operasional" class="btn btn-success btn-flat"><i class="fa fa-step-backward"></i> Kembali</a>
          
                  </div>
                  </div>
              </div>
</div>
                  
                </section><!-- /.content -->
        
