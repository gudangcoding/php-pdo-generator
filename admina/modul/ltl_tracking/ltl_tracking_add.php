
           
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                     Ltl Tracking
                    </h1>
                           <ol class="breadcrumb">
                        <li><a href="<?=base_index();?>"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="<?=base_index();?>ltl-tracking">Ltl Tracking</a></li>
                        <li class="active">Tambah Ltl Tracking</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
<div class="row">
    <div class="col-lg-12"> 
        <div class="box box-solid box-primary">
                                 <div class="box-header">
                                    <h3 class="box-title">Tambah Ltl Tracking</h3>
                                    <div class="box-tools pull-right">
                                        <button class="btn btn-info btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                        <button class="btn btn-info btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>

                  <div class="box-body">
                     <form id="input" method="post" class="form-horizontal foto_banyak" action="<?=base_admin();?>modul/ltl_tracking/ltl_tracking_action.php?act=in">
                      <div class="form-group">
                        <label for="DN No." class="control-label col-lg-2">DN No.</label>
                        <div class="col-lg-10">
                          <input type="text" name="dn_no" placeholder="DN No." class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Status" class="control-label col-lg-2">Status</label>
                        <div class="col-lg-10">
                          <select name="id_status" data-placeholder="Pilih Status ..." class="form-control chzn-select" tabindex="2" >
               <option value=""></option>
               <?php foreach ($db->fetch_all("status") as $isi) {
                  echo "<option value='$isi->id'>$isi->nm_status</option>";
               } ?>
              </select>
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Status Date" class="control-label col-lg-2">Status Date</label>
                        <div class="col-lg-10">
                          <input type="text" id="tgl1" data-rule-date="true" name="status_date" placeholder="Status Date" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Keterangan" class="control-label col-lg-2">Keterangan</label>
                        <div class="col-lg-10">
                          <input type="text" name="keterangan" placeholder="Keterangan" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->

                      
                      <div class="form-group">
                        <label for="tags" class="control-label col-lg-2">&nbsp;</label>
                        <div class="col-lg-10">
                          <input type="submit" class="btn btn-primary btn-flat" value="submit">
                        </div>
                      </div><!-- /.form-group -->
                    </form>
 <a href="<?=base_index();?>ltl-tracking" class="btn btn-success btn-flat"><i class="fa fa-step-backward"></i> Kembali</a>
          
                  </div>
                  </div>
              </div>
</div>
                  
                </section><!-- /.content -->
        
            