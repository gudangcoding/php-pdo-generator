

                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                      Informasi Umum
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="<?=base_index();?>"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="<?=base_index();?>informasi-umum">Informasi Umum</a></li>
                        <li class="active">Edit Informasi Umum</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
<div class="row">
    <div class="col-lg-12">
        <div class="box box-solid box-primary">
                                   <div class="box-header">
                                    <h3 class="box-title">Edit Informasi Umum</h3>
                                    <div class="box-tools pull-right">
                                        <button class="btn btn-info btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                        <button class="btn btn-info btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>

                  <div class="box-body">
                     <form id="update" method="post" class="form-horizontal" action="<?=base_admin();?>modul/informasi_umum/informasi_umum_action.php?act=up">
                      <div class="form-group">
                        <label for="Nama Perusahaan" class="control-label col-lg-2">Nama Perusahaan</label>
                        <div class="col-lg-10">
                          <input type="text" name="Nama_Perusahaan" value="<?=$data_edit->Nama_Perusahaan;?>" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Alamat Perusahaan" class="control-label col-lg-2">Alamat Perusahaan</label>
                        <div class="col-lg-10">
                          <input type="text" name="Alamat_Perusahaan" value="<?=$data_edit->Alamat_Perusahaan;?>" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Nama Legal" class="control-label col-lg-2">Nama Legal</label>
                        <div class="col-lg-10">
                          <input type="text" name="Nama_Legal" value="<?=$data_edit->Nama_Legal;?>" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Alamat Legal" class="control-label col-lg-2">Alamat Legal</label>
                        <div class="col-lg-10">
                          <input type="text" name="Alamat_Legal" value="<?=$data_edit->Alamat_Legal;?>" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Nama Lengkap" class="control-label col-lg-2">Nama Lengkap</label>
                        <div class="col-lg-10">
                          <input type="text" name="Nama_Lengkap" value="<?=$data_edit->Nama_Lengkap;?>" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Alamat Email" class="control-label col-lg-2">Alamat Email</label>
                        <div class="col-lg-10">
                          <input type="text"  data-rule-email="true" name="Alamat_Email" value="<?=$data_edit->Alamat_Email;?>" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="No HP" class="control-label col-lg-2">No HP</label>
                        <div class="col-lg-10">
                          <input type="text" name="No_HP" value="<?=$data_edit->No_HP;?>" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Posisi" class="control-label col-lg-2">Posisi</label>
                        <div class="col-lg-10">
                          <select name="Posisi" data-placeholder="Pilih Posisi..." class="form-control chzn-select" tabindex="2" required>
               <option value=""></option>
               <?php foreach ($db->fetch_all("Jabatan") as $isi) {

                  if ($data_edit->Posisi==$isi->id) {
                    echo "<option value='$isi->id' selected>$isi->Nama_jabatan</option>";
                  } else {
                  echo "<option value='$isi->id'>$isi->Nama_jabatan</option>";
                    }
               } ?>
              </select>
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Password" class="control-label col-lg-2">Password</label>
                        <div class="col-lg-10">
                          <input type="text" name="Password" value="<?=$data_edit->Password;?>" class="form-control" required> 
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
                    <a href="<?=base_index();?>informasi-umum" class="btn btn-success btn-flat"><i class="fa fa-step-backward"></i> Kembali</a>
          
                  </div>
                  </div>
              </div>
</div>
                  
                </section><!-- /.content -->
        
 