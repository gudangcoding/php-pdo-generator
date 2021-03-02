<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Pengaturan Status
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?=base_index();?>"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="<?=base_index();?>akun">Akun</a></li>
    <li class="active">Status List</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-body table-responsive">
          <button class="btn btn-primary" onclick="tambah()"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Tambah</button><hr>
            <table id="tbstatus" class="table table-bordered table-striped table-responsive">
              <thead>
                <tr class="success">
                  <th>No</th>
                  <th>Modul</th>
                  <th>Nama Status</th>
                  <th>Deskripsi</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                
              </tbody>
            </table>
          </div>
        </div>
      </div><!-- /.box-body -->
    </div>
  </section><!-- /.box -->

  <script type="text/javascript">
    $(document).ready(function() {

        //load();

        var table = $("#tbstatus").dataTable({
            "processing": true,
            "serverSide": true,
            "ajax": {
                url: "<?php echo base_admin()?>modul/status/status_data.php"
            }

        });




        $("#simpan").click(function(event) {
            var id = $("#id").val();
            if (id == '') {
                $.ajax({
                    url: '<?php echo base_admin()?>modul/status/status_action.php?act=in',
                    type: 'POST',
                    data: {
                        id: $("#id").val(),
                        Modul: $("#Modul").val(),
                        Nama_Status: $("#Nama_Status").val(),
                        Deskripsi: $("#Deskripsi").val(),
                        
                    },
                    success: function(msg) {
                        if (msg == "sukses") {
                            //table.ajax.reload( ); 
                            //load();
                            var table = $('#tbstatus').DataTable();
                            table.ajax.reload(null, false);
                            kosong();
                            $('#modal-status').modal('hide');

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
                    url: '<?php echo base_admin()?>modul/status/status_action.php?act=in',
                    type: 'POST',
                    data: {
                        id: $("#id").val(),
                        Modul: $("#Modul").val(),
                        Nama_Status: $("#Nama_Status").val(),
                        Deskripsi: $("#Deskripsi").val(),
                    },
                    success: function(msg) {
                        if (msg == "sukses") {
                            //table.ajax.reload(); 
                            //load();
                            var table = $('#tbstatus').DataTable();
                            table.ajax.reload(null, false);
                            kosong();
                            $('#modal-status').modal('hide');
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
        $("#Modul").val("");
        $("#Nama_status").val("");
        $("#Deskripsi").val("");
    }

    function edit(id) {
        $("#modal-status").modal('show');
        $(".modal-title").text('form edit' + id);
        $.ajax({
            url: '<?php echo base_admin()?>modul/status/status_action.php?act=edit',
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
                $("#Modul").val(data.Modul);
                $("#Nama_Status").val(data.Nama_status);
                $("#Deskripsi").val(data.Deskripsi);

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
                    url: '<?php echo base_admin()?>modul/status/status_action.php?act=hapus',
                    type: 'POST',
                    data: {
                        id: id
                    },
                    success: function(msg) {
                       if (msg=='sukses') {
                        var table = $('#tbstatus').DataTable();
                        table.ajax.reload(null, false);
                        Swal.fire('Data Berhasil Dihapus', '', 'success');
                       }
                        
                    },
                    error: function() {
                        Swal.fire('Data Gagal Dihapus!', '', 'danger');
                    }
                });

            } else if (result.isDenied) {
                Swal.fire('Data Tidak jadi Dihapus', '', 'status')
            }
        });


    }

    function detail(id) {
        alert(id);
    }


    function load() {
        var table = $("#tbstatus").dataTable({
            "processing": true,
            "serverSide": true,
            //disable order dan searching pada tombol aksi
            "columnDefs": [{
                "targets": [0],
                "orderable": false,
                "searchable": false

            }],
            "ajax": {
                url: "<?php echo base_admin()?>modul/status/status_data.php",
                type: 'post',

                error: function(xhr, error, thrown) {
                    console.log(xhr);

                }
            },


        });
    }

    function tambah() {
        $("#modal-status").modal('show');
        kosong();
        $(".modal-title").text('form Tambah');
    }

     $('#Modul').select2({
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
          url: '<?=base_admin();?>modul/status/status_action.php?act=modul',
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
    </script>

    <div class="modal fade" id="modal-status">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Modal title</h4>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="form-group col-xs-6">
                <input type="hidden" name="id" id="id">
                <label for="Modul" class="control-label">Modul</label>
                  <select name="Modul" id="Modul" class="form-control" required="required"></select>
              </div><!-- /.form-group -->
              <div class="form-group col-xs-6">
                <label for="Nama Status" class="control-label">Nama Status</label>
                  <input type="text" name="Nama_Status" id="Nama_Status" placeholder="Nama Status" class="form-control" required>
              </div>
            </div>
            <div class="row">
              <div class="form-group col-xs-6">
                <label for="Deskripsi" class="control-label">Deskripsi</label>
                  <textarea name="Deskripsi" id="Deskripsi" class="form-control" rows="3"
                    required="required"></textarea>
              </div>
          </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
            <button type="button" class="btn btn-primary" id="simpan">Simpan</button>
          </div>
        
      </div>
    </div>
</div>
