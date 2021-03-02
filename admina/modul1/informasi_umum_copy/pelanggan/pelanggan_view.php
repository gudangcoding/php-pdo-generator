

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Pengaturan Pelanggan
    </h1>
        <ol class="breadcrumb">
        <li><a href="<?=base_index();?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?=base_index();?>pelanggan">Pelanggan</a></li>
        <li class="active" id="dinamis">Daftar Pelanggan</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                <h3 class="box-title">Daftar Pelanggan</h3>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive">
<div id="exTab1"> 
<ul  class="nav nav-pills">
<li class="active">
<a  href="#1a" data-toggle="tab" id="info">Informasi Umum</a>
</li>
<li><a href="#2a" data-toggle="tab" id="kontak">Informasi Kontak</a>
</li>
<li><a href="#3a" data-toggle="tab" id="finansial">Informasi Finansial</a>
</li>
<li><a href="#4a" data-toggle="tab" id="penawaran">Informasi Penawaran</a>
</li>
</ul>

<div class="tab-content clearfix" style="margin: 10px">
<div class="tab-pane active" id="1a">
<div class="table-responsive">	
  <a class="btn btn-primary" onclick="tambah()"><span class="glyphicon glyphicon-plus"
                    aria-hidden="true"></span> Tambah</a><hr>
<table id="tbpelanggan" class="display responsive nowrap" width="100%">
  <thead>
    <tr>
      <!-- <th><input type="checkbox" id="cekAll"></th> -->
        <th>No</th>
        <th>Nama Perusahaan</th>
        <th>Alamat Kantor</th>
        <th>telp</th>
        <th>Status</th>
        <th>Nama lengkap</th>
        <th>Posisi</th>
        <th>No Hp</th>
        <th>Email</th>
        <th>npwp</th>
        <th>Alamat Penagihan</th>
        <th>No Penawaran</th>
        <th>legal</th>
        <th>pelanggan</th>
        <th>layanan</th>
        <th>Tanggal Penawaran</th>
        <th>Periode Penawaran</th>
        <th>dari</th>
        <th>tujuan</th>
        <th>satuan</th>
        <th>Jenis Truk</th>
        <th>Nilai</th>
        <th>Status Pajak</th>
        <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      
    </tr>
  </tbody>
</table>

</div>
</div>

<div class="tab-pane" id="2a">
<div class="table-responsive">
  <a class="btn btn-primary" data-toggle="modal" href='#modal-kontak'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Tambah Kontak</a><hr>
<table id="" class="display responsive nowrap umum" width="100%"> 
    <thead>
      <tr>
        <th><input type="checkbox" id="cekAll"></th>
        <th>No</th>
        <th>Nama Lengkap</th>
        <th>Alamat Email</th>
        <th>No Hp</th>
        <th>Posisi</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><input type="checkbox" class="kontak"></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
    </tbody>
  </table>
</div>
<!-- Masukin Konten disini -->
</div>
<div class="tab-pane" id="3a">
	<div class="table-responsive">
	<a class="btn btn-primary" data-toggle="modal" href='#modal-finansial'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Tambah Informasi Finansial</a><hr>
	<table id="" class="display responsive nowrap umum" width="100%"> 
    <thead>
      <tr>
        <th><input type="checkbox" id="cekAll"></th>
        <th>No</th>
        <th>No NPWP</th>
        <th>Alamat Penagihan</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><input type="checkbox" class="finansial"></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
    </tbody>
  </table>
</div>
</div>
<div class="tab-pane" id="4a">
	<div class="table-responsive">
 <a class="btn btn-primary" data-toggle="modal" href='#modal-penawaran'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Tambah Penawaran</a><hr>
 <table id="" class="display responsive nowrap umum" width="100%"> 
    <thead>
      <tr>
        <th><input type="checkbox" id="cekAll"></th>
        <th>No</th>
        <th>No Penawaran</th>
        <th>Legal</th>
        <th>Pelanggan</th>
        <th>Layanan</th>
        <th>Tanggal Penawaran</th>
        <th>Periode Penawaran</th>
        <th>Dari</th>
        <th>Tujuan</th>
        <th>Satuan</th>
        <th>Jenis Truk</th>
        <th>Nilai</th>
        <th>Status Pajak</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><input type="checkbox" class="penawaran"></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
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
</div>
</div>
</section><!-- /.content -->
<!-- Main content -->


<script type="text/javascript">

