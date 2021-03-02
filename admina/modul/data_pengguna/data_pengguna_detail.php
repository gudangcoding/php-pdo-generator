

                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                     Data Pengguna
                    </h1>
                   <ol class="breadcrumb">
                        <li><a href="<?=base_index();?>"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="<?=base_index();?>data-pengguna">Data Pengguna</a></li>
                        <li class="active">Detail Data Pengguna</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
<div class="row">
    <div class="col-lg-12">
        <div class="box box-solid box-primary">
                                   <div class="box-header">
                                    <h3 class="box-title">Detail Data Pengguna</h3>
                                    <div class="box-tools pull-right">
                                        <button class="btn btn-info btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                        <button class="btn btn-info btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>

                  <div class="box-body">
                   <form class="form-horizontal">
                      <div class="form-group">
                        <label for="ID Menu" class="control-label col-lg-2">ID Menu</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->id_menu;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Level" class="control-label col-lg-2">Level</label>
                        <div class="col-lg-10">
                          <?php foreach ($db->fetch_all("sys_group_users") as $isi) {
                  if ($data_edit->group_id==$isi->id) {

                    echo "<input disabled class='form-control' type='text' value='$isi->level'>";
                  }
               } ?>
              
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Baca Data" class="control-label col-lg-2">Baca Data</label>
                        <div class="col-lg-10">
                          <?php if ($data_edit->read_act=="Y") {
      ?>
      <input name="read_act" class="make-switch" disabled type="checkbox" checked>
      <?php
    } else {
      ?>
      <input name="read_act" class="make-switch" disabled type="checkbox">
      <?php
    }?>
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Input Data" class="control-label col-lg-2">Input Data</label>
                        <div class="col-lg-10">
                          <?php if ($data_edit->insert_act=="Y") {
      ?>
      <input name="insert_act" class="make-switch" disabled type="checkbox" checked>
      <?php
    } else {
      ?>
      <input name="insert_act" class="make-switch" disabled type="checkbox">
      <?php
    }?>
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Ubah Data" class="control-label col-lg-2">Ubah Data</label>
                        <div class="col-lg-10">
                          <?php if ($data_edit->update_act=="Y") {
      ?>
      <input name="update_act" class="make-switch" disabled type="checkbox" checked>
      <?php
    } else {
      ?>
      <input name="update_act" class="make-switch" disabled type="checkbox">
      <?php
    }?>
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Hapus Data" class="control-label col-lg-2">Hapus Data</label>
                        <div class="col-lg-10">
                          <?php if ($data_edit->delete_act=="Y") {
      ?>
      <input name="delete_act" class="make-switch" disabled type="checkbox" checked>
      <?php
    } else {
      ?>
      <input name="delete_act" class="make-switch" disabled type="checkbox">
      <?php
    }?>
                        </div>
                      </div><!-- /.form-group -->

                   
                    </form>
                    <a href="<?=base_index();?>data-pengguna" class="btn btn-success btn-flat"><i class="fa fa-step-backward"></i> Kembali</a>
          
                  </div>
                  </div>
              </div>
</div>
                  
                </section><!-- /.content -->
        
