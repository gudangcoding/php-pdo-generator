

                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                     Penawaran
                    </h1>
                   <ol class="breadcrumb">
                        <li><a href="<?=base_index();?>"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="<?=base_index();?>penawaran">Penawaran</a></li>
                        <li class="active">Detail Penawaran</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
<div class="row">
    <div class="col-lg-12">
        <div class="box box-solid box-primary">
                                   <div class="box-header">
                                    <h3 class="box-title">Detail Penawaran</h3>
                                    <div class="box-tools pull-right">
                                        <button class="btn btn-info btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                        <button class="btn btn-info btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>

                  <div class="box-body">
                   <form class="form-horizontal">
                      <div class="form-group">
                        <label for="Nomor Penawaran" class="control-label col-lg-2">Nomor Penawaran</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->idnomorpenawaran;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Legal" class="control-label col-lg-2">Legal</label>
                        <div class="col-lg-10">
                          <?php foreach ($db->fetch_all("legal") as $isi) {
                  if ($data_edit->legal==$isi->id) {

                    echo "<input disabled class='form-control' type='text' value='$isi->nm_legal'>";
                  }
               } ?>
              
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Nama Perusahaan" class="control-label col-lg-2">Nama Perusahaan</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->nm_perusahaan;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Jenis Layanan" class="control-label col-lg-2">Jenis Layanan</label>
                        <div class="col-lg-10">
                          <?php foreach ($db->fetch_all("jns_layanan") as $isi) {
                  if ($data_edit->jns_layanan==$isi->id) {

                    echo "<input disabled class='form-control' type='text' value='$isi->name'>";
                  }
               } ?>
              
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Tanggal Penawaran" class="control-label col-lg-2">Tanggal Penawaran</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=tgl_indo($data_edit->tgl_penawaran);?>" class="form-control">
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
                        <label for="Tanggal Expired" class="control-label col-lg-2">Tanggal Expired</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=tgl_indo($data_edit->tgl_exp);?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Status Pajak" class="control-label col-lg-2">Status Pajak</label>
                        <div class="col-lg-10">
                          <?php if ($data_edit->status_pajak=="Y") {
      ?>
      <input name="status_pajak" class="make-switch" disabled type="checkbox" checked>
      <?php
    } else {
      ?>
      <input name="status_pajak" class="make-switch" disabled type="checkbox">
      <?php
    }?>
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Zona Asal" class="control-label col-lg-2">Zona Asal</label>
                        <div class="col-lg-10">
                          <?php foreach ($db->fetch_all("lokasi1") as $isi) {
                  if ($data_edit->zona_asal==$isi->id) {

                    echo "<input disabled class='form-control' type='text' value='$isi->kota'>";
                  }
               } ?>
              
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Dari Alamat" class="control-label col-lg-2">Dari Alamat</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->dari_alamat;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Zona Tujuan" class="control-label col-lg-2">Zona Tujuan</label>
                        <div class="col-lg-10">
                          <?php foreach ($db->fetch_all("lokasi1") as $isi) {
                  if ($data_edit->zona_tujuan==$isi->id) {

                    echo "<input disabled class='form-control' type='text' value='$isi->kota'>";
                  }
               } ?>
              
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Ke Alamat" class="control-label col-lg-2">Ke Alamat</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->ke_alamat;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Satuan" class="control-label col-lg-2">Satuan</label>
                        <div class="col-lg-10">
                          <?php foreach ($db->fetch_all("satuan") as $isi) {
                  if ($data_edit->satuan==$isi->id) {

                    echo "<input disabled class='form-control' type='text' value='$isi->nm_satuan'>";
                  }
               } ?>
              
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Jenis Truk" class="control-label col-lg-2">Jenis Truk</label>
                        <div class="col-lg-10">
                          <?php foreach ($db->fetch_all("jenis_truk") as $isi) {
                  if ($data_edit->jenis_truk==$isi->id) {

                    echo "<input disabled class='form-control' type='text' value='$isi->kode_jenis_truk'>";
                  }
               } ?>
              
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Tarif" class="control-label col-lg-2">Tarif</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->tarif;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->

                   
                    </form>
                    <a href="<?=base_index();?>penawaran" class="btn btn-success btn-flat"><i class="fa fa-step-backward"></i> Kembali</a>
          
                  </div>
                  </div>
              </div>
</div>
                  
                </section><!-- /.content -->
        
