

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Pengaturan Penawaran
    </h1>
        <ol class="breadcrumb">
        <li><a href="<?=base_index();?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?=base_index();?>penawaran">Penawaran</a></li>
        <li class="active" id="dinamis">Detail Penawaran</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
               <!--  <div class="box-header">
                <h3 class="box-title">List Akun</h3>
                </div> --><!-- <-- /.box-header -->
                <div class="box-body table-responsive">
<div id="exTab1"> 
<!-- <ul  class="nav nav-pills">
<li class="active">
<a  href="#1a" data-toggle="tab" id="info">Informasi Umum</a>
</li>
<li><a href="#2a" data-toggle="tab" id="penawaran">Rincian Penawaran</a>
</li>
</ul> -->

<div class="tab-content clearfix" style="margin: 10px">
<div class="tab-pane active" id="1a">
  <a class="btn btn-primary" href='<?=base_index();?>penawaran/tambah'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Penawaran Baru</a><hr>
  <table id="tbpenawaran" class="display responsive nowrap" width="100%">
  <thead>
    <tr>
      <!-- <th><input type="checkbox" id="cekAll"></th> -->
        <th>No</th>
        <th>Legal</th>
        <th>Jenis Penawaran</th>
        <th>Nama Perusahaan</th>
        <th>Nomor Penawaran</th>
        <th>Tanggal Penawaran</th>
        <th>Periode Penawaran</th>
        <th>Layanan</th>
        <th>Status Pajak</th>
        <th>Dari</th>
        <th>Tujuan</th>
        <th>Satuan</th>
        <th>Jenis Truk</th>
        <th>Nominal</th>
        <th>Waktu Tempuh</th>
        <th>Aksi</th>

    </tr>
  </thead>
  <tbody>
    <tr>
       
    </tr>
  </tbody>
</table>

  
</div>

<div class="tab-pane" id="2a">
  <a class="btn btn-primary" data-toggle="modal" href='#modal-penawaran'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Tambah Rincian Penawaran</a><hr>
   <table id="" class="display responsive nowrap umum" width="100%">
  <thead>
    <tr>
      <th><input type="checkbox" id="cekAll"></th>
        <th>No</th>
        <th>Dari</th>
        <th>tujuan</th>
        <th>Jenis Truk</th>
        <th>Nominal</th>
        <th>Waktu Tempuh</th>
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
    </tr>
  </tbody>
</table>           
</div>
</div>
</div>              
</div><!-- /.box-body -->
</div><!-- /.box -->
</div>
</div>

</section><!-- /.content -->
<!-- Main content -->

<script type="text/javascript">
$(document).ready(function () {
//Initialize tooltips
$('.nav-tabs > li a[title]').tooltip();

//Wizard
$('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

var $target = $(e.target);

if ($target.parent().hasClass('disabled')) {
  return false;
}
});

$(".next-step").click(function (e) {

var $active = $('.wizard .nav-tabs li.active');
$active.next().removeClass('disabled');
nextTab($active);

});
$(".prev-step").click(function (e) {

var $active = $('.wizard .nav-tabs li.active');
prevTab($active);

});
});

function nextTab(elem) {
$(elem).next().find('a[data-toggle="tab"]').click();
}
function prevTab(elem) {
$(elem).prev().find('a[data-toggle="tab"]').click();
}

$("#penawaran,#info").click(function(event) {
  $("#dinamis").text($(this).text());
});
$("#cekAll").change(function () {
    $(".info,.penawaran").prop('checked', $(this).prop("checked"));
});

