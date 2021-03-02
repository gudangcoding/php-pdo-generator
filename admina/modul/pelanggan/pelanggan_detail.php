

                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                     Pelanggan
                    </h1>
                   <ol class="breadcrumb">
                        <li><a href="<?=base_index();?>"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="<?=base_index();?>pelanggan">Pelanggan</a></li>
                        <li class="active">Detail Pelanggan</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
<div class="row">
    <div class="col-lg-12">
        <div class="box box-solid box-primary">
                                   <div class="box-header">
                                    <h3 class="box-title">Detail Pelanggan</h3>
                                    <div class="box-tools pull-right">
                                        <button class="btn btn-info btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                        <button class="btn btn-info btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>

                  <div class="box-body">
                   <form class="form-horizontal">
                      <div class="form-group">
                        <label for="Nama Perusahaan" class="control-label col-lg-2">Nama Perusahaan</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->nm_perusahaan;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Legal" class="control-label col-lg-2">Legal</label>
                        <div class="col-lg-10">
                          <?php foreach ($db->fetch_all("legal") as $isi) {
                  if ($data_edit->lgl==$isi->id) {

                    echo "<input disabled class='form-control' type='text' value='$isi->nm_legal'>";
                  }
               } ?>
              
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Alamat Kantor" class="control-label col-lg-2">Alamat Kantor</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->almt_kantor;?>" class="form-control">
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
<div class="form-group">
                        <label for="Email" class="control-label col-lg-2">Email</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->email;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Kecamatan" class="control-label col-lg-2">Kecamatan</label>
                        <div class="col-lg-10">
                          <?php foreach ($db->fetch_all("lokasi1") as $isi) {
                  if ($data_edit->kecamatan==$isi->id) {

                    echo "<input disabled class='form-control' type='text' value='$isi->kecamatan'>";
                  }
               } ?>
              
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Website" class="control-label col-lg-2">Website</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->website;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Kota" class="control-label col-lg-2">Kota</label>
                        <div class="col-lg-10">
                          <?php foreach ($db->fetch_all("lokasi1") as $isi) {
                  if ($data_edit->kota==$isi->id) {

                    echo "<input disabled class='form-control' type='text' value='$isi->kota'>";
                  }
               } ?>
              
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Telepon" class="control-label col-lg-2">Telepon</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->tlp;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Provinsi" class="control-label col-lg-2">Provinsi</label>
                        <div class="col-lg-10">
                          <?php foreach ($db->fetch_all("provinsi") as $isi) {
                  if ($data_edit->provinsi==$isi->kode_provinsi) {

                    echo "<input disabled class='form-control' type='text' value='$isi->nama_provinsi'>";
                  }
               } ?>
              
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Nama Lengkap" class="control-label col-lg-2">Nama Lengkap</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->nm_lengkap;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Posisi" class="control-label col-lg-2">Posisi</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->posisi;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="No Handphone" class="control-label col-lg-2">No Handphone</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->no_hp;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="NPWP" class="control-label col-lg-2">NPWP</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->npwp;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Nama Bank" class="control-label col-lg-2">Nama Bank</label>
                        <div class="col-lg-10">
                          <?php foreach ($db->fetch_all("bank") as $isi) {
                  if ($data_edit->nm_bank==$isi->id) {

                    echo "<input disabled class='form-control' type='text' value='$isi->nama'>";
                  }
               } ?>
              
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Alamat Penagihan" class="control-label col-lg-2">Alamat Penagihan</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->almt_penagihan;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Rekening" class="control-label col-lg-2">Rekening</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->rekening;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Cabang Bank" class="control-label col-lg-2">Cabang Bank</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->cabang;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->

                   
                    </form>
                    <a href="<?=base_index();?>pelanggan" class="btn btn-success btn-flat"><i class="fa fa-step-backward"></i> Kembali</a>
          
                  </div>
                  </div>
              </div>
</div>
                  
                </section><!-- /.content -->
        
