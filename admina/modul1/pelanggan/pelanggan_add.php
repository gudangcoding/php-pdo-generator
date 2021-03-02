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

                <div class="box-body">

                    <div role="tabpanel">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#umum" aria-controls="umum" role="tab" data-toggle="tab">umum</a>
                            </li>
                            <li role="presentation">
                                <a href="#kontak" aria-controls="tab" role="tab" data-toggle="tab">kontak</a>
                            </li>
                            <li role="presentation">
                                <a href="#legal" aria-controls="tab" role="tab" data-toggle="tab">legal</a>
                            </li>
                            <li role="presentation">
                                <a href="#tarif" aria-controls="tab" role="tab" data-toggle="tab">tarif</a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content"  style="margin-top: 50px;">
                            <div role="tabpanel" class="tab-pane active" id="umum">
                                <form>
                                    <div class="form-group row">
                                        <input type="hidden" name="id" id="id">
                                        <label for="" class="col-xs-2 col-form-label">Nama Perusahaan</label>
                                        <div class="col-lg-4">
                                            <input type="text" name="nm_perusahaan" id="nm_perusahaan"
                                                placeholder="Nama Perusahaan" class="form-control" required>
                                        </div>
                                        <label for="" class="col-xs-2 col-form-label">Legal</label>
                                        <div class="col-lg-4">
                                            <select name="plegal" id="plegal" class="form-control" tabindex=""
                                                required="required">
                                                <option value="Pilih Legal"></option>
                                                <option value=""></option>
                                            </select>
                                        </div>

                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-xs-2 col-form-label">Alamat Kantor</label>
                                        <div class="col-lg-4">
                                            <textarea name="almt_kantor" id="almt_kantor" class="form-control" rows="3"
                                                required></textarea>
                                        </div>
                                        <label for="" class="col-xs-2 col-form-label">Status</label>
                                        <div class="col-lg-4">
                                            <select name="Status" id="status" class="form-control chzn-select"
                                                tabindex="2" required="required">
                                                <option value="Aktif">Aktif</option>
                                                <option value="NonAktif">NonAktif</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-xs-2 col-form-label">Email</label>
                                        <div class="col-lg-4">
                                            <input type="email" name="email" id="email" placeholder="Email@domain.com"
                                                class="form-control" required>
                                        </div>
                                        <label class="col-xs-2 col-form-label">Kecamatan</label>
                                        <div class="col-lg-4">
                                            <select name="kecamatan" id="kecamatan" class="form-control" tabindex="2"
                                                required="required">
                                                <option value=""></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xs-2 col-form-label">Website</label>
                                        <div class="col-lg-4">
                                            <input type="text" name="web" id="web" placeholder="www.domain.com"
                                                class="form-control">
                                        </div>
                                        <label class="col-xs-2 col-form-label">Kota</label>
                                        <div class="col-lg-4">
                                            <select name="kota" id="kota" class="form-control" tabindex="2"
                                                required="required">
                                                <option value=""></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xs-2 col-form-label">Telepon</label>
                                        <div class="col-lg-4">
                                            <input type="text" name="telp" id="telp" placeholder="021-123456"
                                                class="form-control" required>
                                        </div>
                                        <label class="col-xs-2 col-form-label">Provinsi</label>
                                        <div class="col-lg-4">
                                            <select name="Provinsi" id="Provinsi" class="form-control" tabindex="2"
                                                required="required">
                                                <option value=""></option>
                                                <option value=""></option>
                                            </select>
                                        </div>
                                    </div>
                                    <br>
                                    <a href="<?=base_admin() ?>index.php/pelanggan" class="btn btn-warning pull-left">Kembali</a>
                                   <button type="button" class="btn btn-primary pull-right" id="btnumum">Simpan & Lanjut</button>
                                </form>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="kontak">
                                <div class="table-responsive">
                                    <!-- <a class="btn btn-primary" data-toggle="modal" href='#modal-kontak'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Tambah Kontak</a><hr> -->
                                    <table class=" table dynatable">
                                        <thead>
                                            <tr>
                                                <th>Nama Lengkap</th>
                                                <th>Posisi</th>
                                                <th>Nomor Hp</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody id="p_scents">
                                            <tr>
                                                <td>
                                                    <input type="text" name="nmlengkap" id="nm_lengkap"
                                                        placeholder="Nama Lengkap" class="form-control col-xs-3"
                                                        required="">
                                                </td>

                                                <td>
                                                    <input type="text" name="posisi" id="posisi"
                                                        placeholder="Kepala Gudang" class="form-control" required="">
                                                </td>

                                                <td>
                                                    <input type="text" name="nosel" id="no_hp" placeholder="0812123456"
                                                        class="form-control" required="">
                                                </td>

                                                <td>
                                                    <button type="button" name="aksi" id="aksi"
                                                        class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                                                </td>

                                            </tr>
                                        </tbody>
                                    </table>
                                    <br>
                                    <div align="left">
                                        <a class="btn btn-xs btn-primary" href="#" id="addScnt" role="button">+ Tambah
                                            Kontak</a>
                                    </div>

                                    <br>
                                    <button type="button" class="btn btn-warning pull-left" id="btnumumback">Kembali</button>
                                        <button type="button" class="btn btn-primary pull-right" id="btnkontak">Simpan &
                                            Lanjut</button>
                                  

                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="legal">
                                <form>
                                    <br>
                                    <div class="form-group row">
                                        <label class="col-xs-2 col-form-label">Nomor NPWP</label>
                                        <div class="col-lg-4">
                                            <input type="number" name="npwp" id="npwp" class="form-control"
                                                placeholder="00000000000">
                                        </div>
                                        <label class="col-xs-2 col-form-label">Nama Bank</label>
                                        <div class="col-lg-4">
                                            <select name="nm_bank" id="nm_bank" class="form-control" tabindex=""
                                                required="required">
                                                <option value=""></option>
                                                <option value=""></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xs-2 col-form-label">Alamat Penagihan</label>
                                        <div class="col-lg-4">
                                            <textarea name="almt_penagihan" id="almt_penagihan" class="form-control" rows="3"
                                                placeholder="Input Alamat" required="required"></textarea>
                                        </div>
                                        <label class="col-xs-2 col-form-label">Nomor rek</label>
                                        <div class="col-lg-4">
                                            <input type="number" name="norek" id="norek" class="form-control"
                                                placeholder="123456" required="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xs-2 col-form-label">&nbsp;</label>
                                        <div class="col-lg-4">
                                            <!-- <textarea name="" id="" class="form-control" rows="3" required="required"></textarea> -->
                                        </div>
                                        <label class="col-xs-2 col-form-label">Cabang</label>
                                        <div class="col-lg-4">
                                            <input type="text" name="cb_bank" id="cb_bank" class="form-control"
                                                placeholder="Input Cabang Bank" required="">
                                        </div>
                                    </div>
                                    <br>
                                    <button type="button" class="btn btn-warning pull-left" id="btnlegalback">Kembali</button>
                                    <button type="button" class="btn btn-primary pull-right" id="btnlegal">Simpan &
                                            Lanjut</button>
                                </form>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="tarif">
                                <div class="table-responsive">
                                    <a class="btn btn-primary" href='<?=base_index();?>penawaran'><span
                                            class="glyphicon glyphicon-plus" aria-hidden="true"></span>Tambah
                                        Penawaran</a>
                                    <hr>
                                    <table id="tbtarif" class="display responsive nowrap umum" width="100%">
                                        <thead>
                                            <tr>

                                                <th>#</th>
                                                <th>Legal</th>
                                                <th>Layanan</th>
                                                <th>No.Quote</th>
                                                <th>kota</th>
                                                <th>Ke</th>
                                                <th>LT</th>
                                                <th>Satuan</th>
                                                <th>Nilai</th>
                                                <th>Pajak</th>
                                                <th>Tgl Exp</th>
                                                <th>Aktif</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>



                                        </tbody>
                                    </table>

                                    <br>
                                    <button type="button" class="btn btn-warning pull-left" id="btnsimpanallback">Kembali</button>
                                    <button type="button" class="btn btn-primary pull-right" id="simpanall">Simpan &
                                            Lanjut</button>


                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>


                    <!-- /.box -->
                </div>
            </div>
        </div>
    </div>
