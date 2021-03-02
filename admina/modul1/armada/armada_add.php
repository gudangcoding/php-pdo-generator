
           
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                     Armada
                    </h1>
                           <ol class="breadcrumb">
                        <li><a href="<?=base_index();?>"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="<?=base_index();?>armada">Armada</a></li>
                        <li class="active">Tambah Armada</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
<div class="row">
    <div class="col-lg-12"> 
        <div class="box box-solid box-primary">
                                 <div class="box-header">
                                    <h3 class="box-title">Tambah Armada</h3>
                                    <div class="box-tools pull-right">
                                        <button class="btn btn-info btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                        <button class="btn btn-info btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>

                  <div class="box-body">
                     <form id="input" method="post" class="form-horizontal foto_banyak" action="<?=base_admin();?>modul/armada/armada_action.php?act=in">
                      <div class="form-group">
                        <label for="NOPOL" class="control-label col-lg-2">NOPOL</label>
                        <div class="col-lg-10">
                          <input type="text" name="NOPOL" placeholder="NOPOL" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Jenis Truk" class="control-label col-lg-2">Jenis Truk</label>
                        <div class="col-lg-10">
                          <input type="text" name="Jenis_Truk" placeholder="Jenis Truk" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Tahun" class="control-label col-lg-2">Tahun</label>
                        <div class="col-lg-10">
                          <input type="text" name="Tahun" placeholder="Tahun" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Warna" class="control-label col-lg-2">Warna</label>
                        <div class="col-lg-10">
                          <input type="text" name="Warna" placeholder="Warna" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="No STNK" class="control-label col-lg-2">No STNK</label>
                        <div class="col-lg-10">
                          <input type="text" name="No_STNK" placeholder="No STNK" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Tgl Exp STNK" class="control-label col-lg-2">Tgl Exp STNK</label>
                        <div class="col-lg-10">
                          <input type="text" name="Tgl_Exp_STNK" placeholder="Tgl Exp STNK" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="No BPKB" class="control-label col-lg-2">No BPKB</label>
                        <div class="col-lg-10">
                          <input type="text" name="No_BPKB" placeholder="No BPKB" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Tgl Exp BPKB" class="control-label col-lg-2">Tgl Exp BPKB</label>
                        <div class="col-lg-10">
                          <input type="text" name="Tgl_Exp_BPKB" placeholder="Tgl Exp BPKB" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Panjang" class="control-label col-lg-2">Panjang</label>
                        <div class="col-lg-10">
                          <input type="text" name="Panjang" placeholder="Panjang" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Lebar" class="control-label col-lg-2">Lebar</label>
                        <div class="col-lg-10">
                          <input type="text" name="Lebar" placeholder="Lebar" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Tinggi" class="control-label col-lg-2">Tinggi</label>
                        <div class="col-lg-10">
                          <input type="text" name="Tinggi" placeholder="Tinggi" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Kapasitas Kubik" class="control-label col-lg-2">Kapasitas Kubik</label>
                        <div class="col-lg-10">
                          <input type="text" name="Kapasitas_Kubik" placeholder="Kapasitas Kubik" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Kapasitas KG" class="control-label col-lg-2">Kapasitas KG</label>
                        <div class="col-lg-10">
                          <input type="text" name="Kapasitas_KG" placeholder="Kapasitas KG" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="text" class="control-label col-lg-2">text</label>
                        <div class="col-lg-10">
                          <input type="text" name="Kapasitas_KG" placeholder="Kapasitas KG" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->

                      
                      <div class="form-group">
                        <label for="tags" class="control-label col-lg-2">&nbsp;</label>
                        <div class="col-lg-10">
                          <input type="submit" class="btn btn-primary btn-flat" value="submit">
                        </div>
                      </div><!-- /.form-group -->
                    </form>
 <a href="<?=base_index();?>armada" class="btn btn-success btn-flat"><i class="fa fa-step-backward"></i> Kembali</a>
          
                  </div>
                  </div>
              </div>
</div>
                  
                </section><!-- /.content -->
        
            