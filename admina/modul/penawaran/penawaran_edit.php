

                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                      Penawaran
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="<?=base_index();?>"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="<?=base_index();?>penawaran">Penawaran</a></li>
                        <li class="active">Edit Penawaran</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
<div class="row">
    <div class="col-lg-12">
        <div class="box box-solid box-primary">
                                   <div class="box-header">
                                    <h3 class="box-title">Edit Penawaran</h3>
                                    <div class="box-tools pull-right">
                                        <button class="btn btn-info btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                        <button class="btn btn-info btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>

                  <div class="box-body">
                     <form id="update" method="post" class="form-horizontal" action="<?=base_admin();?>modul/penawaran/penawaran_action.php?act=up">
                      <div class="form-group">
                        <label for="Nomor Penawaran" class="control-label col-lg-2">Nomor Penawaran</label>
                        <div class="col-lg-10">
                          <input type="text" data-rule-number="true" name="idnomorpenawaran" value="<?=$data_edit->idnomorpenawaran;?>" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Legal" class="control-label col-lg-2">Legal</label>
                        <div class="col-lg-10">
                          <select name="legal" data-placeholder="Pilih Legal..." class="form-control chzn-select" tabindex="2" required>
               <option value=""></option>
               <?php foreach ($db->fetch_all("legal") as $isi) {

                  if ($data_edit->legal==$isi->id) {
                    echo "<option value='$isi->id' selected>$isi->nm_legal</option>";
                  } else {
                  echo "<option value='$isi->id'>$isi->nm_legal</option>";
                    }
               } ?>
              </select>
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Nama Perusahaan" class="control-label col-lg-2">Nama Perusahaan</label>
                        <div class="col-lg-10">
                          <input type="text" name="nm_perusahaan" value="<?=$data_edit->nm_perusahaan;?>" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Jenis Layanan" class="control-label col-lg-2">Jenis Layanan</label>
                        <div class="col-lg-10">
                          <select name="jns_layanan" data-placeholder="Pilih Jenis Layanan..." class="form-control chzn-select" tabindex="2" required>
               <option value=""></option>
               <?php foreach ($db->fetch_all("jns_layanan") as $isi) {

                  if ($data_edit->jns_layanan==$isi->id) {
                    echo "<option value='$isi->id' selected>$isi->name</option>";
                  } else {
                  echo "<option value='$isi->id'>$isi->name</option>";
                    }
               } ?>
              </select>
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Tanggal Penawaran" class="control-label col-lg-2">Tanggal Penawaran</label>
                        <div class="col-lg-10">
                          <input type="text" id="tgl1" data-rule-date="true" name="tgl_penawaran" value="<?=$data_edit->tgl_penawaran;?>" class="form-control" required> 
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
                        <label for="Tanggal Expired" class="control-label col-lg-2">Tanggal Expired</label>
                        <div class="col-lg-10">
                          <input type="text" id="tgl2" data-rule-date="true" name="tgl_exp" value="<?=$data_edit->tgl_exp;?>" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Status Pajak" class="control-label col-lg-2">Status Pajak</label>
                        <div class="col-lg-10">
                          <?php if ($data_edit->status_pajak=="Y") {
      ?>
      <input name="status_pajak" class="make-switch" type="checkbox" checked>
      <?php
    } else {
      ?>
      <input name="status_pajak" class="make-switch" type="checkbox">
      <?php
    }?>
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Zona Asal" class="control-label col-lg-2">Zona Asal</label>
                        <div class="col-lg-10">
                          <select name="zona_asal" data-placeholder="Pilih Zona Asal..." class="form-control chzn-select" tabindex="2" required>
               <option value=""></option>
               <?php foreach ($db->fetch_all("lokasi1") as $isi) {

                  if ($data_edit->zona_asal==$isi->id) {
                    echo "<option value='$isi->id' selected>$isi->kota</option>";
                  } else {
                  echo "<option value='$isi->id'>$isi->kota</option>";
                    }
               } ?>
              </select>
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Dari Alamat" class="control-label col-lg-2">Dari Alamat</label>
                        <div class="col-lg-10">
                          <input type="text" name="dari_alamat" value="<?=$data_edit->dari_alamat;?>" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Zona Tujuan" class="control-label col-lg-2">Zona Tujuan</label>
                        <div class="col-lg-10">
                          <select name="zona_tujuan" data-placeholder="Pilih Zona Tujuan..." class="form-control chzn-select" tabindex="2" required>
               <option value=""></option>
               <?php foreach ($db->fetch_all("lokasi1") as $isi) {

                  if ($data_edit->zona_tujuan==$isi->id) {
                    echo "<option value='$isi->id' selected>$isi->kota</option>";
                  } else {
                  echo "<option value='$isi->id'>$isi->kota</option>";
                    }
               } ?>
              </select>
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Ke Alamat" class="control-label col-lg-2">Ke Alamat</label>
                        <div class="col-lg-10">
                          <input type="text" name="ke_alamat" value="<?=$data_edit->ke_alamat;?>" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Satuan" class="control-label col-lg-2">Satuan</label>
                        <div class="col-lg-10">
                          <select name="satuan" data-placeholder="Pilih Satuan..." class="form-control chzn-select" tabindex="2" required>
               <option value=""></option>
               <?php foreach ($db->fetch_all("satuan") as $isi) {

                  if ($data_edit->satuan==$isi->id) {
                    echo "<option value='$isi->id' selected>$isi->nm_satuan</option>";
                  } else {
                  echo "<option value='$isi->id'>$isi->nm_satuan</option>";
                    }
               } ?>
              </select>
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Jenis Truk" class="control-label col-lg-2">Jenis Truk</label>
                        <div class="col-lg-10">
                          <select name="jenis_truk" data-placeholder="Pilih Jenis Truk..." class="form-control chzn-select" tabindex="2" required>
               <option value=""></option>
               <?php foreach ($db->fetch_all("jenis_truk") as $isi) {

                  if ($data_edit->jenis_truk==$isi->id) {
                    echo "<option value='$isi->id' selected>$isi->kode_jenis_truk</option>";
                  } else {
                  echo "<option value='$isi->id'>$isi->kode_jenis_truk</option>";
                    }
               } ?>
              </select>
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Tarif" class="control-label col-lg-2">Tarif</label>
                        <div class="col-lg-10">
                          <input type="text" data-rule-number="true" name="tarif" value="<?=$data_edit->tarif;?>" class="form-control" required> 
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
                    <a href="<?=base_index();?>penawaran" class="btn btn-success btn-flat"><i class="fa fa-step-backward"></i> Kembali</a>
          
                  </div>
                  </div>
              </div>
</div>
                  
                </section><!-- /.content -->
        
 