</section><!-- /.content -->
<!-- Main content -->


<script type="text/javascript">
var scntDiv = $('#p_scents');
var i = $('#p_scents tr').size() + 1;

$('#addScnt').click(function() {
    scntDiv.append(
        '<tr><td><input type="text" name="nmlengkap" id="nmlengkap" placeholder="Nama Lengkap" class="form-control col-xs-3" required=""></td><td><input type="text" name="posisi" id="posisi" placeholder="Kepala Gudang" class="form-control" required=""></td><td><input type="text" name="nosel" id="nosel" placeholder="0812123456" class="form-control" required=""></td><td><button type="button" id="aksi" class="btn btn-warning"><i class="fa fa-pencil"></i></button></td><td><button type="button" id="remScnt" class="btn btn-danger"><span class="glyphicon glyphicon-trash aria-hidden="true"></span></button></td></tr>'
    );
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


$(document).ready(function() {

    $('#Provinsi').select2({
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
          url: '<?=base_admin();?>modul/pelanggan/pelanggan_action.php?act=kabupaten',
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
          url: '<?=base_admin();?>modul/pelanggan/pelanggan_action.php?act=list_bank',
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

$('#plegal').select2({
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
          url: '<?=base_admin();?>modul/pelanggan/pelanggan_action.php?act=legal',
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

    //load();

    var table = $("#tbpelanggan").dataTable({
        "processing": true,
        "serverSide": true,
        "ajax": {
            url: "<?php echo base_admin()?>modul/pelanggan/pelanggan_data.php"
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
    $("#nm_lengkap").val("");
    $("#posisi").val("");
    $("#no_hp").val("");
    $("#email").val("");
    $("#npwp").val("");
    $("#almt_penagihan").val("");
    $("#no_penawaran").val("");
    $("#plegal").val("");
    $("#pelanggan").val("");
    $("#layanan").val("");
    $("#tgl_penawaran").val("");
    $("#prd_penawaran").val("");
    $("#kota").val("");
    $("#tujuan").val("");
    $("#satuan").val("");
    $("#jns_truk").val("");
    $("#nilai").val("");
    $("#sts_pajak").val("")
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
            url: '<?php echo base_admin()?>modul/pelanggan/pelanggan_data.php',
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


$("#kontak,#finansial,#penawaran,#info").click(function(event) {
    $("#dinamis").text($(this).text());
});

$("#cekAll").change(function() {
    $(".info,.kontak,.finansial,.penawaran").prop('checked', $(this).prop("checked"));
});

$("#btnumum").click(function(event) {
    $('.nav-tabs a[href="#kontak"]').tab('show');
});
$("#btnumumback").click(function(event) {
    $('.nav-tabs a[href="#umum"]').tab('show');
});

$("#btnkontak").click(function(event) {
    $('.nav-tabs a[href="#legal"]').tab('show');
});

$("#btnlegalback").click(function(event) {
    $('.nav-tabs a[href="#kontak"]').tab('show');
});

$("#btnlegal").click(function(event) {
    $('.nav-tabs a[href="#tarif"]').tab('show');
});

$("#btntarif").click(function(event) {
    $('.nav-tabs a[href="#tarif"]').tab('show');
});

$("#btnsimpanallback").click(function(event) {
     $('.nav-tabs a[href="#legal"]').tab('show');
});

$("#simpanall").click(function(event) {
    var id = $("#id").val();
        if (id == '') {
            $.ajax({
                url: '<?php echo base_admin()?>modul/pelanggan/pelanggan_action.php?act=in',
                type: 'POST',
                data: {
                    id: $("#id").val(),
                    nm_perusahaan: $("#nm_perusahaan").val(),
                    almt_kantor: $("#almt_kantor").val(),
                    telp: $("#telp").val(),
                    status: $("#status").val(),
                    web: $("#web").val(),
                    nm_lengkap: $("#nm_lengkap").val(),
                    nm_bank: $("#nm_bank").val(),
                    cb_bank: $("#cb_bank").val(),
                    posisi: $("#posisi").val(),
                    no_hp: $("#no_hp").val(),
                    email: $("#email").val(),
                    npwp: $("#npwp").val(),
                    almt_penagihan: $("#almt_penagihan").val(),
                    no_penawaran: $("#no_penawaran").val(),
                    legal: $("#plegal").val(),
                    pelanggan: $("#pelanggan").val(),
                    layanan: $("#layanan").val(),
                    tgl_penawaran: $("#tgl_penawaran").val(),
                    prd_penawaran: $("#prd_penawaran").val(),
                    kota: $("#kota").val(),
                    provinsi: $("#provinsi").val(),
                    kecamatan: $("#kecamatan").val(),
                    tujuan: $("#tujuan").val(),
                    satuan: $("#satuan").val(),
                    jns_truk: $("#jns_truk").val(),
                    nilai: $("#nilai").val(),
                    norek: $("#norek").val(),
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
                url: '<?php echo base_admin()?>modul/pelanggan/pelanggan_action.php?act=up',
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
                    legal: $("#plegal").val(),
                    pelanggan: $("#pelanggan").val(),
                    layanan: $("#layanan").val(),
                    tgl_penawaran: $("#tgl_penawaran").val(),
                    prd_penawaran: $("#prd_penawaran").val(),
                    kota: $("#kota").val(),
                    tujuan: $("#tujuan").val(),
                    satuan: $("#satuan").val(),
                    jns_truk: $("#jns_truk").val(),
                    nilai: $("#nilai").val(),
                    sts_pajak: $("#sts_pajak").val()
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
    $('.nav-tabs a[href="#tarif"]').tab('show');
});/*simpanall*/
</script>