$(document).ready(function() {

        //load();

        var table = $("#tbpelanggan").dataTable({
            "processing": true,
            "serverSide": true,
            "ajax": {
                url: "<?php echo base_admin()?>modul/pelanggan/pelanggan_data.php"
            }

        });

$("#simpan").click(function(event) {
            var id = $("#id").val();
            if (id == '') {
                $.ajax({
                    url: '<?php echo base_admin()?>modul/pelanggan/pelanggan_data.php"',
                    type: 'POST',
                    data: {
                        id: $("#id").val(),
                        nm_perusahaan: $("#nm_perusahaan").val(),
                        almt_kantor: $("#almt_kantor").val(),
                        telp: $("#telp").val(),
                        status: $("#status").val(),
                        nm_lengkap: $("#nm_lengkap").val(),
                        posisi: $("#posisi").val(),
                        no_hp: $("#no_hp").val(),
                        email: $("#email").val(),
                        npwp: $("#npwp").val(),
                        almt_penagihan: $("#almt_penagihan").val(),
                        no_penawaran: $("#no_penawaran").val(),
                        legal: $("#legal").val(),
                        pelanggan: $("#pelanggan").val(),
                        layanan: $("#layanan").val(),
                        tgl_penawaran: $("#tgl_penawaran").val(),
                        prd_penawaran: $("#prd_penawaran").val(),
                        dari: $("#dari").val(),
                        tujuan: $("#tujuan").val(),
                        satuan: $("#satuan").val(),
                        jns_truk: $("#jns_truk").val(),
                        nilai: $("#nilai").val(),
                        sts_pajak: $("#sts_pajak").val()
                    },
                    success: function(msg) {
                        if (msg == "sukses") {
                            //table.ajax.reload( ); 
                            //load();
                            var table = $('#tbpelanggan').DataTable();
                            table.ajax.reload(null, false);
                            kosong();
                            $('#modal-info').modal('hide');

                            Swal.fire({
                                position: 'top-end',
                                icon: 'success',
                                title: 'Berhasil Tersimpan',
                                showConfirmButton: false,
                                timer: 1500
                            });
                        }

                    },
                    error: function(errornya) {
                        console.log(errornya);
                    }
                });
            } else {
                var statusx;
                if ($('#status1').is(':checked')) {
                    statusx = $('#status1').val();
                } else {
                    statusx = $('#status2').val();
                }

                $.ajax({
                    url: '<?php echo base_admin()?>modul/pelanggan/pelanggan_data.php"',
                    type: 'POST',
                    data: {
                        id: $("#id").val(),
                        nm_perusahaan: $("#nm_perusahaan").val(),
                        almt_kantor: $("#almt_kantor").val(),
                        telp: $("#telp").val(),
                        status: statusx,
                    },
                    success: function(msg) {
                        if (msg == "sukses") {
                            //table.ajax.reload(); 
                            //load();
                            var table = $('#tbpelanggan').DataTable();
                            table.ajax.reload(null, false);
                            kosong();
                            $('#modal-info').modal('hide');
                            Swal.fire({
                                position: 'top-end',
                                icon: 'success',
                                title: 'Berhasil Disimpan',
                                showConfirmButton: true,
                                // timer: 1500
                            });
                        }
                        // dt.ajax.reload();
                    },
                    error: function(errornya) {
                        console.log(errornya);
                    }
                });
            }


        });


    });



    // $(#table).DataTable({
    //     ajax:  {
    //         url: "/url_endpoint/",
    //         data: {
    //             "param1": "value1",
    //             "param2": "value2"
    //         }
    //     }
    // });

    function kosong() {
        $("#id").val("");
        $("#nm_perusahaan").val("");
        $("#almt_kantor").val("");
        $("#telp").val("");
        $("#status").val("");
    }

    function edit(id) {
        $("#modal-info").modal('show');
        $(".modal-title").text('form edit' + id);
        $.ajax({
            url: '<?php echo base_admin()?>modul/pelanggan/pelanggan_edit.php"',
            type: 'POST',
            dataType: 'json',
            data: {
                id: id
            },
            success: function(data) {
                // if (data.status!='') {
                //  $("#status").attr('selected', 'selected');
                // }


                $("#id").val(data.id);
                $("#nm_perusahaan").val(data.nm_perusahaan);
                $("#almt_kantor").val(data.almt_kantor);
                $("#telp").val(data.telp);
                $("#status").val(data.status);

                if (data.status == 'Aktif') {
                    $("#status1").attr('checked', 'checked');
                } else {
                    $("#status2").attr('checked', 'checked');
                }
            },
            error: function(err) {
                console.log(err);
            }
        });

    }

    function hapus(id) {
        Swal.fire({
            title: 'Yakin Ingin Menghapus?',
            showDenyButton: true,
            showCancelButton: true,
            confirmButtonText: `Ya`,
            denyButtonText: `Tidak`,
        }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
                $.ajax({
                    url: '<?php echo base_admin()?>modul/pelanggan/pelanggan_delete.php"',
                    type: 'POST',
                    data: {
                        id: id
                    },
                    success: function() {
                        //table.ajax.reload(); 
                        //load(); 
                        var table = $('#tbpelanggan').DataTable();
                        table.ajax.reload(null, false);
                        Swal.fire('Data Berhasil Dihapus', '', 'success');
                    },
                    error: function() {
                        Swal.fire('Data Gagal Dihapus!', '', 'danger');
                    }
                });

            } else if (result.isDenied) {
                Swal.fire('Data Tidak jadi Dihapus', '', 'info')
            }
        });


    }

    function detail(id) {
        alert(id);
    }


    function load() {
        var table = $("#tbpelanggan").dataTable({
            "processing": true,
            "serverSide": true,
            //disable order dan searching pada tombol aksi
            "columnDefs": [{
                "targets": [0],
                "orderable": false,
                "searchable": false

            }],
            "ajax": {
                url: '<?php echo base_admin()?>modul/pelanggan/pelanggan_data.php"',
                type: 'post',

                error: function(xhr, error, thrown) {
                    console.log(xhr);

                }
            },


        });
    }

    function tambah() {
        $("#modal-info").modal('show');
        kosong();
        $(".modal-title").text('form Tambah');
    }

