

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Pengaturan Legal
    </h1>
        <ol class="breadcrumb">
        <li><a href="<?=base_index();?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?=base_index();?>akun">Akun</a></li>
        <li class="active">Legal List</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-body table-responsive">
               <button class="btn btn-primary" onclick="tambah()"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Tambah</button><hr>
            <table id="tblegal" class="table table-bordered table-striped">
            <thead>
              <tr class="success">
                <th>No</th>
                <th>Nama Legal</th>
                <th>Inisial</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              
            </tbody>
          </table>
            </div>              
                      </div><!-- /.box-body -->
                  </div><!-- /.box -->
              </div>
         </section>

<script type="text/javascript">
    $(document).ready(function() {

        //load();

        var table = $("#tblegal").dataTable({
            "processing": true,
            "serverSide": true,
            "ajax": {
                url: "<?php echo base_admin()?>modul/legal/legal_data.php"
            }

        });




        $("#simpan").click(function(event) {
            var id = $("#id").val();
            if (id == '') {
                $.ajax({
                    url: '<?php echo base_admin()?>modul/legal/legal_action.php?act=in',
                    type: 'POST',
                    data: {
                        id: $("#id").val(),
                        Nama_Legal: $("#Nama_Legal").val(),
                        Inisial: $("#Inisial").val(),
                        
                    },
                    success: function(msg) {
                        if (msg == "sukses") {
                            //table.ajax.reload( ); 
                            //load();
                            var table = $('#tblegal').DataTable();
                            table.ajax.reload(null, false);
                            kosong();
                            $('#modal-legal').modal('hide');

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
                    url: '<?php echo base_admin()?>modul/legal/legal_action.php?act=in',
                    type: 'POST',
                    data: {
                        id: $("#id").val(),
                        Nama_Legal: $("#Nama_Legal").val(),
                        Inisial: $("#Inisial").val(),
                    },
                    success: function(msg) {
                        if (msg == "sukses") {
                            //table.ajax.reload(); 
                            //load();
                            var table = $('#tblegal').DataTable();
                            table.ajax.reload(null, false);
                            kosong();
                            $('#modal-legal').modal('hide');
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
        $("#Nama_Legal").val("");
        $("#Inisial").val("");
    }

    function edit(id) {
        $("#modal-legal").modal('show');
        $(".modal-title").text('form edit' + id);
        $.ajax({
            url: '<?php echo base_admin()?>modul/legal/legal_action.php?act=edit',
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
                $("#Nama_Legal").val(data.Nama_Legal);
                $("#Inisial").val(data.Inisial);

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
                    url: '<?php echo base_admin()?>modul/legal/legal_action.php?act=hapus',
                    type: 'POST',
                    data: {
                        id: id
                    },
                    success: function(msg) {
                       if (msg=='sukses') {
                        var table = $('#tblegal').DataTable();
                        table.ajax.reload(null, false);
                        Swal.fire('Data Berhasil Dihapus', '', 'success');
                       }
                        
                    },
                    error: function() {
                        Swal.fire('Data Gagal Dihapus!', '', 'danger');
                    }
                });

            } else if (result.isDenied) {
                Swal.fire('Data Tidak jadi Dihapus', '', 'legal')
            }
        });


    }

    function detail(id) {
        alert(id);
    }


    function load() {
        var table = $("#tblegal").dataTable({
            "processing": true,
            "serverSide": true,
            //disable order dan searching pada tombol aksi
            "columnDefs": [{
                "targets": [0],
                "orderable": false,
                "searchable": false

            }],
            "ajax": {
                url: "<?php echo base_admin()?>modul/legal/legal_data.php",
                type: 'post',

                error: function(xhr, error, thrown) {
                    console.log(xhr);

                }
            },


        });
    }

    function tambah() {
        $("#modal-legal").modal('show');
        kosong();
        $(".modal-title").text('form Tambah');
    }
    </script>


    <div class="modal fade" id="modal-legal">
    	<div class="modal-dialog">
    		<div class="modal-content">
    			<div class="modal-header">
    				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    				<h4 class="modal-title">Pengisian Form Legal</h4>
    			</div>
    			<div class="modal-body">
    			<input type="hidden" name="id" id="id">
    				<div class="form-group col-xs-6">
              <label for="Nama Legal" class="control-label ">Nama Legal</label>
                <input type="text" name="Nama_Legal" id="Nama_Legal" placeholder="Nama Legal" class="form-control" required> 
              </div>
<div class="form-group col-xs-6">
              <label for="Inisial" class="control-label">Inisial</label>
                <input type="text" name="Inisial" id="Inisial" placeholder="Inisial" class="form-control" required>
            </div>
    			</div>
    			<div class="modal-footer">
    				<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
    				<button type="button" class="btn btn-primary" id="simpan" >Simpan</button>
    			</div>
    		</div>
    	</div>
    </div>