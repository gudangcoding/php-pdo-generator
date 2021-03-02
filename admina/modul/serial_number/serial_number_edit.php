

                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                      Serial Number
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="<?=base_index();?>"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="<?=base_index();?>serial-number">Serial Number</a></li>
                        <li class="active">Edit Serial Number</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
<div class="row">
    <div class="col-lg-12">
        <div class="box box-solid box-primary">
                                   <div class="box-header">
                                    <h3 class="box-title">Edit Serial Number</h3>
                                    <div class="box-tools pull-right">
                                        <button class="btn btn-info btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                        <button class="btn btn-info btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>

                  <div class="box-body">
                     <form id="update" method="post" class="form-horizontal" action="<?=base_admin();?>modul/serial_number/serial_number_action.php?act=up">
                      <div class="form-group">
                        <label for="ID Legal" class="control-label col-lg-2">ID Legal</label>
                        <div class="col-lg-10">
                          <select name="id_legal" data-placeholder="Pilih ID Legal..." class="form-control chzn-select" tabindex="2" required>
               <option value=""></option>
               <?php foreach ($db->fetch_all("legal") as $isi) {

                  if ($data_edit->id_legal==$isi->id) {
                    echo "<option value='$isi->id' selected>$isi->nm_legal</option>";
                  } else {
                  echo "<option value='$isi->id'>$isi->nm_legal</option>";
                    }
               } ?>
              </select>
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Awalan" class="control-label col-lg-2">Prefix</label>
                        <div class="col-lg-10">
                          <input type="text" name="awalan_kwitansi" value="<?=$data_edit->awalan_kwitansi;?>" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Prefix" class="control-label col-lg-2">Form</label>
                        <div class="col-lg-10">
                          <input type="text" name="inisial_dept" value="<?=$data_edit->inisial_dept;?>" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Awal Nomor" class="control-label col-lg-2">Awal Nomor</label>
                        <div class="col-lg-10">
                          <input type="text" name="awal_nomor" value="<?=$data_edit->awal_nomor;?>" class="form-control" required> 
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
                    <a href="<?=base_index();?>serial-number" class="btn btn-success btn-flat"><i class="fa fa-step-backward"></i> Kembali</a>
          
                  </div>
                  </div>
              </div>
</div>
                  
                </section><!-- /.content -->
        
 