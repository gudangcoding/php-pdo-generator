

                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                      Pelanggan
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="<?=base_index();?>"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="<?=base_index();?>pelanggan">Pelanggan</a></li>
                        <li class="active">Edit Pelanggan</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
<div class="row">
    <div class="col-lg-12">
        <div class="box box-solid box-primary">
                                   <div class="box-header">
                                    <h3 class="box-title">Edit Pelanggan</h3>
                                    <div class="box-tools pull-right">
                                        <button class="btn btn-info btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                        <button class="btn btn-info btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>

                  <div class="box-body">
                     <form id="update" method="post" class="form-horizontal" action="<?=base_admin();?>modul/pelanggan/pelanggan_action.php?act=up">
                      <div class="form-group">
                        <label for="Nama Perusahaan" class="control-label col-lg-2">Nama Perusahaan</label>
                        <div class="col-lg-10">
                          <input type="text" name="nm_perusahaan" value="<?=$data_edit->nm_perusahaan;?>" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Legal" class="control-label col-lg-2">Legal</label>
                        <div class="col-lg-10">
                          <select name="lgl" data-placeholder="Pilih Legal..." class="form-control chzn-select" tabindex="2" required>
               <option value=""></option>
               <?php foreach ($db->fetch_all("legal") as $isi) {

                  if ($data_edit->lgl==$isi->id) {
                    echo "<option value='$isi->id' selected>$isi->nm_legal</option>";
                  } else {
                  echo "<option value='$isi->id'>$isi->nm_legal</option>";
                    }
               } ?>
              </select>
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Alamat Kantor" class="control-label col-lg-2">Alamat Kantor</label>
                        <div class="col-lg-10">
                          <input type="text" name="almt_kantor" value="<?=$data_edit->almt_kantor;?>" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Status" class="control-label col-lg-2">Status</label>
                        <div class="col-lg-10">
                          <?php if ($data_edit->status=="Y") {
      ?>
      <input name="status" class="make-switch" type="checkbox" checked>
      <?php
    } else {
      ?>
      <input name="status" class="make-switch" type="checkbox">
      <?php
    }?>
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Email" class="control-label col-lg-2">Email</label>
                        <div class="col-lg-10">
                          <input type="text"  data-rule-email="true" name="email" value="<?=$data_edit->email;?>" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Kecamatan" class="control-label col-lg-2">Kecamatan</label>
                        <div class="col-lg-10">
                          <select name="kecamatan" data-placeholder="Pilih Kecamatan..." class="form-control chzn-select" tabindex="2" required>
               <option value=""></option>
               <?php foreach ($db->fetch_all("lokasi1") as $isi) {

                  if ($data_edit->kecamatan==$isi->id) {
                    echo "<option value='$isi->id' selected>$isi->kecamatan</option>";
                  } else {
                  echo "<option value='$isi->id'>$isi->kecamatan</option>";
                    }
               } ?>
              </select>
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Website" class="control-label col-lg-2">Website</label>
                        <div class="col-lg-10">
                          <input type="text" name="website" value="<?=$data_edit->website;?>" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Kota" class="control-label col-lg-2">Kota</label>
                        <div class="col-lg-10">
                          <select name="kota" data-placeholder="Pilih Kota..." class="form-control chzn-select" tabindex="2" required>
               <option value=""></option>
               <?php foreach ($db->fetch_all("lokasi1") as $isi) {

                  if ($data_edit->kota==$isi->id) {
                    echo "<option value='$isi->id' selected>$isi->kota</option>";
                  } else {
                  echo "<option value='$isi->id'>$isi->kota</option>";
                    }
               } ?>
              </select>
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Telepon" class="control-label col-lg-2">Telepon</label>
                        <div class="col-lg-10">
                          <input type="text" data-rule-number="true" name="tlp" value="<?=$data_edit->tlp;?>" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Provinsi" class="control-label col-lg-2">Provinsi</label>
                        <div class="col-lg-10">
                          <select name="provinsi" data-placeholder="Pilih Provinsi..." class="form-control chzn-select" tabindex="2" required>
               <option value=""></option>
               <?php foreach ($db->fetch_all("provinsi") as $isi) {

                  if ($data_edit->provinsi==$isi->kode_provinsi) {
                    echo "<option value='$isi->kode_provinsi' selected>$isi->nama_provinsi</option>";
                  } else {
                  echo "<option value='$isi->kode_provinsi'>$isi->nama_provinsi</option>";
                    }
               } ?>
              </select>
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Nama Lengkap" class="control-label col-lg-2">Nama Lengkap</label>
                        <div class="col-lg-10">
                          <input type="text" name="nm_lengkap" value="<?=$data_edit->nm_lengkap;?>" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Posisi" class="control-label col-lg-2">Posisi</label>
                        <div class="col-lg-10">
                          <input type="text" name="posisi" value="<?=$data_edit->posisi;?>" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="No Handphone" class="control-label col-lg-2">No Handphone</label>
                        <div class="col-lg-10">
                          <input type="text" data-rule-number="true" name="no_hp" value="<?=$data_edit->no_hp;?>" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="NPWP" class="control-label col-lg-2">NPWP</label>
                        <div class="col-lg-10">
                          <input type="text" data-rule-number="true" name="npwp" value="<?=$data_edit->npwp;?>" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Nama Bank" class="control-label col-lg-2">Nama Bank</label>
                        <div class="col-lg-10">
                          <select name="nm_bank" data-placeholder="Pilih Nama Bank..." class="form-control chzn-select" tabindex="2" required>
               <option value=""></option>
               <?php foreach ($db->fetch_all("bank") as $isi) {

                  if ($data_edit->nm_bank==$isi->id) {
                    echo "<option value='$isi->id' selected>$isi->nama</option>";
                  } else {
                  echo "<option value='$isi->id'>$isi->nama</option>";
                    }
               } ?>
              </select>
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Alamat Penagihan" class="control-label col-lg-2">Alamat Penagihan</label>
                        <div class="col-lg-10">
                          <input type="text" name="almt_penagihan" value="<?=$data_edit->almt_penagihan;?>" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Rekening" class="control-label col-lg-2">Rekening</label>
                        <div class="col-lg-10">
                          <input type="text" data-rule-number="true" name="rekening" value="<?=$data_edit->rekening;?>" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Cabang Bank" class="control-label col-lg-2">Cabang Bank</label>
                        <div class="col-lg-10">
                          <input type="text" name="cabang" value="<?=$data_edit->cabang;?>" class="form-control" required> 
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
                    <a href="<?=base_index();?>pelanggan" class="btn btn-success btn-flat"><i class="fa fa-step-backward"></i> Kembali</a>
          
                  </div>
                  </div>
              </div>
</div>
                  
                </section><!-- /.content -->
        
 