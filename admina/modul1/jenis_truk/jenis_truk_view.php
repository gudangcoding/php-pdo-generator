<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Pengaturan Truk
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?=base_index();?>"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="<?=base_index();?>akun">Truk</a></li>
    <li class="active">Truk List</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">List Truk</h3>
        </div><!-- /.box-header -->
        <div class="box-body table-responsive">

          <button type="button" class="btn btn-primary" onclick="tambah()"><i class="fa fa-plus"></i> Tambah Truk</button><hr>
          <table id="tbtruk" class="table table-bordered table-striped">
            <thead>
              <tr class="success">
                <th>No</th>
                <th>Kode Jenis Truk</th>
                <th>Nama Jenis Truk</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>

            </tbody>
          </table>
        </div><!-- table responsive -->
      </div><!-- /.box-body -->
    </div><!-- /.box -->
  </div>
</section>
<script type="text/javascript">
  $(document).ready(function () {

    //load();

    var table = $("#tbtruk").dataTable({
      "processing": true,
      "serverSide": true,
      "ajax": {
        url: "<?php echo base_admin()?>modul/jenis_truk/jenis_truk_data.php"
      }

    });




    $("#simpan").click(function (event) {
      var id = $("#id").val();
      if (id == '') {
        $.ajax({
          url: '<?php echo base_admin()?>modul/jenis_truk/jenis_truk_action.php?act=in',
          type: 'POST',
          data: {
            id: $("#id").val(),
            Kode_Jenis_Truk: $("#Kode_Jenis_Truk").val(),
            Nama_Jenis_Truk: $("#Nama_Jenis_Truk").val(),

          },
          success: function (msg) {
            if (msg == "sukses") {
              var table = $('#tbtruk').DataTable();
              table.ajax.reload(null, false);
              kosong();
              $('#modal-truk').modal('hide');

              Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Berhasil Tersimpan',
                showConfirmButton: false,
                timer: 1500
              });
            }

          },
          error: function (errornya) {
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
          url: '<?php echo base_admin()?>modul/jenis_truk/jenis_truk_action.php?act=in',
          type: 'POST',
          data: {
            id: $("#id").val(),
            Kode_Jenis_Truk: $("#Kode_Jenis_Truk").val(),
            Nama_Jenis_Truk: $("#Nama_Jenis_Truk").val(),
          },
          success: function (msg) {
            if (msg == "sukses") {
              var table = $('#tbtruk').DataTable();
              table.ajax.reload(null, false);
              kosong();
              $('#modal-truk').modal('hide');
              Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Berhasil Disimpan',
                showConfirmButton: true,
                // timer: 1500
              });
            }
          },
          error: function (errornya) {
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
    $("#Kode_Jenis_Truk").val("");
    $("#Nama_Jenis_Truk").val("");
  }

  function edit(id) {
    $("#modal-truk").modal('show');
    $(".modal-title").text('form edit' + id);
    $.ajax({
      url: '<?php echo base_admin()?>modul/jenis_truk/jenis_truk_action.php?act=edit',
      type: 'POST',
      dataType: 'json',
      data: {
        id: id
      },
      success: function (data) {


        $("#id").val(data.id);
        $("#Kode_Jenis_Truk").val(data.Kode_Jenis_Truk);
        $("#Nama_Jenis_Truk").val(data.Nama_Jenis_Truk);

        if (data.status == 'Aktif') {
          $("#status1").attr('checked', 'checked');
        } else {
          $("#status2").attr('checked', 'checked');
        }
      },
      error: function (err) {
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
          url: '<?php echo base_admin()?>modul/jenis_truk/jenis_truk_action.php?act=hapus',
          type: 'POST',
          data: {
            id: id
          },
          success: function (msg) {
            if (msg == 'sukses') {
              var table = $('#tbtruk').DataTable();
              table.ajax.reload(null, false);
              Swal.fire('Data Berhasil Dihapus', '', 'success');
            }

          },
          error: function () {
            Swal.fire('Data Gagal Dihapus!', '', 'danger');
          }
        });

      } else if (result.isDenied) {
        Swal.fire('Data Tidak jadi Dihapus', '', 'jenis-truk')
      }
    });


  }

  function detail(id) {
    alert(id);
  }


  function load() {
    var table = $("#tbtruk").dataTable({
      "processing": true,
      "serverSide": true,
      //disable order dan searching pada tombol aksi
      "columnDefs": [{
        "targets": [0],
        "orderable": false,
        "searchable": false

      }],
      "ajax": {
        url: "<?php echo base_admin()?>modul/jenis_truk/jenis_truk_data.php",
        type: 'post',

        error: function (xhr, error, thrown) {
          console.log(xhr);

        }
      },


    });
  }

  function tambah() {
    $("#modal-truk").modal('show');
    kosong();
    $(".modal-title").text('form Tambah');
  }
</script>

<div class="modal fade" id="modal-truk">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Modal title</h4>
      </div>
      <div class="modal-body">
        <input type="hidden" name="id" id="id">
        <div class="form-group col-xs-6">
          <label for="Kode Jenis">Kode Jenis Truk</label>
          <input type="text" name="Kode_Jenis_Truk" id="Kode_Jenis_Truk" placeholder="Masukkan Kode Jenis Truk" class="form-control"
            required>
        </div><!-- /.form-group -->

        <div class="form-group col-xs-6">
          <label for="Nama Jenis Truk">Nama Jenis Truk</label>
          <input type="text" name="Nama_Jenis_Truk" id="Nama_Jenis_Truk" placeholder="Masukkan Nama Jenis Truk" class="form-control"
            required>
        </div><!-- /.form-group -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-primary" id="simpan">Simpan</button>
      </div>
    </div>
  </div>
</div>