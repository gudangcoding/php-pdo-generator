<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Informasi Muatan
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?=base_index();?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?=base_index();?>penawaran">Muatan</a></li>
        <li class="active" id="dinamis">Informasi Muatan</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <!-- <div class="box-header">
                    <h3 class="box-title">List Akun</h3>
                </div> --><!-- /.box-header -->
                <div class="box-body table-responsive">
                    <div id="exTab1">
                        <ul class="nav nav-pills">
                            <li class="active">
                                <a href="#1a" data-toggle="tab" id="info">Informasi Umum</a>
                            </li>
                            <li><a href="#2a" data-toggle="tab" id="muatan">Detail Muatan</a>
                            </li>
                            <li><a href="#3a" data-toggle="tab" id="bongkar">Detail Bongkar</a>
                            </li>
                            <li><a href="#4a" data-toggle="tab" id="armada">Detail Armada</a>
                            </li>
                        </ul>

                        <div class="tab-content clearfix" style="margin: 10px">
                            <div class="tab-pane active" id="1a">
                               <a class="btn btn-primary" href='<?=base_index();?>daftar-muatan/tambah'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Tambah Informasi Muatan</a><hr> 
                               <table id="" class="display responsive nowrap umum" width="100%">
                                  <thead>
                                    <tr>
                                      <th><input type="checkbox" id="cekAll"></th>
                                        <th>No</th>
                                        <th>Legal</th>
                                        <th>Pelanggan</th>
                                        <th>Layanan</th>
                                        <th>Tanggal Booking</th>
                                        <th>Nomor Referens</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                       <td><input type="checkbox" class="info"></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                  </tbody>
                                </table>
                            </div>

                            <div class="tab-pane" id="2a">
                                <a class="btn btn-primary" data-toggle="modal" href='#modal-muatan'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Tambah Muatan</a><hr>
                                <table id="" class="display responsive nowrap umum" width="100%">
                                  <thead>
                                    <tr>
                                      <th><input type="checkbox" id="cekAll"></th>
                                        <th>No</th>
                                        <th>Dari</th>
                                        <th>Tanggal Muat</th>
                                        <th>Jam Muat</th>
                                        <th>Satuan</th>
                                        <th>Nama Muatan</th>
                                        <th>Jumlah Kubikasi</th>
                                        <th>Jumlah Berat</th>
                                        <th>Ketarangan</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                       <td><input type="checkbox" class="armada"></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                  </tbody>
                                </table>
                               </div>
                <div class="tab-pane" id="3a">
                    <a class="btn btn-primary" data-toggle="modal" href='#modal-bongkar'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Tambah Informasi Bongkar</a><hr>
                    <table id="" class="display responsive nowrap umum" width="100%">
                                  <thead>
                                    <tr>
                                      <th><input type="checkbox" id="cekAll"></th>
                                        <th>No</th>
                                        <th>Ke</th>
                                        <th>Tanggal Bongkar</th>
                                        <th>Jam Bongkar</th>
                                        <th>Satuan</th>
                                        <th>Nama Muatan</th>
                                        <th>Jumlah Kubikasi</th>
                                        <th>Jumlah Berat</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                       <td><input type="checkbox" class="bongkar"></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                  </tbody>
                                </table>
                </div>
                <div class="tab-pane" id="4a">
                  <a href="<?=base_index();?>daftar-muatan/tambah" class="btn btn-primary"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Tambah Jenis Armada</a><hr>
                   <table id="" class="display responsive nowrap umum" width="100%">
                                  <thead>
                                    <tr>
                                      <th><input type="checkbox" id="cekAll"></th>
                                        <th>No</th>
                                        <th>Jenis Truk</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                       <td><input type="checkbox" class="armada"></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                  </tbody>
                                </table> 
                        
                </div>
            </div>
        </div><!-- /.box-body -->
    </div><!-- /.box -->
    </div>
    </div>

</section><!-- /.content -->
<!-- Main content -->

