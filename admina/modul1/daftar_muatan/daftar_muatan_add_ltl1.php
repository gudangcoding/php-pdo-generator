
<style type="text/css">
   #map0{
        width: 90%;height:400px;margin: 20px;
      }
      .chosen {
        width:100%!important;
      }
</style>
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Tambah Muatan LTL
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
          <h3 class="box-title">Form Tambah LTL</h3>
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
                <a href="#general" aria-controls="home" role="tab" data-toggle="tab">General</a>
              </li>
              <li role="presentation">
                <a href="#origin" aria-controls="tab" role="tab" data-toggle="tab">Origin</a>
              </li>
              <li role="presentation">
                <a href="#destination" aria-controls="tab" role="tab" data-toggle="tab">Destination</a>
              </li>
              <li role="presentation">
                <a href="#details" aria-controls="tab" role="tab" data-toggle="tab">Good Details</a>
              </li>
              <li role="presentation">
                <a href="#remark" aria-controls="tab" role="tab" data-toggle="tab">Remarks</a>
              </li>
            </ul>
          
            <!-- Tab panes -->
            <div class="tab-content" style="margin-top: 20px;">
              <div role="tabpanel" class="tab-pane active" id="general">
                  <h3 class="text-center btn-primary btn-block">Info Project</h3>
                  <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                      <label>DN No</label>
                      <input type="text" name="dn_no" id="dn_no" class="form-control">
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                      <label>Legal</label>
                      <select name="legal" id="legal" class="form-control chosen" required="required">
                        <option value="">Pilih Legal</option>
                      </select>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                      <label>Request Date</label>
                      <input type="date" name="request_date" id="request_date" class="form-control">
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                      <label>Customer</label>
                      <select name="customer" id="customer" class="form-control chosen" required="required">
                        <option value="">Pilih Customer</option>
                      </select>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                      <label>Shipment Type</label>
                      <select name="shipment_type" id="shipment_type" class="form-control chosen" required="required">
                        <option value="">Pilih Shipment</option>
                      </select>
                      
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                      <label>Project Name</label>
                      <input type="text" name="project_name" id="project_name" class="form-control">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                      <label>Mode Transport</label>
                      <select name="mode_transport" id="mode_transport" class="form-control chosen" required="required">
                        <option value="">Pilih Transport</option>
                      </select>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                      <label>Job Order Status</label>
                      <select name="status_job" id="status_job" class="form-control chosen" required="required">
                        <option value="">Pilih Status</option>
                      </select>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                      <label>Truck Qty</label>
                      <input type="number" name="truck_qty" id="truck_qty" class="form-control">
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                      <label>Reference</label>
                      <input type="number" name="reference" id="reference" class="form-control">
                    </div>
                  </div><hr>
                  <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                      <a href="<?=base_admin()?>index.php/daftar-muatan" class="btn btn-warning"><i class="fa fa-arrow-left"> Kembali</i></a>
                     
                        <button type="button" class="btn btn-default" id="buat_nomor_order"><i class="fa fa-qrcode"></i> Buat Nomor Order</button>
                      
                      <button type="button" class="btn btn-primary pull-right" id="info_general"> Simpan Dan Lanjut <i class="fa fa-arrow-right"></i></button>
                    </div>
                  </div>
              </div>
              <div role="tabpanel" class="tab-pane" id="origin">
                <h3 class="text-center btn-primary btn-block">Info Origin Barang</h3>
                <div class="row">
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <label>Req. Ship Date</label>
                    <input type="date" name="req_ship_date" id="req_ship_date" class="form-control">
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <label>Plan Form</label>
                    <input type="text" name="reference" id="reference" class="form-control">
                  </div>
                </div>
               <!--  <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <label>Alamat Warehouse</label>
                    <input type="text" name="warehouse_address" id="warehouse_address" class="form-control">
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <label>Latitude</label>
                    <input type="text" name="lat_warehouse" id="lat_warehouse" class="form-control">
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <label>Longitutude</label>
                    <input type="text" name="lng_warehouse" id="lng_warehouse" class="form-control">
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div id="map" style="height: 300px"></div>
                  </div>
                </div> -->

                <div class="row">
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <label>Actual Date Dispatch</label>
                    <input type="date" name="act_date_dispatch" id="act_date_dispatch" class="form-control">
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <label>Actual Time Dispatch</label>
                    <input type="time" name="act_time_dispatch" id="act_time_dispatch" class="form-control">
                  </div>
                </div>

                 <div class="row">
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <label>Truck 1</label>
                    <input type="text" name="truck_1" id="truck_1" class="form-control">
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <label>Truck 2</label>
                     <input type="text" name="truck_2" id="truck_2" class="form-control">
                  </div>
                </div>

                 <div class="row">
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <label>Driver 1</label>
                    <input type="text" name="driver_1" id="driver_1" class="form-control">
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <label>Driver 2</label>
                     <input type="text" name="driver_2" id="driver_2" class="form-control">
                  </div>
                </div>

                <div class="row" style="margin-top: 20px;">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <button type="buttton" class="btn btn-warning" id="back_info"><i class="fa fa-arrow-left"> Kembali</i></button>
                    <button type="button" class="btn btn-primary pull-right" id="info_origin"> Simpan Dan Lanjut <i class="fa fa-arrow-right"></i></button>
                  </div>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane" id="destination">
                <h3 class="text-center btn-primary btn-block">Destination Info</h3>
                  <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                      <label>Req. Time Arrival</label>
                      <input type="date" name="req_time_arrival" id="req_time_arrival" class="form-control">
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                      <label>Sub Cont</label>
                      <input type="text" name="sub_cont" id="sub_cont" class="form-control">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                      <label>Destination</label>
                      <select name="site_destination" id="site_destination" class="form-control chosen" required="required">
                        <option value="">Pilih Destination</option>
                      </select>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                      <label>PIC Name</label>
                      <input type="text" name="pic_name" id="pic_name" class="form-control">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                      <label>Site ID</label>
                      <select name="site_id" id="site_id" class="form-control chosen" required="required">
                        <option value="">Pilih Site ID</option>
                      </select>
                      
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                      <label>PIC No</label>
                      <input type="text" name="pic_no" id="pic_no" class="form-control">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                      <label>Site Address</label>
                      <textarea name="site_address" id="site_address" class="form-control" rows="3" required="required"></textarea>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                      <label>Remarks</label>
                      <textarea name="remarks" id="remarks" class="form-control" rows="3" required="required"></textarea>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                      <button type="buttton" class="btn btn-warning" id="back_origin"><i class="fa fa-arrow-left"> Kembali</i></button>
                      <button type="button" class="btn btn-primary pull-right" id="info_destination"> Simpan Dan Lanjut <i class="fa fa-arrow-right"></i></button>
                    </div>
                  </div>
              </div>
              <div role="tabpanel" class="tab-pane" id="details">
                
                <table class="table table-bordered" id="crud_table">
                 <tr>
                    <th>Item</th>
                    <th>Unit</th>
                    <th>QTY</th>
                    <th>Remarks</th>
                    <th>Aksi</th>
                </tr>
                 <tr>
                  <td contenteditable="true" class="item_name"></td>
                  <td contenteditable="true" class="item_unit"></td>
                  <td contenteditable="true" class="item_qty"></td>
                  <td contenteditable="true" class="item_remark"></td>
                  <td></td>
                 </tr>
                </table>
                <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                     <a class="btn btn-success" href="#" id="addScnt" role="button"><i class="fa fa-plus"></i> Tambah Baris</a>
                     
                  </div>
                  
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <button class="btn btn-primary pull-right" type="button" id="info_details" role="button">Simpan</button>
                  </div>
                <hr>
                
                

              </div>
              <div role="tabpanel" class="tab-pane" id="remark">
                <h3>Remarks</h3>
                <hr>
                <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <button type="buttton" class="btn btn-warning" id="back_origin"><i class="fa fa-arrow-left"> Kembali</i></button>
                    <button type="button" class="btn btn-primary pull-right" id="info_remark"> Simpan Dan Finish <i class="fa fa-arrow-right"></i></button>
                  </div>
                </div>
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

