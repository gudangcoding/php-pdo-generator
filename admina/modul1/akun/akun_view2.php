<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Multi Step Registration Form Using JQuery Bootstrap in PHP</title>
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
  <script src="//code.jquery.com/jquery.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <style>
  .box
  {
   width:800px;
   margin:0 auto;
  }
  .active_tab1
  {
   background-color:#fff;
   color:#333;
   font-weight: 600;
  }
  .inactive_tab1
  {
   background-color: #f5f5f5;
   color: #333;
   cursor: not-allowed;
  }
  .has-error
  {
   border-color:#cc0000;
   background-color:#ffff99;
  }
  </style>
 </head>
 <body>
 <br />
  <div class="container box">
   <br />
   <h2 align="center">Multi Step Registration Form Using JQuery Bootstrap in PHP</h2><br />
 
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
                // foreach ($db->fetch_all('Kecamatan') as $k) {
                //  echo "<option value='$k->ID_Kecamatan'>$k->Nama_Kecamatan</option>";
                // }
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
                // foreach ($db->fetch_all('jenis_usaha') as $k) {
                //  echo "<option value='$k->id'>$k->jenis_usaha</option>";
                // }
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
  </div>
 </body>
</html>

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