//Initialize tooltips
// $('.nav-tabs > li a[title]').tooltip();

// //Wizard
// $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

// var $target = $(e.target);

// if ($target.parent().hasClass('disabled')) {
//   return false;
// }
// });

// $(".next-step").click(function (e) {

// var $active = $('.wizard .nav-tabs li.active');
// $active.next().removeClass('disabled');
// nextTab($active);

// });
// $(".prev-step").click(function (e) {

// var $active = $('.wizard .nav-tabs li.active');
// prevTab($active);

// });

// function nextTab(elem) {
// $(elem).next().find('a[data-toggle="tab"]').click();
// }
// function prevTab(elem) {
// $(elem).prev().find('a[data-toggle="tab"]').click();
// }

$("#kontak,#finansial,#penawaran,#info").click(function(event) {
  $("#dinamis").text($(this).text());
});

$("#cekAll").change(function () {
    $(".info,.kontak,.finansial,.penawaran").prop('checked', $(this).prop("checked"));
});
</script>  

<div class="modal fade" id="modal-info">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title text-center">Form Pelanggan</h4>
      </div>
      <div class="modal-body">
            <div class="row">
            <div class="col-xs-6 form-group">
              <input type="hidden" name="id" id="id">
              <label for="Tujuan" class="control-label">Nama Perusahaan</label>
                <input type="text" name="nm_perusahaan" placeholder="Nama Perusahaan" class="form-control" required>
            </div>
            <div class="col-xs-6 form-group">
              <label for="Tujuan" class="control-label">Alamat Kantor</label>
                <input type="text" name="almt_kantor" placeholder="Alamat Kantor" class="form-control" required>
            </div>
            <div class="col-xs-6 form-group">
              <label for="Tujuan" class="control-label">Nomor Telp</label>
                <input type="text" name="No telp" placeholder="No telp" class="form-control" required>
         
            </div>
            <div class="col-xs-6 form-group">
              <label for="Tujuan" class="control-label">Status</label>
                <select name="Status" class="form-control chzn-select" tabindex="2" required="required">
                  <option value="Aktif">Aktif</option>
                  <option value="NonAktif">NonAktif</option>
                 </select>
            </div>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-primary">Simpan dan Lanjut</button>
      </div>
    </div>
  </div>
</div>
  <div class="modal fade" id="modal-kontak">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Modal title</h4>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="form-group col-xs-6">
              <label for="Nama Lengkap" class="control-label">Nama Lengkap</label>
                <input type="text" name="nm_Lengkap" placeholder="Nama Lengkap" class="form-control" required> 
            </div><!-- /.form-group -->
<div class="form-group col-xs-6">
              <label for="Alamat Email" class="control-label">Alamat Email</label>
                <input type="text" name="almt_Email" placeholder="Alamat Email" class="form-control" required> 
            </div><!-- /.form-group -->
<div class="form-group col-xs-6">
              <label for="No HP" class="control-label">No HP</label>
                <input type="text" name="no_hp" placeholder="No HP" class="form-control" required> 
            </div><!-- /.form-group -->
