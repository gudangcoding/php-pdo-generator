<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Pengaturan Armada
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?=base_index();?>"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="<?=base_index();?>akun">Akun</a></li>
    <li class="active">Armada List</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">List Armada</h3>
        </div><!-- /.box-header -->
        <div class="box-body">
                <button type="button" class="btn btn-primary" onclick="tambah()"><i class="fa fa-plus"></i> Tambah</button> <hr>
                <table id="tbarmada" class="display responsive nowrap" width="100%">
                  <thead>
                    <tr class="success">
                      <th>No</th>
                      <th>NOPOL</th>
                      <th>Jenis Truk</th>
                      <th>Tahun</th>
                      <th>Warna</th>
                      <th>No STNK</th>
                      <th>Tgl Exp STNK</th>
                      <th>No BPKB</th>
                      <th>Tgl Exp BPKB</th>
                      <th>Panjang</th>
                      <th>Lebar</th>
                      <th>Tinggi</th>
                      <th>Kapasitas Kubik</th>
                      <th>Kapasitas KG</th>
                      <th>Status</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                   
                  </tbody>
                </table>
          </div>
        </div>
         </div>
       </div>
     </div>
   </section>
<script>
 $(document).ready(function() {

        var table = $("#tbarmada").dataTable({
            "processing": true,
            "serverSide": true,
            "ajax": {
                url: "<?php echo base_admin()?>modul/armada/armada_data.php"
            }

        });




        $("#simpan").click(function(event) {
            var id = $("#id").val();
            if (id == '') {
                $.ajax({
                    url: '<?php echo base_admin()?>modul/armada/armada_action.php?act=in',
                    type: 'POST',
                    data: {
                        id: $("#id").val(),
                        NOPOL: $("#NOPOL").val(),
                        Jenis_Truk: $("#Jenis_Truk").val(),
                        Tahun: $("#Tahun").val(),
                        Warna: $("#Warna").val(),
                        No_STNK: $("#No_STNK").val(),
                        Tgl_Exp_STNK: $("#Tgl_Exp_STNK").val(),
                        No_BPKB: $("#No_BPKB").val(),
                        Tgl_Exp_BPKB: $("#Tgl_Exp_BPKB").val(),
                        Panjang: $("#Panjang").val(),
                        Lebar: $("#Lebar").val(),
                        Tinggi: $("#Tinggi").val(),
                        Kapasitas_Kubik: $("#Kapasitas_Kubik").val(),
                        Kapasitas_KG: $("#Kapasitas_KG").val(),
                        Status: $('input[name=status]:checked').val(),

                        
                    },
                    success: function(msg) {
                        if (msg == "sukses") {
                            var table = $('#tbarmada').DataTable();
                            table.ajax.reload(null, false);
                            kosong();
                            $('#modal-armada').modal('hide');

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
                // var statusx;
                // if ($('#status').is(':checked')) {
                //     statusx = $('#status').val();
                // } else {
                //     statusx = $('#status').val();
                // }

                $.ajax({
                    url: '<?php echo base_admin()?>modul/armada/armada_action.php?act=in',
                    type: 'POST',
                    data: {
                        id: $("#id").val(),
                        NOPOL: $("#NOPOL").val(),
                        Jenis_Truk: $("#Jenis_Truk").val(),
                        Tahun: $("#Tahun").val(),
                        Warna: $("#Warna").val(),
                        No_STNK: $("#No_STNK").val(),
                        Tgl_Exp_STNK: $("#Tgl_Exp_STNK").val(),
                        No_BPKB: $("#No_BPKB").val(),
                        Tgl_Exp_BPKB: $("#Tgl_Exp_BPKB").val(),
                        Panjang: $("#Panjang").val(),
                        Lebar: $("#Lebar").val(),
                        Tinggi: $("#Tinggi").val(),
                        Kapasitas_Kubik: $("#Kapasitas_Kubik").val(),
                        Kapasitas_KG: $("#Kapasitas_KG").val(),
                        Status: $("input[name=status]:checked").val(),



                    },
                    success: function(msg) {
                        if (msg == "sukses") {
                            var table = $('#tbarmada').DataTable();
                            table.ajax.reload(null, false);
                            kosong();
                            $('#modal-armada').modal('hide');
                            Swal.fire({
                                position: 'top-end',
                                icon: 'success',
                                title: 'Berhasil Disimpan',
                                showConfirmButton: true,
                                // timer: 1500
                            });
                        }
                    },
                    error: function(errornya) {
                        console.log(errornya);
                    }
                });
            }


        });


    });

    function kosong() {
        $("#id").val("");
        $("#Nama_armada").val("");
        $("#Keterangan").val("");
        $("#Tahun").val("");
        $("#Warna").val("");
        $("#No_STNK").val("");
        $("#Tgl_Exp_STNK").val("");
        $("#No_BPKB").val("");
        $("#Jenis_Truk").val("");
        $("#NOPOL").val("");
        $("#Tgl_Exp_BPKB").val("");
        $("#Panjang").val("");
        $("#Lebar").val("");
        $("#Tinggi").val("");
        $("#Kapasitas_Kubik").val("");
        $("#Kapasitas_KG").val("");
        $("#status").val("");
    }

    function edit(id) {
        $("#modal-armada").modal('show');
        $(".modal-title").text('form edit' + id);
        $.ajax({
            url: '<?php echo base_admin()?>modul/armada/armada_action.php?act=edit',
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
                    $("#NOPOL").val(data.NOPOL);
                    $("#Jenis_Truk").val(data.Jenis_Truk);
                    $("#Tahun").val(data.Tahun);
                    $("#Warna").val(data.Warna);
                    $("#No_STNK").val(data.No_STNK);
                    $("#Tgl_Exp_STNK").val(data.Tgl_Exp_STNK);
                    $("#No_BPKB").val(data.No_BPKB);
                    $("#Tgl_Exp_BPKB").val(data.Tgl_Exp_BPKB);
                    $("#Panjang").val(data.Panjang);
                    $("#Lebar").val(data.Lebar);
                    $("#Tinggi").val(data.Tinggi);
                    $("#Kapasitas_Kubik").val(data.Kapasitas_Kubik);
                    $("#Kapasitas_KG").val(data.Kapasitas_KG);
                    $("#status").val(data.Status);

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
                    url: '<?php echo base_admin()?>modul/armada/armada_action.php?act=hapus',
                    type: 'POST',
                    data: {
                        id: id
                    },
                    success: function(msg) {
                       if (msg=='sukses') {
                        var table = $('#tbarmada').DataTable();
                        table.ajax.reload(null, false);
                        Swal.fire('Data Berhasil Dihapus', '', 'success');
                       }
                        
                    },
                    error: function() {
                        Swal.fire('Data Gagal Dihapus!', '', 'danger');
                    }
                });

            } else if (result.isDenied) {
                Swal.fire('Data Tidak jadi Dihapus', '', 'armada')
            }
        });


    }

    function detail(id) {
        alert(id);
    }


    function load() {
        var table = $("#tbarmada").dataTable({
            "processing": true,
            "serverSide": true,
            //disable order dan searching pada tombol aksi
            "columnDefs": [{
                "targets": [0],
                "orderable": false,
                "searchable": false

            }],
            "ajax": {
                url: "<?php echo base_admin()?>modul/armada/armada_data.php",
                type: 'post',

                error: function(xhr, error, thrown) {
                    console.log(xhr);

                }
            },


        });
    }

    function tambah() {
        $("#modal-armada").modal('show');
        kosong();
        $(".modal-title").text('form Tambah');
    }
</script>

<div class="modal fade" id="modal-armada">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title text-center"></h4>
      </div>
      <div class="modal-body">
       
            <div class="row">
              <div class="form-group col-xs-6">
                <input type="hidden" name="id" id="id">
                <label>NOPOL</label>
                  <input type="text" class="form-control" type="text" name="NOPOL" id="NOPOL"
                    Placeholder="Nomor Polisi" required>
                </div>
                <div class="form-group col-xs-6">
                  <label>Tgl Exp BPKB</label>
                    <input type="date" class="form-control" name="Tgl_Exp_BPKB" id="Tgl_Exp_BPKB"
                      placeholder="Tanggal Expired BPKB" required>
                </div>
            </div>

            <div class="row">
              <div class="form-group col-xs-6">
              <label>Jenis Truk</label>
                <input type="text" name="Jenis_Truk" id="Jenis_Truk" class="form-control" placeholder="Jenis Truk"
                  required>
              </div>
              <div class="form-group col-xs-6">
                <label>Panjang</label>
                  <input type="number" class="form-control" name="Panjang" id="Panjang" placeholder="Panjang Truk"
                    required>
              </div>
            </div>

            <div class="row">
              <div class="form-group col-xs-6">
              <label>Tahun</label>
                <input type="number" name="Tahun" id="Tahun" class="form-control" placeholder="Tahun" required>
              </div>
              <div class="form-group col-xs-6">
                <label>Lebar</label>
                  <input type="number" class="form-control" name="Lebar" id="Lebar" placeholder="Lebar Truk" required>
              </div>
            </div>

            <div class="row">
              <div class="form-group col-xs-6">
              <label>Warna</label>
                <input type="text" name="Warna" id="Warna" class="form-control" placeholder="Warna" required>
              </div>
              <div class="form-group col-xs-6">
                <label>Tinggi</label>
                  <input type="number" class="form-control" name="Tinggi" id="Tinggi" placeholder="Tinggi Truk"
                    required>
              </div>
            </div>

            <div class="row">
              <div class="form-group col-xs-6">
              <label>No STNK</label>
                <input type="number" name="No_STNK" id="No_STNK" class="form-control" placeholder="Nomor STNK"
                  required>
              </div>
              <div class="form-group col-xs-6">
                <label>Kapasitas Kubik</label>
                  <input type="text" class="form-control" name="Kapasitas_Kubik" id="Kapasitas_Kubik"
                    placeholder="Kapasitas Kubik" required>
              </div>
            </div>

            <div class="row">
              <div class="form-group col-xs-6">
              <label>Tgl Exp STNK</label>
                <input type="date" name="Tgl_Exp_STNK" id="Tgl_Exp_STNK" class="form-control"
                  placeholder="Tanggal Expired STNK" required>
              </div>
              <div class="form-group col-xs-6">
                <label>Kapasitas KG</label>
                  <input type="number" class="form-control" name="Kapasitas_KG" id="Kapasitas_KG"
                    placeholder="Kapasitas KG" required>
              </div>
            </div>

            <div class="row">
              <div class="form-group col-xs-6">
              <label>No BPKB</label>
                <input type="number" name="No_BPKB" id="No_BPKB" class="form-control" placeholder="Nomor BPKB"
                  required>
              </div>
              <div class="form-group col-xs-6">
                <label>Status</label><br>
                  <label class="radio-inline"><input type="radio" name="status" id="status">Non Aktif</label>
                  <label class="radio-inline"><input type="radio" name="status" id="status">Aktif</label>
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