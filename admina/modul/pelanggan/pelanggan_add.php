
           
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                     Pelanggan
                    </h1>
                           <ol class="breadcrumb">
                        <li><a href="<?=base_index();?>"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="<?=base_index();?>pelanggan">Pelanggan</a></li>
                        <li class="active">Tambah Pelanggan</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
<div class="row">
    <div class="col-lg-12"> 
        <div class="box box-solid box-primary">
                                 <div class="box-header">
                                    <h3 class="box-title">Tambah Pelanggan</h3>
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
                  				<a href="#kontak" aria-controls="kontak" role="tab" data-toggle="tab">Informasi Kontak</a>
                  			</li>
                  			<li role="presentation">
                  				<a href="#legal" aria-controls="legal" role="tab" data-toggle="tab">Informasi Legal</a>
                  			</li>
                  			<!-- <li role="presentation">
                  				<a href="#tarif" aria-controls="tarif" role="tab" data-toggle="tab">Informasi Tarif</a>
                  			</li> -->
                  		</ul>
                  	<form id="input" method="post" class="form-horizontal foto_banyak" action="<?=base_admin();?>modul/pelanggan/pelanggan_action.php?act=in">
                  		<!-- Tab panes -->
                  		<div class="tab-content">
                  			<div role="tabpanel" class="tab-pane active" id="umum">
                  				<br>
                  				<div class="row">
                  				  <div class="col-xs-6">
                        <label for="Nama Perusahaan" >Nama Perusahaan</label>
                        <div >
                          <input type="text" name="nm_perusahaan" placeholder="Nama Perusahaan" class="form-control" required> 
                        </div>
                      </div><!-- /.col-xs-6 -->
<div class="col-xs-6">
                        <label for="Legal" >Legal</label>
                        <div >
                          <select name="lgl" data-placeholder="Pilih Legal ..." class="form-control chzn-select" tabindex="2" required>
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
                        <label for="Alamat Kantor" >Alamat Kantor</label>
                        <div >
                          <input type="text" name="almt_kantor" placeholder="Alamat Kantor" class="form-control" required> 
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
                        <label for="Email" >Email</label>
                        <div >
                          <input type="email" data-rule-email="true" name="email" placeholder="Email" class="form-control" required> 
                        </div>
                      </div><!-- /.col-xs-6 -->
<div class="col-xs-6">
                        <label for="Kecamatan" >Kecamatan</label>
                        <div >
                          <select id="kecamatan" name="kecamatan" data-placeholder="Pilih Kecamatan ..." class="form-control chzn-select" tabindex="2" required>
               <option value=""></option>
               
              </select>
                        </div>
                      </div><!-- /.col-xs-6 -->
                      </div>
                      <div class="row">
<div class="col-xs-6">
                        <label for="Website" >Website</label>
                        <div >
                          <input type="text" name="website" placeholder="Website" class="form-control" required> 
                        </div>
                      </div><!-- /.col-xs-6 -->
<div class="col-xs-6">
                        <label for="Kota" >Kota</label>
                        <div >
                          <select id="kota" name="kota" data-placeholder="Pilih Kota ..." class="form-control chzn-select" tabindex="2" required>
               <option value=""></option>
              
              </select>
                        </div>
                      </div><!-- /.col-xs-6 -->
                      </div>
                      <div class="row">
<div class="col-xs-6">
                        <label for="Telepon" >Telepon</label>
                        <div >
                          <input type="number" data-rule-number="true" name="tlp" placeholder="Telepon" class="form-control" required> 
                        </div>
                      </div><!-- /.col-xs-6 -->
<div class="col-xs-6">
                        <label for="Provinsi" >Provinsi</label>
                        <div >
                          <select id="provinsi" name="provinsi" data-placeholder="Pilih Provinsi ..." class="form-control chzn-select" tabindex="2" required>
               <option value=""></option>
              
              </select>
                        </div>
                      </div><!-- /.col-xs-6 -->
                      </div>

                      <button type="button" class="btn btn-primary pull-right" id="lanjut1">Simpan &
                                            Lanjut</button>
                  			</div>
                  			<div role="tabpanel" class="tab-pane" id="kontak">
                  				<br>
                  				<div class="row">
                  				<div class="col-xs-6">
                        <label for="Nama Lengkap" >Nama Lengkap</label>
                        <div >
                          <input type="text" name="nm_lengkap" placeholder="Nama Lengkap" class="form-control" required> 
                        </div>
                      </div><!-- /.col-xs-6 -->