<div class="form-group col-xs-6">
              <label for="Posisi" class="control-label">Posisi</label>
                <select name="Posisi" class="form-control chzn-select" tabindex="2" required="required">
                  <option value="Posisi">Pemilik</option>
                  <option value="Posisi">Bagian Operasional</option>
                  <option value="Posisi">Bagian Keuangan</option>
                  <option value="Posisi">Bagian Bengkel</option>
                 </select> 
            </div><!-- /.form-group -->
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="modal-finansial">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title text-center">Form Finansial</h4>
        </div>
        <div class="modal-body">
          	 <div class="form-group col-xs-6">
              <label for="NPWP" class="control-label ">No NPWP</label>
                <input type="text" name="npwp" placeholder="No NPWP" class="form-control" required>
            </div><!-- /.form-group -->
<div class="form-group col-xs-6">
              <label for="Alamat Penagihan" class="control-label ">Alamat Penagihan</label>
                <input type="text" name="almt_penagihan" placeholder="Alamat Penagihan" class="form-control" required> 
              </div><!-- /.form-group -->
			</div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
          <button type="button" class="btn btn-primary">Simpan Dan Lanjut</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="modal-penawaran">
  	<div class="modal-dialog">
  		<div class="modal-content">
  			<div class="modal-header">
  				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
  				<h4 class="modal-title text-center">Form Penawaran</h4>
  			</div>
  			<div class="modal-body">
  				<div class="row">
  				<div class="form-group col-xs-6">
              <label for="No Penawaran" class="control-label ">No Penawaran</label>
                <input type="text" name="no_penawaran" placeholder="No Penawaran" class="form-control" required>
            </div><!-- /.form-group -->
<div class="form-group col-xs-6">
              <label for="Legal" class="control-label ">Legal</label>
                <input type="text" name="legal" placeholder="Legal" class="form-control" required> 
              </div>
            </div>
            <div class="row">
<div class="form-group col-xs-6">
              <label for="Pelanggan" class="control-label ">Pelanggan</label>
                <input type="text" name="pelanggan" placeholder="Pelanggan" class="form-control" required>
            </div>
<div class="form-group col-xs-6">
              <label for="Layanan" class="control-label">Layanan</label>
                <select name="layanan" class="form-control chzn-select" tabindex="2" required="required">
                  <option value="Layanan"></option>
                  <option value="Layanan">FTL</option>
                  <option value="Layanan">LTL</option>
                  <option value="Layanan">Rental</option>
                 </select>
            </div>
            </div>
      <div class="row">      
<div class="form-group col-xs-6">
              <label for="Tanggal Penawaran" class="control-label ">Tanggal Penawaran</label>
                <input type="date" name="tgl_penawaran" placeholder="Tanggal Penawaran" class="form-control" required>
            </div>
<div class="form-group col-xs-6">
              <label for="Periode Penawaran" class="control-label">Periode Penawaran</label>
                <input type="text" name="prd_penawaran" placeholder="Periode Penawaran" class="form-control" required>
            </div>
            </div>
 <div class="row">           
<div class="form-group col-xs-6">
              <label for="Dari" class="control-label">Dari</label>
                <input type="text" name="dari" placeholder="Dari" class="form-control" required>
            </div>
<div class="form-group col-xs-6">
              <label for="Tujuan" class="control-label ">Tujuan</label>
                <input type="text" name="tujuan" placeholder="Tujuan" class="form-control" required>
            </div>
            </div>
<div class="row">            
<div class="form-group col-xs-6">
              <label for="Satuan" class="control-label ">Satuan</label>
                <select name="satuan" class="form-control chzn-select" tabindex="2" required="required">
                  <option value="Satuan"></option>
                 </select>
            </div>
<div class="form-group col-xs-6">
              <label for="Jenis Truk" class="control-label ">Jenis Truk</label>
                <input type="text" name="jns_truk" placeholder="Jenis Truk" class="form-control" required>
            </div>
            </div>
<div class="row">            
<div class="form-group col-xs-6">
              <label for="Nilai" class="control-label ">Nilai</label>
                <input type="text" name="nilai" placeholder="Nilai" class="form-control" required>
            </div>
<div class="form-group col-xs-6">
              <label for="Status Pajak" class="control-label ">Status Pajak</label>
                <select name="sts_pajak" class="form-control chzn-select" tabindex="2" required="required">
                  <option value="Layanan"></option>
                  <option value="Layanan">Inklusif</option>
                  <option value="Layanan">Eksklusif</option>
                 </select>
            </div>            <!-- /.form-group -->   
  			</div>
  			</div>
  			<div class="modal-footer">
  				<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
  				<button type="button" class="btn btn-primary" id="simpan">Simpan Dan Lanjut</button>
  			</div>
  		
  	</div>
  </div>