

                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                     Armada
                    </h1>
                   <ol class="breadcrumb">
                        <li><a href="<?=base_index();?>"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="<?=base_index();?>armada">Armada</a></li>
                        <li class="active">Detail Armada</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
<div class="row">
    <div class="col-lg-12">
        <div class="box box-solid box-primary">
                                   <div class="box-header">
                                    <h3 class="box-title">Detail Armada</h3>
                                    <div class="box-tools pull-right">
                                        <button class="btn btn-info btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                        <button class="btn btn-info btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>

                  <div class="box-body">
                   <form class="form-horizontal">
                      <div class="form-group">
                        <label for="No. Pol" class="control-label col-lg-2">No. Pol</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->nopol;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Jenis Truk" class="control-label col-lg-2">Jenis Truk</label>
                        <div class="col-lg-10">
                          <?php foreach ($db->fetch_all("jenis_truk") as $isi) {
                  if ($data_edit->jenis_truk==$isi->id) {

                    echo "<input disabled class='form-control' type='text' value='$isi->nama_jenis_truk'>";
                  }
               } ?>
              
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Tahun" class="control-label col-lg-2">Tahun</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->tahun;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Warna" class="control-label col-lg-2">Warna</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->warna;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="STNK" class="control-label col-lg-2">STNK</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->stnk;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Exp STNK" class="control-label col-lg-2">Exp STNK</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=tgl_indo($data_edit->exp_stnk);?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="BPKB" class="control-label col-lg-2">BPKB</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->bpkb;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Exp BPKP" class="control-label col-lg-2">Exp BPKP</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=tgl_indo($data_edit->exp_bpkb);?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Panjang" class="control-label col-lg-2">Panjang</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->panjang;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Lebar" class="control-label col-lg-2">Lebar</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->lebar;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Tinggi" class="control-label col-lg-2">Tinggi</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->tinggi;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Kapasitas Kubik" class="control-label col-lg-2">Kapasitas Kubik</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->kapasitas_kubik;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Kapasitas Kg" class="control-label col-lg-2">Kapasitas Kg</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->kapasitas_kg;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Status" class="control-label col-lg-2">Status</label>
                        <div class="col-lg-10">
                          <?php if ($data_edit->status=="Y") {
      ?>
      <input name="status" class="make-switch" disabled type="checkbox" checked>
      <?php
    } else {
      ?>
      <input name="status" class="make-switch" disabled type="checkbox">
      <?php
    }?>
                        </div>
                      </div><!-- /.form-group -->

                   
                    </form>
                    <a href="<?=base_index();?>armada" class="btn btn-success btn-flat"><i class="fa fa-step-backward"></i> Kembali</a>
          
                  </div>
                  </div>
              </div>
</div>
                  
                </section><!-- /.content -->
        
