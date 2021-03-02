

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Pengaturan Satuan
    </h1>
        <ol class="breadcrumb">
        <li><a href="<?=base_index();?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?=base_index();?>akun">Akun</a></li>
        <li class="active">Satuan List</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-body table-responsive">

              <button class="btn btn-primary" onclick="tambah()">Tambah</button><hr>
            <table id="satuan" class="table table-bordered table-striped ">
            <thead>
              <tr class="success">
                <th>No</th>
                <th>Nama Satuan</th>
                <th>Keterangan</th>
                <th>Aksi</th>

              </tr>
            </thead>
            <tbody>
              
            </tbody>
          </table>
      </div>
            </div>              
                      </div><!-- /.box-body -->
                  </div><!-- /.box -->
              </div>
</section>

<script type="text/javascript">
    $(document).ready(function() {

        var table = $("#satuan").dataTable({
            "processing": true,
            "serverSide": true,
            "ajax": {
                url: "<?php echo base_admin()?>modul/satuan/satuan_data.php"
            }

        });




        $("#simpan").click(function(event) {
            var id = $("#id").val();
            if (id == '') {
                $.ajax({
                    url: '<?php echo base_admin()?>modul/satuan/satuan_action.php?act=in',
                    type: 'POST',
                    data: {
                        id: $("#id").val(),
                        Nama_Satuan: $("#Nama_Satuan").val(),
                        Keterangan: $("#Keterangan").val(),
                        
                    },
                    success: function(msg) {
                        if (msg == "sukses") {
                            //table.ajax.reload( ); 
                            //load();
                            var table = $('#satuan').DataTable();
                            table.ajax.reload(null, false);
                            kosong();
                            $('#modal-satuan').modal('hide');

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
                    url: '<?php echo base_admin()?>modul/satuan/satuan_action.php?act=in',
                    type: 'POST',
                    data: {
                        id: $("#id").val(),
                        Nama_Satuan: $("#Nama_Satuan").val(),
                        Keterangan: $("#Keterangan").val(),
                    },
                    success: function(msg) {
                        if (msg == "sukses") {
                            //table.ajax.reload(); 
                            //load();
                            var table = $('#satuan').DataTable();
                            table.ajax.reload(null, false);
                            kosong();
                            $('#modal-satuan').modal('hide');
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
        $("#Nama_Satuan").val("");
        $("#Keterangan").val("");
    }

    function edit(id) {
        $("#modal-satuan").modal('show');
        $(".modal-title").text('form edit' + id);
        $.ajax({
            url: '<?php echo base_admin()?>modul/satuan/satuan_action.php?act=edit',
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
                $("#Nama_Satuan").val(data.Nama_Satuan);
                $("#Keterangan").val(data.Keterangan);

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
                    url: '<?php echo base_admin()?>modul/satuan/satuan_action.php?act=hapus',
                    type: 'POST',
                    data: {
                        id: id
                    },
                    success: function(msg) {
                       if (msg=='sukses') {
                        var table = $('#satuan').DataTable();
                        table.ajax.reload(null, false);
                        Swal.fire('Data Berhasil Dihapus', '', 'success');
                       }
                        
                    },
                    error: function() {
                        Swal.fire('Data Gagal Dihapus!', '', 'danger');
                    }
                });

            } else if (result.isDenied) {
                Swal.fire('Data Tidak jadi Dihapus', '', 'satuan')
            }
        });


    }

    function detail(id) {
        alert(id);
    }


    function load() {
        var table = $("#satuan").dataTable({
            "processing": true,
            "serverSide": true,
            //disable order dan searching pada tombol aksi
            "columnDefs": [{
                "targets": [0],
                "orderable": false,
                "searchable": false

            }],
            "ajax": {
                url: "<?php echo base_admin()?>modul/satuan/satuan_data.php",
                type: 'post',

                error: function(xhr, error, thrown) {
                    console.log(xhr);

                }
            },


        });
    }

    function tambah() {
        $("#modal-satuan").modal('show');
        kosong();
        $(".modal-title").text('form Tambah');
    }
    </script>


    <div class="modal fade" id="modal-satuan">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Modal title</h4>
          </div>
          <div class="modal-body">
            <input type="hidden" name="id" id="id">
<div class="form-group">
              <label for="Nama Satuan">Nama Satuan</label>
                <input type="text" name="Nama_Satuan" id="Nama_Satuan" placeholder="Nama Satuan" class="form-control" required> 
            </div><!-- /.form-group -->
<div class="form-group">
              <label for="Keterangan">Keterangan</label>
                <input type="text" name="Keterangan" id="Keterangan" placeholder="Tulis Keterangan" class="form-control" required> 
            </div><!-- /.form-group -->   
            
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" id="simpan" >Save changes</button>
          </div>
        </div>
      </div>
    </div>