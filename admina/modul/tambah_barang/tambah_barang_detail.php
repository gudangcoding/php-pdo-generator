

                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                     Tambah Barang
                    </h1>
                   <ol class="breadcrumb">
                        <li><a href="<?=base_index();?>"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="<?=base_index();?>tambah-barang">Tambah Barang</a></li>
                        <li class="active">Detail Tambah Barang</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
<div class="row">
    <div class="col-lg-12">
        <div class="box box-solid box-primary">
                                   <div class="box-header">
                                    <h3 class="box-title">Detail Tambah Barang</h3>
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
                        <label for="Item Name" class="control-label col-lg-2">Item Name</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->item_name;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Satuan" class="control-label col-lg-2">Satuan</label>
                        <div class="col-lg-10">
                          <?php foreach ($db->fetch_all("satuan") as $isi) {
                  if ($data_edit->Satuan==$isi->id) {

                    echo "<input disabled class='form-control' type='text' value='$isi->nm_satuan'>";
                  }
               } ?>
              
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Qty" class="control-label col-lg-2">Qty</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->qty;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Remark" class="control-label col-lg-2">Remark</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->remark;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->

                   
                    </form>
                    <a href="<?=base_index();?>tambah-barang" class="btn btn-success btn-flat"><i class="fa fa-step-backward"></i> Kembali</a>
          
                  </div>
                  </div>
              </div>
</div>
                  
                </section><!-- /.content -->
        
