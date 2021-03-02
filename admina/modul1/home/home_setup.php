<!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Boba App
            <small>V 1.0</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Pengaturan Akun</li>
          </ol>
        </section>

        <!-- Main content -->
       
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                <h3 class="box-title">List Akun</h3>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive">

<form method="post" id="register_form">
    <ul class="nav nav-tabs">
     <li class="nav-item">
      <a class="nav-link active_tab1" style="border:1px solid #ccc" id="list_login_details">Informasi Umum</a>
     </li>
     <li class="nav-item">
      <a class="nav-link inactive_tab1" id="list_personal_details" style="border:1px solid #ccc">Informasi Pengguna</a>
     </li>
     <li class="nav-item">
      <a class="nav-link inactive_tab1" id="list_contact_details" style="border:1px solid #ccc">Informasi Bank</a>
     </li>
    </ul>
    <div class="tab-content" style="margin-top:16px;">
     <div class="tab-pane active" id="login_details">
      <div class="panel panel-default">
       <div class="panel-heading">Informasi Umum</div>
       <div class="panel-body">
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
          <label>Nama Kota</label>
          <select name="Nama_Kota" id="Nama_Kota" class="form-control chzn-select" required="required">
            <option value="">Pilih Kota</option>
            <?php 
                foreach ($db->fetch_all('Kecamatan') as $k) {
                 echo "<option value='$k->ID_Kecamatan'>$k->Nama_Kecamatan</option>";
                }
            ?>
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
            <select name="Jenis_Usaha" id="Jenis_Usaha" class="form-control chzn-select" required="required">
          <option value="">Pilih Jenis Usaha</option>
            <?php 
                 foreach ($db->fetch_all('jenis_usaha') as $k) {
                  echo "<option value='$k->id'>$k->jenis_usaha</option>";
                 }
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
         <button type="button" name="btn_login_details" id="btn_login_details" class="btn btn-info">Simpan dan Lanjut</button>
        </div>
        <br />
        <table id="akun" class="display responsive nowrap table"> 
            <thead>
              <tr>
                <th><input type="checkbox" id="cekAll"></th>
                <th>No</th>
                <th>Nama Perusahaan</th>
                <th>Alamat Perusahaan</th>
                <th>Nama Kota</th>
                <th>Jenis Usaha</th>
                <th>Nomor NIB</th>
                <th>Nomor NPWP</th>
                <th>Alamat NPWP</th>
                <th>Jumlah Truk</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
           
            </tbody>
          </table>

       </div>
      </div>
     </div>
     <div class="tab-pane fade" id="personal_details">
      <div class="panel panel-default">
       <div class="panel-heading">Informasi Pengguna</div>
       <div class="panel-body">
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
         <button type="button" name="previous_btn_personal_details" id="previous_btn_personal_details" class="btn btn-default">Kembali</button>
         <button type="button" name="btn_personal_details" id="btn_personal_details" class="btn btn-info">Simpan dan Lanjut</button>
        </div>
        <br />
        <table class="umum display responsive nowrap table" id="pengguna" width="100%"> 
            <thead>
              <tr>
                <th><input type="checkbox" id="cekAll2"></th>
                <th>No</th>
                <th>Nama Lengkap</th>
                <th>Alamat Email</th>
                <th>No HP</th>
                <th>Posisi</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><input type="checkbox" class="pengguna"></td>
                <td>1</td>
                <td>Ahmad Fauzi</td>
                <td>ahmadfauzi228.se@gmail.com</td>
                <td>082118017822</td>
                <td>Pemilik</td>
                <td>Aktif</td>
              </tr>
            </tbody>
          </table>

       </div>
      </div>
     </div>
     <div class="tab-pane fade" id="contact_details">
      <div class="panel panel-default">
       <div class="panel-heading">Informasi Bank</div>
       <div class="panel-body">
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
         <button type="button" name="previous_btn_contact_details" id="previous_btn_contact_details" class="btn btn-default">Kembali</button>
         <button type="button" name="btn_contact_details" id="btn_contact_details" class="btn btn-success ">Simpan</button>
        </div>
        <br />
        <table class="umum display responsive nowrap table" id="bank" width="100%"> 
          <thead>
              <tr>
                <th><input type="checkbox" id="cekAll3"></th>
                <th>No</th>
                <th>Nama Lengkap</th>
                <th>Nama Bank</th>
                <th>Nomor Rekening</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><input type="checkbox" class="bank"></td>
                <td>1</td>
                <td>Ahmad Fauzi</td>
                <td>BANK CENTRAL ASIA</td>
                <td>62888787</td>
              </tr>
            </tbody>
          </table>
       </div>
      </div>
     </div>
    </div>
   </form>
              
                      </div><!-- /.box-body -->
                  </div><!-- /.box -->
              </div>
          </div>

</section><!-- /.content -->
<!-- Main content -->


