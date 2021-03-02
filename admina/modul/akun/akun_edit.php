

                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                      Akun
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="<?=base_index();?>"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="<?=base_index();?>akun">Akun</a></li>
                        <li class="active">Edit Akun</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
<div class="row">
    <div class="col-lg-12">
        <div class="box box-solid box-primary">
                                   <div class="box-header">
                                    <h3 class="box-title">Edit Akun</h3>
                                    <div class="box-tools pull-right">
                                        <button class="btn btn-info btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                        <button class="btn btn-info btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>

                  <div class="box-body">
                     <form id="update" method="post" class="form-horizontal" action="<?=base_admin();?>modul/akun/akun_action.php?act=up">
                      <div class="form-group">
                        <label for="Nama Perusahaan" class="control-label col-lg-2">Nama Perusahaan</label>
                        <div class="col-lg-10">
                          <input type="text" name="nama_perusahaan" value="<?=$data_edit->nama_perusahaan;?>" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Alamat Perusahaan" class="control-label col-lg-2">Alamat Perusahaan</label>
                        <div class="col-lg-10">
                          <input type="text" name="alamat_perusahaan" value="<?=$data_edit->alamat_perusahaan;?>" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Nama Kota" class="control-label col-lg-2">Nama Kota</label>
                        <div class="col-lg-10">
                          <select name="nama_kota" data-placeholder="Pilih Nama Kota..." class="form-control chzn-select" tabindex="2" required>
               <option value=""></option>
               <?php foreach ($db->fetch_all("lokasi1") as $isi) {

                  if ($data_edit->nama_kota==$isi->id) {
                    echo "<option value='$isi->id' selected>$isi->city</option>";
                  } else {
                  echo "<option value='$isi->id'>$isi->city</option>";
                    }
               } ?>
              </select>
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Jenis Usaha" class="control-label col-lg-2">Jenis Usaha</label>
                        <div class="col-lg-10">
                          <input type="text" name="jenis_usaha" value="<?=$data_edit->jenis_usaha;?>" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Logo Perusahaan" class="control-label col-lg-2">Logo Perusahaan</label>
                        <div class="col-lg-10">
                          <div class="fileinput fileinput-new" data-provides="fileinput">
                            <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                             <img src="../../../../upload/akun/<?=$data_edit->logo_perusahaan?>">
                            </div>
                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                            <div>
                              <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span> <span class="fileinput-exists">Change</span> 
                                <input type="file" name="logo_perusahaan" accept="image/*">
                              </span> 
                              <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a> 
                            </div>
                          </div>
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Nomor NIB" class="control-label col-lg-2">Nomor NIB</label>
                        <div class="col-lg-10">
                          <input type="text" name="nib" value="<?=$data_edit->nib;?>" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Nomor NPWP" class="control-label col-lg-2">Nomor NPWP</label>
                        <div class="col-lg-10">
                          <input type="text" name="npwp" value="<?=$data_edit->npwp;?>" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Alamat NPWP" class="control-label col-lg-2">Alamat NPWP</label>
                        <div class="col-lg-10">
                          <input type="text" name="alamat_npwp" value="<?=$data_edit->alamat_npwp;?>" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Jumlah Truk" class="control-label col-lg-2">Jumlah Truk</label>
                        <div class="col-lg-10">
                          <input type="text" name="jumlah_truk" value="<?=$data_edit->jumlah_truk;?>" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Nama Lengkap" class="control-label col-lg-2">Nama Lengkap</label>
                        <div class="col-lg-10">
                          <input type="text" name="nm_lengkap" value="<?=$data_edit->nm_lengkap;?>" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Alamat Email" class="control-label col-lg-2">Alamat Email</label>
                        <div class="col-lg-10">
                          <input type="text"  data-rule-email="true" name="alamat_email_akun" value="<?=$data_edit->alamat_email_akun;?>" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Status" class="control-label col-lg-2">Status</label>
                        <div class="col-lg-10">
                          <input type="text" name="status" value="<?=$data_edit->status;?>" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Posisi" class="control-label col-lg-2">Posisi</label>
                        <div class="col-lg-10">
                          <input type="text" name="posisi" value="<?=$data_edit->posisi;?>" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="No HP" class="control-label col-lg-2">No HP</label>
                        <div class="col-lg-10">
                          <input type="text" name="hp" value="<?=$data_edit->hp;?>" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Nama Lengkap" class="control-label col-lg-2">Nama Lengkap</label>
                        <div class="col-lg-10">
                          <input type="text" name="nm_lengkap_akun_bank" value="<?=$data_edit->nm_lengkap_akun_bank;?>" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Nomor Rekening" class="control-label col-lg-2">Nomor Rekening</label>
                        <div class="col-lg-10">
                          <input type="text" name="rekening" value="<?=$data_edit->rekening;?>" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Nama Bank" class="control-label col-lg-2">Nama Bank</label>
                        <div class="col-lg-10">
                          <select name="bank" data-placeholder="Pilih Nama Bank..." class="form-control chzn-select" tabindex="2" required>
               <option value=""></option>
               <?php foreach ($db->fetch_all("bank") as $isi) {

                  if ($data_edit->bank==$isi->id) {
                    echo "<option value='$isi->id' selected>$isi->nama</option>";
                  } else {
                  echo "<option value='$isi->id'>$isi->nama</option>";
                    }
               } ?>
              </select>
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Menu" class="control-label col-lg-2">Menu</label>
                        <div class="col-lg-10">
                          <input type="text" name="menu" value="<?=$data_edit->menu;?>" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Nama Biaya" class="control-label col-lg-2">Nama Biaya</label>
                        <div class="col-lg-10">
                          <input type="text" name="nama_biaya" value="<?=$data_edit->nama_biaya;?>" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Deskripsi" class="control-label col-lg-2">Deskripsi</label>
                        <div class="col-lg-10">
                          <input type="text" name="deskripsi" value="<?=$data_edit->deskripsi;?>" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Layanan Berlangganan" class="control-label col-lg-2">Layanan Berlangganan</label>
                        <div class="col-lg-10">
                          <input type="text" name="layanan_berlangganan" value="<?=$data_edit->layanan_berlangganan;?>" class="form-control" required> 
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
                    <a href="<?=base_index();?>akun" class="btn btn-success btn-flat"><i class="fa fa-step-backward"></i> Kembali</a>
          
                  </div>
                  </div>
              </div>
</div>
                  
                </section><!-- /.content -->
        
 