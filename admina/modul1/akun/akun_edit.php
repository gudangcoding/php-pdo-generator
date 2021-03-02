

                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                      Akun
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="<?=base_index();?>"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="<?=base_index();?>akun">Akun</a></li>
                        <li class="active">Edit Akun</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
<div class="row">
    <div class="col-lg-12">
        <div class="box box-solid box-primary">
                                   <div class="box-header">
                                    <h3 class="box-title">Edit Akun</h3>
                                    <div class="box-tools pull-right">
                                        <button class="btn btn-info btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                        <button class="btn btn-info btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>

                  <div class="box-body">
                     <form id="update" method="post" class="form-horizontal" action="<?=base_admin();?>modul/akun/akun_action.php?act=up">
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
                        <label for="Jenis Usaha" class="control-label col-lg-2">Jenis Usaha</label>
                        <div class="col-lg-10">
                          <input type="text" name="Jenis_Usaha" value="<?=$data_edit->Jenis_Usaha;?>" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="NIB" class="control-label col-lg-2">NIB</label>
                        <div class="col-lg-10">
                          <input type="text" name="NIB" value="<?=$data_edit->NIB;?>" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Nomor NIB" class="control-label col-lg-2">Nomor NIB</label>
                        <div class="col-lg-10">
                          <input type="text" name="Nomor_NIB" value="<?=$data_edit->Nomor_NIB;?>" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="NPWP" class="control-label col-lg-2">NPWP</label>
                        <div class="col-lg-10">
                          <input type="text" name="NPWP" value="<?=$data_edit->NPWP;?>" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="No NPWP" class="control-label col-lg-2">No NPWP</label>
                        <div class="col-lg-10">
                          <input type="text" name="No_NPWP" value="<?=$data_edit->No_NPWP;?>" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Alamat NPWP" class="control-label col-lg-2">Alamat NPWP</label>
                        <div class="col-lg-10">
                          <input type="text" name="Alamat_NPWP" value="<?=$data_edit->Alamat_NPWP;?>" class="form-control" required> 
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
                    <a href="<?=base_index();?>akun" class="btn btn-success btn-flat"><i class="fa fa-step-backward"></i> Kembali</a>
          
                  </div>
                  </div>
              </div>
</div>
                  
                </section><!-- /.content -->
        
 