<script type="text/javascript">
$(document).ready(function () {
  load(); //load datatablenya

  $("#Nama_Kota").keyup(function() {
    alert('diketik');
    $.ajax({
      url: '<?=base_admin();?>modul/akun/akun_action.php?act=pilih_kota',
      type: 'POST',
      // dataType: 'html',
      data: {Nama_Kota: $("#Nama_Kota").val()},
      success : function(hasil){
        console.log(hasil);
        $("#Nama_Kota").html(hasil);
      },
      error : function(err) {
        console.log(err);
      }
    });
  });
  $('#Nama_Kota').click(function(event) {
    alert('tes');
  });

  $(".chzn-select").on('keyup', function(e) {
      alert('diketik');
  });

  // $('#Nama_Kota').delegate("keyUp", function (e) {
  //     alert('diketik');
  //   $.ajax({
  //   type: "POST",
  //   url: "<?=base_admin();?>modul/akun/akun_action.php?act=pilih_kota",
  //   data:  {Nama_Kota: $("#Nama_Kota").val()}
  //   }).done(function (data) {
  //           $("#Nama_Kota").html(data);
  //   json = eval(data);
  //   $('#Nama_Kota').html('');
  //   $(json).each(function () {
  //   $('#Nama_Kota').append('' + this.TypeCode + '');
  //   });
  //   $("#Nama_Kota").trigger("liszt:updated");
  //   });
  // });

$("#btn_login_details").click(function(event) {
  console.log('step1diklik');
  $.ajax({
    url: '<?=base_admin();?>modul/akun/akun_action.php?act=in',
    type: 'POST',
    data: {
      Nama_Perusahaan   : $("#Nama_Perusahaan").val(),
      Alamat_Perusahaan : $("#Alamat_Perusahaan").val(),
      Nama_Kota     : $("#Nama_Kota").val(),
      Jenis_Usaha     : $("#Jenis_Usaha").val(),
      Logo_Perusahaan   : $("#Logo_Perusahaan").val(),
      No_NIB        : $("#No_NIB").val(),
      No_NPWP       : $("#No_NPWP").val(),
      Alamat_NPWP     : $("#Alamat_NPWP").val(),
      Jumlah_Truk     : $("#Jumlah_Truk").val()

    },
    success : function (hasil) {
      Swal.fire(
        'Sukses',
        'Data Berhasil Disimpan',
        'success'
      );
      table.ajax.reload( null, false );
      console.log(hasil);
    },
    error   :function(err) {
      console.log(err);
    }
  });
  
});

  function load() {
    var table = $("#akun").dataTable({
        'bProcessing': true,
        'bServerSide': true,
        //disable order dan searching pada tombol aksi
        "columnDefs": [{
            "targets": [0],
            "orderable": false,
            "searchable": false

        }],
        "ajax": {
            url: "<?=base_admin();?>modul/akun/akun_data.php",
            type:'post',
            
            error: function(xhr, error, thrown) {
                console.log(xhr);

            }
        },

    });
  }

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
});

</script>  
  
   <script>
$(document).ready(function(){
 
 $('#btn_login_details').click(function(){
   $('#list_login_details').removeClass('active active_tab1');
   $('#list_login_details').removeAttr('href data-toggle');
   $('#login_details').removeClass('active');
   $('#list_login_details').addClass('inactive_tab1');
   $('#list_personal_details').removeClass('inactive_tab1');
   $('#list_personal_details').addClass('active_tab1 active');
   $('#list_personal_details').attr('href', '#personal_details');
   $('#list_personal_details').attr('data-toggle', 'tab');
   $('#personal_details').addClass('active in');
 });
 
 $('#previous_btn_personal_details').click(function(){
  $('#list_personal_details').removeClass('active active_tab1');
  $('#list_personal_details').removeAttr('href data-toggle');
  $('#personal_details').removeClass('active in');
  $('#list_personal_details').addClass('inactive_tab1');
  $('#list_login_details').removeClass('inactive_tab1');
  $('#list_login_details').addClass('active_tab1 active');
  $('#list_login_details').attr('href', '#login_details');
  $('#list_login_details').attr('data-toggle', 'tab');
  $('#login_details').addClass('active in');
 });
 

 $('#btn_personal_details').click(function(){
  
   $('#list_personal_details').removeClass('active active_tab1');
   $('#list_personal_details').removeAttr('href data-toggle');
   $('#personal_details').removeClass('active');
   $('#list_personal_details').addClass('inactive_tab1');
   $('#list_contact_details').removeClass('inactive_tab1');
   $('#list_contact_details').addClass('active_tab1 active');
   $('#list_contact_details').attr('href', '#contact_details');
   $('#list_contact_details').attr('data-toggle', 'tab');
   $('#contact_details').addClass('active in');
  
 });
 
 $('#previous_btn_contact_details').click(function(){
  $('#list_contact_details').removeClass('active active_tab1');
  $('#list_contact_details').removeAttr('href data-toggle');
  $('#contact_details').removeClass('active in');
  $('#list_contact_details').addClass('inactive_tab1');
  $('#list_personal_details').removeClass('inactive_tab1');
  $('#list_personal_details').addClass('active_tab1 active');
  $('#list_personal_details').attr('href', '#personal_details');
  $('#list_personal_details').attr('data-toggle', 'tab');
  $('#personal_details').addClass('active in');
 });
 
 $('#btn_contact_details').click(function(){
  
   $('#btn_contact_details').attr("disabled", "disabled");
   $(document).css('cursor', 'prgress');
   $("#register_form").submit();
  
  
 });
 
});
</script>
    