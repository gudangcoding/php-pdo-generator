

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Pengaturan Akun
    </h1>
        <ol class="breadcrumb">
        <li><a href="<?=base_index();?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?=base_index();?>akun">Akun</a></li>
        <li class="active">Akun List</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                <h3 class="box-title">List Akun</h3>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive">
                  <div role="tabpanel">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                      <li role="presentation" class="active">
                        <a href="#info_umum" aria-controls="home" role="tab" data-toggle="tab">Informasi Umum</a>
                      </li>
                      <li role="presentation">
                        <a href="#info_user" aria-controls="tab" role="tab" data-toggle="tab">Informasi Pengguna</a>
                      </li>
                      <li role="presentation">
                        <a href="#info_bank" aria-controls="tab" role="tab" data-toggle="tab">Informasi bank</a>
                      </li>
                      <li role="presentation">
                        <a href="#info_paket" aria-controls="tab" role="tab" data-toggle="tab">Informasi Paket</a>
                      </li>
                    </ul>
                  
                    <!-- Tab panes -->
                    <div class="tab-content">
                      <div role="tabpanel" class="tab-pane active" id="info_umum">
                         <div class="row">
                            <div class="col-xs-6 form-group">
                                <label>Nama Perusahaan</label>
                                <input type="text" class="form-control" type="text" name="Nama_Perusahaan" id="Nama_Perusahaan" required>
                            </div>
                            <div class="col-xs-6 form-group">
                                <label>Nomor NIB</label>
                                <input type="number" class="form-control" type="text" name="No_NIB" id="No_NIB" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6 form-group">
                                <label>Alamat Perusahaan</label>
                                <textarea name="Alamat_Perusahaan" id="Alamat_Perusahaan" class="form-control" rows="3" required></textarea>
                                <!-- <input type="text" name="Alamat_Perusahaan" id="Alamat_Perusahaan" class="form-control" required> -->
                            </div>
                            <div class="col-xs-6 form-group">
                              <label>Nomor NPWP</label>
                              <input type="number" class="form-control" type="text" name="No_NPWP" id="No_NPWP" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6 form-group">
                              <label for="Nama Kota">Nama Kota</label>
                        <select name="Nama_Kota" id="Nama_Kota" class="form-control" required>
                        </select>
                            </div>
                            <div class="col-xs-6 form-group">
                                <label>Alamat NPWP</label>
                                <input type="text" name="Alamat_NPWP" id="Alamat_NPWP" class="form-control" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6 form-group">
                                <label>Jenis Usaha</label>
                                <select name="Jenis_Usaha" id="Jenis_Usaha" class="form-control usaha" required="required">
                              <option value="">Pilih Jenis Usaha</option>
                                <?php 
                                    /* foreach ($db->fetch_all('jenis_usaha') as $k) {
                                      echo "<option value='$k->id'>$k->jenis_usaha</option>";
                                     }*/
                                ?>
                            </select>
                            </div>
                            <div class="col-xs-6 form-group">
                                <label>Jumlah Truk</label>
                                <input type="number" name="Jumlah_Truk" id="Jumlah_Truk" class="form-control" required>
                            </div>
                        </div>
                        <div class="row">
                              <div class="col-xs-6 form-group">
                                <label>Logo Perusahaan</label>
                                <input type="file" name="Logo_Perusahaan" id="Logo_Perusahaan" class="form-control" required>
                            </div>
                        </div>
                        <br />
                        <div align="center">
                         <button type="button" name="btn_login_details" id="btn_info_umum" class="btn btn-info">Simpan dan Lanjut</button>
                        </div>

                      </div><!-- informasi Umum -->
                      <div role="tabpanel" class="tab-pane" id="info_user">
                        <div class="row">
                        <div class="col-xs-6 form-group">
                              <label>Nama Lengkap</label>
                              <input type="text" class="form-control" type="text" name="Nama_Lengkap" id="Nama_Lengkap" required>
                          </div>
                          <div class="col-xs-6 form-group">
                              <label>Posisi</label>
                              <select name="Posisi" id="Posisi" class="form-control chzn-select" tabindex="2" required>
                                    <option value="Posisi">Pemilik</option>
                                    <option value="Posisi">Bagian Operasional</option>
                                    <option value="Posisi">Bagian Keuangan</option>
                                    <option value="Posisi">Bagian Bengkel</option>
                                    <option value="Posisi">Pengemudi</option>
                                    <option value="Posisi">Pelanggan*</option>
                                   </select>
                          </div>
                       </div>
                       <div class="row">
                        <div class="col-xs-6 form-group">
                              <label>Alamat Email</label>
                              <input type="text" class="form-control" type="text" name="Alamat_Email" id="Alamat_Email" required>
                          </div>
                          
                          <div class="col-xs-6 form-group">
                              <label>No HP</label>
                              <input type="number" class="form-control" name="No_HP" id="No_HP" required>
                          </div>
                       </div>
                       <div class="row">
                          <div class="col-xs-12 form-group">
                              <label>Status  :</label>
                              <label class="radio-inline"><input type="radio" name="optradio" checked>Non Aktif</label>
                        <label class="radio-inline"><input type="radio" name="optradio">Aktif</label>
                          </div>
                       </div>
                         
                          <br />
                          <div align="center">
                           <button type="button" name="previous_btn_personal_details" id="btn_info_pengguna_back" class="btn btn-default">Kembali</button>
                           <button type="button" name="btn_personal_details" id="btn_info_pengguna" class="btn btn-info">Simpan dan Lanjut</button>
                          </div>
                      </div><!-- informasi Pengguna -->
                      <div role="tabpanel" class="tab-pane" id="info_bank">
                        <div class="row">
                          <div class="form-group col-xs-6">
                                <label for="Nama Lengkap" class="control-label" style="text-align: left;">Nama Lengkap</label>
                                  <input type="text" name="nama_lengkap" placeholder="Nama Lengkap" class="form-control" required> 
                              </div><!-- /.form-group -->
                            <div class="form-group col-xs-6">
                                <label for="Nama Bank" class="control-label" style="text-align: left;">Nama Bank</label>
                                  <input type="text" name="nama_bank" placeholder="Nama Bank" class="form-control" required> 
                              </div><!-- /.form-group -->
                        </div>
                        <div class="row">
                          <div class="form-group col-xs-6">
                                <label for="Nomor Rekening" class="control-label" style="text-align: left;">Nomor Rekening</label>
                                  <input type="text" name="nomor_rek" placeholder="Nomor Rekening" class="form-control" required> 
                            </div><!-- /.form-group -->
                        </div>

                             
                              <br />
                        <div align="center">
                         <button type="button" name="previous_btn_contact_details" id="btn_info_bank_back" class="btn btn-default">Kembali</button>
                         <button type="button" name="btn_contact_details" id="btn_info_bank" class="btn btn-info ">Simpan dan Lanjut</button>
                        </div>
                      </div><!-- informasi Bank -->
                      <div role="tabpanel" class="tab-pane" id="info_paket">
                          <div class="row">
                            <div class="col-xs-6 form-group">
                              <label>Menu</label>
                              <input type="text" name="Menu" id="Menu" placeholder="Menu" class="form-control" required>
                          </div>
                            <div class="col-xs-6 form-group">
                              <label>Deskripsi</label>
                              <textarea name="Deskripsi" id="Deskripsi" class="form-control" rows="3" placeholder="Deskripsi" required></textarea>
                         </div>
                         </div>
                         <div class="row">
                          <div class="col-xs-6 form-group">
                            <label>Nama Biaya</label>
                            <input type="text" name="Nama_Biaya" id="Nama_Biaya" class="form-control" placeholder="Nama Biaya" required>
                          </div>
                          <div class="col-xs-6 form-group">
                            <label>Layanan Berlangganan</label>
                            <select name="Layanan_Berlangganan" id="Layanan_Berlangganan" class="form-control" required>
                                          <option value="1">Trial 30 Hari</option>
                                          <option value="2">Paket 1 (Per Truk Per Bulan)</option>
                                          <option value="3">Paket 2 (Per Truk Per Bulan) + GPS</option>
                                          <option value="4">Paket 3 (Per User Per Bulan)</option>
                                          <option value="5">Paket 4 (Per User Per Bulan) + GPS</option>
                                        </select>

                          </div>
                         </div>
                         
                        <br />
                                <div align="center">
                                 <button type="button" name="previous_btn_biaya_details" id="btn_info_paket_back" class="btn btn-default">Kembali</button>
                                 <button type="button" name="btn_biaya_details" id="btn_info_paket" class="btn btn-info ">Simpan dan Selesai</button>
                                </div>
                      </div><!-- Informasi Paket -->
                    </div>
                  </div>

              
                      </div><!-- /.box-body -->
                  </div><!-- /.box -->
              </div>
          </div>

