<style type="text/css">
   #map0{
        width: 90%;height:400px;margin: 20px;
      }
</style>
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Tambah Muatan FTL
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?=base_index();?>"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="<?=base_index();?>daftar-muatan">FORM FTL</a></li>
    <li class="active">Tambah Muatan FTL</li>
    
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-lg-12">
      <div class="box box-solid box-primary">
        <div class="box-header">
          <h3 class="box-title">Form Muatan FTL</h3>
          <div class="box-tools pull-right">
            <button class="btn btn-info btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button class="btn btn-info btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
          </div>
        </div>

        <div class="box-body">
          <div role="tabpanel">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active">
                <a href="#info" aria-controls="home" role="tab" data-toggle="tab">Informasi Umum</a>
              </li>
              <li role="presentation">
                <a href="#lokasi" aria-controls="tab" role="tab" data-toggle="tab">Lokasi</a>
              </li>
              <li role="presentation">
                <a href="#kargo" aria-controls="tab" role="tab" data-toggle="tab">Informasi Kargo</a>
              </li>
             <!--  <li role="presentation">
                <a href="#armada" aria-controls="tab" role="tab" data-toggle="tab">Armada</a>
              </li>
              <li role="presentation">
                <a href="#biaya" aria-controls="tab" role="tab" data-toggle="tab">Biaya</a>
              </li>
              <li role="presentation">
                <a href="#status" aria-controls="tab" role="tab" data-toggle="tab">Status</a>
              </li> -->
              <div align="right">
	<a class="btn btn-primary" href='<?=base_index();?>daftar-muatan' role="button">List Muatan</a>
