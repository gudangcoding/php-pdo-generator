
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Manage Lokasi
                    </h1>
                        <ol class="breadcrumb">
                        <li><a href="<?=base_index();?>"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="<?=base_index();?>lokasi">Lokasi</a></li>
                        <li class="active">Lokasi List</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                <h3 class="box-title">List Lokasi</h3>
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
                                    <table id="dtb_lokasi" class="table table-bordered table-striped">
                                   <thead>
                                     <tr>
                          <th>ID Perusahaan</th>
                          <th>Alamat</th>
                          <th>Kelurahan</th>
													<th>Kecamatan</th>
													<th>Kota</th>
                          <th>Kode Pos</th>
                          <th>Kode Provinsi</th>
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
  $edit = '<a href="'.base_index()."lokasi/edit/'+aData[indek]+'".'" class="btn btn-xs btn-primary "><i class="fa fa-pencil"></i></a>';
  } else {
    $edit ="";
  }
  if ($role_act['del_act']=='Y') {
   $del = "<span data-id='+aData[indek]+' data-uri=".base_admin()."modul/lokasi/lokasi_action.php".' class="btn btn-xs btn-danger hapus "><i class="fa fa-trash"></i></span>';
  } else {
    $del="";
  }
                   } 
  }
  
?>  
                </section><!-- /.content -->
        <script type="text/javascript">
var dataTable = $("#dtb_lokasi").dataTable({
           "fnCreatedRow": function( nRow, aData, iDataIndex ) {
            var indek = aData.length-1;           
     $('td:eq('+indek+')', nRow).html(' <a href="<?=base_index();?>lokasi/detail/'+aData[indek]+'" class="btn btn-xs btn-success "><i class="fa fa-eye"></i></a> <?=$edit;?> <?=$del;?>');
       $(nRow).attr('id', 'line_'+aData[indek]);
   },
           'bProcessing': true,
            'bServerSide': true,
        'sAjaxSource': '<?=base_admin();?>modul/lokasi/lokasi_data.php',
         /*     'aoColumnDefs': [{
                'bSortable': false,
                'aTargets': [0]
            }]*/
        });
          
            function kosong() {
        $("#id").val("");
        $("#id_perusahaan").val("");
        $("#alamat").val("");
        $("#postal_code").val("");
        $("#province_code").val("");
        $("#urban").val("");
        $("#sub_district").val("");
        $("#city").val("");
    }

      function tambah() {
        $("#modal-lokasi").modal('show');
        kosong();
        $(".modal-title");
    }

      </script>  

      <div class="modal fade" id="modal-lokasi">
        <form id="input" method="post" class="foto_banyak" action="<?=base_admin();?>modul/lokasi/lokasi_action.php?act=in">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">Form Lokasi</h4>
            </div>
            <div class="modal-body">
              <div class="row">
<div class="col-xs-6">
                        <label for="ID Perusahaan">ID Perusahaan</label>
                          <select name="id_perusahaan" id="id_perusahaan" data-placeholder="Pilih Nama Legal ..." class="form-control chzn-select" tabindex="2" required>
               <option value=""></option>
               <?php foreach ($db->fetch_all("sys_users") as $isi) {
                  echo "<option value='$isi->id'>$isi->first_name</option>";
               } ?>
              </select>
                      </div><!-- /.form-group -->
<div class="col-xs-6">
                        <label for="Alamat">Alamat</label>
                          <input type="text" name="alamat" id="alamat" placeholder="Alamat" class="form-control" required>
                      </div><!-- /.form-group -->
                    </div>
                    <div class="row">
<div class="col-xs-6">
                        <label for="Kode Pos">Kode Pos</label>
                        <select name="postal_code" id="postal_code" class="form-control" required>
                        </select>
                    </div>
<div class="col-xs-6">
                        <label for="Kode Provinsi">Kode Provinsi</label>
                        <select name="province_code" id="province_code" class="form-control" required>
                        </select>
                    </div>
                    </div>
                <div class="row">                    
<div class="col-xs-6">
                        <label for="Kelurahan">Kelurahan</label>
                          <input type="text" name="urban" id="urban" placeholder="Kelurahan" class="form-control" required> 
                      </div><!-- /.form-group -->
<div class="col-xs-6">
                        <label for="Kecamatan">Kecamatan</label>
                          <input type="text" name="sub_district" id="sub_district" placeholder="Kecamatan" class="form-control" required>
                      </div><!-- /.form-group -->
                    </div>
                <div class="row">
<div class="col-xs-6">
                        <label for="Kota">Kota</label>
                          <input type="text" name="city" id="city" placeholder="Kota" class="form-control" required>
                      </div><!-- /.form-group -->
                    </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
          </div>
        </div>
        </form>
      </div>
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
                delay: 150,
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
        $('#province_code').select2({
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
                url: '<?=base_admin();?>modul/lokasi/lokasi_action.php?act=kodeprovinsi',
                dataType: 'json',
                delay: 150,
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
            