<script type="text/javascript">
$(document).ready(function() {
    //Initialize tooltips
    $('.nav-tabs > li a[title]').tooltip();

    //Wizard
    $('a[data-toggle="tab"]').on('show.bs.tab', function(e) {

        var $target = $(e.target);

        if ($target.parent().hasClass('disabled')) {
            return false;
        }
    });

    $(".next-step").click(function(e) {

        var $active = $('.wizard .nav-tabs li.active');
        $active.next().removeClass('disabled');
        nextTab($active);

    });
    $(".prev-step").click(function(e) {

        var $active = $('.wizard .nav-tabs li.active');
        prevTab($active);

    });
});

function nextTab(elem) {
    $(elem).next().find('a[data-toggle="tab"]').click();
}

function prevTab(elem) {
    $(elem).prev().find('a[data-toggle="tab"]').click();
}

$("#muatan,#bongkar,#armada,#info").click(function(event) {
  $("#dinamis").text($(this).text());
});

$("#cekAll").change(function () {
    $(".info,.muatan,.bongkar,.armada").prop('checked', $(this).prop("checked"));
});
</script>

<div class="modal fade" id="modal-info">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title text-center">Form Informasi</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                        <div class="form-group col-xs-6">
                            <label for="Legal" class="control-label ">Legal</label>
                                <select name="legal" class="form-control chzn-select" tabindex="2" required="required">
                                     <option value="satuan"></option>
                               </select> 
                        </div>
                        <div class="form-group col-xs-6">
                            <label for="Pelanggan" class="control-label ">Pelanggan</label>
                                <input type="text" name="Pelanggan" placeholder="Pelanggan"
                                    class="form-control" required>
                        </div>
                        <div class="form-group col-xs-6">
                            <label for="Layanan" class="control-label ">Layanan</label>
                                <select name="layanan" class="form-control chzn-select" tabindex="2" required="required">
                                     <option value="layanan"></option>
                                     <option value="layanan">FTL</option>
                                     <option value="layanan">LTL</option>
                                     <option value="layanan">Rental</option>
                                     <option value="layanan">FCL</option>
                                     <option value="layanan">LCL</option>
                               </select>
                        </div>
                            <div class="form-group col-xs-6">
                            <label for="Tanggal Booking" class="control-label ">Tanggal Booking</label>
                                <input type="date" name="tgl_booking" placeholder="" class="form-control"
                                    required>
                            </div>
                             <div class="form-group col-xs-6">
                            <label for="Nomor Referensi" class="control-label ">Nomor Referensi</label>
                                <input type="number" name="no_referensi" placeholder="No Referensi"
                                    class="form-control" required>
                        </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary">Simpan Dan Lanjut</button>
            </div>
        </div>
    </div>
</div>
</div>