<div class="col-xs-6">
                        <label for="Posisi" >Posisi</label>
                        <div >
                        	<select name="posisi" class="form-control" required>
                        		<option value=""></option>
                        		<option>Owner</option>
                        		<option>Direktur</option>
                        		<option>Manajer</option>
                        		<option>Staff</option>
                        		<option>Kepala Gudang</option>
                        	</select>
                          <!-- <input type="text" name="posisi" placeholder="Posisi" class="form-control" required>  -->
                        </div>
                      </div><!-- /.col-xs-6 -->
                      </div>
                      <div class="row">
<div class="col-xs-6">
                        <label for="No Handphone" >No Handphone</label>
                        <div >
                          <input type="number" data-rule-number="true" name="no_hp" placeholder="No Handphone" class="form-control" required> 
                        </div>
                      </div><!-- /.col-xs-6 -->
                      <div class="row col-xs-12">
                      <button type="button" class="btn btn-primary pull-right" id="lanjut2">Simpan &
                                            Lanjut</button>
                                        </div>
                  			</div>
                  		</div>
                  			<div role="tabpanel" class="tab-pane" id="legal">
                  				<br>
                  				<div class="row">
                  				<div class="col-xs-6">
                        <label for="NPWP" >NPWP</label>
                        <div >
                          <input type="number" data-rule-number="true" name="npwp" placeholder="NPWP" class="form-control" required> 
                        </div>
                      </div><!-- /.col-xs-6 -->
<div class="col-xs-6">
                        <label for="Nama Bank" >Nama Bank</label>
                        <div >
                          <select id="bank" name="nm_bank" data-placeholder="Pilih Nama Bank ..." class="form-control chzn-select" tabindex="2" required>
               <option value=""></option>
              
              </select>
                        </div>
                      </div><!-- /.col-xs-6 -->
                      </div>
                      <div class="row">
<div class="col-xs-6">
                        <label for="Alamat Penagihan" >Alamat Penagihan</label>
                        <div >
                          <input type="text" name="almt_penagihan" placeholder="Alamat Penagihan" class="form-control" required> 
                        </div>
                      </div><!-- /.col-xs-6 -->
<div class="col-xs-6">
                        <label for="Rekening" >Rekening</label>
                        <div >
                          <input type="number" data-rule-number="true" name="rekening" placeholder="Rekening" class="form-control" required> 
                        </div>
                      </div><!-- /.col-xs-6 -->
                      </div>
                      <div class="row">
