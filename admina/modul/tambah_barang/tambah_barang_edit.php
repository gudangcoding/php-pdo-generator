

                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                      Tambah Barang
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="<?=base_index();?>"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="<?=base_index();?>tambah-barang">Tambah Barang</a></li>
                        <li class="active">Edit Tambah Barang</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
<div class="row">
    <div class="col-lg-12">
        <div class="box box-solid box-primary">
                                   <div class="box-header">
                                    <h3 class="box-title">Edit Tambah Barang</h3>
                                    <div class="box-tools pull-right">
                                        <button class="btn btn-info btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                        <button class="btn btn-info btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>

                  <div class="box-body">
                     <form id="update" method="post" class="form-horizontal" action="<?=base_admin();?>modul/tambah_barang/tambah_barang_action.php?act=up">
                      <div class="form-group">
                        <label for="DN No." class="control-label col-lg-2">DN No.</label>
                        <div class="col-lg-10">
                          <input type="text" name="dn_no" value="<?=$data_edit->dn_no;?>" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Item Name" class="control-label col-lg-2">Item Name</label>
                        <div class="col-lg-10">
                          <input type="text" name="item_name" value="<?=$data_edit->item_name;?>" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Satuan" class="control-label col-lg-2">Satuan</label>
                        <div class="col-lg-10">
                          <select name="Satuan" data-placeholder="Pilih Satuan..." class="form-control chzn-select" tabindex="2" required>
               <option value=""></option>
               <?php foreach ($db->fetch_all("satuan") as $isi) {

                  if ($data_edit->Satuan==$isi->id) {
                    echo "<option value='$isi->id' selected>$isi->nm_satuan</option>";
                  } else {
                  echo "<option value='$isi->id'>$isi->nm_satuan</option>";
                    }
               } ?>
              </select>
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Qty" class="control-label col-lg-2">Qty</label>
                        <div class="col-lg-10">
                          <input type="text" data-rule-number="true" name="qty" value="<?=$data_edit->qty;?>" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Remark" class="control-label col-lg-2">Remark</label>
                        <div class="col-lg-10">
                          <input type="text" name="remark" value="<?=$data_edit->remark;?>" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->

                      <input type="hidden" name="id" value="<?=$data_edit->id;?>">
                      <div class="form-group">
                        <label for="tags" class="control-label col-lg-2">&nbsp;</label>
                        <div class="col-lg-10">
                          <input type="submit" class="btn btn-primary btn-flat" value="submit">
                        </div>
                      </div><!-- /.form-group -->
                    </form>
                    <a href="<?=base_index();?>tambah-barang" class="btn btn-success btn-flat"><i class="fa fa-step-backward"></i> Kembali</a>
          
                  </div>
                  </div>
              </div>
</div>
                  
                </section><!-- /.content -->
        
 