</section><!-- /.content -->
<!-- Main content -->


<script type="text/javascript">
$(document).ready(function () {


  function detail(iddata){
    $.ajax({
      url: '<?=base_admin();?>modul/akun/akun_action.php?act=edit',
      type: 'POST',
      dataType: 'json',
      data: {id: iddata},
      success : function (hasil) {
        console.log(hasil);
        $("#id_perusahaan").val(hasil[0].id);
        $("#Nama_Perusahaan").val(hasil[0].Nama_Perusahaan);
        $("#Alamat_Perusahaan").val(hasil[0].Alamat_Perusahaan);
        $("#Nama_Kota").val(hasil[0].Nama_Kota);
        $("#Jenis_Usaha").val(hasil[0].Jenis_Usaha);
        $("#Logo_Perusahaan").val(hasil[0].Logo_Perusahaan);
        $("#No_NIB").val(hasil[0].No_NIB);
        $("#No_NPWP").val(hasil[0].No_NPWP);
        $("#Alamat_NPWP").val(hasil[0].Alamat_Perusahaan);
        $("#Jumlah_Truk").val(hasil[0].Jumlah_Truk);
      },
      error   :function(err) {
        console.log(err);
      }
    });
  }/*Fungsi Detail*/

  function hapus(id){
    console.log(id);
    Swal.fire({
      title: 'Data ID '+id+' Mau di hapus?',
      showDenyButton: true,
      showCancelButton: true,
      confirmButtonText: `Hapus`,
      denyButtonText: `Batal`,
    }).then((result) => {
      /* Jika Hapus Dikonfirmasi */
      if (result.isConfirmed) {
        $.ajax({
          url: '<?=base_admin();?>modul/akun/akun_action.php?act=hapus',
          type: 'POST',
          dataType: 'json',
          data: {id: iddata},
          success : function (hasil) {
            Swal.fire('Sukses Dihapus!', '', 'success')
          },
          error   :function(err) {
            console.log(err);
          }
        });
        
      } else if (result.isDenied) {
        Swal.fire('Batal Dihapus', '', 'info')
      }
    });
  }/*Fungsi Hapus*/


  
  $("#cekAll").change(function () {
      $(".akun").prop('checked', $(this).prop("checked"));
  });

  $("#cekAll2").change(function () {
      $(".pengguna").prop('checked', $(this).prop("checked"));
  });

  $("#cekAll2").change(function () {
      $(".bank").prop('checked', $(this).prop("checked"));
  });

  /*untuk tabs */
  $("#btn_info_umum").click(function(event) {
    $('.nav-tabs a[href="#info_user"]').tab('show');
  });
  $("#btn_info_pengguna").click(function(event) {
    $('.nav-tabs a[href="#info_bank"]').tab('show');
  });
  $("#btn_info_bank").click(function(event) {
    $('.nav-tabs a[href="#info_paket"]').tab('show');
  });
  $("#btn_info_paket").click(function(event) {
    $.ajax({
      url: '<?=base_admin();?>modul/akun/akun_action.php?act=in',
      type: 'POST',
      data: {
        Nama_Perusahaan   : $("#Nama_Perusahaan").val(),
        Alamat_Perusahaan : $("#Alamat_Perusahaan").val(),
        Nama_Kota         : $("#Nama_Kota").val(),
        Jenis_Usaha       : $("#Jenis_Usaha").val(),
        Logo_Perusahaan   : $("#Logo_Perusahaan").val(),
        No_NIB            : $("#No_NIB").val(),
        No_NPWP           : $("#No_NPWP").val(),
        Alamat_NPWP       : $("#Alamat_NPWP").val(),
        Jumlah_Truk       : $("#Jumlah_Truk").val()

      },
      success : function (hasil) {
        Swal.fire(
          'Sukses',
          'Data Berhasil Disimpan',
          'success'
        );
  
      },
      error   :function(err) {
        console.log(err);
      }
    });
  });
  /*akhir dari fungsi tombol tabs*/


});

</script>  
  
   <script>
$(document).ready(function(){
 
 

 $('#Jenis_Usaha').select2({
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
      url: '<?=base_admin();?>modul/akun/akun_action.php?act=jenis_usaha',
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

  $('#Nama_Kota').select2({
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
          url: '<?=base_admin();?>modul/akun/akun_action.php?act=kota',
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

 function tambah(){
    console.log("Alihkan Ke modal Tambah Kota");
 }
</script>