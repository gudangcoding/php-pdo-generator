

                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                      Armada
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="<?=base_index();?>"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="<?=base_index();?>armada">Armada</a></li>
                        <li class="active">Edit Armada</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
<div class="row">
    <div class="col-lg-12">
        <div class="box box-solid box-primary">
                                   <div class="box-header">
                                    <h3 class="box-title">Edit Armada</h3>
                                    <div class="box-tools pull-right">
                                        <button class="btn btn-info btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                        <button class="btn btn-info btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>

                  <div class="box-body">
                     <form id="update" method="post" class="form-horizontal" action="<?=base_admin();?>modul/armada/armada_action.php?act=up">
                      <div class="form-group">
                        <label for="NOPOL" class="control-label col-lg-2">NOPOL</label>
                        <div class="col-lg-10">
                          <input type="text" name="NOPOL" value="<?=$data_edit->NOPOL;?>" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Jenis Truk" class="control-label col-lg-2">Jenis Truk</label>
                        <div class="col-lg-10">
                          <input type="text" name="Jenis_Truk" value="<?=$data_edit->Jenis_Truk;?>" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Tahun" class="control-label col-lg-2">Tahun</label>
                        <div class="col-lg-10">
                          <input type="text" name="Tahun" value="<?=$data_edit->Tahun;?>" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Warna" class="control-label col-lg-2">Warna</label>
                        <div class="col-lg-10">
                          <input type="text" name="Warna" value="<?=$data_edit->Warna;?>" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="No STNK" class="control-label col-lg-2">No STNK</label>
                        <div class="col-lg-10">
                          <input type="text" name="No_STNK" value="<?=$data_edit->No_STNK;?>" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Tgl Exp STNK" class="control-label col-lg-2">Tgl Exp STNK</label>
                        <div class="col-lg-10">
                          <input type="text" name="Tgl_Exp_STNK" value="<?=$data_edit->Tgl_Exp_STNK;?>" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="No BPKB" class="control-label col-lg-2">No BPKB</label>
                        <div class="col-lg-10">
                          <input type="text" name="No_BPKB" value="<?=$data_edit->No_BPKB;?>" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Tgl Exp BPKB" class="control-label col-lg-2">Tgl Exp BPKB</label>
                        <div class="col-lg-10">
                          <input type="text" name="Tgl_Exp_BPKB" value="<?=$data_edit->Tgl_Exp_BPKB;?>" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Panjang" class="control-label col-lg-2">Panjang</label>
                        <div class="col-lg-10">
                          <input type="text" name="Panjang" value="<?=$data_edit->Panjang;?>" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Lebar" class="control-label col-lg-2">Lebar</label>
                        <div class="col-lg-10">
                          <input type="text" name="Lebar" value="<?=$data_edit->Lebar;?>" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Tinggi" class="control-label col-lg-2">Tinggi</label>
                        <div class="col-lg-10">
                          <input type="text" name="Tinggi" value="<?=$data_edit->Tinggi;?>" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Kapasitas Kubik" class="control-label col-lg-2">Kapasitas Kubik</label>
                        <div class="col-lg-10">
                          <input type="text" name="Kapasitas_Kubik" value="<?=$data_edit->Kapasitas_Kubik;?>" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Kapasitas KG" class="control-label col-lg-2">Kapasitas KG</label>
                        <div class="col-lg-10">
                          <input type="text" name="Kapasitas_KG" value="<?=$data_edit->Kapasitas_KG;?>" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="text" class="control-label col-lg-2">text</label>
                        <div class="col-lg-10">
                          <input type="text" name="Kapasitas_KG" value="<?=$data_edit->Kapasitas_KG;?>" class="form-control" required> 
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
                    <a href="<?=base_index();?>armada" class="btn btn-success btn-flat"><i class="fa fa-step-backward"></i> Kembali</a>
          
                  </div>
                  </div>
              </div>
</div>
                  
                </section><!-- /.content -->
        
 