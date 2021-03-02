

                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                      Status
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="<?=base_index();?>"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="<?=base_index();?>status">Status</a></li>
                        <li class="active">Edit Status</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
<div class="row">
    <div class="col-lg-12">
        <div class="box box-solid box-primary">
                                   <div class="box-header">
                                    <h3 class="box-title">Edit Status</h3>
                                    <div class="box-tools pull-right">
                                        <button class="btn btn-info btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                        <button class="btn btn-info btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>

                  <div class="box-body">
                     <form id="update" method="post" class="form-horizontal" action="<?=base_admin();?>modul/status/status_action.php?act=up">
                      <div class="form-group">
                        <label for="modul" class="control-label col-lg-2">modul</label>
                        <div class="col-lg-10">
                          <select name="modul" data-placeholder="Pilih modul..." class="form-control chzn-select" tabindex="2" required>
               <option value=""></option>
               <?php foreach ($db->fetch_all("sys_group_users") as $isi) {

                  if ($data_edit->modul==$isi->id) {
                    echo "<option value='$isi->id' selected>$isi->level</option>";
                  } else {
                  echo "<option value='$isi->id'>$isi->level</option>";
                    }
               } ?>
              </select>
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Nama Status" class="control-label col-lg-2">Nama Status</label>
                        <div class="col-lg-10">
                          <input type="text" name="nm_status" value="<?=$data_edit->nm_status;?>" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Deskripsi" class="control-label col-lg-2">Deskripsi</label>
                        <div class="col-lg-10">
                          <input type="text" name="deskripsi" value="<?=$data_edit->deskripsi;?>" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
                      <div class="form-group">
                        <label for="Urutan" class="control-label col-lg-2">Urutan</label>
                        <div class="col-lg-10">
                          <input type="number" name="urutan" value="<?=$data_edit->urutan;?>" class="form-control" required> 
                        </div>
                      </div>

                      <input type="hidden" name="id" value="<?=$data_edit->id;?>">
                      <div class="form-group">
                        <label for="tags" class="control-label col-lg-2">&nbsp;</label>
                        <div class="col-lg-10">
                          <input type="submit" class="btn btn-primary btn-flat" value="submit">
                        </div>
                      </div><!-- /.form-group -->
                    </form>
                    <a href="<?=base_index();?>status" class="btn btn-success btn-flat"><i class="fa fa-step-backward"></i> Kembali</a>
          
                  </div>
                  </div>
              </div>
</div>
                  
                </section><!-- /.content -->
        
 