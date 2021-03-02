<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Pengaturan Akun
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?=base_index();?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?=base_index();?>akun">Akun</a></li>
        <li class="active">Akun List</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">List Akun</h3>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive">
                    <form id="input" method="post" class="form-horizontal foto_banyak"
                        action="<?=base_admin();?>modul/akun1/akun_action.php?act=in">
                        <div role="tabpanel">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#infoumum" aria-controls="tab" role="tab" data-toggle="tab">Informasi
                                        Umum</a>
                                </li>
                                <li role="presentation">
                                    <a href="#pengguna" aria-controls="tab" role="tab" data-toggle="tab">Informasi
                                        Pengguna</a>
                                </li>
                                <li role="presentation">
                                    <a href="#bank" aria-controls="tab" role="tab" data-toggle="tab">Informasi Bank</a>
                                </li>
                                <li role="presentation">
                                    <a href="#paket" aria-controls="tab" role="tab" data-toggle="tab">Paket
                                        Berlangganan</a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="infoumum">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6 col-lg-6">
                                            <label for="Nama Perusahaan">Nama Perusahaan</label>
                                            <div>
                                                <input type="text" name="nama_perusahaan" placeholder="Nama Perusahaan"
                                                    class="form-control" required>
                                            </div>
                                        </div><!-- /.form-group -->
                                        <div class="col-xs-12 col-sm-6 col-lg-6">
                                            <label for="Alamat Perusahaan">Alamat Perusahaan</label>
                                            <div>
                                                <textarea name="alamat_perusahaan" class="form-control"></textarea>
                                            </div>
                                        </div><!-- /.form-group -->
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6 col-lg-6">
                                            <label for="Nama Kota">Nama Kota</label>
                                            <div>
                                                <select name="nama_kota" id="nama_kota" data-placeholder="Pilih Nama Kota ..."
                                                    class="form-control chzn-select" tabindex="2" required>                         </select>
                                            </div>
                                        </div><!-- /.form-group -->
                                        <div class="col-xs-12 col-sm-6 col-lg-6">
                                            <label for="Jenis Usaha">Jenis Usaha</label>
                                            <div>
                                                <select name="jenis_usaha" data-placeholder="Pilih Jenis Usaha ..."
                                                    class="form-control chzn-select" tabindex="2" required>
                                                    <option value=""></option>
                                                    <?php foreach ($db->fetch_all("jenis_usaha") as $isi) {
                  echo "<option value='$isi->id'>$isi->jenis_usaha</option>";
               } ?>
                                                </select>
                                            </div>
                                        </div><!-- /.form-group -->
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6 col-lg-6">
                                            <label for="Logo Perusahaan">Logo Perusahaan</label>
                                            <div>
                                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                                    <div class="input-group">
                                                        <div class="form-control uneditable-input span3"
                                                            data-trigger="fileinput">
                                                            <i class="glyphicon glyphicon-file fileinput-exists"></i>
                                                            <span class="fileinput-filename"></span>
                                                        </div>
                                                        <span class="input-group-addon btn btn-default btn-file"><span
                                                                class="fileinput-new">Select file</span> <span
                                                                class="fileinput-exists">Change</span>
                                                            <input type="file" name="logo_perusahaan">
                                                        </span>
                                                        <a href="#"
                                                            class="input-group-addon btn btn-default fileinput-exists"
                                                            data-dismiss="fileinput">Remove</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- /.form-group -->
                                        <div class="col-xs-12 col-sm-6 col-lg-6">
                                            <label for="NIB">NIB</label>
                                            <div>
                                                <input type="text" name="nib" placeholder="NIB" class="form-control">
                                            </div>
                                        </div><!-- /.form-group -->
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6 col-lg-6">
                                            <label for="NPWP">NPWP</label>
                                            <div>
                                                <input type="text" name="npwp" placeholder="NPWP" class="form-control">
                                            </div>
                                        </div><!-- /.form-group -->
                                        <div class="col-xs-12 col-sm-6 col-lg-6">
                                            <label for="Alamat NPWP">Alamat NPWP</label>
                                            <div>
                                                <input type="text" name="alamat_npwp" placeholder="Alamat NPWP"
                                                    class="form-control">
                                            </div>
                                        </div><!-- /.form-group -->
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-lg-12">
                                            <label for="Jumlah Truk">Jumlah Truk</label>
                                            <div>
                                                <input type="text" name="jumlah_truk" placeholder="Jumlah Truk"
                                                    class="form-control">
                                            </div>
                                        </div><!-- /.form-group -->
                                    </div>
                                    <hr>
                                    <div class="row">
                                      <div class="col-xs-12 col-sm-12 col-lg-12">
                                      <button type="button" class="btn btn-primary pull-right" id="step1">Lanjut</button>
                                    </div>
                                    </div>
                                </div><!-- infoumum -->
                                <div role="tabpanel" class="tab-pane" id="pengguna">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6 col-lg-6">
                                            <label for="Nama Lengkap">Nama Lengkap</label>
                                            <div>
                                                <input type="text" name="nm_lengkap" placeholder="Nama Lengkap"
                                                    class="form-control" required>
                                            </div>
                                        </div><!-- /.form-group -->
                                        <div class="col-xs-12 col-sm-6 col-lg-6">
                                            <label for="Alamat Email Akun">Alamat Email Akun</label>
                                            <div>
                                                <input type="text" name="alamat_email_akun"
                                                    placeholder="Alamat Email Akun" class="form-control" required>
                                            </div>
                                        </div><!-- /.form-group -->
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6 col-lg-6">
                                            <label for="Status">Status</label>
                                            <div>
                                                <input name="status" class="make-switch" type="checkbox" checked>
                                            </div>
                                        </div><!-- /.form-group -->
                                        <div class="col-xs-12 col-sm-6 col-lg-6">
                                            <label for="Posisi">Posisi</label>
                                            <div>
                                                <input type="text" name="posisi" placeholder="Posisi"
                                                    class="form-control" required>
                                            </div>
                                        </div><!-- /.form-group -->
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6 col-lg-12">
                                            <label for="No. HP">No. HP</label>
                                            <div>
                                                <input type="number" name="hp" placeholder="No. HP" class="form-control"
                                                    required>
                                            </div>
                                        </div><!-- /.form-group -->
                                    </div>
                                    <hr>
                                    <div class="row">
                                      <div class="col-xs-12 col-sm-12 col-lg-12">
                                      <button type="button" class="btn btn-warning">Kembali</button>
                                      <button type="button" class="btn btn-primary pull-right" id="step2">Lanjut</button>
                                    </div>
                                    </div>
                                </div><!-- pengguna -->
                                <div role="tabpanel" class="tab-pane" id="bank">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6 col-lg-6">
                                            <label for="Nama Lengkap Akun Bank">Nama Lengkap Akun
                                                Bank</label>
                                            <div>
                                                <input type="text" name="nm_lengkap_akun_bank"
                                                    placeholder="Nama Lengkap Akun Bank" class="form-control">
                                            </div>
                                        </div><!-- /.form-group -->
                                        <div class="col-xs-12 col-sm-6 col-lg-6">
                                            <label for="No. Rekening">No. Rekening</label>
                                            <div>
                                                <input type="text" name="rekening" placeholder="No. Rekening"
                                                    class="form-control">
                                            </div>
                                        </div><!-- /.form-group -->
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6 col-lg-6">
                                            <label for="Bank">Bank</label>
                                            <div>
                                                <select name="bank" data-placeholder="Pilih Bank ..."
                                                    class="form-control chzn-select" tabindex="2">
                                                    <option value=""></option>
                                                    <?php foreach ($db->fetch_all("bank") as $isi) {
                  echo "<option value='$isi->id'>$isi->nama</option>";
               } ?>
                                                </select>
                                            </div>
                                        </div><!-- /.form-group -->
                                    </div>
                                    <hr>
                                    <div class="row">
                                      <div class="col-xs-12 col-sm-12 col-lg-12">
                                      <button type="button" class="btn btn-warning">Kembali</button>
                                      <button type="button" class="btn btn-primary pull-right" id="step3">Lanjut</button>
                                    </div>
                                    </div>
                                </div><!-- bank -->
                                <div role="tabpanel" class="tab-pane" id="paket">
                                    <div class="row">
                                        
                                        <div class="col-xs-12 col-sm-6 col-lg-12">
                                            <label for="Paket Berlangganan">Paket Berlangganan</label>
                                            <div>
                                                <select name="layanan_berlangganan"
                                                    data-placeholder="Pilih Paket Berlangganan ..."
                                                    class="form-control chzn-select" tabindex="2">
                                                    <option value=""></option>
                                                    <?php foreach ($db->fetch_all("paket_langganan") as $isi) {
                  echo "<option value='$isi->id'>$isi->nama_paket</option>";
               } ?>
                                                </select>
                                            </div>
                                        </div><!-- /.form-group -->
                                    </div>
                                    <hr>
                                    
                                    <div class="row">
                                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <h3 class="text-center">Hak Akses Sesuai Paket Berlangganan</h3><hr>
