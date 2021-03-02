<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Vendor
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?=base_index();?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?=base_index();?>vendor">Vendor</a></li>
        <li class="active">Tambah Vendor</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <section class="content">
        <div class="row">
            <div class="col-lg-12">
                <div class="box box-solid box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Tambah Vendor</h3>
                        <div class="box-tools pull-right">
                            <button class="btn btn-info btn-sm" data-widget="collapse"><i
                                    class="fa fa-minus"></i></button>
                            <button class="btn btn-info btn-sm" data-widget="remove"><i
                                    class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body table-responsive">
                        <div role="tabpanel">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#umum" aria-controls="umum" role="tab" data-toggle="tab">Informasi Umum</a>
                                </li>
                                <li role="presentation">
                                    <a href="#kontak" aria-controls="kontak" role="tab" data-toggle="tab">Informasi
                                        Kontak</a>
                                </li>
                                <li role="presentation">
                                    <a href="#finan" aria-controls="finan" role="tab" data-toggle="tab">Informasi
                                        Finansial</a>
                                </li>
                                <li role="presentation">
                                    <a href="#armada" aria-controls="armada" role="tab" data-toggle="tab">Informasi
                                        Armada</a>
                                </li>
                                <li role="presentation">
                                    <a href="#tarif" aria-controls="tarif" role="tab" data-toggle="tab">Informasi
                                        Tarif</a>
                                </li>
                            </ul>
                            <form id="input" method="post" class="form-horizontal foto_banyak"
                                action="<?=base_admin();?>modul/vendor/vendor_action.php?act=in">
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="umum">
                                        <br>
                                        <div class="col-xs-6">
                                            <label for="Nama Perusahaan">Nama Perusahaan</label>
                                            <div>
                                                <input type="text" name="nm_perusahaan" placeholder="Nama Perusahaan"
                                                    class="form-control" required>
                                            </div>
                                        </div><!-- /.col-xs-6 -->
                                        <div class="col-xs-6">
                                            <label for="Alamat Kantor">Alamat Kantor</label>
                                            <div>
                                                <input type="text" name="alamat" placeholder="Nama Perusahaan"
                                                    class="form-control" required>
                                            </div>
                                        </div><!-- /.col-xs-6 -->
                                        <div class="col-xs-6">
                                            <label for="No Telp">No Telp</label>
                                            <div>
                                                <input type="text" name="notlp" placeholder="No Telp"
                                                    class="form-control" required>
                                            </div>
                                        </div><!-- /.col-xs-6 -->
                                        <div class="col-xs-6">
                                            <label for="Status">Status</label>
                                            <div>
                                                <input name="status" class="make-switch" type="checkbox" checked>
                                            </div>
                                        </div><!-- /.col-xs-6 -->

                                        <br>
                                        <!-- <a href="<?=base_admin() ?>index.php/vendor" class="btn btn-warning pull-left">Kembali</a> -->
                                        <button type="button" class="btn btn-primary pull-right" id="lanjut1">Simpan &
                                            Lanjut</button>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="kontak">
                                        <br>
                                        <div class="col-xs-6">
                                            <label for="Nama Lengkap">Nama Lengkap</label>
                                            <div>
                                                <input type="text" name="nm_lengkap" placeholder="Nama Lengkap"
                                                    class="form-control" required>
                                            </div>
                                        </div><!-- /.col-xs-6 -->
                                        <div class="col-xs-6">
                                            <label for="Posisi">Posisi</label>
                                            <div>
                                                <input type="text" name="posisi" placeholder="Posisi"
                                                    class="form-control" required>
                                            </div>
                                        </div><!-- /.col-xs-6 -->
                                        <div class="col-xs-6">
                                            <label for="No Hp">No Hp</label>
                                            <div>
                                                <input type="text" name="nohp" placeholder="No Hp" class="form-control"
                                                    required>
                                            </div>
                                        </div><!-- /.col-xs-6 -->
                                        <div class="col-xs-6">
                                            <label for="Email">Email</label>
                                            <div>
                                                <input type="text" data-rule-email="true" name="email"
                                                    placeholder="Email" class="form-control" required>
                                            </div>
                                        </div><!-- /.col-xs-6 -->
                                        <div class="row col-xs-12">
                                        <button type="button" class="btn btn-primary pull-right" id="lanjut2">Simpan &
                                            Lanjut</button>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="finan">
                                        <br>
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <label for="Nama Penagihan">Nama Penagihan</label>
                                                <div>
                                                    <input type="text" name="nm_penagihan" placeholder="Nama Penagihan"
                                                        class="form-control" required>
                                                </div>
                                            </div><!-- /.col-xs-6 -->
                                            <div class="col-xs-6">
                                                <label for="Alamat Penagihan">Alamat Penagihan</label>
                                                <div>
                                                    <input type="text" name="almt_penagihan"
                                                        placeholder="Alamat Penagihan" class="form-control" required>
                                                </div>
                                            </div><!-- /.col-xs-6 -->
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <label for="Kode Bank">Kode Bank</label>
                                                <div>
                                                    <input type="text" data-rule-number="true" name="kode_bank"
                                                        placeholder="Kode Bank" class="form-control" required>
                                                </div>
                                            </div><!-- /.col-xs-6 -->
                                            <div class="col-xs-6">
                                                <label for="Nama Bank">Nama Bank</label>
                                                <div>
                                                    <!-- <input type="text" name="nm_bank" placeholder="Nama Bank" class="form-control" required> -->
                                                    <select name="bank" data-placeholder="Pilih Nama Bank ..."
                                                        class="form-control chzn-select" tabindex="2" required>
                                                        <option value=""></option>
                                                        <?php foreach ($db->fetch_all("bank") as $isi) {
                  echo "<option value='$isi->id'>$isi->nama</option>";
               } ?>
                                                    </select>
                                                </div>
                                            </div><!-- /.col-xs-6 -->
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <label for="Cabang Bank">Cabang Bank</label>
                                                <div>
                                                    <input type="text" name="cb_bank" placeholder="Cabang Bank"
                                                        class="form-control" required>
                                                </div>
                                            </div><!-- /.col-xs-6 -->
                                            <div class="col-xs-6">
                                                <label for="Nomor Rek">Nomor Rek</label>
                                                <div>
                                                    <input type="text" data-rule-number="true" name="norek"
                                                        placeholder="Nomor Rek" class="form-control" required>
                                                </div>
                                            </div><!-- /.col-xs-6 -->
                                        </div>
                                        <br>
                                        <button type="button" class="btn btn-primary pull-right" id="lanjut3">Simpan &
                                            Lanjut</button>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="armada">
                                        <br>
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <label for="No Truk">No Truk</label>
                                                <div>
                                                    <input type="text" name="no_truk" placeholder="No Truk"
                                                        class="form-control" required>
                                                </div>
                                            </div><!-- /.col-xs-6 -->
                                            <div class="col-xs-6">
                                                <label for="Jenis Truk">Jenis Truk</label>
                                                <div>
                                                    <select name="jenis_truk" data-placeholder="Pilih Jenis Truk"
                                                        class="form-control chzn-select" tabindex="2" required>
                                                        <option value=""></option>
                                                        <?php foreach ($db->fetch_all("jenis_truk") as $isi) {
                  echo "<option value='$isi->id'>$isi->nama_jenis_truk</option>";
               } ?>
                                                    </select>
                                                </div>
                                            </div><!-- /.col-xs-6 -->
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <label for="No STNK">No STNK</label>
                                                <div>
                                                    <input type="text" data-rule-number="true" name="stnk"
                                                        placeholder="No STNK" class="form-control" required>
                                                </div>
                                            </div><!-- /.col-xs-6 -->
                                            <div class="col-xs-6">
                                                <label for="Exp STNK">Exp STNK</label>
                                                <div>
                                                    <input type="text" id="tgl1" data-rule-date="true" name="exp_stnk"
                                                        placeholder="Exp STNK" class="form-control" required>
                                                </div>
                                            </div><!-- /.col-xs-6 -->
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <label for="Panjang Bak">Panjang Bak</label>
                                                <div>
                                                    <input type="text" data-rule-number="true" name="pjg_bak"
                                                        placeholder="Panjang Bak" class="form-control" required>
                                                </div>
                                            </div><!-- /.col-xs-6 -->
                                            <div class="col-xs-6">
                                                <label for="Tinggi Bak">Tinggi Bak</label>
                                                <div>
                                                    <input type="text" data-rule-number="true" name="tinggi_bak"
                                                        placeholder="Tinggi Bak" class="form-control" required>
                                                </div>
                                            </div><!-- /.col-xs-6 -->
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <label for="Lebar Bak">Lebar Bak</label>
                                                <div>
                                                    <input type="text" data-rule-number="true" name="lbr_bak"
                                                        placeholder="Lebar Bak" class="form-control" required>
                                                </div>
                                            </div><!-- /.col-xs-6 -->
                                            <div class="col-xs-6">
                                                <label for="volume">volume</label>
                                                <div>
                                                    <input type="text" name="volume" placeholder="volume"
                                                        class="form-control" required>
                                                </div>
                                            </div><!-- /.col-xs-6 -->
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <label for="Kapasitas">Kapasitas</label>
                                                <div>
                                                    <input type="text" name="kapasitas" placeholder="Kapasitas"
                                                        class="form-control" required>
                                                </div>
                                            </div><!-- /.col-xs-6 -->
                                            </div>
                                            <br>
                                            <button type="button" class="btn btn-primary pull-right" id="lanjut4">Simpan
                                                & Lanjut</button>
                                        
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="tarif">
                                        <br>
                                        <div class="row">
                                        <div class="col-xs-6">
                                            <label for="No Tarif">No Tarif</label>
                                            <div>
                                                <input type="text" name="no_tarif" placeholder="No Tarif"
                                                    class="form-control" required>
                                            </div>
                                        </div><!-- /.col-xs-6 -->
                                        <div class="col-xs-6">
                                            <label for="Tanggal Penawaran">Tanggal Penawaran</label>
                                            <div>
                                                <input type="text" id="tgl2" data-rule-date="true" name="tgl_penawaran"
                                                    placeholder="Tanggal Penawaran" class="form-control" required>
                                            </div>
                                        </div><!-- /.col-xs-6 -->
                                        </div>
                                        <div class="row">
                                        <div class="col-xs-6">
                                            <label for="Periode">Periode</label>
                                            <div>
                                                <input type="text" name="periode" placeholder="Periode"
                                                    class="form-control" required>
                                            </div>
                                        </div><!-- /.col-xs-6 -->
                                        <div class="col-xs-6">
                                            <label for="Tempo Bayar">Tempo Bayar</label>
                                            <div>
                                                <select name="tempo_pembayaran"
                                                    data-placeholder="Pilih Tempo Pembayaran"
                                                    class="form-control chzn-select" tabindex="2" required>
                                                    <option value=""></option>
                                                    <?php foreach ($db->fetch_all("tempo_pembayaran") as $isi) {
                  echo "<option value='$isi->id'>$isi->tempo</option>";
               } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- /.col-xs-6 -->
                                        </div>
                                        <div class="row">
                                        <div class="col-xs-6">
                                            <label for="Pelanggan">Pelanggan</label>
                                            <div>
                                                <input type="text" name="pelanggan" placeholder="Pelanggan"
                                                    class="form-control">
                                            </div>
                                        </div><!-- /.col-xs-6 -->
                                        <div class="col-xs-6">
                                            <label for="Dari">Dari</label>
                                            <div>
                                                <input type="text" name="dari" placeholder="Dari" class="form-control"
                                                    required>
                                            </div>
                                        </div><!-- /.col-xs-6 -->
                                        </div>
                                        <div class="row">
                                        <div class="col-xs-6">
                                            <label for="Tujuan">Tujuan</label>
                                            <div>
                                                <input type="text" name="tujuan" placeholder="Tujuan"
                                                    class="form-control" required>
                                            </div>
                                        </div><!-- /.col-xs-6 -->
                                        <div class="col-xs-6">
                                            <label for="Satuan">Satuan</label>
                                            <div>
                                                <input type="text" name="satuan" placeholder="Satuan"
                                                    class="form-control" required>
                                            </div>
                                        </div><!-- /.col-xs-6 -->
                                        </div>
                                        <div class="row">
                                        <div class="col-xs-6">
                                            <label for="Nilai">Nilai</label>
                                            <div>
                                                <input type="text" name="nilai" placeholder="Nilai"
                                                    class="form-control">
                                            </div>
                                        </div><!-- /.col-xs-6 -->
                                        <div class="col-xs-6">
                                            <label for="Status Pajak">Status Pajak</label>
                                            <div>
                                                <input name="sts_pajak" class="make-switch" type="checkbox" checked>
                                            </div>
                                        </div><!-- /.col-xs-6 -->
                                        </div>
                                        <div class="row">
                                        <div class="col-xs-6">
                                            <label for="Satuan Penawaran">Satuan Penawaran</label>
                                            <div>
                                                <input type="text" name="satuan_penawaran"
                                                    placeholder="Satuan Penawaran" class="form-control" required>
                                            </div>
                                        </div><!-- /.col-xs-6 -->
                                        </div>
                                      
                                        <label for="tags">&nbsp;</label>
                                        <br>
                                        <div class="pull-right">
                                            <a href="<?=base_index();?>vendor" class="btn btn-success "><i
                                                    class="fa fa-step-backward"></i> Kembali</a>
                                            <input type="submit" class="btn btn-primary " value="submit">

                                        </div>

                                        <!-- </div> -->
                                  
                                </div>
                        </div>

                        <div class="box-body">





                            </form>


                        </div>
                    </div>
                </div>
            </div>

    </section><!-- /.content -->

    <script type="text/javascript">
    //$(document).ready(function() {
    $("#lanjut1").click(function(event) {
        $('.nav-tabs a[href="#kontak"]').tab('show');
    });
    $("#lanjut2").click(function(event) {
        $('.nav-tabs a[href="#finan"]').tab('show');
    });
    $("#lanjut3").click(function(event) {
        $('.nav-tabs a[href="#armada"]').tab('show');
    });
    $("#lanjut4").click(function(event) {
        $('.nav-tabs a[href="#tarif"]').tab('show');
    });
    //});
    </script>