var scntDiv = $('#p_scents');
var i = $('#p_scents tr').size() + 1;

$('#addScnt').click(function() {
    scntDiv.append('<tr><td>'+i+'</td><td><input type="text" name="item[]" id="item" placeholder="Item Detail" class="form-control col-xs-3" required=""></td><td><input type="text" name="unit[]" id="unit" placeholder="Unit" class="form-control" required=""></td><td><input type="text" name="jumlah[]" id="jumlah" placeholder="Jumlah" class="form-control" required=""></td><td><input type="text" name="catatan[]" id="catatan" placeholder="Catatan" class="form-control"></td><td><button type="button" id="aksi_hapus" class="btn btn-danger"><i class="fa fa-trash"></i></button></td></tr>');
    i++;
    return false;
});
//Remove button
$(document).on('click', '#remScnt', function() {
    if (i > 2) {
        $(this).closest('tr').remove();
        i--;
    }
    return false;
});
</script>
<script>
  $(document).ready(function() {

    $("#info_general").click(function(event) {
      if ($("#dn_no")=="") {
        Swal.fire({
          icon: 'error',
          title: 'Klik Tombol Buat Nomor Order Terlebih Dahulu',
          showConfirmButton: false,
          timer: 1500
        });
      }
      $('.nav-tabs a[href="#origin"]').tab('show');
    });

    $("#info_origin").click(function(event) {
      $('.nav-tabs a[href="#destination"]').tab('show');
    });

    $("#info_destination").click(function(event) {
      $('.nav-tabs a[href="#details"]').tab('show');
    });

    $("#info_details").click(function(event) {
          /*awal insert data detail muatan LTL*/
          var item_name = [];
          var item_unit = [];
          var item_qty = [];
          var item_remark = [];
          $('.item_name').each(function(){
           item_name.push($(this).text());
          });
          $('.item_unit').each(function(){
           item_unit.push($(this).text());
          });
          $('.item_qty').each(function(){
           item_qty.push($(this).text());
          });
          $('.item_remark').each(function(){
           item_remark.push($(this).text());
          });
          $.ajax({
           url:"<?=base_admin()?>modul/daftar_muatan/daftar_muatan_action.php?act=insert_detail_muatan",
           method:"POST",
           data:{item:item_name, unit:item_unit, qty:item_qty, remark:item_remark},
           success:function(data){
            //alert(data);
            $("td[contentEditable='true']").text("");
            for(var i=2; i<= count; i++)
            {
             $('tr#row'+i+'').remove();
            }
            $('.nav-tabs a[href="#remark"]').tab('show');
           }
          });
          /*akhir insert data detail muatan LTL*/
      
    });

    $("#info_remark").click(function(event) {
      $('.nav-tabs a[href="#remark"]').tab('show');
    });


  });

  $('#legal').select2({
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
          url: '<?=base_admin();?>modul/daftar_muatan/daftar_muatan_action.php?act=legal',
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

  $('#customer').select2({
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
          url: '<?=base_admin();?>modul/daftar_muatan/daftar_muatan_action.php?act=pelanggan',
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
  $('#status_job').select2({
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
          url: '<?=base_admin();?>modul/daftar_muatan/daftar_muatan_action.php?act=status_job',
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
  $('#shipment_type').select2({
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
          url: '<?=base_admin();?>modul/daftar_muatan/daftar_muatan_action.php?act=shipment_type',
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
  $('#mode_transport').select2({
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
          url: '<?=base_admin();?>modul/daftar_muatan/daftar_muatan_action.php?act=mode_transport',
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

  $('#site_destination').select2({
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
          url: '<?=base_admin();?>modul/daftar_muatan/daftar_muatan_action.php?act=site_destination',
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
  $('#site_id').select2({
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
          url: '<?=base_admin();?>modul/daftar_muatan/daftar_muatan_action.php?act=site_id',
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
  $("#good_details").dataTable();

  $("#buat_nomor_order").click(function(event) {
   
    if ($("#request_date").val()=="") {
      Swal.fire({
          icon: 'error',
          title: 'Request Date harus di isi',
          showConfirmButton: false,
          timer: 1500
      });
    }else if($("#shipment_type").val()==""){
      Swal.fire({
          icon: 'error',
          title: 'Shipment Type harus di isi',
          showConfirmButton: false,
          timer: 1500
      });
    }else if($("#mode_transport").val()==""){
      Swal.fire({
          icon: 'error',
          title: 'Mode Transport harus di isi',
          showConfirmButton: false,
          timer: 1500
      });
    }else if($("#truck_qty").val()==""){
      Swal.fire({
          icon: 'error',
          title: 'Qty Truk harus di isi',
          showConfirmButton: false,
          timer: 1500
      });
    }else if($("#legal").val()==""){
      Swal.fire({
          icon: 'error',
          title: 'Legal harus di isi',
          showConfirmButton: false,
          timer: 1500
      });
    }else if($("#customer").val()==""){
      Swal.fire({
          icon: 'error',
          title: 'Customer harus di isi',
          showConfirmButton: false,
          timer: 1500
      });
    }else if($("#project_name").val()==""){
      Swal.fire({
          icon: 'error',
          title: 'Project Name harus di isi',
          showConfirmButton: false,
          timer: 1500
      });
    }else if($("#status_job").val()==""){
      Swal.fire({
          icon: 'error',
          title: 'Status Job harus di isi',
          showConfirmButton: false,
          timer: 1500
      });
    }else{
      $.ajax({
        url: '<?=base_admin()?>modul/daftar_muatan/daftar_muatan_action.php?act=buat_nomor_order',
        success : function(msg){
          $("#dn_no").val(msg);
        },
        error : function(err){
          console.log(err);
        }
      });
      
    }


  });
</script>
<script>
$(document).ready(function(){
 var count = 1;
 $('#addScnt').click(function(){
  count = count + 1;
  var html_code = "<tr id='row"+count+"'>";
   html_code += "<td contenteditable='true' class='item_name'></td>";
   html_code += "<td contenteditable='true' class='item_unit'></td>";
   html_code += "<td contenteditable='true' class='item_qty'></td>";
   html_code += "<td contenteditable='true' class='item_remark' ></td>";
   html_code += "<td><button type='button' name='remove' data-row='row"+count+"' class='btn btn-danger remove'><span class='glyphicon glyphicon-trash'></span></button></td>";   
   html_code += "</tr>";  
   $('#crud_table').append(html_code);
 });
 
 $(document).on('click', '.remove', function(){
  var delete_row = $(this).data("row");
  $('#' + delete_row).remove();
 });
  
});

function selectAuto(idtag,url_action) {
   $('#'+idtag).select2({
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
          url: url,
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
}
</script>