<div class="modal fade" id="modal-muatan">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Form Muatan</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                <div class="form-group col-xs-6">
                    <label for="Dari" class="control-label ">Dari</label>
                        <textarea type="text" name="dari" placeholder="Kota Asal(alamat lengkap)"
                            class="form-control" required></textarea><br>
                        <input type="text" name="zona" placeholder="Zona" class="form-control"
                            required><br>
                        <input type="text" name="nm_kontak" placeholder="Nama Kontak" class="form-control"
                            required><br>
                        <input type="text" name="no_kontak" placeholder="Nomor Kontak" class="form-control"
                            required>    
                </div><!-- /.form-group -->
                </div>
                 <div class="row">
                <div class="form-group col-xs-6">
                    <label for="Tanggal Muat" class="control-label ">Tanggal Muat</label>
                        <input type="date" name="tgl_muat" placeholder="" class="form-control"
                            required>
                </div><!-- /.form-group -->
                <div class="form-group col-xs-6">
                    <label for="Jam Muat" class="control-label ">Jam Muat</label>
                        <input type="time" name="jam_muat" placeholder="" class="form-control"
                            required>
                </div><!-- /.form-group -->
            </div>
             <div class="row">
                <div class="form-group col-xs-6">
                    <label for="Satuan" class="control-label ">Satuan</label>
                        <select name="Satuan" class="form-control chzn-select" tabindex="2" required="required">
                         <option value="satuan"></option>
                        </select>
                </div>
                <div class="form-group col-xs-6">
                    <label for="Nama Muatan" class="control-label ">Nama Muatan</label>
                        <input type="text" name="nm_muatan" placeholder="Nama Muatan"
                            class="form-control" required>
                </div>
            </div>
             <div class="row">
                <div class="form-group col-xs-6">
                    <label for="Jumlah Kubikasi" class="control-label ">Jumlah Kubikasi</label>
                        <input type="number" name="jml_kubikasi" placeholder="Jumlah Kubikasi"
                            class="form-control" required>
                </div>
                <div class="form-group col-xs-6">
                    <label for="Jumlah Berat" class="control-label ">Jumlah Berat</label>
                        <input type="number" name="jml_berat" placeholder="Jumlah Berat (KG)"
                            class="form-control" required>
                </div>
            </div>
             <div class="row">
                <div class="form-group col-xs-6">
                    <label for="Keterangan" class="control-label ">Ketarangan</label>
                        <textarea type="text" name="Keterangan" placeholder="Detail Keterangan Barang"
                            class="form-control" required></textarea>
                </div>
                </div>               
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary">Simpan Dan Lanjut</button>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="modal-bongkar">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title text-center">Form Informasi Bongkar</h4>
            </div>
            <div class="modal-body">
                <div class="form-group col-xs-6">
                    <label for="Dari" class="control-label ">Ke</label>
                        <textarea type="text" name="dari" placeholder="Kota Asal (Alamat lengkap)"
                            class="form-control" required></textarea><br>
                        <input type="text" name="zona" placeholder="Zona" class="form-control"
                            required><br>
                        <input type="text" name="nm_kontak" placeholder="Nama Kontak" class="form-control"
                            required><br>
                        <input type="text" name="no_kontak" placeholder="No Kontak" class="form-control"
                            required>

                </div><!-- /.form-group -->
                <div class="form-group col-xs-6">
                    <label for="Tanggal Bongkar" class="control-label ">Tanggal Bongkar</label>
                        <input type="date" name="tgl_Bongkar" placeholder="" class="form-control"
                            required>
                </div><!-- /.form-group -->
                <div class="form-group col-xs-6">
                    <label for="Jam Bongkar" class="control-label ">Jam Bongkar</label>
                        <input type="time" name="jam_Bongkar" placeholder="" class="form-control"
                            required>
                </div><!-- /.form-group -->
                <div class="form-group col-xs-6">
                    <label for="Satuan" class="control-label ">Satuan</label>
                        <select name="satuan" class="form-control chzn-select" tabindex="2" required="required">
                         <option value="satuan"></option>
                        </select>
                </div>
                <div class="form-group col-xs-6">
                    <label for="Nama Muatan" class="control-label ">Nama Muatan</label>
                        <input type="text" name="nm_muatan" placeholder="Nama Muatan"
                            class="form-control" required>
                </div>
                <div class="form-group col-xs-6">
                    <label for="Jumlah Kubikasi" class="control-label ">Jumlah Kubikasi</label>
                        <input type="text" name="jml_kubikasi" placeholder="Jumlah Kubikasi"
                            class="form-control" required>
                </div>
                <div class="form-group col-xs-6">
                    <label for="Jumlah Berat" class="control-label ">Jumlah Berat</label>
                        <input type="text" name="jml_berat" placeholder="Jumlah Berat (KG)"
                            class="form-control" required>
                    </div>  
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary">Simpan Dan Lanjut</button>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="modal-armada">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title text-center">Form Armada</h4>
            </div>
            <div class="modal-body">
              <div class="form-group">
                            <label for="Jenis Truk" class="control-label">Jenis Truk</label>
                                <input type="text" name="jns_truk" placeholder="Jenis Truk" class="form-control" required>
                        </div><!-- /.form-group -->  
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>