<div class="col-xs-6">
                        <label for="Cabang Bank" >Cabang Bank</label>
                        <div >
                          <input type="text" name="cabang" placeholder="Cabang Bank" class="form-control" required> 
                        </div>
                      </div><!-- /.col-xs-6 -->
                      </div>
                       <div class="row col-xs-12">
                        <label for="tags" >&nbsp;</label>

                        <div class="col-lg-12">
                        	<a href="<?=base_index();?>pelanggan" class="btn btn-success btn-flat"><i class="fa fa-step-backward"></i> Kembali</a>
                          <input type="submit" class="btn btn-primary" id="lanjut3" value="Simpan & Lanjut">

                        </div>
                      </div><!-- /.col-xs-6 -->

                  			</div>
                  		<!-- 	<div role="tabpanel" class="tab-pane" id="tarif">
                  				<br>
                  				
                  					<?php 
 foreach ($db->fetch_all("sys_menu") as $isi) {
                      if ($path_url==$isi->url) {
                          if ($role_act["insert_act"]=="Y") {
                    ?>
          <a href="<?=base_index();?>penawaran/tambah" class="btn btn-primary btn-flat"><i class="fa fa-plus"></i> Tambah Penawaran</a>
                          <?php
                          } 
                       } 
}
                  					 ?>

                  				<br>

                  				<table id="dtb_pelanggan" class="table table-bordered table-striped">
                                   <thead>
                                     <tr>

                          <th>Nama Perusahaan</th>
													<th>Legal</th>
													<th>Alamat Kantor</th>
													<th>Status</th>
													<th>Email</th>
													<th>Kecamatan</th>
													<th>Website</th>
													<th>Kota</th>
													<th>Telepon</th>
													<th>Provinsi</th>
													<th>Nama Lengkap</th>
													<th>Posisi</th>
													<th>No Handphone</th>
													<th>NPWP</th>
													<th>Nama Bank</th>
													<th>Alamat Penagihan</th>
													<th>Rekening</th>
													<th>Cabang Bank</th>
													<th>Nama Legal</th>
													<th>Kecamatan</th>
													<th>Kota</th>
													<th>Provinsi</th>
													<th>Nama Bank</th>
													
                          <th>Action</th>
                         
                        </tr>
                                      </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                       <?php
       foreach ($db->fetch_all("sys_menu") as $isi) {
                      if ($path_url==$isi->url) {
                          if ($role_act["insert_act"]=="Y") {
                    ?>
          <a href="<?=base_index();?>pelanggan/tambah" class="btn btn-primary btn-flat"><i class="fa fa-plus"></i> Tambah</a>
                          <?php
                          } 
                       } 
}
      
  foreach ($db->fetch_all("sys_menu") as $isi) {

  //jika url = url dari table menu
  if ($path_url==$isi->url) {
    //check edit permission
  if ($role_act["up_act"]=="Y") {
  $edit = '<a href="'.base_index()."pelanggan/edit/'+aData[indek]+'".'" class="btn btn-primary btn-flat"><i class="fa fa-pencil"></i></a>';
  } else {
    $edit ="";
  }
  if ($role_act['del_act']=='Y') {
   $del = "<span data-id='+aData[indek]+' data-uri=".base_admin()."modul/pelanggan/pelanggan_action.php".' class="btn btn-danger hapus btn-flat"><i class="fa fa-trash"></i></span>';
  } else {
    $del="";
  }
                   } 
  }
  
?>  
                  				
                  			</div> -->
                  		</div>
                  	</div>
                     
                    



                      
                     
                    </form>

 
          
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

               $('#kecamatan').select2({
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
                url: '<?=base_admin();?>modul/pelanggan/pelanggan_action.php?act=kecamatan',
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

                 $('#provinsi').select2({
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
                url: '<?=base_admin();?>modul/pelanggan/pelanggan_action.php?act=provinsi',
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

                  $('#bank').select2({
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
                url: '<?=base_admin();?>modul/pelanggan/pelanggan_action.php?act=bank',
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
var dataTable = $("#dtb_pelanggan").dataTable({
           "fnCreatedRow": function( nRow, aData, iDataIndex ) {
            var indek = aData.length-1;           
     $('td:eq('+indek+')', nRow).html(' <a href="<?=base_index();?>pelanggan/detail/'+aData[indek]+'" class="btn btn-success btn-flat"><i class="fa fa-eye"></i></a> <?=$edit;?> <?=$del;?>');
       $(nRow).attr('id', 'line_'+aData[indek]);
   },
           'bProcessing': true,
            'bServerSide': true,
        'sAjaxSource': '<?=base_admin();?>modul/pelanggan/pelanggan_data.php',
         /*     'aoColumnDefs': [{
                'bSortable': false,
                'aTargets': [0]
            }]*/
        });</script>  
            
        <script type="text/javascript">
        	$("#lanjut1").click(function(event) {
        $('.nav-tabs a[href="#kontak"]').tab('show');
    });
    $("#lanjut2").click(function(event) {
        $('.nav-tabs a[href="#legal"]').tab('show');
    });
     $("#lanjut3").click(function(event) {
        $('.nav-tabs a[href="#tarif"]').tab('show');
    });
        </script>
            