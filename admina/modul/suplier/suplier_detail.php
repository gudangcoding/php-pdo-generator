

                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                     Suplier
                    </h1>
                   <ol class="breadcrumb">
                        <li><a href="<?=base_index();?>"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="<?=base_index();?>suplier">Suplier</a></li>
                        <li class="active">Detail Suplier</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
<div class="row">
    <div class="col-lg-12">
        <div class="box box-solid box-primary">
                                   <div class="box-header">
                                    <h3 class="box-title">Detail Suplier</h3>
                                    <div class="box-tools pull-right">
                                        <button class="btn btn-info btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                        <button class="btn btn-info btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>

                  <div class="box-body">
                   <form class="form-horizontal">
                      <div class="form-group">
                        <label for="Nama Perusahaan" class="control-label col-lg-2">Nama Perusahaan</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->nm_perusahaan;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Alamat" class="control-label col-lg-2">Alamat</label>
                        <div class="col-lg-10">
                          <textarea id="editbox" name="alamat" disabled="" class="editbox"required><?=$data_edit->alamat;?> </textarea>
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Nomor Telp" class="control-label col-lg-2">Nomor Telp</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->notlp;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Status" class="control-label col-lg-2">Status</label>
                        <div class="col-lg-10">
                          <?php if ($data_edit->status=="Aktif") {
      ?>
      <input name="status" class="make-switch" disabled type="checkbox" checked>
      <?php
    } else {
      ?>
      <input name="status" class="make-switch" disabled type="checkbox">
      <?php
    }?>
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Nama Lengkap" class="control-label col-lg-2">Nama Lengkap</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->nm_lengkap;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Posisi" class="control-label col-lg-2">Posisi</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->posisi;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="No Hp" class="control-label col-lg-2">No Hp</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->nohp;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Email" class="control-label col-lg-2">Email</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->email;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Nama Penagihan" class="control-label col-lg-2">Nama Penagihan</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->nm_penagihan;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Alamat Penagihan" class="control-label col-lg-2">Alamat Penagihan</label>
                        <div class="col-lg-10">
                          <textarea id="editbox" name="almt_penagihan" disabled="" class="editbox"required><?=$data_edit->almt_penagihan;?> </textarea>
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="nama Bank" class="control-label col-lg-2">nama Bank</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->nm_bank;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Cabang Bank" class="control-label col-lg-2">Cabang Bank</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->cb_bank;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Kode Bank" class="control-label col-lg-2">Kode Bank</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->kode_bank;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Nomor Rek" class="control-label col-lg-2">Nomor Rek</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->norek;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Nomor Truk" class="control-label col-lg-2">Nomor Truk</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->no_truk;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Jenis Truk" class="control-label col-lg-2">Jenis Truk</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->jns_truk;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="No STNK" class="control-label col-lg-2">No STNK</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->stnk;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Exp STNK" class="control-label col-lg-2">Exp STNK</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=tgl_indo($data_edit->exp_stnk);?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Panjang Bak" class="control-label col-lg-2">Panjang Bak</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->pjg_bak;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Tinggi Bak" class="control-label col-lg-2">Tinggi Bak</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->tinggi_bak;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Lebar Bak" class="control-label col-lg-2">Lebar Bak</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->lbr_bak;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Volume" class="control-label col-lg-2">Volume</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->volume;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Kapasitas Muatan" class="control-label col-lg-2">Kapasitas Muatan</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->kapasitas;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="No Tarif" class="control-label col-lg-2">No Tarif</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->no_tarif;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Tanggal Penawaran" class="control-label col-lg-2">Tanggal Penawaran</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=tgl_indo($data_edit->tgl_penawaran);?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Periode" class="control-label col-lg-2">Periode</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->periode;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Tempo Bayar" class="control-label col-lg-2">Tempo Bayar</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->tmp_bayar;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Pelanggan" class="control-label col-lg-2">Pelanggan</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->pelanggan;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Dari" class="control-label col-lg-2">Dari</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->dari;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Tujuan" class="control-label col-lg-2">Tujuan</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->tujuan;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Satuan" class="control-label col-lg-2">Satuan</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->satuan;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Nilai" class="control-label col-lg-2">Nilai</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->nilai;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Status Pajak" class="control-label col-lg-2">Status Pajak</label>
                        <div class="col-lg-10">
                          <?php if ($data_edit->status_pajak=="Inklusif") {
      ?>
      <input name="status_pajak" class="make-switch" disabled type="checkbox" checked>
      <?php
    } else {
      ?>
      <input name="status_pajak" class="make-switch" disabled type="checkbox">
      <?php
    }?>
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Satuan Penawaran" class="control-label col-lg-2">Satuan Penawaran</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->satuan_penawaran;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->

                   
                    </form>
                    <a href="<?=base_index();?>suplier" class="btn btn-success btn-flat"><i class="fa fa-step-backward"></i> Kembali</a>
          
                  </div>
                  </div>
              </div>
</div>
                  
                </section><!-- /.content -->
        