</div>
            </ul>
          
            <!-- Tab panes -->
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="info">
              	<div class="table-responsive">
              		<h3 class="btn btn-primary btn-block" style="text-align: left;">Informasi Umum</h3>
                <form>
    <br>
  
            <div class="form-group row">
              <input type="hidden" name="id" id="id">
              <label for="" class="col-xs-2 col-form-label">Nomor Booking</label>
              <div class="col-lg-4">
                <input type="text" name=""  class="form-control" required>
            </div>
            <label for="" class="col-xs-2 col-form-label">Status Booking</label>
              <div class="col-lg-4">
                <input type="text" name=""  class="form-control" placeholder="Muatan Baru" required="">
              </div>
              
          </div>
            <div class="form-group row">
            	<label for="" class="col-xs-2 col-form-label">Tanggal Booking</label>
              <div class="col-lg-4">
                <input type="date" name=""  class="form-control" required="">
            </div>
              <label for="" class="col-xs-2 col-form-label">Legal</label>
              <div class="col-lg-4">
                <select name="Legal" id="Legal" class="form-control chzn-select" tabindex="2" required="required">
                  <option value=""></option>
                  <option value=""></option>
                 </select>
               </div>
            </div>

            <div class="form-group row">
            	<label class="col-xs-2 col-form-label">Nomor referensi</label>
            	<div class="col-lg-4">
            		<input type="text" name=""  placeholder="Input Referensi (short text)" class="form-control" required>
            	</div>
            	<label class="col-xs-2 col-form-label">Pelanggan</label>
               <div class="col-lg-4">
               	<select name=""  class="form-control chzn-select" tabindex="2" required="required">
                  <option value=""></option>
                  <option value=""></option>
                 </select>
               </div>
    		</div>
    		<div class="form-group row">
            	<label class="col-xs-2 col-form-label">Nama Barang</label>
            	<div class="col-lg-4">
            		<input type="text" name=""  placeholder="General Kargo" class="form-control">
            	</div>
            	<label class="col-xs-2 col-form-label">Jenis Kiriman</label>
               <div class="col-lg-4">
               	<select name="" class="form-control chzn-select" tabindex="2" required="required">
                  <option value=""></option>
                  <option value=""></option>
                 </select>
               </div>
    		</div>
    		<div class="form-group row">
            	<label class="col-xs-2 col-form-label">Jumlah</label>
            	<div class="col-lg-4">
            		<input type="text" name=""  placeholder="1" class="form-control" required>
            	</div>
            	<label class="col-xs-2 col-form-label">Jenis Truk</label>
            	<div class="col-lg-4">
            		<select name="" class="form-control chzn-select" tabindex="2" required="required">
                  <option value=""></option>
                  <option value=""></option>
              </select>
            	</div>
            	</div>
            	<br>
            	<div align="left">
            		<button type="button" class="btn btn-primary">Simpan & Lanjut</button>
            	</div>
  </form>
  </div>


              </div>
              <div role="tabpanel" class="tab-pane" id="lokasi">

              	<div class="table-responsive">
              		<h3 class="btn btn-primary btn-block" style="text-align: left;">Lokasi Muat</h3>
              		<table class="table dynatable Umum">
    		<thead>
    			<tr>
    				<th class="text-center">#</th><th class="text-center">Alamat Muat</th><th class="text-center">Kota</th><th class="text-center">Rencana Muat</th><th class="text-center">Nama Kontak</th><th class="text-center">Nomor Kontak</th><th class="text-center">Keterangan</th>
    			</tr>
    		</thead>
    		<tbody id="p_scents1">
    			<tr>
    				<td>1</td><td><input type="text" name="" id="" placeholder="Kawasan Pergudangan ABC" class="form-control" required=""></td><td><input type="text" name="" id="" placeholder="Bekasi" class="form-control" required=""></td><td><input type="date" name="" id="" class="form-control" required=""></td><td><input type="text" name="" id="" placeholder="Asep" class="form-control" required=""></td><td><input type="text" name="" id="" placeholder="0812123456" class="form-control" required=""></td><td><input type="text" name="" id="" class="form-control" required=""></td>
    			</tr>
    		</tbody>
    	</table>
    	<br>
	<div>
		<a class="btn btn-xs btn-primary" href="#" id="addScnt1" role="button"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
	</div>
	<h3 class="btn btn-primary btn-block" style="text-align: left;">Lokasi Tujuan</h3>
	<table class="table dynatable Umum">
    		<thead>
    			<tr>
    				<th class="text-center">#</th><th class="text-center">Alamat Bongkar</th><th class="text-center">Kota</th><th class="text-center">Rencana Bongkar</th><th class="text-center">Nama Kontak</th><th class="text-center">Nomor Kontak</th><th class="text-center">Keterangan</th>
    			</tr>
    		</thead>
    		<tbody id="p_scents2">
    			<tr>
    				<td>1</td><td><input type="text" name="" id="" placeholder="Kawasan Pergudangan ABC" class="form-control" required=""></td><td><input type="text" name="" id="" placeholder="Surabaya" class="form-control" required=""></td><td><input type="date" name="" id="" class="form-control" required=""></td><td><input type="text" name="" id="" placeholder="Joko" class="form-control" required=""></td><td><input type="text" name="" id="" placeholder="0812123456" class="form-control" required=""></td><td><input type="text" name="" id="" class="form-control" required=""></td>
    			</tr>
    		</tbody>
    	</table>
    	<div>
		<a class="btn btn-xs btn-primary" href="#" id="addScnt2" role="button"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
	</div>

	<br>
            	<div align="left">
            		<button type="button" class="btn btn-primary">Simpan & Lanjut</button>
            	</div>
              	</div>

              </div>
              <div role="tabpanel" class="tab-pane" id="kargo">

              	<div class="table-responsive">
              		<h3 class="btn btn-primary btn-block" style="text-align: left;">Informasi Kargo</h3>
              		<table class="table dynatable Umum">
    		<thead>
    			<tr>
    				<th class="text-center">#</th><th class="text-center">Nama Item</th><th class="text-center">Satuan</th><th class="text-center">Jumlah</th><th class="text-center">Keterangan</th>
    			</tr>
    		</thead>
    		<tbody id="p_scents3">
    			<tr>
    				<td>1</td><td><input type="text" name="" id="" placeholder="Kargo 1" class="form-control" required=""></td><td><input type="text" name="" id="" placeholder="Box" class="form-control" required=""></td><td><input type="number" name="" id="" placeholder="10" class="form-control" required=""></td><td><input type="text" name="" id="" class="form-control" required=""></td>
    			</tr>
    		</tbody>
    	</table>
    	<br>
	<div>
		<a class="btn btn-xs btn-primary" href="#" id="addScnt3" role="button"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
	</div>
