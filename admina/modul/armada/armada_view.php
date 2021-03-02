
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Manage Armada
                    </h1>
                        <ol class="breadcrumb">
                        <li><a href="<?=base_index();?>"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="<?=base_index();?>armada">Armada</a></li>
                        <li class="active">Armada List</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                <h3 class="box-title">List Armada</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
                                  <?php 
                                      foreach ($db->fetch_all("sys_menu") as $isi) {
                                        if ($path_url==$isi->url) {
                                            if ($role_act["insert_act"]=="Y") {
                                      ?>
                                      <a onclick="tambah()" class="btn btn-primary "><i class="fa fa-plus"></i> Tambah</a>
                                     <hr>
                                  <?php
                                  } 
                                  } 
                                  }
                                   ?>
                                    <table id="dtb_armada" class="table table-bordered table-striped">
                                   <thead>
                                     <tr>

                          <th>No. Pol</th>
													<th>Jenis Truk</th>
													<th>Tahun</th>
													<th>Warna</th>
													<th>STNK</th>
													<th>EXP STNK</th>
													<th>BPKB</th>
													<th>Exp BPKB</th>
													<th>Panjang</th>
													<th>Lebar</th>
													<th>Tinggi</th>
													<th>Kapasitas Kubik</th>
													<th>Kapasitas Kg</th>
													<th>Status</th>
													
                          <th>Action</th>
                         
                        </tr>
                                      </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                    </div>
        <?php
             
  foreach ($db->fetch_all("sys_menu") as $isi) {

  //jika url = url dari table menu
  if ($path_url==$isi->url) {
    //check edit permission
  if ($role_act["up_act"]=="Y") {
  $edit = '<a href="'.base_index()."armada/edit/'+aData[indek]+'".'" class="btn btn-xs btn-primary "><i class="fa fa-pencil"></i></a>';
  } else {
    $edit ="";
  }
  if ($role_act['del_act']=='Y') {
   $del = "<span data-id='+aData[indek]+' data-uri=".base_admin()."modul/armada/armada_action.php".' class="btn btn-xs btn-danger hapus "><i class="fa fa-trash"></i></span>';
  } else {
    $del="";
  }
                   } 
  }
  
?>  
                </section><!-- /.content -->
        <script type="text/javascript">
var dataTable = $("#dtb_armada").dataTable({
           "fnCreatedRow": function( nRow, aData, iDataIndex ) {
            var indek = aData.length-1;           
     $('td:eq('+indek+')', nRow).html(' <a href="<?=base_index();?>armada/detail/'+aData[indek]+'" class="btn btn-xs btn-success "><i class="fa fa-eye"></i></a> <?=$edit;?> <?=$del;?>');
       $(nRow).attr('id', 'line_'+aData[indek]);
   },
           'bProcessing': true,
            'bServerSide': true,
        'sAjaxSource': '<?=base_admin();?>modul/armada/armada_data.php',
         /*     'aoColumnDefs': [{
                'bSortable': false,
                'aTargets': [0]
            }]*/
        });

         function kosong() {
        $("#id").val("");
        $("#nopol").val("");
        $("#jenis_truk").val("");
        $("#tahun").val("");
        $("#warna").val("");
        $("#stnk").val("");
        $("#tgl1").val("");
        $("#bpkb").val("");
        $("#tgl2").val("");
        $("#panjang").val("");
        $("#lebar").val("");
        $("#tinggi").val("");
        $("#kapasitas_kubik").val("");
        $("#kapasitas_kg").val("");
        $("#status").val("");
    }

      function tambah() {
        $("#modal-armada").modal('show');
        kosong();
        $(".modal-title");
    }

      </script>  
            
             <div class="modal fade" id="modal-armada">
              <form id="input" method="post" class="foto_banyak" action="<?=base_admin();?>modul/armada/armada_action.php?act=in">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Form Armada</h4>
                  </div>
            <div class="modal-body">
              <div class="row">
                      <div class="form-group col-xs-6">
                        <label for="No. Pol" class="control-label">No. Pol</label>
                        <input type="text" name="nopol" id="nopol" placeholder="No. Pol" class="form-control" required> 
                        </div><!-- /.form-group -->
