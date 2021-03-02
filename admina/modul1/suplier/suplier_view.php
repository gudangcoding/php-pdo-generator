<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Informasi suplier
    </h1>
        <ol class="breadcrumb">
        <li><a href="<?=base_index();?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?=base_index();?>suplier">suplier</a></li>
        <li class="active" id="dinamis">Informasi Umum</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <!-- <div class="box-header">
                <h3 class="box-title"></h3>
                </div> --><!-- /.box-header -->
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
<li><a href="#4a" data-toggle="tab" id="armada">Informasi Armada</a>
</li>
<li><a href="#5a" data-toggle="tab" id="tarif">Informasi Tarif</a>
</li>
</ul>

<div class="tab-content clearfix" style="margin: 10px">
<div class="tab-pane active" id="1a">
   <a class="btn btn-primary" href='<?=base_index();?>suplier/tambah'><span
    class="glyphicon glyphicon-plus" aria-hidden="true"></span>Tambah</a><hr>
  <table id="tbsuplier" class="table table-responsive table-condensed">
  <thead>
    <tr class="success">
        <th>No</th>
        <th>Nama Perusahaan</th>
        <th>Alamat Kantor</th>
        <th>No Telp</th>
        <th>Status</th>
        <!-- <th>Nama Lengkap</th>
        <th>Posisi</th>
        <th>No Hp</th>
        <th>email</th>
        <th>Nama Penagihan</th>
        <th>Alamat Penagihan</th>
        <th>Nama Bank</th>
        <th>No rek</th>
        <th>No Truk</th>
        <th>Jenis Truk</th>
        <th>STNK</th>
        <th>exp STNK</th>
        <th>Panjang Bak</th>
        <th>Tinggi Bak</th>
        <th>Lebar Bak</th>
        <th>Volume</th>
        <th>Kapasitas</th>
        <th>No Tarif</th>
        <th>tanggal Penawaran</th>
        <th>Periode</th>
        <th>Tempo Bayar</th>
        <th>suplier</th>
        <th>Dari</th>
        <th>Tujuan</th>
        <th>Satuan</th>
        <th>Nilai</th>
        <th>Satuan Pajak</th>
        <th>Satuan Penawaran</th> -->
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
  <a class="btn btn-primary" data-toggle="modal" href='#modal-kontak'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Tambah Informasi Kontak</a><hr>
  <!-- <table id="" class="display responsive nowrap umum" width="100%"> -->
  <table class="table table-responsive table-condensed">
  <thead>
    <tr>
      <!-- <th><input type="checkbox" id="cekAll"></th> -->
      <th>No</th>
        <th>Nama lengkap</th>
        <th>Posisi</th>
        <th>No HP</th>
        <th>Email</th>
    </tr>
  </thead>
  <tbody>
    <tr>
       <!-- <td><input type="checkbox" class="kontak"></td> -->
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
  </tbody>
</table>
<!-- Masukin Konten disini -->
</div>
<div class="tab-pane" id="3a">
  <a class="btn btn-primary" data-toggle="modal" href='#modal-finansial'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Tambah Informasi Finansial</a><hr>
  <!-- <table id="" class="display responsive nowrap umum" width="100%"> -->
  <table class="table table-responsive table-condensed">
  <thead>
    <tr>
      <!-- <th><input type="checkbox" id="cekAll"></th> -->
        <th>No</th>
        <th>Nama Penagihan</th>
        <th>Alamat Penagihan</th>
        <th>Nama Bank</th>
        <th>Nomor Rekening</th>
    </tr>
  </thead>
  <tbody>
    <tr>
       <!-- <td><input type="checkbox" class="finansial"></td> -->
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
  </tbody>
</table>
</div>
<div class="tab-pane" id="4a">
  <a class="btn btn-primary" data-toggle="modal" href='#modal-armada'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Tambah armada</a><hr>
  <!-- <table id="" class="display responsive nowrap umum" width="100%"> -->
  <table class="table table-responsive table-condensed">
  <thead>
    <tr>
      <!-- <th><input type="checkbox" id="cekAll"></th> -->
        <th>No</th>
        <th>Nomor Truk</th>
        <th>Jenis Truk</th>
        <th>STNK</th>
        <th>Tgl Exp STNK</th>
        <th>Panjang Bak</th>
        <th>Lebar Bak</th>
        <th>Tinggi Bak</th>
        <th>Volume Muatan</th>
        <th>Kapasitas Muatan (KG)</th>
    </tr>
  </thead>
  <tbody>
    <tr>
       <!-- <td><input type="checkbox" class="armada"></td> -->
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

<div class="tab-pane" id="5a">
<a class="btn btn-primary" data-toggle="modal" href='#modal-tarif'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Tambah Tarif</a><hr>
<!-- <table class="umum display responsive nowrap table" id="pengguna" width="100%">  -->
            <table class="table table-responsive table-condensed">
            <thead>
              <tr>
                <!-- <th><input type="checkbox" id="cekAll2"></th> -->
                <th>No</th>
                <th>No Tarif</th>
                <th>Tgl Penawaran</th>
                <th>Periode</th>
                <th>Tempo Bayar</th>
                <th>Pelanggan</th>
                <th>Dari</th>
                <th>Ke</th>
                <th>Satuan</th>
                <th>Jenis Truk</th>
                <th>Nilai</th>
                <th>Status Pajak</th>
                <th>Status Penawaran</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <!-- <td><input type="checkbox" class="pengguna"></td> -->
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
</div><!-- /.box-body -->
</div><!-- /.box -->
              </div>
          </div>

