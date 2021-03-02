
           
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                     Suplier
                    </h1>
                           <ol class="breadcrumb">
                        <li><a href="<?=base_index();?>"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="<?=base_index();?>suplier">Suplier</a></li>
                        <li class="active">Tambah Suplier</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
<div class="row">
    <div class="col-lg-12"> 
        <div class="box box-solid box-primary">
                                 <div class="box-header">
                                    <h3 class="box-title">Tambah Suplier</h3>
                                    <div class="box-tools pull-right">
                                        <button class="btn btn-info btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                        <button class="btn btn-info btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>

                  <div class="box-body">
                     <form id="input" method="post" class="form-horizontal foto_banyak" action="<?=base_admin();?>modul/suplier/suplier_action.php?act=in">
                      <div class="form-group">
                        <label for="nm_perusahaan" class="control-label col-lg-2">nama perusahaan</label>
                        <div class="col-lg-10">
                          <input type="text" name="nm_perusahaan" placeholder="nm_perusahaan" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="alamat" class="control-label col-lg-2">Alamat</label>
                        <div class="col-lg-10">
                          <input type="text" name="alamat" placeholder="alamat" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="notlp" class="control-label col-lg-2">No Telp</label>
                        <div class="col-lg-10">
                          <input type="text" name="notlp" placeholder="notlp" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="status" class="control-label col-lg-2">Status</label>
                        <div class="col-lg-10">
                          <input type="text" name="status" placeholder="status" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="nm_lengkap" class="control-label col-lg-2">Nama Lengkap</label>
                        <div class="col-lg-10">
                          <input type="text" name="nm_lengkap" placeholder="nm_lengkap" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="posisi" class="control-label col-lg-2">Posisi</label>
                        <div class="col-lg-10">
                          <input type="text" name="posisi" placeholder="posisi" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="nohp" class="control-label col-lg-2">No Hp</label>
                        <div class="col-lg-10">
                          <input type="text" name="nohp" placeholder="nohp" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="email" class="control-label col-lg-2">Email</label>
                        <div class="col-lg-10">
                          <input type="text" data-rule-email="true" name="email" placeholder="email" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="nm_penagihan" class="control-label col-lg-2">Nama Penagihan</label>
                        <div class="col-lg-10">
                          <input type="text" name="nm_penagihan" placeholder="nm_penagihan" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="almt_penagihan" class="control-label col-lg-2">Alamat Penagihan</label>
                        <div class="col-lg-10">
                          <input type="text" name="almt_penagihan" placeholder="almt_penagihan" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="nm_bank" class="control-label col-lg-2">Nama Bank</label>
                        <div class="col-lg-10">
                          <input type="text" name="nm_bank" placeholder="nm_bank" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="norek" class="control-label col-lg-2">Nomor Rek</label>
                        <div class="col-lg-10">
                          <input type="text" name="norek" placeholder="norek" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="no_truk" class="control-label col-lg-2">Nomor Truk</label>
                        <div class="col-lg-10">
                          <input type="text" name="no_truk" placeholder="no_truk" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="jns_truk" class="control-label col-lg-2">Jenis Truk</label>
                        <div class="col-lg-10">
                          <input type="text" name="jns_truk" placeholder="jns_truk" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="stnk" class="control-label col-lg-2">STNK</label>
                        <div class="col-lg-10">
                          <input type="text" name="stnk" placeholder="stnk" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="exp_stnk" class="control-label col-lg-2">Exp STNK</label>
                        <div class="col-lg-10">
                          <input type="text" id="tgl1" data-rule-date="true" name="exp_stnk" placeholder="exp_stnk" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="pjg_bak" class="control-label col-lg-2">Panjang Bak</label>
                        <div class="col-lg-10">
                          <input type="text" name="pjg_bak" placeholder="pjg_bak" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="tinggi_bak" class="control-label col-lg-2">Tinggi Bak</label>
                        <div class="col-lg-10">
                          <input type="text" name="tinggi_bak" placeholder="tinggi_bak" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="lbr_bak" class="control-label col-lg-2">Lebar Bak</label>
                        <div class="col-lg-10">
                          <input type="text" name="lbr_bak" placeholder="lbr_bak" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="volume" class="control-label col-lg-2">Volume</label>
                        <div class="col-lg-10">
                          <input type="text" name="volume" placeholder="volume" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="kapasitas" class="control-label col-lg-2">Kapasitas</label>
                        <div class="col-lg-10">
                          <input type="text" name="kapasitas" placeholder="kapasitas" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="no_tarif" class="control-label col-lg-2">Nomor tarif</label>
                        <div class="col-lg-10">
                          <input type="text" name="no_tarif" placeholder="no_tarif" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="tgl_penawaran" class="control-label col-lg-2">Tanggal Penawaran</label>
                        <div class="col-lg-10">
                          <input type="text" id="tgl2" data-rule-date="true" name="tgl_penawaran" placeholder="tgl_penawaran" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="periode" class="control-label col-lg-2">Periode</label>
                        <div class="col-lg-10">
                          <input type="text" name="periode" placeholder="periode" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="tmp_bayar" class="control-label col-lg-2">Tempat Bayar</label>
                        <div class="col-lg-10">
                          <input type="text" id="tgl3" data-rule-date="true" name="tmp_bayar" placeholder="tmp_bayar" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="pelanggan" class="control-label col-lg-2">Pelanggan</label>
                        <div class="col-lg-10">
                          <input type="text" name="pelanggan" placeholder="pelanggan" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="dari" class="control-label col-lg-2">Dari</label>
                        <div class="col-lg-10">
                          <input type="text" name="dari" placeholder="dari" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="tujuan" class="control-label col-lg-2">Tujuan</label>
                        <div class="col-lg-10">
                          <input type="text" name="tujuan" placeholder="tujuan" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="satuan" class="control-label col-lg-2">Satuan</label>
                        <div class="col-lg-10">
                          <input type="text" name="satuan" placeholder="satuan" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="nilai" class="control-label col-lg-2">Nilai</label>
                        <div class="col-lg-10">
                          <input type="text" name="nilai" placeholder="nilai" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="satuan_pajak" class="control-label col-lg-2">Satuan Pajak</label>
                        <div class="col-lg-10">
                          <input type="text" name="satuan_pajak" placeholder="satuan_pajak" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="satuan_penawaran" class="control-label col-lg-2">Satuan Penawaran</label>
                        <div class="col-lg-10">
                          <input type="text" name="satuan_penawaran" placeholder="satuan_penawaran" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->

                      
                      <div class="form-group">
                        <label for="tags" class="control-label col-lg-2">&nbsp;</label>
                        <div class="col-lg-10">
                          <input type="submit" class="btn btn-primary btn-flat" value="submit">
                        </div>
                      </div><!-- /.form-group -->
                    </form>
 <a href="<?=base_index();?>suplier" class="btn btn-success btn-flat"><i class="fa fa-step-backward"></i> Kembali</a>
          
                  </div>
                  </div>
              </div>
