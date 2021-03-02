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
            <!-- <button class="btn btn-info btn-sm" data-widget="remove"><i class="fa fa-times"></i></button> -->
          </div>
        </div>

        <div class="box-body">
          <form id="input" method="post" class="form-horizontal foto_banyak"
            action="<?=base_admin();?>modul/akun/akun_action.php?act=in">
          <div role="tabpanel">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active">
                <a href="#umum" aria-controls="tab" role="tab" data-toggle="tab">Informasi Umum</a>
              </li>
              <li role="presentation">
                <a href="#pengguna" aria-controls="tab" role="tab" data-toggle="tab">Informasi Pengguna</a>
              </li>
               <li role="presentation">
                <a href="#bank" aria-controls="tab" role="tab" data-toggle="tab">Informasi Bank</a>
              </li>
               <li role="presentation">
                <a href="#paket" aria-controls="tab" role="tab" data-toggle="tab">Informasi Paket</a>
              </li>
            </ul>
          
            <!-- Tab panes -->
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="umum">
                <h4 class="btn btn-primary btn-block">Informasi Umum</h4>
            <hr>
            <div class="row">
              <div class="form-group col-xs-6">
                <label for="Nama Perusahaan" class="control-label col-lg-4">Nama Perusahaan</label>
                <div class="col-lg-6">
                  <input type="text" name="nama_perusahaan" placeholder="Nama Perusahaan" class="form-control" required>
                </div>
              </div><!-- /.form-group col-xs-6 -->
              <div class="form-group col-xs-6">
                <label for="Alamat Perusahaan" class="control-label col-lg-4">Alamat Perusahaan</label>
                <div class="col-lg-6">
                  <textarea name="alamat_perusahaan" class="form-control" rows="3" required="required"></textarea>
                  <!-- <input type="text" name="alamat_perusahaan" placeholder="Alamat Perusahaan" class="form-control" required>  -->
                </div>
              </div><!-- /.form-group col-xs-6 -->
            </div>
            <div class="row">
              <div class="form-group col-xs-6">
                <label for="Nama Kota" class="control-label col-lg-4">Nama Kota</label>
                <div class="col-lg-6">
                  <select name="nama_kota" data-placeholder="Pilih Nama Kota ..." class="form-control chzn-select"
                    tabindex="2" required>
                    <option value=""></option>
                    <?php 
               // foreach ($db->fetch_all("lokasi1") as $isi) {
               //    echo "<option value='$isi->id'>$isi->city</option>";
               // } 
               ?>
                  </select>
                </div>
              </div><!-- /.form-group col-xs-6 -->
              <div class="form-group col-xs-6">
                <label for="Jenis Usaha" class="control-label col-lg-4">Jenis Usaha</label>
                <div class="col-lg-6">
                  <input type="text" name="jenis_usaha" placeholder="Jenis Usaha" class="form-control" required>
                </div>
              </div><!-- /.form-group col-xs-6 -->
            </div>
            <div class="row">
              <div class="form-group col-xs-6">
                <label for="Logo Perusahaan" class="control-label col-lg-4">Logo Perusahaan</label>
                <div class="col-lg-6">
                  <div class="fileinput fileinput-new" data-provides="fileinput">
                    <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                      <img data-src="holder.js/40%x40%" alt="...">
                    </div>
                    <div class="fileinput-preview fileinput-exists thumbnail"
                      style="max-width: 200px; max-height: 150px;"></div>
                    <div>
                      <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span> <span
                          class="fileinput-exists">Change</span>
                        <input type="file" name="logo_perusahaan" accept="image/*">
                      </span>
                      <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                    </div>
                  </div>
                </div>
              </div><!-- /.form-group col-xs-6 -->
              <div class="form-group col-xs-6">
                <label for="Nomor NIB" class="control-label col-lg-4">Nomor NIB</label>
                <div class="col-lg-6">
                  <input type="text" name="nib" placeholder="Nomor NIB" class="form-control" required>
                </div>
              </div><!-- /.form-group col-xs-6 -->
            </div>
            <div class="row">
              <div class="form-group col-xs-6">
                <label for="Nomor NPWP" class="control-label col-lg-4">Nomor NPWP</label>
                <div class="col-lg-6">
                  <input type="text" name="npwp" placeholder="Nomor NPWP" class="form-control" required>
                </div>
              </div><!-- /.form-group col-xs-6 -->
              <div class="form-group col-xs-6">
                <label for="Alamat NPWP" class="control-label col-lg-4">Alamat NPWP</label>
                <div class="col-lg-6">
                  <textarea name="alamat_npwp" class="form-control" rows="3" required="required"></textarea>
                  <!-- <input type="text" name="alamat_npwp" placeholder="Alamat NPWP" class="form-control" required>  -->
                </div>
              </div><!-- /.form-group col-xs-6 -->
            </div>
            <div class="row">
              <div class="form-group col-xs-6">
                <label for="Jumlah Truk" class="control-label col-lg-4">Jumlah Truk</label>
                <div class="col-lg-6">
                  <input type="text" name="jumlah_truk" placeholder="Jumlah Truk" class="form-control" required>
                </div>
              </div><!-- /.form-group col-xs-6 -->
              <div class="form-group col-xs-6">
                <label for="Nama Lengkap" class="control-label col-lg-4">&nbsp;</label>

              </div>
            </div>
            <hr>
              </div><!-- tab Umum -->
              <div role="tabpanel" class="tab-pane" id="pengguna">
                <h4 class="btn btn-primary btn-block">Informasi Pengguna</h4>
            <hr>
            <div class="row">
              <div class="form-group col-xs-6">
                <label for="Nama Lengkap" class="control-label col-lg-4">Nama Lengkap</label>
                <div class="col-lg-6">
                  <input type="text" name="nm_lengkap" placeholder="Nama Lengkap" class="form-control" required>
                </div>
              </div><!-- /.form-group col-xs-6 -->


              <div class="form-group col-xs-6">
                <label for="Alamat Email" class="control-label col-lg-4">Alamat Email</label>
                <div class="col-lg-6">
                  <input type="text" data-rule-email="true" name="alamat_email_akun" placeholder="Alamat Email"
                    class="form-control" required>
                </div>
              </div><!-- /.form-group col-xs-6 -->
            </div>
            <div class="row">
              <div class="form-group col-xs-6">
                <label for="Status" class="control-label col-lg-4">Status</label>
                <div class="col-lg-6">
                  <input type="text" name="status" placeholder="Status" class="form-control" required>
                </div>
              </div><!-- /.form-group col-xs-6 -->


              <div class="form-group col-xs-6">
                <label for="Posisi" class="control-label col-lg-4">Posisi</label>
                <div class="col-lg-6">
                  <input type="text" name="posisi" placeholder="Posisi" class="form-control" required>
                </div>
              </div><!-- /.form-group col-xs-6 -->
            </div>
            <div class="row">
              <div class="form-group col-xs-6">
                <label for="No HP" class="control-label col-lg-4">No HP</label>
                <div class="col-lg-6">
                  <input type="text" name="hp" placeholder="No HP" class="form-control" required>
                </div>
              </div><!-- /.form-group col-xs-6 -->
              <div class="form-group col-xs-6">
                <label for="No HP" class="control-label col-lg-4">&nbsp;</label>

              </div>
            </div>
            <hr>
              </div><!-- tab Pengguna -->
              <div role="tabpanel" class="tab-pane" id="bank">
                <h4 class="btn btn-primary btn-block">Informasi Bank</h4>
            <hr>
            <div class="row">
              <div class="form-group col-xs-6">
                <label for="Nama Lengkap" class="control-label col-lg-4">Nama Lengkap</label>
                <div class="col-lg-6">
                  <input type="text" name="nm_lengkap_akun_bank" placeholder="Nama Lengkap" class="form-control"
                    required>
                </div>
              </div><!-- /.form-group col-xs-6 -->
              <div class="form-group col-xs-6">
                <label for="Nomor Rekening" class="control-label col-lg-4">Nomor Rekening</label>
                <div class="col-lg-6">
                  <input type="text" name="rekening" placeholder="Nomor Rekening" class="form-control" required>
                </div>
              </div><!-- /.form-group col-xs-6 -->
            </div>
            <div class="row">
              <div class="form-group col-xs-6">
                <label for="Nama Bank" class="control-label col-lg-4">Nama Bank</label>
                <div class="col-lg-6">
                  <select name="bank" data-placeholder="Pilih Nama Bank ..." class="form-control chzn-select"
                    tabindex="2" required>
                    <option value=""></option>
                    <?php foreach ($db->fetch_all("bank") as $isi) {
                  echo "<option value='$isi->id'>$isi->nama</option>";
               } ?>
                  </select>
                </div>
              </div><!-- /.form-group col-xs-6 -->
              <div class="form-group col-xs-6">
                <label for="No HP" class="control-label col-lg-4">&nbsp;</label>

              </div>
            </div>
            <hr>
              </div><!-- tab Bank -->
              <div role="tabpanel" class="tab-pane" id="paket">
                <h4 class="btn btn-primary btn-block">Informasi Paket</h4>
            <hr>
            <div class="row">
              <div class="form-group col-xs-6">
                <label for="Menu" class="control-label col-lg-4">Menu</label>
                <div class="col-lg-6">
                  <input type="text" name="menu" placeholder="Menu" class="form-control" required>
                </div>
              </div><!-- /.form-group col-xs-6 -->


              <div class="form-group col-xs-6">
                <label for="Nama Biaya" class="control-label col-lg-4">Nama Biaya</label>
                <div class="col-lg-6">
                  <input type="text" name="nama_biaya" placeholder="Nama Biaya" class="form-control" required>
                </div>
              </div><!-- /.form-group col-xs-6 -->
            </div>
            <div class="row">
              <div class="form-group col-xs-6">
                <label for="Deskripsi" class="control-label col-lg-4">Deskripsi</label>
                <div class="col-lg-6">
                  <input type="text" name="deskripsi" placeholder="Deskripsi" class="form-control" required>
                </div>
              </div><!-- /.form-group col-xs-6 -->


              <div class="form-group col-xs-6">
                <label for="Layanan Berlangganan" class="control-label col-lg-4">Layanan Berlangganan</label>
                <div class="col-lg-6">
                  <input type="text" name="layanan_berlangganan" placeholder="Layanan Berlangganan" class="form-control"
                    required>
                </div>
              </div><!-- /.form-group col-xs-6 -->
            </div>

            <div class="form-group col-xs-6">
              <label for="tags" class="control-label col-lg-6">&nbsp;</label>
              <div class="col-lg-6">
                <input type="submit" class="btn btn-primary btn-flat" value="submit">
              </div>
            </div><!-- /.form-group col-xs-6 -->
       
          <a href="<?=base_index();?>akun" class="btn btn-success btn-flat"><i class="fa fa-step-backward"></i>
            Kembali</a>
              </div><!-- Tab Paket -->
            </div>
          </div>
             </form>









          
            
            
            
            

        </div>
      </div>
    </div>
  </div>

</section><!-- /.content -->

`