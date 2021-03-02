

                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                     Akun
                    </h1>
                   <ol class="breadcrumb">
                        <li><a href="<?=base_index();?>"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="<?=base_index();?>akun">Akun</a></li>
                        <li class="active">Detail Akun</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
<div class="row">
    <div class="col-lg-12">
        <div class="box box-solid box-primary">
                                   <div class="box-header">
                                    <h3 class="box-title">Detail Akun</h3>
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
                          <input type="text" disabled="" value="<?=$data_edit->nama_perusahaan;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Alamat Perusahaan" class="control-label col-lg-2">Alamat Perusahaan</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->alamat_perusahaan;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Nama Kota" class="control-label col-lg-2">Nama Kota</label>
                        <div class="col-lg-10">
                          <?php foreach ($db->fetch_all("lokasi1") as $isi) {
                  if ($data_edit->nama_kota==$isi->id) {

                    echo "<input disabled class='form-control' type='text' value='$isi->city'>";
                  }
               } ?>
              
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Jenis Usaha" class="control-label col-lg-2">Jenis Usaha</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->jenis_usaha;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Logo Perusahaan" class="control-label col-lg-2">Logo Perusahaan</label>
                        <div class="col-lg-10">
                          <div class="fileinput fileinput-new" data-provides="fileinput">
                    <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
                    <img src="../../../../upload/akun/<?=$data_edit->logo_perusahaan?>"></div>
                  </div>
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Nomor NIB" class="control-label col-lg-2">Nomor NIB</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->nib;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Nomor NPWP" class="control-label col-lg-2">Nomor NPWP</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->npwp;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Alamat NPWP" class="control-label col-lg-2">Alamat NPWP</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->alamat_npwp;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Jumlah Truk" class="control-label col-lg-2">Jumlah Truk</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->jumlah_truk;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Nama Lengkap" class="control-label col-lg-2">Nama Lengkap</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->nm_lengkap;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Alamat Email" class="control-label col-lg-2">Alamat Email</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->alamat_email_akun;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Status" class="control-label col-lg-2">Status</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->status;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Posisi" class="control-label col-lg-2">Posisi</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->posisi;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="No HP" class="control-label col-lg-2">No HP</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->hp;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Nama Lengkap" class="control-label col-lg-2">Nama Lengkap</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->nm_lengkap_akun_bank;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Nomor Rekening" class="control-label col-lg-2">Nomor Rekening</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->rekening;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Nama Bank" class="control-label col-lg-2">Nama Bank</label>
                        <div class="col-lg-10">
                          <?php foreach ($db->fetch_all("bank") as $isi) {
                  if ($data_edit->bank==$isi->id) {

                    echo "<input disabled class='form-control' type='text' value='$isi->nama'>";
                  }
               } ?>
              
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Menu" class="control-label col-lg-2">Menu</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->menu;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Nama Biaya" class="control-label col-lg-2">Nama Biaya</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->nama_biaya;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Deskripsi" class="control-label col-lg-2">Deskripsi</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->deskripsi;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Layanan Berlangganan" class="control-label col-lg-2">Layanan Berlangganan</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->layanan_berlangganan;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->

                   
                    </form>
                    <a href="<?=base_index();?>akun" class="btn btn-success btn-flat"><i class="fa fa-step-backward"></i> Kembali</a>
          
                  </div>
                  </div>
              </div>
</div>
                  
                </section><!-- /.content -->
        
