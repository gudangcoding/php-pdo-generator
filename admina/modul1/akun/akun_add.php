
           
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                     Akun
                    </h1>
                           <ol class="breadcrumb">
                        <li><a href="<?=base_index();?>"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="<?=base_index();?>akun">Akun</a></li>
                        <li class="active">Tambah Akun</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
<div class="row">
    <div class="col-lg-12"> 
        <div class="box box-solid box-primary">
                                 <div class="box-header">
                                    <h3 class="box-title">Tambah Akun</h3>
                                    <div class="box-tools pull-right">
                                        <button class="btn btn-info btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                        <button class="btn btn-info btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>

                  <div class="box-body">
                     <form id="input" method="post" class="form-horizontal foto_banyak" action="<?=base_admin();?>modul/akun/akun_action.php?act=in">
                      <div class="form-group">
                        <label for="Nama Perusahaan" class="control-label col-lg-2">Nama Perusahaan</label>
                        <div class="col-lg-10">
                          <input type="text" name="Nama_Perusahaan" placeholder="Nama Perusahaan" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Alamat Perusahaan" class="control-label col-lg-2">Alamat Perusahaan</label>
                        <div class="col-lg-10">
                          <input type="text" name="Alamat_Perusahaan" placeholder="Alamat Perusahaan" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Jenis Usaha" class="control-label col-lg-2">Jenis Usaha</label>
                        <div class="col-lg-10">
                          <input type="text" name="Jenis_Usaha" placeholder="Jenis Usaha" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="NIB" class="control-label col-lg-2">NIB</label>
                        <div class="col-lg-10">
                          <input type="text" name="NIB" placeholder="NIB" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Nomor NIB" class="control-label col-lg-2">Nomor NIB</label>
                        <div class="col-lg-10">
                          <input type="text" name="Nomor_NIB" placeholder="Nomor NIB" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="NPWP" class="control-label col-lg-2">NPWP</label>
                        <div class="col-lg-10">
                          <input type="text" name="NPWP" placeholder="NPWP" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="No NPWP" class="control-label col-lg-2">No NPWP</label>
                        <div class="col-lg-10">
                          <input type="text" name="No_NPWP" placeholder="No NPWP" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Alamat NPWP" class="control-label col-lg-2">Alamat NPWP</label>
                        <div class="col-lg-10">
                          <input type="text" name="Alamat_NPWP" placeholder="Alamat NPWP" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->

                      
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
        
            