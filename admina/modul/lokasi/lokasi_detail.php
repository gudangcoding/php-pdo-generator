

                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                     Lokasi
                    </h1>
                   <ol class="breadcrumb">
                        <li><a href="<?=base_index();?>"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="<?=base_index();?>lokasi">Lokasi</a></li>
                        <li class="active">Detail Lokasi</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
<div class="row">
    <div class="col-lg-12">
        <div class="box box-solid box-primary">
                                   <div class="box-header">
                                    <h3 class="box-title">Detail Lokasi</h3>
                                    <div class="box-tools pull-right">
                                        <button class="btn btn-info btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                        <button class="btn btn-info btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>

                  <div class="box-body">
                   <form class="form-horizontal">
                      <div class="form-group">
                        <label for="ID Perusahaan" class="control-label col-lg-2">ID Perusahaan</label>
                        <div class="col-lg-10">
                          <?php foreach ($db->fetch_all("sys_users") as $isi) {
                  if ($data_edit->id_perusahaan==$isi->id) {

                    echo "<input disabled class='form-control' type='text' value='$isi->first_name'>";
                  }
               } ?>
              
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Alamat" class="control-label col-lg-2">Alamat</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->alamat;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Kelurahan" class="control-label col-lg-2">Kelurahan</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->urban;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Kecamatan" class="control-label col-lg-2">Kecamatan</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->sub_district;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Kota" class="control-label col-lg-2">Kota</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->city;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Kode Provinsi" class="control-label col-lg-2">Kode Provinsi</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->province_code;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Kode Pos" class="control-label col-lg-2">Kode Pos</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->postal_code;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->

                   
                    </form>
                    <a href="<?=base_index();?>lokasi" class="btn btn-success btn-flat"><i class="fa fa-step-backward"></i> Kembali</a>
          
                  </div>
                  </div>
              </div>
</div>
                  
                </section><!-- /.content -->
        
