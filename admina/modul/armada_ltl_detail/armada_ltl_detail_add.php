<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Armada LTL Detail
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?=base_index();?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?=base_index();?>armada-ltl-detail">Armada LTL Detail</a></li>
        <li class="active">Tambah Armada LTL Detail</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="box box-solid box-primary">
                <div class="box-header">
                    <h3 class="box-title">Tambah Armada LTL Detail</h3>
                    <div class="box-tools pull-right">
                        <button class="btn btn-info btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        <button class="btn btn-info btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>

                <div class="box-body">
                    <form id="input" method="post" class="form-horizontal"
                        action="<?=base_admin();?>modul/armada_ltl_detail/armada_ltl_detail_action.php?act=in">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-lg-6">
                                <label for="DN No.">DN No.</label>
                                <div>
                                    <input type="text" name="dn_no" class="form-control" required>
                                </div>
                            </div><!-- /.form-group -->
                            <div class="col-xs-12 col-sm-6 col-lg-6">
                                <label for="Vendor">Vendor</label>
                                <div>
                                    <select name="id_vendor" data-placeholder="Pilih Vendor..."
                                        class="form-control chzn-select" tabindex="2" required>
                                        <option value=""></option>
                                        <?php foreach ($db->fetch_all("vendor") as $isi) {

                  if ($data_edit->id_vendor==$isi->id) {
                    echo "<option value='$isi->id' selected>$isi->nm_perusahaan</option>";
                  } else {
                  echo "<option value='$isi->id'>$isi->nm_perusahaan</option>";
                    }
               } ?>
                                    </select>
                                </div>
                            </div><!-- /.form-group -->
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-lg-6">
                                <label for="No Pol">No Pol</label>
                                <div>
                                    <input type="text" name="no_pol" class="form-control" required>
                                </div>
                            </div><!-- /.form-group -->
                            <div class="col-xs-12 col-sm-6 col-lg-6">
                                <label for="Driver">Driver</label>
                                <div>
                                    <input type="text" name="driver" class="form-control" required>
                                </div>
                            </div><!-- /.form-group -->
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-lg-6">
                                <label for="HP driver1">HP driver1</label>
                                <div>
                                    <input type="text" name="hp_driver1" class="form-control" required>
                                </div>
                            </div><!-- /.form-group -->
                            <div class="col-xs-12 col-sm-6 col-lg-6">
                                <label for="HP Driver2">HP Driver2</label>
                                <div>
                                    <input type="text" name="hp_driver2" class="form-control">
                                </div>
                            </div><!-- /.form-group -->
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-lg-6">
                                <label for="Co Driver">Co Driver</label>
                                <div>
                                    <input type="text" name="co_driver" class="form-control" required>
                                </div>
                            </div><!-- /.form-group -->
                            <div class="col-xs-12 col-sm-6 col-lg-6">
                                <label for="HP Co Driver1">HP Co Driver1</label>
                                <div>
                                    <input type="text" name="hp_co_driver1" class="form-control" required>
                                </div>
                            </div><!-- /.form-group -->
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-lg-6">
                                <label for="Hp Co Driver2">Hp Co Driver2</label>
                                <div>
                                    <input type="text" name="hp_co_driver2" class="form-control">
                                </div>
                            </div><!-- /.form-group -->
                            <div class="col-xs-12 col-sm-6 col-lg-6">
                                <label for="Remark">Remark</label>
                                <div>
                                    <input type="text" name="remark" class="form-control">
                                </div>
                            </div><!-- /.form-group -->
                        </div>

                        <div class="row">
                            <input type="hidden" name="id" value="<?=$_SESSION['id_user'];?>">
                            <div class="col-xs-12 col-sm-6 col-lg-12">
                                <label for="tags">&nbsp;</label>
                                <div>
                                    <a href="<?=base_index();?>armada-ltl-detail" class="btn btn-success btn-flat"><i
                                            class="fa fa-step-backward"></i> Kembali</a>
                                    <input type="submit" class="btn btn-primary pull-right" value="Simpan">
                                </div>
                            </div><!-- /.form-group -->
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>

</section><!-- /.content -->