</div>
                  
                </section><!-- /.content -->
        
<script type="text/javascript">
  $("#simpan").click(function(event) {
            var id = $("#id").val();
            if (id == '') {
                $.ajax({
                    url: '<?php echo base_admin()?>modul/suplier/suplier_action.php?act=in',
                    type: 'POST',
                    data: {
                        id: $("#id").val(),
                        nm_perusahaan: $("#nm_perusahaan").val(),
                        alamat: $("#alamat").val(),
                        notlp: $("#notlp").val(),
                        status: $("#status").val(),
                        nm_lengkap: $("#nm_lengkap").val(),
                        posisi: $("#posisi").val(),
                        nohp: $("#nohp").val(),
                        email: $("#email").val(),
                        npwp: $("#npwp").val(),
                        nm_penagihan: $("#nm_penagihan").val(),
                        almt_penagihan: $("#almt_penagihan").val(),
                        nm_bank: $("#nm_bank").val(),
                        norek: $("#norek").val(),
                        no_truk: $("#no_truk").val(),
                        jns_truk: $("#jns_truk").val(),
                        stnk: $("#stnk").val(),
                        exp_stnk: $("#exp_stnk").val(),
                        pjg_bak: $("#pjg_bak").val(),
                        tinggi_bak: $("#tinggi_bak").val(),
                        lbr_bak: $("#lbr_bak").val(),
                        volume: $("#volume").val(),
                        kapasitas: $("#kapasitas").val(),
                        no_tarif: $("#no_tarif").val(),
                        tgl_penawaran: $("#tgl_penawaran").val(),
                        periode: $("#periode").val(),
                        tmp_bayar: $("#tmp_bayar").val(),
                        pelanggan: $("#pelanggan").val(),
                        dari: $("#dari").val(),
                        tujuan: $("#tujuan").val(),
                        satuan: $("#satuan").val(),
                        nilai: $("#nilai").val(),
                        satuan_pajak: $("#satuan_pajak").val(),
                        satuan_penawaran: $("#satuan_penawaran").val()
                    },
                    success: function(msg) {
                        if (msg == "sukses") {
                            //table.ajax.reload( ); 
                            //load();
                            var table = $('#tbsuplier').DataTable();
                            table.ajax.reload(null, false);
                            kosong();
                            $('#modal-info').modal('hide');

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
                    url: '<?php echo base_admin()?>modul/suplier/suplier_data.php',
                    type: 'POST',
                    data: {
                        id: $("#id").val(),
                        nm_perusahaan: $("#nm_perusahaan").val(),
                        alamat: $("#alamat").val(),
                        notlp: $("#notlp").val(),
                        status: $("#status").val(),
                        nm_lengkap: $("#nm_lengkap").val(),
                        posisi: $("#posisi").val(),
                        nohp: $("#nohp").val(),
                        email: $("#email").val(),
                        npwp: $("#npwp").val(),
                        nm_penagihan: $("#nm_penagihan").val(),
                        almt_penagihan: $("#almt_penagihan").val(),
                        nm_bank: $("#nm_bank").val(),
                        norek: $("#norek").val(),
                        no_truk: $("#no_truk").val(),
                        jns_truk: $("#jns_truk").val(),
                        stnk: $("#stnk").val(),
                        exp_stnk: $("#exp_stnk").val(),
                        pjg_bak: $("#pjg_bak").val(),
                        tinggi_bak: $("#tinggi_bak").val(),
                        lbr_bak: $("#lbr_bak").val(),
                        volume: $("#volume").val(),
                        kapasitas: $("#kapasitas").val(),
                        no_tarif: $("#no_tarif").val(),
                        tgl_penawaran: $("#tgl_penawaran").val(),
                        periode: $("#periode").val(),
                        tmp_bayar: $("#tmp_bayar").val(),
                        pelanggan: $("#pelanggan").val(),
                        dari: $("#dari").val(),
                        tujuan: $("#tujuan").val(),
                        satuan: $("#satuan").val(),
                        nilai: $("#nilai").val(),
                        satuan_pajak: $("#satuan_pajak").val(),
                        satuan_penawaran: $("#satuan_penawaran").val(),
                    },
                    success: function(msg) {
                        if (msg == "sukses") {
                            //table.ajax.reload(); 
                            //load();
                            var table = $('#tbsuplier').DataTable();
                            table.ajax.reload(null, false);
                            kosong();
                            $('#modal-info').modal('hide');
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
</script>