</section><!-- /.content -->

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
$("#kontak,#finansial,#armada,#info").click(function(event) {
  $("#dinamis").text($(this).text());
});
$("#cekAll").change(function () {
    $(".info,.kontak,.finansial,.armada").prop('checked', $(this).prop("checked"));
});

$(document).ready(function() {

        //load();

        var table = $("#tbsuplier").dataTable({
            "processing": true,
            "serverSide": true,
            "ajax": {
                url: "<?php echo base_admin()?>modul/suplier/suplier_data.php"
            }

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
            url: '<?php echo base_admin()?>modul/suplier/suplier_edit.php',
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
                    url: '<?php echo base_admin()?>modul/suplier/suplier_action.php?act=hapus',
                    type: 'POST',
                    data: {
                        id: id
                    },
                    success: function() {
                        //table.ajax.reload(); 
                        //load(); 
                        var table = $('#tbsuplier').DataTable();
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
        var table = $("#tbsuplier").dataTable({
            "processing": true,
            "serverSide": true,
            //disable order dan searching pada tombol aksi
            "columnDefs": [{
                "targets": [0],
                "orderable": false,
                "searchable": false

            }],
            "ajax": {
                url: '<?php echo base_admin()?>modul/suplier/suplier_data.php',
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
          <h4 class="modal-title text-center">Form Informasi Umum</h4>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="form-group col-xs-6">
              <input type="hidden" name="id" id="id">
              <label>Nama Perusahaan</label>
              <input type="text" name="" placeholder="Nama Perusahaan" class="form-control" id="" required>
            </div>
            <div class="form-group col-xs-6">
              <label>Email</label>
              <input type="text" name="" placeholder="Alamat Email" class="form-control" id="" required>
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
          <!-- <div class="row">
            <div class="form-group col-xs-6">
              <label for="Nama Perusahaan" class="control-label">Nama Perusahaan</label>
                <input type="text" name="nm_perusahaan" placeholder="Nama Perusahaan" class="form-control" required> 
              </div>
<div class="form-group col-xs-6">
              <label for="Alamat Kantor" class="control-label">No Telp</label>
                <input type="text" name="almt_kantor" placeholder="Alamat Kantor" class="form-control" required> 
              </div>
<div class="form-group col-xs-6">
              <label for="Alamat Email" class="control-label">Alamat kantor</label>
                <input type="text" name="email" placeholder="Alamat Email" class="form-control" required> 
              </div>
<div class="form-group col-xs-6">
              <label for="Nomor Telp" class="control-label">Status</label>
                <input type="text" name="no_telp" placeholder="Nomor Telp" class="form-control" required> 
              </div>
<div class="form-group col-xs-6">
              <label for="Status" class="control-label">Status</label>
                <select name="Status" class="form-control chzn-select" tabindex="2" required="required">
                  <option value=""></option>
                  <option value="aktif">Aktif</option>
                  <option value="nonaktif">Nonaktif</option>
                 </select> 
            </div>
          </div> -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
          <button type="button" class="btn btn-primary">Simpan Dan Lanjut</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="modal-kontak">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title text-center">Form Informasi Kontak</h4>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="form-group col-xs-6">
            <label>Nama Lengkap</label>
            <input type="text" name="" id="" class="form-control" placeholder="Nama Lengkap" required>
            </div>
            <div class="form-group col-xs-6">
              <label>No HP</label>
                  <input type="text" name="" id="" placeholder="Nomor Handphone" class="form-control" required>
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
                <input type="text" name="" id="" placeholder="Alamat Email" class="form-control" required>
              </div>
          </div>
           <!-- <div class="row">
            <div class="form-group col-xs-6">
              <label for="Nama Lengkap" class="control-label">Nama Lengkap</label>
                <input type="text" name="nm_Lengkap" placeholder="Nama Lengkap" class="form-control" required> 
              </div>
<div class="form-group col-xs-6">
              <label for="Alamat Email" class="control-label">Alamat Email</label>
                <input type="text" name="email" placeholder="Alamat Email" class="form-control" required> 
              </div>
<div class="form-group col-xs-6">
              <label for="No HP" class="control-label">No HP</label>
                <input type="text" name="no_hp" placeholder="No HP" class="form-control" required> 
              </div>
<div class="form-group col-xs-6">
              <label for="Posisi" class="control-label">Posisi</label>
                <select name="posisi" class="form-control chzn-select" tabindex="2" required="required">
                  <option value=""></option>
                  <option value="pemilik">Pemilik</option>
                  <option value="operasional">Bagian Operasional</option>
                  <option value="keuangan">Bagian Keuangan</option>
                  <option value="bengkel">Bagian Bengkel</option>
                 </select> 
              </div>
        </div> -->
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
          <button type="button" class="btn btn-primary">Simpan Dan Lanjut</button>
        </div>
      </div>
    </div>
  </div>
</div>

  <div class="modal fade" id="modal-finansial">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title text-center">Form Info Finansial</h4>
        </div>
        <div class="modal-body">
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
<!-- /.form-group -->

        
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
          <button type="button" class="btn btn-primary">Simpan Dan Lanjut</button>
        </div>
      </div>
    </div>
  </div>
  </div>

  <div class="modal fade" id="modal-armada">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title text-center">Form armada</h4>
        </div>
        <div class="modal-body">
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
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
          <button type="button" class="btn btn-primary">Simpan Dan Lanjut</button>
        </div>
      </div>
    </div>
  </div>
  </div>
  
  <div class="modal fade" id="modal-tarif">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Form Tarif</h4>
        </div>
        <div class="modal-body">
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
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>