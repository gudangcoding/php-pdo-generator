<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Serial Number
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?=base_index();?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?=base_index();?>serial-number">Serial Number</a></li>
        <li class="active">Tambah Serial Number</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="box box-solid box-primary">
                <div class="box-header">
                    <h3 class="box-title">Tambah Serial Number</h3>
                    <div class="box-tools pull-right">
                        <button class="btn btn-info btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        <button class="btn btn-info btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>

                <div class="box-body">
                    <form id="input" method="post" class="form-horizontal foto_banyak"
                        action="<?=base_admin();?>modul/serial_number/serial_number_action.php?act=in">
                        <div class='row'>
                            <div class='form-group col-xs-6'>
                                <label for=legal>legal</label>
                                <select name="legal" data-placeholder="Pilih legal ..." class="form-control chzn-select"
                                    tabindex="2" required>
                                    <option value=""></option>
                                    <?php foreach ($db->fetch_all("Legal") as $isi) {
                              echo "<option value='$isi->Inisial'>$isi->Nama_Legal</option>";
                           } ?>
                                </select>
                            </div>
                            <div class='form-group col-xs-6'>
                                <label for=Inisial Departement>Inisial Departement</label>
                                <input type="text" name="form" placeholder="Inisial Departement" class="form-control"
                                    required>
                            </div>
                        </div><!-- /.form-group -->

                        <div class='row'>
                            <div class='form-group col-xs-6'>
                                <label for=Awalan Kwitansi>Awalan Kwitansi</label>
                                <input type="text" name="prefix" placeholder="Awalan Kwitansi" class="form-control"
                                    required>
                            </div>
                            <div class='form-group col-xs-6'>
                                <label for=Awal Nomor>Awal Nomor</label>
                                <input type="text" name="penomoran" placeholder="Awal Nomor" class="form-control">
                            </div>
                        </div><!-- /.form-group -->

                        <div class='row'>
                            <div class='form-group col-xs-6'>
                                <label for=user_id>user_id</label>
                                <input type="text" name="user_id" placeholder="user_id" class="form-control">
                            </div>
                        </div><!-- /.form-group -->


                        <div class="form-group">
                            <label for="tags" class="control-label col-lg-2">&nbsp;</label>
                            <div class="col-lg-10">
                                <input type="submit" class="btn btn-primary btn-flat" value="submit">
                            </div>
                        </div><!-- /.form-group -->
                    </form>
                    <a href="<?=base_index();?>serial-number" class="btn btn-success btn-flat"><i
                            class="fa fa-step-backward"></i> Kembali</a>

                </div>
            </div>
        </div>
    </div>

</section><!-- /.content -->