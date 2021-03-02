

                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                     Armada LTL Detail
                    </h1>
                   <ol class="breadcrumb">
                        <li><a href="<?=base_index();?>"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="<?=base_index();?>armada-ltl-detail">Armada LTL Detail</a></li>
                        <li class="active">Detail Armada LTL Detail</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
<div class="row">
    <div class="col-lg-12">
        <div class="box box-solid box-primary">
                                   <div class="box-header">
                                    <h3 class="box-title">Detail Armada LTL Detail</h3>
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
                        <label for="Vendor" class="control-label col-lg-2">Vendor</label>
                        <div class="col-lg-10">
                          <?php foreach ($db->fetch_all("vendor") as $isi) {
                  if ($data_edit->id_vendor==$isi->id) {

                    echo "<input disabled class='form-control' type='text' value='$isi->nm_perusahaan'>";
                  }
               } ?>
              
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="No Pol" class="control-label col-lg-2">No Pol</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->no_pol;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Driver" class="control-label col-lg-2">Driver</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->driver;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="HP driver1" class="control-label col-lg-2">HP driver1</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->hp_driver1;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="HP Driver2" class="control-label col-lg-2">HP Driver2</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->hp_driver2;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Co Driver" class="control-label col-lg-2">Co Driver</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->co_driver;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="HP Co Driver1" class="control-label col-lg-2">HP Co Driver1</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->hp_co_driver1;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Hp Co Driver2" class="control-label col-lg-2">Hp Co Driver2</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->hp_co_driver2;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Remark" class="control-label col-lg-2">Remark</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->remark;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->

                   
                    </form>
                    <a href="<?=base_index();?>armada-ltl-detail" class="btn btn-success btn-flat"><i class="fa fa-step-backward"></i> Kembali</a>
          
                  </div>
                  </div>
              </div>
</div>
                  
                </section><!-- /.content -->
        
