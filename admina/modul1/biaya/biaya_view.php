

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Pengaturan Biaya
    </h1>
        <ol class="breadcrumb">
        <li><a href="<?=base_index();?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?=base_index();?>akun">Akun</a></li>
        <li class="active">Biaya List</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-body table-responsive">
<div id="exTab1"> 
<ul  class="nav nav-pills">
<li class="active">
<li><a href="#4a" data-toggle="tab"></a>
</li>
</ul>

</div>
<div class="tab-pane" id="4a">
  <form id="input4" method="post" class="form-horizontal foto_banyak" action="<?=base_admin();?>modul/informasi_bank/informasi_bank_action.php?act=in">
<div class="form-group">
              <label for="Menu" class="control-label col-lg-2">Menu</label>
              <div class="col-lg-4">
                <input type="text" name="Menu" placeholder="Menu" class="form-control" required>
              </div>
            </div><!-- /.form-group -->
<div class="form-group">
              <label for="Nama Biaya" class="control-label col-lg-2">Nama Biaya</label>
              <div class="col-lg-4">
                <input type="text" name="Nama_Biaya" placeholder="Nama Biaya" class="form-control" required> 
              </div>
            </div><!-- /.form-group -->
<div class="form-group">
              <label for="Deskripsi" class="control-label col-lg-2">Deskripsi</label>
              <div class="col-lg-4">
                <textarea name="Deskripsi" id="inputDeskripsi" class="form-control" rows="3" required="required"></textarea> 
              </div>
            </div><!-- /.form-group -->   
<div class="form-group">
              <label for="Layanan Berlangganan" class="control-label col-lg-2">Layanan Berlngganan</label>
              <div class="col-lg-4">
                <select name="Layanan_Berlangganan" id="input" class="form-control" required="required">
                	<option value="">Paket 1 (Per Truk Per Bulan)</option>
                	<option value="">Paket 2 (Per Truk Per Bulan) + GPS</option>
                	<option value="">Paket 3 (Per User Per Bulan)</option>
                	<option value="">Paket 4 (Per User Per Bulan) + GPS</option>
                </select>
              </div>
            </div><!-- /.form-group --> 
            <div class="form-group">
              <label for="tags" class="control-label col-lg-2">&nbsp;</label>
              <div class="col-lg-4">
              	<button type="button" name="previous_btn_personal_details" id="previous_btn_personal_details" class="btn btn-default">Kembali</button>
         <button type="button" name="btn_personal_details" id="btn_personal_details" class="btn btn-info">Simpan dan Lanjut</button>
                <!-- <input type="submit" class="btn btn-primary btn-flat" value="Kembali"> -->
                <!-- <input type="submit" class="btn btn-primary btn-flat" value="Simpan dan Lanjut"> -->
              </div>
            </div><!-- /.form-group -->
            </div>
            <div class="table-responsive">
        <table class="table table-bordered table-striped table-responsive"> 
            <thead>
              <tr class="success">
                <th>No</th>
                <th>Menu</th>
                <th>Nama Biaya</th>
                <th>Deskripsi</th>
                <th>Layanan Berlangganan</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
            </tbody>
          </table>
      </div>
            </div>              
                      </div><!-- /.box-body -->
                  </div><!-- /.box -->
              </div>
          </div>