$(document).ready(function() {

        //load();

        var table = $("#tbpenawaran").dataTable({
            "processing": true,
            "serverSide": true,
            "ajax": {
                url: "<?php echo base_admin()?>modul/penawaran/penawaran_data.php"
            }

        });

$("#simpan").click(function(event) {
            var id = $("#id").val();
            if (id == '') {
                $.ajax({
                    url: '<?php echo base_admin()?>modul/penawaran/penawaran_action.php?act=in',
                    type: 'POST',
                    data: {
                        id: $("#id").val(),
                        legal: $("#legal").val(),
                        jns_penawaran: $("#jns_penawaran").val(),
                        nm_perusahaan: $("#nm_perusahaan").val(),
                        no_penawaran: $("#no_penawaran").val(),
                        tgl_penawaran: $("#tgl_penawaran").val(),
                        prd_penawaran: $("#prd_penawaran").val(),
                        layanan: $("#layanan").val(),
                        sts_pajak: $("#sts_pajak").val(),
                        dari: $("#dari").val(),
                        tujuan: $("#tujuan").val(),
                        satuan: $("#satuan").val(),
                        jns_truk: $("#jns_truk").val(),
                        nominal: $("#nominal").val(),
                        wkt_tempuh: $("#wkt_tempuh").val(),
                        
                    },
                    success: function(msg) {
                        if (msg == "sukses") {
                            //table.ajax.reload( ); 
                            //load();
                            var table = $('#tbpenawaran').DataTable();
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
                    url: '<?php echo base_admin()?>modul/penawaran/penawaran_data.php',
                    type: 'POST',
                    data: {
                        id: $("#id").val(),
                        legal: $("#legal").val(),
                        jns_penawaran: $("#jns_penawaran").val(),
                        nm_perusahaan: $("#nm_perusahaan").val(),
                        no_penawaran: $("#no_penawaran").val(),
                        tgl_penawaran: $("#tgl_penawaran").val(),
                        prd_penawaran: $("#prd_penawaran").val(),
                        layanan: $("#layanan").val(),
                        sts_pajak: $("#sts_pajak").val(),
                        dari: $("#dari").val(),
                        tujuan: $("#tujuan").val(),
                        satuan: $("#satuan").val(),
                        jns_truk: $("#jns_truk").val(),
                        nominal: $("#nominal").val(),
                        wkt_tempuh: $("#wkt_tempuh").val(),
                    },
                    success: function(msg) {
                        if (msg == "sukses") {
                            //table.ajax.reload(); 
                            //load();
                            var table = $('#tbpenawaran').DataTable();
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
        $("#alamat").val("");
        $("#notlp").val("");
        $("#status").val("");
    }

    function edit(id) {
        $("#modal-info").modal('show');
        $(".modal-title").text('form edit' + id);
        $.ajax({
            url: '<?php echo base_admin()?>modul/penawaran/penawaran_edit.php',
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
                $("#legal").val(data.legal);
                $("#jns_penawaran").val(data.jns_penawaran);
                $("#nm_perusahaan").val(data.nm_perusahaan);
                $("#no_penawaran").val(data.no_penawaran);
                $("#tgl_penawaran").val(data.tgl_penawaran);
                $("#prd_penawaran").val(data.prd_penawaran);
                $("#layanan").val(data.layanan);
                $("#sts_pajak").val(data.sts_pajak);
                $("#dari").val(data.dari);
                $("#tujuan").val(data.tujuan);
                $("#satuan").val(data.satuan);
                $("#jns_truk").val(data.jns_truk);
                $("#nominal").val(data.nominal);
                $("#wkt_tempuh").val(data.wkt_tempuh);

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
                    url: '<?php echo base_admin()?>modul/penawaran/penawaran_action.php?act=hapus',
                    type: 'POST',
                    data: {
                        id: id
                    },
                    success: function() {
                        //table.ajax.reload(); 
                        //load(); 
                        var table = $('#tbpenawaran').DataTable();
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
        var table = $("#tbpenawaran").dataTable({
            "processing": true,
            "serverSide": true,
            //disable order dan searching pada tombol aksi
            "columnDefs": [{
                "targets": [0],
                "orderable": false,
                "searchable": false

            }],
            "ajax": {
                url: '<?php echo base_admin()?>modul/penawaran/penawaran_data.php',
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


</script>

<div class="modal fade" id="modal-info">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Form Informasi Umum</h4>
      </div>
      <div class="modal-body">
        <div class="row">
        <div class="form-group col-xs-6">
              <label for="Nama Perusahaan" class="control-label">Nama Perusahaan</label>
                <input type="text" name="nm_perusahaan" id="nm_perusahaan" placeholder="Nama Perusahaan" class="form-control" required> </div><!-- /.form-group -->
<div class="form-group col-xs-6">
              <label for="Legal" class="control-label">Legal</label>
                <input type="text" name="legal" id="legal" placeholder="Legal" class="form-control" required> 
              </div><!-- /.form-group -->
<div class="form-group col-xs-6">
              <label for="Jenis Penawaran" class="control-label ">Jenis Penawaran</label>
                <input type="text" name="jns_penawaran" id="jns_penawaran" placeholder="Jenis Penawaran" class="form-control" required></div><!-- /.form-group -->
<div class="form-group col-xs-6">
              <label for="No Penawaran" class="control-label ">No Penawaran</label>
                <input type="text" name="no_penawaran" id="no_penawaran" placeholder="No Penawaran" class="form-control" required> 
              </div><!-- /.form-group -->
<div class="form-group col-xs-6">
              <label for="Tanggal Penawaran" class="control-label ">Tanggal Penawaran</label>
                <input type="date" name="tgl_penawaran" id="tgl_penawaran" placeholder="Waktu Tempuh" class="form-control" required> 
              </div>
<div class="form-group col-xs-6">
              <label for="Periode Penawaran" class="control-label ">Periode Penawaran</label>
                <input type="text" name="prd_penawaran" id="prd_penawaran" placeholder="Periode Penawaran" class="form-control" required> 
              </div>
<div class="form-group col-xs-6">
              <label for="Layanan" class="control-label ">Layanan</label>
                <select name="layanan" id="layanan" class="form-control chzn-select" tabindex="2" required="required">
                  <option value=""></option>
                  <option value="ftl">FTL</option>
                  <option value="ltl">LTL</option>
                  <option value="rental">Rental</option>
                 </select> 
              </div>
<div class="form-group col-xs-6">
              <label for="Status Pajak" class="control-label">Status Pajak</label>
                <select name="sts_pajak" id="sts_pajak" class="form-control chzn-select" tabindex="2" required="required">
                  <option value=""></option>
                  <option value="inklusif">Inklusif</option>
                  <option value="eksklusif">Eksklusif</option>
                 </select> 
              </div>                     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-primary">Simpan Dan Lanjut</button>
      </div>
    </div>
  </div>
</div>
</div>


<div class="modal fade" id="modal-penawaran">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Form Rincian Penawaran</h4>
      </div>
      <div class="modal-body">
        <div class="row">
        <div class="form-group col-xs-6">
              <label for="Dari" class="control-label ">Dari</label>
                <input type="text" name="dari" placeholder="dari" class="form-control" required> 
              </div><!-- /.form-group -->
<div class="form-group col-xs-6">
              <label for="Tujuan" class="control-label ">tujuan</label>
                <input type="text" name="tujuan" placeholder="Tujuan" class="form-control" required> 
              </div><!-- /.form-group -->
<div class="form-group col-xs-6">
              <label for="Jenis Truk" class="control-label ">Jenis Truk</label>
                <input type="text" name="jns_truk" placeholder="Jenis Truk" class="form-control" required> 
              </div><!-- /.form-group -->
<div class="form-group col-xs-6">
              <label for="Nominal" class="control-label ">Nominal</label>
                <input type="text" name="nominal" placeholder="Nominal" class="form-control" required> 
              </div><!-- /.form-group -->
<div class="form-group col-xs-6">
              <label for="Waktu Tempuh" class="control-label ">Waktu Tempuh</label>
                <input type="time" name="wkt_tempuh" placeholder="Waktu Tempuh" class="form-control" required> 
              </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-primary">Simpan Dan Lanjut</button>
      </div>
    </div>
  </div>
</div>
</div>