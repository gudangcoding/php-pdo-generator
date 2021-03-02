
           
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                     Vendor
                    </h1>
                           <ol class="breadcrumb">
                        <li><a href="<?=base_index();?>"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="<?=base_index();?>vendor">Vendor</a></li>
                        <li class="active">Tambah Vendor</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
<div class="row">
    <div class="col-lg-12"> 
        <div class="box box-solid box-primary">
                                 <div class="box-header">
                                    <h3 class="box-title">Tambah Vendor</h3>
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
				<a href="#home" aria-controls="home" role="tab" data-toggle="tab">home</a>
			</li>
			<li role="presentation">
				<a href="#tab" aria-controls="tab" role="tab" data-toggle="tab">tab</a>
			</li>
		</ul>
	
		<!-- Tab panes -->
		<div class="tab-content">
			<div role="tabpanel" class="tab-pane active" id="home">...</div>
			<div role="tabpanel" class="tab-pane" id="tab">...</div>
		</div>
	</div>









<div id="exTab1">
	<ul  class="nav nav-pills" role="tablist">
<li class="active">
<a  href="#1a" data-toggle="tab" id="info">Informasi Umum</a>
</li>
<li><a href="#2a" data-toggle="tab" id="kontak">Informasi Kontak</a>
</li>
<li><a href="#3a" data-toggle="tab" id="finansial">Informasi Finansial</a>
</li>
<li><a href="#4a" data-toggle="tab" id="armada">Informasi Armada</a>
</li>
<li><a href="#5a" data-toggle="tab" id="tarif">Informasi Tarif</a>
</li>
</ul>

<div class="tab-content clearfix" style="margin: 10px">
	<div class="tab-pane active" id="1a">
		<div class="row">
        		<div class="form-group col-xs-6">
              <input type="hidden" name="id" id="id">
        			<label>Nama Perusahaan</label>
        			<input type="text" name="" placeholder="Nama Perusahaan" class="form-control" id="nm_perusahaan" required>
        		</div>
        		<div class="form-group col-xs-6">
        			<label>Email</label>
        			<input type="text" name="" placeholder="Alamat Email" class="form-control" id="email" required>
        		</div>
        	</div>
        	<div class="row">
        		<div class="form-group col-xs-6">
        			<label>Alamat</label>
        			<textarea name="" id="" placeholder="Alamat Perusahaan" class="form-control" rows="3" required></textarea>
        		</div>
        		<div class="form-group col-xs-6">
        			<label>Status</label>
        			<select name="Status" class="form-control chzn-select" tabindex="2" required>
                  <option value=""></option>
                  <option value="aktif">Aktif</option>
                  <option value="nonaktif">Nonaktif</option>
                 </select>
        		</div>
        	</div>
        	<div class="row">
        		<div class="form-group col-xs-6">
        			<label>No Telp</label>
        			<input type="text" placeholder="Nomor Telp" class="form-control" name="" required>
        		</div>
        	</div>
        	 <br>
                                    <a href="<?=base_admin() ?>index.php/vendor" class="btn btn-warning pull-left">Kembali</a>
                                   <button type="button" class="btn btn-primary pull-right" id="lanjut1">Simpan & Lanjut</button>
	</div>
<div class="tab-pane" id="2a">
	<div class="row">
        		<div class="form-group col-xs-6">
        		<label>Nama Lengkap</label>
        		<input type="text" name="" id="nm_lengkap" class="form-control" placeholder="Nama Lengkap" required>
        		</div>
        		<div class="form-group col-xs-6">
        			<label>No HP</label>
               		<input type="text" name="" id="nohp" placeholder="Nomor Handphone" class="form-control" required>
             	</div>
        	</div>
        	<div class="row">
        			<div class="form-group col-xs-6">
        			<label>Posisi</label>
                <select name="posisi" class="form-control chzn-select" tabindex="2" required="required">
                  <option value=""></option>
                  <option value="pemilik">Pemilik</option>
                  <option value="operasional">Bagian Operasional</option>
                  <option value="keuangan">Bagian Keuangan</option>
                  <option value="bengkel">Bagian Bengkel</option>
                 </select>
             	</div>
             	<div class="form-group col-xs-6">
             		<label>Email</label>
             		<input type="text" name="" id="email2" placeholder="Alamat Email" class="form-control" required>
             	</div>
        	</div>
        	<button type="button" class="btn btn-primary pull-right" id="btnumum">Simpan & Lanjut</button>
