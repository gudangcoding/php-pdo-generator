

                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                     Status
                    </h1>
                   <ol class="breadcrumb">
                        <li><a href="<?=base_index();?>"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="<?=base_index();?>status">Status</a></li>
                        <li class="active">Detail Status</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
<div class="row">
    <div class="col-lg-12">
        <div class="box box-solid box-primary">
                                   <div class="box-header">
                                    <h3 class="box-title">Detail Status</h3>
                                    <div class="box-tools pull-right">
                                        <button class="btn btn-info btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                        <button class="btn btn-info btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>

                  <div class="box-body">
                   <form class="form-horizontal">
                      <div class="form-group">
                        <label for="modul" class="control-label col-lg-2">modul</label>
                        <div class="col-lg-10">
                          <?php foreach ($db->fetch_all("sys_group_users") as $isi) {
                  if ($data_edit->modul==$isi->id) {

                    echo "<input disabled class='form-control' type='text' value='$isi->level'>";
                  }
               } ?>
              
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Nama Status" class="control-label col-lg-2">Nama Status</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->nm_status;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Deskripsi" class="control-label col-lg-2">Deskripsi</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->deskripsi;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
                      <div class="form-group">
                        <label for="Urutan" class="control-label col-lg-2">Urutan</label>
                        <div class="col-lg-10">
                          <input type="number" disabled="" value="<?=$data_edit->urutan;?>" class="form-control">
                        </div>
                      </div>
                   
                    </form>
                    <a href="<?=base_index();?>status" class="btn btn-success btn-flat"><i class="fa fa-step-backward"></i> Kembali</a>
          
                  </div>
                  </div>
              </div>
</div>
                  
                </section><!-- /.content -->
        