<br>
<br>
	<div align="left">
            		<button type="button" class="btn btn-primary">Simpan & Lanjut</button>
            	</div>



              	</div>
              </div>
             <!--  <div role="tabpane1" class="tab-pane" id="armada">
              	<div class="table-responsive">
              		<table class="table dynatable Umum">
    		<thead>
    			<tr>
    				<th class="text-center">#</th><th class="text-center">Vendor</th><th class="text-center">NOPOL</th><th class="text-center">Driver</th><th class="text-center">Co. Driver</th><th class="text-center">Nomor</th><th class="text-center">Keterangan</th>
    			</tr>
    		</thead>
    		<tbody id="p_scents4">
    			<tr>
    				<td>1</td><td><input type="text" name="" id="" placeholder="PT.Vendor" class="form-control" required=""></td><td><input type="text" name="" id="" placeholder="B 9999 CDE" class="form-control" required=""></td><td><input type="text" name="" id="" placeholder="Ahmad" class="form-control" required=""></td><td><input type="text" name="" id="" placeholder="Budi" class="form-control" required=""></td><td><input type="text" name="" id="" placeholder="0812123456" class="form-control" required=""></td><td><input type="text" name="" id="" class="form-control" required=""></td>
    			</tr>
    		</tbody>
    	</table>
    	<br>
	<div>
		<a class="btn btn-xs btn-primary" href="#" id="addScnt4" role="button"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
	</div>
	<br>
	<br>
	<div align="left">
            		<button type="button" class="btn btn-primary">Simpan & Lanjut</button>
            	</div>
              	</div>
              	
              </div>
              <div role="tabpane1" class="tab-pane" id="biaya">
              	<div class="table-responsive">
              		<table class="table dynatable Umum">
    		<thead>
    			<tr>
    				<th class="text-center">#</th><th class="text-center">Biaya</th><th class="text-center">Nominal</th><th class="text-center">Keterangan</th>
    			</tr>
    		</thead>
    		<tbody id="p_scents5">
    			<tr>
    				<td>1</td><td><input type="text" name="" id="" placeholder="Uang Jalan" class="form-control" required=""></td><td><input type="text" name="" id="rupiah" placeholder="1.000.000" class="form-control" required=""></td><td><input type="text" name="" id="" class="form-control" required=""></td>
    			</tr>
    		</tbody>
    	</table>
    	<br>
	<div>
		<a class="btn btn-xs btn-primary" href="#" id="addScnt5" role="button"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
	</div>
<br>
<br>
	<div align="left">
            		<button type="button" class="btn btn-primary">Simpan & Lanjut</button>
            	</div>

              	</div>
              </div>
              <div role="tabpane1" class="tab-pane" id="status">
              	<div class="table-responsive">
              		<table class="table dynatable Umum">
    		<thead>
    			<tr>
    				<th class="text-center">#</th><th class="text-center">Nama Status</th><th class="text-center">Tanggal Status</th><th class="text-center">Keterangan</th>
    			</tr>
    		</thead>
    		<tbody id="p_scents6">
    			<tr>
    				<td>1</td><td><input type="text" name="" id="" placeholder="Status 1" class="form-control" required=""></td><td><input type="date" name="" id="" class="form-control" required=""></td><td><input type="text" name="" id="" class="form-control" required=""></td>
    			</tr>
    		</tbody>
    	</table>
    	<br>
	<div>
		<a class="btn btn-xs btn-primary" href="#" id="addScnt6" role="button"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
	</div>
<br>
<br>
	<div align="left">
            		<button type="button" class="btn btn-primary">Simpan & Lanjut</button>
            	</div>
              	</div> -->
              </div>
            </div>
          </div>
        </div>

        </div>
      </div>
    </div>
  </div>

</section><!-- /.content -->


<script type="text/javascript">

var scntDiv1 = $('#p_scents1');
var i = $('#p_scents1 tr').size() + 1;

$('#addScnt1').click(function() {
    scntDiv1.append('<tr><td>'+i+'</td><td><input type="text" name="" id="" placeholder="Kawasan Pergudangan ABC" class="form-control" required=""></td><td><input type="text" name="" id="" placeholder="Bekasi" class="form-control" required=""></td><td><input type="date" name="" id="" class="form-control" required=""></td><td><input type="text" name="" id="" placeholder="Asep" class="form-control" required=""></td><td><input type="text" name="" id="" placeholder="0812123456" class="form-control" required=""></td><td><input type="text" name="" id="" class="form-control" required=""></td><td><button type="button" id="remScnt1" class="btn btn-danger"><span class="glyphicon glyphicon-trash aria-hidden="true"></span></button></td></tr></tr>');   
    i++;
    return false;
});

//Remove button
$(document).on('click', '#remScnt1', function() {
    if (i > 2) {
        $(this).closest('tr').remove();
        i--;
    }
    return false;
});

var scntDiv2 = $('#p_scents2');
var i = $('#p_scents2 tr').size() + 1;

$('#addScnt2').click(function() {
    scntDiv2.append('<tr><td>'+i+'</td><td><input type="text" name="" id="" placeholder="Kawasan Pergudangan ABC" class="form-control" required=""></td><td><input type="text" name="" id="" placeholder="Surabaya" class="form-control" required=""></td><td><input type="date" name="" id="" class="form-control" required=""></td><td><input type="text" name="" id="" placeholder="Joko" class="form-control" required=""></td><td><input type="text" name="" id="" placeholder="0812123456" class="form-control" required=""></td><td><input type="text" name="" id="" class="form-control" required=""></td><td><button type="button" id="remScnt2" class="btn btn-danger"><span class="glyphicon glyphicon-trash aria-hidden="true"></span></button></td></tr></tr>');   
    i++;
    return false;
});