</div>
<div class="tab-pane" id="3a">
<div class="row">
          	<div class="form-group col-xs-6">
              <label for="Nama Penagihan" class="control-label">Nama Penagihan</label>
                <input type="text" name="nm_penagihan" placeholder="Nama Penagihan" class="form-control" required> 
              </div>
              <div class="form-group col-xs-6">
              <label for="Nama Bank" class="control-label">Nama Bank</label>
                <input type="text" name="nm_bank" placeholder="Nama Bank" class="form-control" required> 
              </div>
             </div>
             <div class="row">
             	<div class="form-group col-xs-6">
              <label for="Alamat Penagihan" class="control-label">Alamat Penagihan</label>
                <input type="text" name="almt_Penagihan" placeholder="Alamat Penagihan" class="form-control" required> 
              </div>
              <div class="form-group col-xs-6">
              <label for="Nomor Rekening" class="control-label">Nomor Rekening</label>
                <input type="text" name="norek" placeholder="Nomor Rekening" class="form-control" required> 
              </div>
             </div>
             <button type="button" class="btn btn-primary pull-right" id="btnumum">Simpan & Lanjut</button>
</div>

<div class="tab-pane" id="4a">
	 <div class="row">
      <div class="form-group col-xs-6">
        <label>Nomor Truk</label>
        <input type="text" name="" class="form-control">
      </div>
      <div class="form-group col-xs-6">
        <label>Panjang Bak</label>
        <input type="text" name="" class="form-control">
      </div>
    </div>
    <div class="row">
      <div class="form-group col-xs-6">
        <label>Jenis Truk</label>
        <select name="" id="" class="form-control" required="required">
          <option value=""></option>
        </select>
      </div>
      <div class="form-group col-xs-6">
        <label>Lebar Bak</label>
        <input type="text" name="" class="form-control">
      </div>
    </div>
    <div class="row">
      <div class="form-group col-xs-6">
        <label>STNK</label>
        <input type="text" name="" class="form-control">
      </div>
      <div class="form-group col-xs-6">
        <label>Tinggi Bak</label>
        <input type="text" name="" class="form-control">
      </div>
    </div>
    <div class="row">
      <div class="form-group col-xs-6">
        <label>Tgl Exp STNK</label>
        <input type="text" name="" class="form-control">
      </div>
      <div class="form-group col-xs-6">
        <label>Volume Muatan</label>
        <input type="text" name="" class="form-control">
      </div>
    </div>
    <div class="row">
      <div class="form-group col-xs-6">
        <label></label>
        
      </div>
      <div class="form-group col-xs-6">
        <label>Kapasitas Muatan (KG)</label>
        <input type="text" name="" class="form-control">
      </div>
    </div>
<button type="button" class="btn btn-primary pull-right" id="btnumum">Simpan & Lanjut</button>
</div>

<div class="tab-pane" id="5a">
	<div class="row">
      <div class="form-group col-xs-6">
        <label>No Tarif</label>
        <input type="" name="" class="form-control" required>
      </div>
        <div class="form-group col-xs-6">
        <label>Ke</label>
        <input type="" name="" class="form-control" required>
      </div>
    </div>
    <div class="row">
      <div class="form-group col-xs-6">
        <label>Tgl Penawaran</label>
        <input type="" name="" class="form-control" required>
      </div>
        <div class="form-group col-xs-6">
        <label>Satuan</label>
        <input type="" name="" class="form-control" required>
      </div>
    </div>
    <div class="row">
      <div class="form-group col-xs-6">
        <label>Periode</label>
        <input type="" name="" class="form-control" required>
      </div>
        <div class="form-group col-xs-6">
        <label>Jenis Truk</label>
        <input type="" name="" class="form-control" required>
      </div>
    </div>
    <div class="row">
      <div class="form-group col-xs-6">
        <label>Tempo Bayar</label>
        <input type="" name="" class="form-control" required>
      </div>
        <div class="form-group col-xs-6">
        <label>Nilai</label>
        <input type="" name="" class="form-control" required>
      </div>
    </div>
    <div class="row">
      <div class="form-group col-xs-6">
        <label>Pelanggan</label>
        <input type="" name="" class="form-control" required>
      </div>
        <div class="form-group col-xs-6">
        <label>Status Pajak</label>
        <input type="" name="" class="form-control" required>
      </div>
    </div>
    <div class="row">
      <div class="form-group col-xs-6">
        <label>Dari</label>
        <input type="" name="" class="form-control" required>
      </div>
        <div class="form-group col-xs-6">
        <label>Status Penawaran</label>
        <input type="" name="" class="form-control" required>
      </div>
    </div>
<button type="button" class="btn btn-primary pull-right" id="btnumum">Simpan & Lanjut</button>	
</div>


</div>




</div>
</div>
                  </div>
              </div>
</div>
                  
                </section><!-- /.content -->
        
            <script type="text/javascript">
            	$(document).ready(function() {
            		$('#lanjut1').click(function(event) {
	            		$('.nav-pills a[href=["#2a"]').tab('show');
	            	});
            	});
            </script>