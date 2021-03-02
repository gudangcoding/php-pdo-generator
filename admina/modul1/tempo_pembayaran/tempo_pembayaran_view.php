<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Pengaturan Tempo Pembayaran
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?=base_index();?>"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="<?=base_index();?>akun">Akun</a></li>
    <li class="active">Tempo Pembayaran List</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">List Pembayaran</h3>
        </div>
          <table id="tbtempo" class="table table-bordered table-striped">
            <button type="button" class="btn btn-primary" onclick="tambah()"><i class="fa fa-plus"></i> Tambah</button><hr>
              <thead>
                <tr class="success">
                  <th>No</th>
                  <th>Tempo Pembayaran</th>
                  <th>Jumlah Hari</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                
              </tbody>
            </table>
          
        </div>
      </div><!-- /.box-body -->
    </div><!-- /.box -->
  </section>
  <script type="text/javascript">
  $(document).ready(function () {
    var table = $("#tbtempo").dataTable({
      "processing": true,
      "serverSide": true,
      "ajax": {
        url: "<?php echo base_admin()?>modul/tempo_pembayaran/tempo_pembayaran_data.php"
      }

    });

 $("#simpan").click(function (event) {
      var id = $("#id").val();
      if (id == '') {
        $.ajax({
          url: '<?php echo base_admin()?>modul/tempo_pembayaran/tempo_pembayaran_action.php?act=in',
          type: 'POST',
          data: {
            id: $("#id").val(),
            Tempo_Pembayaran: $("#tempo").val(),
            Jumlah_Hari: $("#hari").val(),

          },
          success: function (msg) {
            if (msg == "sukses") {
              var table = $('#tbtempo').DataTable();
              table.ajax.reload(null, false);
              kosong();
              $('#modal-tbtempo').modal('hide');

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
          url: '<?php echo base_admin()?>modul/tempo_pembayaran/tempo_pembayaran_action.php?act=in',
          type: 'POST',
          data: {
            id: $("#id").val(),
            Tempo_Pembayaran: $("#tempo").val(),
            Jumlah_Hari: $("#hari").val(),
          },
          success: function (msg) {
            if (msg == "sukses") {
              var table = $('#tbtempo').DataTable();
              table.ajax.reload(null, false);
              kosong();
              $('#modal-tbtempo').modal('hide');
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
    $("#tempo").val("");
    $("#hari").val("");
  }

  function edit(id) {
    $("#modal-tbtempo").modal('show');
    $(".modal-title").text('form edit' + id);
    $.ajax({
      url: '<?php echo base_admin()?>modul/tempo_pembayaran/tempo_pembayaran_action.php?act=edit',
      type: 'POST',
      dataType: 'json',
      data: {
        id: id
      },
      success: function (data) {


        $("#id").val(data.id);
        $("#tempo").val(data.Tempo_Pembayaran);
        $("#hari").val(data.Jumlah_Hari);

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
          url: '<?php echo base_admin()?>modul/tempo_pembayaran/tempo_pembayaran_action.php?act=hapus',
          type: 'POST',
          data: {
            id: id
          },
          success: function (msg) {
            if (msg == 'sukses') {
              var table = $('#tbtempo').DataTable();
              table.ajax.reload(null, false);
              Swal.fire('Data Berhasil Dihapus', '', 'success');
            }

          },
          error: function () {
            Swal.fire('Data Gagal Dihapus!', '', 'danger');
          }
        });

      } else if (result.isDenied) {
        Swal.fire('Data Tidak jadi Dihapus', '', 'tempo_pembayaran')
      }
    });


  }

  function detail(id) {
    alert(id);
  }


  function load() {
    var table = $("#tbtempo").dataTable({
      "processing": true,
      "serverSide": true,
      //disable order dan searching pada tombol aksi
      "columnDefs": [{
        "targets": [0],
        "orderable": false,
        "searchable": false

      }],
      "ajax": {
        url: "<?php echo base_admin()?>modul/tempo_pembayaran/tempo_pembayaran_data.php",
        type: 'post',

        error: function (xhr, error, thrown) {
          console.log(xhr);

        }
      },


    });
  }

  function tambah() {
    $("#modal-tbtempo").modal('show');
    kosong();
    $(".modal-title").text('form Tambah');
  }
</script>

  <div class="modal fade" id="modal-tbtempo">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Form Pembayaran</h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <input type="hidden" name="id" id="id">
                <label for="Tempo Pembayaran" class="control-label ">Tempo Pembayaran</label>
                  <input type="text" name="Jumlah_Hari" id="tempo" placeholder="Tempo Pembayaran"
                    class="form-control" required>
                </div><!-- /.form-group -->
              <div class="form-group">
                <label for="Jumlah Hari" class="control-label ">Jumlah Hari</label>
                  <input type="number" name="Jumlah_Hari" id="hari" placeholder="Jumlah Hari" class="form-control" required>
                </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
          <button type="button" class="btn btn-primary" id="simpan">Simpan</button>
        </div>
      </div>
    </div>
  </div>