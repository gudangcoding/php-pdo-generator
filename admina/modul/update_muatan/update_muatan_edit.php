<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Update Operasional
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?=base_index();?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?=base_index();?>dashboard-operasional">Update Operasional</a></li>
        <li class="active">Update Operasional</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="box box-solid box-primary">
                <div class="box-header">
                    <h3 class="box-title">Update Operasional</h3>
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
                        <a href="#infoumum" aria-controls="tab" role="tab" data-toggle="tab">Informasi Umum</a>
                      </li>
                      <li role="presentation">
                        <a href="#tujuan" aria-controls="tab" role="tab" data-toggle="tab">Informasi Tujuan</a>
                      </li>
                    </ul>
                  <form id="input" method="post" class="form-horizontal foto_banyak"
                        action="<?=base_admin();?>modul/update_muatan/update_muatan_action.php?act=in">
                    <!-- Tab panes -->
                    <div class="tab-content">
                      <div role="tabpanel" class="tab-pane active" id="info_umum">
                        <div class="row">
                           <div class="col-sm-6 col-lg-6 col-xs-12 col-md-6">
                            <label>DN No.</label>
                                <input type="text" name="dn_no" placeholder="DN No." class="form-control" required>
                        </div><!-- /.col-sm-6 col-lg-6 col-xs-12 col-md-6 -->
                        <div class="col-sm-6 col-lg-6 col-xs-12 col-md-6">
                            <label for="Request Date">Request Date</label>
                            <div>
                                <input type="text" id="tgl1" data-rule-date="true" name="req_date"
                                    placeholder="Request Date" class="form-control" required>
                            </div>
                        </div><!-- /.col-sm-6 col-lg-6 col-xs-12 col-md-6 -->
                        </div>
                        <div class="row">
                          <div class="col-sm-6 col-lg-6 col-xs-12 col-md-6">
                            <label for="Shipment Type">Shipment Type</label>
                            <div>
                                <select name="shipment_type" data-placeholder="Pilih Shipment Type ..."
                                    class="form-control chzn-select" tabindex="2" required>
                                    <option value=""></option>
                                    <?php foreach ($db->fetch_all("shipment_type") as $isi) {
                  echo "<option value='$isi->id'>$isi->name</option>";
               } ?>
                                </select>
                            </div>
                        </div><!-- /.col-sm-6 col-lg-6 col-xs-12 col-md-6 -->
                        <div class="col-sm-6 col-lg-6 col-xs-12 col-md-6">
                            <label for="Moda Transport">Moda Transport</label>
                            <div>
                                <select name="moda_transport" data-placeholder="Pilih Moda Transport ..."
                                    class="form-control chzn-select" tabindex="2" required>
                                    <option value=""></option>
                                    <?php foreach ($db->fetch_all("transport_mode") as $isi) {
                  echo "<option value='$isi->id'>$isi->id</option>";
               } ?>
                                </select>
                            </div>
                        </div><!-- /.col-sm-6 col-lg-6 col-xs-12 col-md-6 -->
                        </div>
                        <div class="row">
                          <div class="col-sm-6 col-lg-6 col-xs-12 col-md-6">
                            <label for="Truck Qty">Truck Qty</label>
                            <div>
                                <input type="text" data-rule-number="true" name="truck_qty" placeholder="Truck Qty"
                                    class="form-control" required>
                            </div>
                        </div><!-- /.col-sm-6 col-lg-6 col-xs-12 col-md-6 -->
                        <div class="col-sm-6 col-lg-6 col-xs-12 col-md-6">
                            <label for="Legal">Legal</label>
                            <div>
                                <select name="id_legal" data-placeholder="Pilih Legal ..."
                                    class="form-control chzn-select" tabindex="2" required>
                                    <option value=""></option>
                                    <?php foreach ($db->fetch_all("legal") as $isi) {
                  echo "<option value='$isi->id'>$isi->nm_legal</option>";
               } ?>
                                </select>
                            </div>
                        </div><!-- /.col-sm-6 col-lg-6 col-xs-12 col-md-6 -->
                        </div>
                        <div class="row">
                          <div class="col-sm-6 col-lg-6 col-xs-12 col-md-6">
                            <label for="Customer">Customer</label>
                            <div>
                                <select name="id_customer" data-placeholder="Pilih Customer ..."
                                    class="form-control chzn-select" tabindex="2" required>
                                    <option value=""></option>
                                    <?php foreach ($db->fetch_all("customer") as $isi) {
                  echo "<option value='$isi->id'>$isi->Nama_Legal</option>";
               } ?>
                                </select>
                            </div>
                        </div><!-- /.col-sm-6 col-lg-6 col-xs-12 col-md-6 -->
                        <div class="col-sm-6 col-lg-6 col-xs-12 col-md-6">
                            <label for="nama_proyek">nama_proyek</label>
                            <div>
                                <input type="text" name="nama_proyek" placeholder="nama_proyek" class="form-control"
                                    required>
                            </div>
                        </div><!-- /.col-sm-6 col-lg-6 col-xs-12 col-md-6 -->
                        </div>
                        <div class="row">
                          <div class="col-sm-6 col-lg-6 col-xs-12 col-md-6">
                            <label for="Job Order Status">Job Order Status</label>
                            <div>
                                <select name="job_order_status" data-placeholder="Pilih Job Order Status ..."
                                    class="form-control chzn-select" tabindex="2" required>
                                    <option value=""></option>
                                    <?php foreach ($db->fetch_all("status") as $isi) {
                  echo "<option value='$isi->id'>$isi->nm_status</option>";
               } ?>
                                </select>
                            </div>
                        </div><!-- /.col-sm-6 col-lg-6 col-xs-12 col-md-6 -->
                        <div class="col-sm-6 col-lg-6 col-xs-12 col-md-6">
                            <label for="Referensi">Referensi</label>
                            <div>
                                <input type="text" name="referensi" placeholder="Referensi" class="form-control"
                                    required>
                            </div>
                        </div><!-- /.col-sm-6 col-lg-6 col-xs-12 col-md-6 -->
                        </div>
                        <div class="row">
                          <div class="col-sm-6 col-lg-6 col-xs-12 col-md-6">
                            <label for="Requset Ship Date">Requset Ship Date</label>
                            <div>
                                <input type="text" id="tgl2" data-rule-date="true" name="req_ship_date"
                                    placeholder="Requset Ship Date" class="form-control" required>
                            </div>
                        </div><!-- /.col-sm-6 col-lg-6 col-xs-12 col-md-6 -->
                        <div class="col-sm-6 col-lg-6 col-xs-12 col-md-6">
                            <label for="Actual Dispath Date">Actual Dispath Date</label>
                            <div>
                                <input type="text" id="tgl3" data-rule-date="true" name="actual_dispath_date"
                                    placeholder="Actual Dispath Date" class="form-control" required>
                            </div>
                        </div><!-- /.col-sm-6 col-lg-6 col-xs-12 col-md-6 -->
                        </div>
                        <div class="row">
                          <div class="col-sm-12 col-lg-12 col-xs-12 col-md-12">
                            <label for="tags">&nbsp;</label>
                            <div>
                                <a href="<?=base_index();?>dashboard-operasional" class="btn btn-success btn-flat pull-left"><i
                            class="fa fa-step-backward"></i> Kembali</a>
                                <input type="submit" class="btn btn-primary btn-flat pull-right" value="Simpan">
                            </div>

                        </div><!-- /.col-sm-6 col-lg-6 col-xs-12 col-md-6 -->
                        </div>
                      </div>
                      <div role="tabpanel" class="tab-pane" id="tujuan">
                        <div class="row">
                          <div class="col-sm-6 col-lg-6 col-xs-12 col-md-6">
                            <label for="Actual Dispath Time">Actual Dispath Time</label>
                            <div>
                                <input type="text" id="tgl4" data-rule-date="true" name="actual_dispath_time"
                                    placeholder="Actual Dispath Time" class="form-control" required>
                            </div>
                        </div><!-- /.col-sm-6 col-lg-6 col-xs-12 col-md-6 -->
                        <div class="col-sm-6 col-lg-6 col-xs-12 col-md-6">
                            <label for="Request Time Arrival">Request Time
                                Arrival</label>
                            <div>
                                <input type="text" id="tgl5" data-rule-date="true" name="req_time_arrival"
                                    placeholder="Request Time Arrival" class="form-control" required>
                            </div>
                        </div><!-- /.col-sm-6 col-lg-6 col-xs-12 col-md-6 -->
                        </div>
                        <div class="row">
                          <div class="col-sm-6 col-lg-6 col-xs-12 col-md-6">
                            <label for="Destination">Destination</label>
                            <div>
                                <select name="destination" data-placeholder="Pilih Destination ..."
                                    class="form-control chzn-select" tabindex="2" required>
                                    <option value=""></option>
                                    <?php foreach ($db->fetch_all("lokasi1") as $isi) {
                  echo "<option value='$isi->id'>$isi->city</option>";
               } ?>
                                </select>
                            </div>
                        </div><!-- /.col-sm-6 col-lg-6 col-xs-12 col-md-6 -->
                        <div class="col-sm-6 col-lg-6 col-xs-12 col-md-6">
                            <label for="Site">Site</label>
                            <div>
                                <select name="site_id" data-placeholder="Pilih Site ..."
                                    class="form-control chzn-select" tabindex="2" required>
                                    <option value=""></option>
                                    <?php foreach ($db->fetch_all("site") as $isi) {
                  echo "<option value='$isi->id'>$isi->name</option>";
               } ?>
                                </select>
                            </div>
                        </div><!-- /.col-sm-6 col-lg-6 col-xs-12 col-md-6 -->
                        </div>
                        <div class="row">
                          <div class="col-sm-6 col-lg-6 col-xs-12 col-md-6">
                            <label for="Site Address">Site Address</label>
                            <div>
                                <input type="text" name="site_address" placeholder="Site Address" class="form-control">
                            </div>
                        </div><!-- /.col-sm-6 col-lg-6 col-xs-12 col-md-6 -->
                        <div class="col-sm-6 col-lg-6 col-xs-12 col-md-6">
                            <label for="sub_cont">sub_cont</label>
                            <div>
                                <input type="text" name="sub_cont" placeholder="sub_cont" class="form-control">
                            </div>
                        </div><!-- /.col-sm-6 col-lg-6 col-xs-12 col-md-6 -->
                        </div>
                        <div class="row">
                          <div class="col-sm-6 col-lg-6 col-xs-12 col-md-6">
                            <label for="pic_name">pic_name</label>
                            <div>
                                <input type="text" name="pic_name" placeholder="pic_name" class="form-control" required>
                            </div>
                        </div><!-- /.col-sm-6 col-lg-6 col-xs-12 col-md-6 -->
                        <div class="col-sm-6 col-lg-6 col-xs-12 col-md-6">
                            <label for="pic_hp">pic_hp</label>
                            <div>
                                <input type="text" name="pic_hp" placeholder="pic_hp" class="form-control" required>
                            </div>
                        </div><!-- /.col-sm-6 col-lg-6 col-xs-12 col-md-6 -->
                        </div>
                        <div class="row">
                          <div class="col-sm-6 col-lg-6 col-xs-12 col-md-6">
                            <label for="remark">remark</label>
                            <div>
                                <input type="text" name="remark" placeholder="remark" class="form-control">
                            </div>
                        </div><!-- /.col-sm-6 col-lg-6 col-xs-12 col-md-6 -->
                        <div class="col-sm-6 col-lg-6 col-xs-12 col-md-6">
                            <label for="perusahaan_id">perusahaan_id</label>
                            <div>
                                <input type="text" name="perusahaan_id" placeholder="perusahaan_id"
                                    class="form-control">
                            </div>
                        </div><!-- /.col-sm-6 col-lg-6 col-xs-12 col-md-6 -->
                        </div>
                        <div class="row">
                          <div class="col-sm-12 col-lg-12 col-xs-12 col-md-12">
                            <label for="tags">&nbsp;</label>
                            <div>
                                <a href="<?=base_index();?>dashboard-operasional" class="btn btn-success btn-flat pull-left"><i
                            class="fa fa-step-backward"></i> Kembali</a>
                                <input type="submit" class="btn btn-primary btn-flat pull-right" value="Simpan">
                            </div>

                        </div><!-- /.col-sm-6 col-lg-6 col-xs-12 col-md-6 -->
                        </div>
                        
                      </div>
                    </div>
                  </div>
                </form>
                    

                </div>
            </div>
        </div>
    </div>

</section><!-- /.content -->
<script>
	$(document).ready(function() {
		$('#destination').select2({
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
	            url: '<?=base_admin();?>modul/update_muatan/update_muatan_action.php?act=destination',
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
		//untuk selected saat update
      	$("#destination").val("JAWA BARAT").change();

      	$("#lanjut").click(function(event) {
			$('.nav-tabs a[href="#tujuan"]').tab('show');
		});
		$("#kembali").click(function(event) {
			$('.nav-tabs a[href="#infoumum"]').tab('show');
		});

		$("#inputform").validate({
        errorClass: 'help-block',
        errorElement: 'span',
        highlight: function(element, errorClass, validClass) {
            $(element).parents('.form-group').removeClass('has-success').addClass('has-error');
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).parents('.form-group').removeClass('has-error').addClass('has-success');
        },

            submitHandler: function(form) {
               $('#loadnya').show();
                   $(form).ajaxSubmit({
                          type: "post",
                          url: $(this).attr('action'),
                          data: $(this).serialize(),
                       //  enctype:  'multipart/form-data'
                        success: function(data){
                          
                      }
                    });
            }

        });/*input Form*/

	});
</script>