<table id="dtb" class="table table-bordered table-condensed table-hover table-striped">
                      <thead>
                        <tr>
                        <th style="width:20px">No</th>
                          <th>Menu </th>
                          <th>Modul Admin</th>
                          <th>Read</th>
                           <th>Input</th>
                            <th>Edit</th>
                             <th>Delete</th>
                         
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
      // $dtb=$db->fetch_custom("select sys_menu.type_menu,sys_menu_role.read_act,sys_menu_role.insert_act,sys_menu_role.update_act,sys_menu_role.delete_act, sys_menu.page_name,sys_menu.urutan_menu,sys_group_users.level,sys_menu_role.id from sys_menu_role inner join sys_menu on sys_menu_role.id_menu=sys_menu.id inner join sys_group_users on sys_menu_role.group_id=sys_group_users.id where sys_group_users.id=? order by urutan_menu asc",array('sys_group_users.id'=>$_GET
      //   ['user']));

      $dtb=$db->fetch_custom("select sys_menu.type_menu,sys_menu_role.read_act,sys_menu_role.insert_act,sys_menu_role.update_act,sys_menu_role.delete_act, sys_menu.page_name,sys_menu.urutan_menu,sys_group_users.level,sys_menu_role.id from sys_menu_role inner join sys_menu on sys_menu_role.id_menu=sys_menu.id inner join sys_group_users on sys_menu_role.group_id=sys_group_users.id where sys_group_users.id=? order by urutan_menu asc",array('sys_group_users.id'=>1));


      $i=1;
      foreach ($dtb as $isi) {
        ?><tr id="line_<?=$isi->id;?>">
        <td>
        <?=$i;?></td>
        <td><?=$isi->page_name;?></td>
        <td><?=$isi->level;?></td>
        <?php
        if($isi->type_menu=='main')
        {
            ?>
            <td>
              <div class="checkbox">
                            <label>
                              <?=($isi->read_act=='Y')?'<i class="fa fa-check"></i>':'';?>
                            </label>
                          </div>
            </td>
            <td colspan="3">Main Menu</td>
<?php
        } else {



        ?>
        <td>
        <div class="checkbox">
                            <label>
                              <?=($isi->read_act=='Y')?'<i class="fa fa-check primary"></i>':'';?>
                            </label>
                          </div>
        </td>
          <td>
          <div class="checkbox">
                            <label>
                              <?=($isi->insert_act=='Y')?'<i class="fa fa-check"></i>':'';?>
                            </label>
                          </div>
      </td>
            <td>   <div class="checkbox">
                            <label>
                              <?=($isi->update_act=='Y')?'<i class="fa fa-check"></i>':'';?>
                            </label>
                          </div></td>
              <td>   <div class="checkbox">
                            <label>
                              <?=($isi->delete_act=='Y')?'<i class="fa fa-check"></i>':'';?>
                            </label>
                          </div></td>
                          <?php 
                          }
                          ?>
        </tr>
        <?php
        $i++;
      }
      ?>
                   </tbody>
                    </table>
                                      </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6 col-lg-12">
                                             <a href="<?=base_index();?>akun" class="btn btn-success"><i
                                                class="fa fa-step-backward"></i> Kembali</a>
                                                <input type="submit" class="btn btn-primary pull-right" value="Simpan">
                                            
                                        </div><!-- /.form-group -->

                                       
                                    </div>
                                </div><!-- paket -->
                            </div><!-- Tabs konten -->
                        </div><!-- Tabs Panel -->
                    </form>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>
    </div>
