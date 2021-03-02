

                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                      Lokasi
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="<?=base_index();?>"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="<?=base_index();?>lokasi">Lokasi</a></li>
                        <li class="active">Edit Lokasi</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
<div class="row">
    <div class="col-lg-12">
        <div class="box box-solid box-primary">
                                   <div class="box-header">
                                    <h3 class="box-title">Edit Lokasi</h3>
                                    <div class="box-tools pull-right">
                                        <button class="btn btn-info btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                        <button class="btn btn-info btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>

                  <div class="box-body">
                     <form id="update" method="post" class="form-horizontal" action="<?=base_admin();?>modul/lokasi/lokasi_action.php?act=up">
                      <div class="form-group">
                        <label for="ID Perusahaan" class="control-label col-lg-2">ID Perusahaan</label>
                        <div class="col-lg-10">
                          <select name="id_perusahaan" data-placeholder="Pilih ID Perusahaan..." class="form-control chzn-select" tabindex="2" required>
               <option value=""></option>
               <?php foreach ($db->fetch_all("sys_users") as $isi) {

                  if ($data_edit->id_perusahaan==$isi->id) {
                    echo "<option value='$isi->id' selected>$isi->first_name</option>";
                  } else {
                  echo "<option value='$isi->id'>$isi->first_name</option>";
                    }
               } ?>
              </select>
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Alamat" class="control-label col-lg-2">Alamat</label>
                        <div class="col-lg-10">
                          <input type="text" name="alamat" value="<?=$data_edit->alamat;?>" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Kelurahan" class="control-label col-lg-2">Kelurahan</label>
                        <div class="col-lg-10">
                          <input type="text" name="urban" value="<?=$data_edit->urban;?>" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Kecamatan" class="control-label col-lg-2">Kecamatan</label>
                        <div class="col-lg-10">
                          <input type="text" name="sub_district" value="<?=$data_edit->sub_district;?>" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Kota" class="control-label col-lg-2">Kota</label>
                        <div class="col-lg-10">
                          <input type="text" name="city" value="<?=$data_edit->city;?>" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Kode Provinsi" class="control-label col-lg-2">Kode Provinsi</label>
                        <div class="col-lg-10">
                          <input type="text" name="province_code" value="<?=$data_edit->province_code;?>" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Kode Pos" class="control-label col-lg-2">Kode Pos</label>
                        <div class="col-lg-10">
                          <select name="postal_code" id="postal_code" value="<?=$data_edit->postal_code;?>" class="form-control" required>
                        </select>
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
                    <a href="<?=base_index();?>lokasi" class="btn btn-success btn-flat"><i class="fa fa-step-backward"></i> Kembali</a>
          
                  </div>
                  </div>
              </div>
</div>
                  
                </section><!-- /.content -->
        
 <script>
    $(document).ready(function() {
        $('#postal_code').select2({
              placeholder: 'Pilih Salah Satu',
               language: {
                   noResults: function() {
                  return `<button style="width: 100%" type="button"
                  class="btn btn-primary" 
                  onClick='tambah()'>+ Tambah</button>
                  </li>`;
                  }
               },
              ajax: {
                url: '<?=base_admin();?>modul/lokasi/lokasi_action.php?act=kodepos',
                dataType: 'json',
                delay: 250,
                processResults: function (data) {
                  return {
                    results: data
                  };
                },
                cache: true
              },
              escapeMarkup: function (markup) {
                  return markup;
              }
          });
         });
        </script>