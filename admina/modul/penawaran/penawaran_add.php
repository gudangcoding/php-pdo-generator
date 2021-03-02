
           
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                     Penawaran
                    </h1>
                           <ol class="breadcrumb">
                        <li><a href="<?=base_index();?>"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="<?=base_index();?>penawaran">Penawaran</a></li>
                        <li class="active">Tambah Penawaran</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
<div class="row">
    <div class="col-lg-12"> 
        <div class="box box-solid box-primary">
                                 <div class="box-header">
                                    <h3 class="box-title">Tambah Penawaran</h3>
                                    <div class="box-tools pull-right">
                                        <button class="btn btn-info btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                        <button class="btn btn-info btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>

                  <div class="box-body table-responsive">

                    <div role="tabpanel">
                      <!-- Nav tabs -->
                      <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active">
                          <a href="#umum" aria-controls="umum" role="tab" data-toggle="tab">Informasi Umum</a>
                        </li>
                        <li role="presentation">
                          <a href="#tarif" aria-controls="tarif" role="tab" data-toggle="tab">Detail Tarif</a>
                        </li>
                      </ul>
                    <form id="input" method="post" class="form-horizontal foto_banyak" action="<?=base_admin();?>modul/penawaran/penawaran_action.php?act=in">
                      <!-- Tab panes -->
                      <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="umum">
                          <div class="row">
                           <div class="col-xs-6">
                        <label for="Nomor Penawaran" >Nomor Penawaran</label>
                        <div >
                          <input type="number" data-rule-number="true" name="idnomorpenawaran" placeholder="Nomor Penawaran" class="form-control" required> 
                        </div>
                      </div><!-- /.col-xs-6 -->
<div class="col-xs-6">
                        <label for="Legal" >Legal</label>
                        <div >
                          <select name="legal" data-placeholder="Pilih Legal ..." class="form-control chzn-select" tabindex="2" required>
               <option value=""></option>
               <?php foreach ($db->fetch_all("legal") as $isi) {
                  echo "<option value='$isi->nm_legal'>$isi->nm_legal</option>";
               } ?>
              </select>
                        </div>
                      </div><!-- /.col-xs-6 -->
                      </div>
                      <div class="row">
<div class="col-xs-6">
                        <label for="Nama Perusahaan" >Nama Perusahaan</label>
                        <div >
                        	<select name="nm_perusahaan" data-placeholder="Nama Perusahaan ..." class="form-control chzn-select" tabindex="2" required>
                        		<option value=""></option>
                        		<?php foreach ($db->fetch_all("pelanggan") as $isi) {
                        			echo "<option value='$isi->nm_perusahaan'>$isi->nm_perusahaan</option>";
                        		}?>
                        	</select>
                          <!-- <input type="text" name="nm_perusahaan" placeholder="Nama Perusahaan" class="form-control" required>  -->
                        </div>
                      </div><!-- /.col-xs-6 -->
<div class="col-xs-6">
                        <label for="Jenis Layanan" >Jenis Layanan</label>
                        <div >
                          <select name="jns_layanan" data-placeholder="Pilih Jenis Layanan ..." class="form-control chzn-select" tabindex="2" required>
               <option value=""></option>
               <?php foreach ($db->fetch_all("jns_layanan") as $isi) {
                  echo "<option value='$isi->name'>$isi->name</option>";
               } ?>
              </select>
                        </div>
                      </div><!-- /.col-xs-6 -->
                      </div>
                      <div class="row">
<div class="col-xs-6">
                        <label for="Tanggal Penawaran" >Tanggal Penawaran</label>
                        <div >
                          <input type="date" data-rule-date="true" name="tgl_penawaran" placeholder="Tanggal Penawaran" class="form-control" required> 
                        </div>
                      </div><!-- /.col-xs-6 -->
<div class="col-xs-6">
                        <label for="Status" >Status</label>
                        <div >
                          <input name="status" class="make-switch" type="checkbox" checked>
                        </div>
                      </div><!-- /.col-xs-6 -->
                      </div>
                      <div class="row">
<div class="col-xs-6">
                        <label for="Tanggal Expired" >Tanggal Expired</label>
                        <div >
                          <input type="date" data-rule-date="true" name="tgl_exp" placeholder="Tanggal Expired" class="form-control" required> 
                        </div>
                      </div><!-- /.col-xs-6 -->