</section><!-- /.content -->
<!-- Main content -->


<script type="text/javascript">
$(document).ready(function() {


    function detail(iddata) {
        $.ajax({
            url: '<?=base_admin();?>modul/akun/akun_action.php?act=edit',
            type: 'POST',
            dataType: 'json',
            data: {
                id: iddata
            },
            success: function(hasil) {
                console.log(hasil);
                $("#id_perusahaan").val(hasil[0].id);
                $("#Nama_Perusahaan").val(hasil[0].Nama_Perusahaan);
                $("#Alamat_Perusahaan").val(hasil[0].Alamat_Perusahaan);
                $("#Nama_Kota").val(hasil[0].Nama_Kota);
                $("#Jenis_Usaha").val(hasil[0].Jenis_Usaha);
                $("#Logo_Perusahaan").val(hasil[0].Logo_Perusahaan);
                $("#No_NIB").val(hasil[0].No_NIB);
                $("#No_NPWP").val(hasil[0].No_NPWP);
                $("#Alamat_NPWP").val(hasil[0].Alamat_Perusahaan);
                $("#Jumlah_Truk").val(hasil[0].Jumlah_Truk);
            },
            error: function(err) {
                console.log(err);
            }
        });
    } /*Fungsi Detail*/

    function hapus(id) {
        console.log(id);
        Swal.fire({
            title: 'Data ID ' + id + ' Mau di hapus?',
            showDenyButton: true,
            showCancelButton: true,
            confirmButtonText: `Hapus`,
            denyButtonText: `Batal`,
        }).then((result) => {
            /* Jika Hapus Dikonfirmasi */
            if (result.isConfirmed) {
                $.ajax({
                    url: '<?=base_admin();?>modul/akun/akun_action.php?act=hapus',
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        id: iddata
                    },
                    success: function(hasil) {
                        Swal.fire('Sukses Dihapus!', '', 'success')
                    },
                    error: function(err) {
                        console.log(err);
                    }
                });

            } else if (result.isDenied) {
                Swal.fire('Batal Dihapus', '', 'info')
            }
        });
    } /*Fungsi Hapus*/



    $("#cekAll").change(function() {
        $(".akun").prop('checked', $(this).prop("checked"));
    });

    $("#cekAll2").change(function() {
        $(".pengguna").prop('checked', $(this).prop("checked"));
    });

    $("#cekAll2").change(function() {
        $(".bank").prop('checked', $(this).prop("checked"));
    });

    /*untuk tabs */
    $("#step1").click(function(event) {
        $('.nav-tabs a[href="#pengguna"]').tab('show');
    });
    $("#step2").click(function(event) {
        $('.nav-tabs a[href="#bank"]').tab('show');
    });
    $("#step3").click(function(event) {
        $('.nav-tabs a[href="#paket"]').tab('show');
    });

    $("#btn_info_paket").click(function(event) {
        $.ajax({
            url: '<?=base_admin();?>modul/akun/akun_action.php?act=in',
            type: 'POST',
            data: {
                Nama_Perusahaan: $("#Nama_Perusahaan").val(),
                Alamat_Perusahaan: $("#Alamat_Perusahaan").val(),
                Nama_Kota: $("#Nama_Kota").val(),
                Jenis_Usaha: $("#Jenis_Usaha").val(),
                Logo_Perusahaan: $("#Logo_Perusahaan").val(),
                No_NIB: $("#No_NIB").val(),
                No_NPWP: $("#No_NPWP").val(),
                Alamat_NPWP: $("#Alamat_NPWP").val(),
                Jumlah_Truk: $("#Jumlah_Truk").val()

            },
            success: function(hasil) {
                Swal.fire(
                    'Sukses',
                    'Data Berhasil Disimpan',
                    'success'
                );

            },
            error: function(err) {
                console.log(err);
            }
        });
    });
    /*akhir dari fungsi tombol tabs*/


});
</script>

<script>
$(document).ready(function() {
    $('.chzn-select').select2();
    $('#Jenis_Usaha').select2({
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
            url: '<?=base_admin();?>modul/akun/akun_action.php?act=jenis_usaha',
            dataType: 'json',
            delay: 250,
            processResults: function(data) {
                return {
                    results: data
                };
            },
            cache: true
        },
        escapeMarkup: function(markup) {
            return markup;
        }
    });

    $('#nama_kota').select2({
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
            url: '<?=base_admin();?>modul/akun/akun_action.php?act=kota',
            dataType: 'json',
            delay: 250,
            processResults: function(data) {
                return {
                    results: data
                };
            },
            cache: true
        },
        escapeMarkup: function(markup) {
            return markup;
        }
    });


});

function tambah() {
    console.log("Alihkan Ke modal Tambah Kota");
}
</script>