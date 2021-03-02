<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Pelanggan
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
                    <h3 class="box-title">Data Pelanggan</h3>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive">
                        <a class="btn btn-primary" href='<?=base_index();?>pelanggan/tambah'><span
                                class="glyphicon glyphicon-plus" aria-hidden="true"></span>Tambah Pelanggan</a>
                        <a class="btn btn-primary" href='<?=base_index();?>penawaran/tambah'><span
                                class="glyphicon glyphicon-plus" aria-hidden="true"></span>Tambah Penawaran</a>
                        <hr>
                        <div class="box-body table-responsive">
                            <table id="tbpelanggan" class="display responsive nowrap " width="100%">
                                <thead>
                                    <tr>
                                        <!-- <th><input type="checkbox" id="cekAll"></th> -->
                                        <th>No</th>
                                        <th>Nama Perusahaan</th><!-- umum -->
                                        <th>Legal</th>
                                        <th>Alamat Kantor</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                        <th>Website</th>
                                        <th>Telp</th>
                                        <th>Kota</th>
                                        <th>Provinsi</th>
                                        <th>Kecamatan</th>
                                        <th>Nama lengkap</th>
                                        <th>Posisi</th>
                                        <th>No Hp</th>
                                        <th>No NPWP</th>
                                        <th>Alamat Penagihan</th>
                                        <th>Nama Bank</th>
                                        <th>No Rek</th>
                                        <th>Bank Cabang</th> 
                                        <!-- <th>npwp</th> -->
                                        <!-- <th>Alamat Penagihan</th>
                                        <th>No Penawaran</th> -->
                                        
                                        <!-- <th>pelanggan</th> -->
                                        <!-- <th>layanan</th>
                                        <th>Tanggal Penawaran</th>
                                        <th>Periode Penawaran</th> -->
                                        
                                        <!-- <th>tujuan</th> -->
                                        <!-- <th>Satuan</th> -->
                                        <!-- <th>Jenis Truk</th> -->
                                        
                                        <!-- <th>Nilai</th>
                                        <th>Status Pajak</th> -->
                                        <th>Tindakan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div><!-- /.box-body -->
            </div><!-- /.box -->
</section><!-- /.content -->
<!-- Main content -->


<script type="text/javascript">
$(document).ready(function() {

    var table = $("#tbpelanggan").dataTable({
        "processing": true,
        "serverSide": true,
        "ajax": {
            url: "<?php echo base_admin()?>modul/pelanggan/pelanggan_data.php"
        }

    });




    $("#kontak,#finansial,#penawaran,#info").click(function(event) {
        $("#dinamis").text($(this).text());
    });

    $("#cekAll").change(function() {
        $(".info,.kontak,.finansial,.penawaran").prop('checked', $(this).prop("checked"));
    });

});

function edit(id) {
    $("#modal-info").modal('show');
    $(".modal-title").text('form edit' + id);
    $.ajax({
        url: '<?php echo base_admin()?>modul/pelanggan/pelanggan_edit.php',
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
                url: '<?php echo base_admin()?>modul/pelanggan/pelanggan_action.php?act=hapus',
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
</script>


<div class="modal fade" id="modal-info">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Edit Form</h4>
            </div>
            <div class="modal-body">
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

                                    <div class="form-group row">
                                        <label class="col-xs-2 col-form-label">Nama Lengkap</label>
                                        <div class="col-lg-4">
                                            <input type="text" name="nm_lengkap" id="nm_lengkap" placeholder="Nama Lengkap Anda"
                                                class="form-control" required>
                                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="simpanall">Save changes</button>
            </div>
        </div>
    </div>
</div>