<div class="col-xs-6">
                        <label for="Status Pajak" >Status Pajak</label>
                        <div >
                          <input name="status_pajak" class="make-switch" type="checkbox" checked>
                        </div>
                      </div><!-- /.col-xs-6 -->
                      </div>
                      <button type="button" class="btn btn-primary pull-right" id="lanjut1">Simpan &
                                            Lanjut</button>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="tarif">
                          <div class="row">
                          <div class="col-xs-6">
                        <label for="Zona Asal" >Zona Asal</label>
                        <div >
                          <select id="kota" name="zona_asal" data-placeholder="Pilih Zona Asal ..." class="form-control chzn-select" tabindex="2" required>
               <option value=""></option>
               
              </select>
                        </div>
                      </div><!-- /.col-xs-6 -->
<div class="col-xs-6">
                        <label for="Dari Alamat" >Dari Alamat</label>
                        <div >
                          <input type="text" name="dari_alamat" placeholder="Dari Alamat" class="form-control" required> 
                        </div>
                      </div><!-- /.col-xs-6 -->
                      </div>
                      <div class="row">
<div class="col-xs-6">
                        <label for="Zona Tujuan" >Zona Tujuan</label>
                        <div >
                          <select id="kota1" name="zona_tujuan" data-placeholder="Pilih Zona Tujuan ..." class="form-control chzn-select" tabindex="2" required>
               <option value=""></option>
             
              </select>
                        </div>
                      </div><!-- /.col-xs-6 -->
<div class="col-xs-6">
                        <label for="Ke Alamat" >Ke Alamat</label>
                        <div >
                          <input type="text" name="ke_alamat" placeholder="Ke Alamat" class="form-control" required> 
                        </div>
                      </div><!-- /.col-xs-6 -->
                      </div>
                      <div class="row">
<div class="col-xs-6">
                        <label for="Satuan" >Satuan</label>
                        <div >
                          <select name="satuan" data-placeholder="Pilih Satuan ..." class="form-control chzn-select" tabindex="2" required>
               <option value=""></option>
               <?php foreach ($db->fetch_all("satuan") as $isi) {
                  echo "<option value='$isi->nm_satuan'>$isi->nm_satuan</option>";
               } ?>
              </select>
                        </div>
                      </div><!-- /.col-xs-6 -->
<div class="col-xs-6">
                        <label for="Jenis Truk" >Jenis Truk</label>
                        <div >
                          <select name="jenis_truk" data-placeholder="Pilih Jenis Truk ..." class="form-control chzn-select" tabindex="2" required>
               <option value=""></option>
               <?php foreach ($db->fetch_all("jenis_truk") as $isi) {
                  echo "<option value='$isi->kode_jenis_truk'>$isi->kode_jenis_truk</option>";
               } ?>
              </select>
                        </div>
                      </div><!-- /.col-xs-6 -->
                      </div>
                      <div class="row">
<div class="col-xs-6">
                        <label for="Tarif" >Tarif</label>
                        <div >
                          <input type="text" id="dengan-rupiah" name="tarif" placeholder="Tarif" class="form-control" required> 
                        </div>
                      </div><!-- /.col-xs-6 -->
                       <div class="col-xs-6">
                        <label for="tags" >&nbsp;</label>
                        <div >
                          <input type="submit" class="btn btn-primary" value="submit">
                        </div>
                      </div><!-- /.col-xs-6 -->
                      </div>
                        </div>
                      </div>
                    </div>

                     
                     


                      
                     
                    </form>
 <a href="<?=base_index();?>penawaran" class="btn btn-success btn-flat"><i class="fa fa-step-backward"></i> Kembali</a>
          
                  </div>
                  </div>
              </div>
</div>
                  
                </section><!-- /.content -->
        
            <script type="text/javascript">
               $('#kota').select2({
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
                url: '<?=base_admin();?>modul/pelanggan/pelanggan_action.php?act=kota',
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
                 $('#kota1').select2({
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
                url: '<?=base_admin();?>modul/pelanggan/pelanggan_action.php?act=kota',
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

            </script>

             <script type="text/javascript">
          $("#lanjut1").click(function(event) {
        $('.nav-tabs a[href="#tarif"]').tab('show');
    });
   
        </script>
            
            <script type="text/javascript">
              var dengan_rupiah = document.getElementById('dengan-rupiah');
    dengan_rupiah.addEventListener('keyup', function(e)
    {
        dengan_rupiah.value = formatRupiah(this.value, 'Rp. ');
    });
    
    /* Fungsi */
    function formatRupiah(angka, prefix)
    {
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
            split    = number_string.split(','),
            sisa     = split[0].length % 3,
            rupiah     = split[0].substr(0, sisa),
            ribuan     = split[0].substr(sisa).match(/\d{3}/gi);
            
        if (ribuan) {
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }
        
        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
    }
            </script>