<div class="form-group col-xs-6">
                        <label for="Jenis Truk" class="control-label">Jenis Truk</label>
                        <select name="jenis_truk" id="jenis_truk" data-placeholder="Pilih Jenis Truk ..." class="form-control chzn-select" tabindex="2" required>
                         <option value=""></option>
                         <?php foreach ($db->fetch_all("jenis_truk") as $isi) {
                            echo "<option value='$isi->id'>$isi->nama_jenis_truk</option>";
                         } ?>
                        </select>
                        </div>
                      </div><!-- /.form-group -->
                <div class="row">
<div class="form-group col-xs-6">
                        <label for="Tahun" class="control-label">Tahun</label>
                        
                          <input type="number" name="tahun" id="tahun" placeholder="Tahun" class="form-control" required> 
                        </div><!-- /.form-group -->
<div class="form-group col-xs-6">
                        <label for="Warna" class="control-label">Warna</label>
                        
                          <input type="text" name="warna" id="warna" placeholder="Warna" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
                <div class="row">
<div class="form-group col-xs-6">
                        <label for="STNK" class="control-label">STNK</label>
                        
                          <input type="number" name="stnk" id="stnk" placeholder="STNK" class="form-control" required> 
                        </div><!-- /.form-group -->
<div class="form-group col-xs-6">
                        <label for="Exp STNK" class="control-label">Exp STNK</label>
                        
                          <input type="date" id="tgl1" data-rule-date="true" name="exp_stnk" placeholder="Exp STNK" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
                <div class="row">
<div class="form-group col-xs-6">
                        <label for="BPKB" class="control-label">BPKB</label>
                        
                          <input type="number" name="bpkb" id="bpkb" placeholder="BPKB" class="form-control" required> 
                        </div><!-- /.form-group -->
<div class="form-group col-xs-6">
                        <label for="Exp BPKP" class="control-label">Exp BPKP</label>
                        
                          <input type="date" id="tgl2" data-rule-date="true" name="exp_bpkb" placeholder="Exp BPKP" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
                  <div class="row">
<div class="form-group col-xs-6">
                        <label for="Panjang" class="control-label">Panjang /meter</label>
                        
                          <input type="number" data-rule-number="true" name="panjang" id="panjang" placeholder="Panjang /meter" class="form-control" required> 
                        </div><!-- /.form-group -->
<div class="form-group col-xs-6">
                        <label for="Lebar" class="control-label">Lebar</label>
                        
                          <input type="number" data-rule-number="true" name="lebar" id="lebar" placeholder="Lebar /meter" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
                      <div class="row">
<div class="form-group col-xs-6">
                        <label for="Tinggi" class="control-label">Tinggi</label>
                        
                          <input type="number" data-rule-number="true" name="tinggi" id="tinggi" placeholder="Tinggi /meter" class="form-control" required> 
                        </div><!-- /.form-group -->
<div class="form-group col-xs-6">
                        <label for="Kapasitas Kubik" class="control-label">Kapasitas Kubik</label>
                        
                          <input type="number" data-rule-number="true" name="kapasitas_kubik" id="kapasitas_kubik" placeholder="Kapasitas /Kubik" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
                      <div class="row">
<div class="form-group col-xs-6">
                        <label for="Kapasitas Kg" class="control-label">Kapasitas Kg</label>
                        
                          <input type="number" data-rule-number="true" name="kapasitas_kg" id="kapasitas_kg" placeholder="Kapasitas /Kg" class="form-control" required> 
                        </div><!-- /.form-group -->
<div class="form-group col-xs-6">
                        <label for="Status" class="control-label">Status</label>
                        
                          <input name="status" id="status" class="make-switch" type="checkbox" checked>
                        </div>
                      </div><!-- /.form-group -->
                    
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                  </div>
                </div>
              </div>
              </form>
            </div>