//Remove button
$(document).on('click', '#remScnt2', function() {
    if (i > 2) {
        $(this).closest('tr').remove();
        i--;
    }
    return false;
});

var scntDiv3 = $('#p_scents3');
var i = $('#p_scents3 tr').size() + 1;

$('#addScnt3').click(function() {
    scntDiv3.append('<tr><td>'+i+'</td><td><input type="text" name="" id="" placeholder="Kargo 1" class="form-control" required=""></td><td><input type="text" name="" id="" placeholder="Box" class="form-control" required=""></td><td><input type="number" name="" id="" placeholder="10" class="form-control" required=""></td><td><input type="text" name="" id="" class="form-control" required=""></td><td><button type="button" id="remScnt3" class="btn btn-danger"><span class="glyphicon glyphicon-trash aria-hidden="true"></span></button></td></tr></tr>');   
    i++;
    return false;
});

//Remove button
$(document).on('click', '#remScnt3', function() {
    if (i > 2) {
        $(this).closest('tr').remove();
        i--;
    }
    return false;
});

var scntDiv4 = $('#p_scents4');
var i = $('#p_scents4 tr').size() + 1;

$('#addScnt4').click(function() {
    scntDiv4.append('<tr><td>'+i+'</td><td><input type="text" name="" id="" placeholder="PT.Vendor" class="form-control" required=""></td><td><input type="text" name="" id="" placeholder="B 9999 CDE" class="form-control" required=""></td><td><input type="text" name="" id="" placeholder="Ahmad" class="form-control" required=""></td><td><input type="text" name="" id="" placeholder="Budi" class="form-control" required=""></td><td><input type="text" name="" id="" placeholder="0812123456" class="form-control" required=""></td><td><input type="text" name="" id="" class="form-control" required=""></td><td><button type="button" id="remScnt4" class="btn btn-danger"><span class="glyphicon glyphicon-trash aria-hidden="true"></span></button></td></tr></tr>');   
    i++;
    return false;
});

//Remove button
$(document).on('click', '#remScnt4', function() {
    if (i > 2) {
        $(this).closest('tr').remove();
        i--;
    }
    return false;
});


var scntDiv5 = $('#p_scents5');
var i = $('#p_scents5 tr').size() + 1;

$('#addScnt5').click(function() {
    scntDiv5.append('<tr><td>'+i+'</td><td><input type="text" name="" id="" placeholder="Uang Jalan" class="form-control" required=""></td><td><input type="text" name="" id="rupiah" placeholder="1.000.000" class="form-control" required=""></td><td><input type="text" name="" id="" class="form-control" required=""></td><td><button type="button" id="remScnt5" class="btn btn-danger"><span class="glyphicon glyphicon-trash aria-hidden="true"></span></button></td></tr></tr>');   
    i++;
    return false;
});

//Remove button
$(document).on('click', '#remScnt5', function() {
    if (i > 2) {
        $(this).closest('tr').remove();
        i--;
    }
    return false;
});

var scntDiv6 = $('#p_scents6');
var i = $('#p_scents6 tr').size() + 1;

$('#addScnt6').click(function() {
    scntDiv6.append('<tr><td>'+i+'</td><td><input type="text" name="" id="" placeholder="Status 1" class="form-control" required=""></td><td><input type="date" name="" id="" class="form-control" required=""></td><td><input type="text" name="" id="" class="form-control" required=""></td><td><button type="button" id="remScnt6" class="btn btn-danger"><span class="glyphicon glyphicon-trash aria-hidden="true"></span></button></td></tr></tr>');   
    i++;
    return false;
});

//Remove button
$(document).on('click', '#remScnt6', function() {
    if (i > 2) {
        $(this).closest('tr').remove();
        i--;
    }
    return false;
});


var rupiah = document.getElementById('rupiah');
		rupiah.addEventListener('keyup', function(e){
			// tambahkan 'Rp.' pada saat form di ketik
			// gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
			rupiah.value = formatRupiah(this.value, 'Rp. ');
		});
 
		/* Fungsi formatRupiah */
		function formatRupiah(angka, prefix){
			var number_string = angka.replace(/[^,\d]/g, '').toString(),
			split   		= number_string.split(','),
			sisa     		= split[0].length % 3,
			rupiah     		= split[0].substr(0, sisa),
			ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);
 
			// tambahkan titik jika yang di input sudah menjadi angka ribuan
			if(ribuan){
				separator = sisa ? '.' : '';
				rupiah += separator + ribuan.join('.');
			}
 
			rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
			return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
		}
           
</script>