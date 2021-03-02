

                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                      Suplier
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="<?=base_index();?>"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="<?=base_index();?>suplier">Suplier</a></li>
                        <li class="active">Edit Suplier</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
<div class="row">
    <div class="col-lg-12">
        <div class="box box-solid box-primary">
                                   <div class="box-header">
                                    <h3 class="box-title">Edit Suplier</h3>
                                    <div class="box-tools pull-right">
                                        <button class="btn btn-info btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                        <button class="btn btn-info btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>

                  <div class="box-body">
                     <form id="update" method="post" class="form-horizontal" action="<?=base_admin();?>modul/suplier/suplier_action.php?act=up">
                      <div class="form-group">
                        <label for="nm_perusahaan" class="control-label col-lg-2">nm_perusahaan</label>
                        <div class="col-lg-10">
                          <input type="text" name="nm_perusahaan" value="<?=$data_edit->nm_perusahaan;?>" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="alamat" class="control-label col-lg-2">alamat</label>
                        <div class="col-lg-10">
                          <input type="text" name="alamat" value="<?=$data_edit->alamat;?>" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="notlp" class="control-label col-lg-2">notlp</label>
                        <div class="col-lg-10">
                          <input type="text" name="notlp" value="<?=$data_edit->notlp;?>" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="status" class="control-label col-lg-2">status</label>
                        <div class="col-lg-10">
                          <input type="text" name="status" value="<?=$data_edit->status;?>" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="nm_lengkap" class="control-label col-lg-2">nm_lengkap</label>
                        <div class="col-lg-10">
                          <input type="text" name="nm_lengkap" value="<?=$data_edit->nm_lengkap;?>" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="posisi" class="control-label col-lg-2">posisi</label>
                        <div class="col-lg-10">
                          <input type="text" name="posisi" value="<?=$data_edit->posisi;?>" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="nohp" class="control-label col-lg-2">nohp</label>
                        <div class="col-lg-10">
                          <input type="text" name="nohp" value="<?=$data_edit->nohp;?>" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="email" class="control-label col-lg-2">email</label>
                        <div class="col-lg-10">
                          <input type="text"  data-rule-email="true" name="email" value="<?=$data_edit->email;?>" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="nm_penagihan" class="control-label col-lg-2">nm_penagihan</label>
                        <div class="col-lg-10">
                          <input type="text" name="nm_penagihan" value="<?=$data_edit->nm_penagihan;?>" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="almt_penagihan" class="control-label col-lg-2">almt_penagihan</label>
                        <div class="col-lg-10">
                          <input type="text" name="almt_penagihan" value="<?=$data_edit->almt_penagihan;?>" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="nm_bank" class="control-label col-lg-2">nm_bank</label>
                        <div class="col-lg-10">
                          <input type="text" name="nm_bank" value="<?=$data_edit->nm_bank;?>" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="norek" class="control-label col-lg-2">norek</label>
                        <div class="col-lg-10">
                          <input type="text" name="norek" value="<?=$data_edit->norek;?>" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="no_truk" class="control-label col-lg-2">no_truk</label>
                        <div class="col-lg-10">
                          <input type="text" name="no_truk" value="<?=$data_edit->no_truk;?>" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="jns_truk" class="control-label col-lg-2">jns_truk</label>
                        <div class="col-lg-10">
                          <input type="text" name="jns_truk" value="<?=$data_edit->jns_truk;?>" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="stnk" class="control-label col-lg-2">stnk</label>
                        <div class="col-lg-10">
                          <input type="text" name="stnk" value="<?=$data_edit->stnk;?>" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="exp_stnk" class="control-label col-lg-2">exp_stnk</label>
                        <div class="col-lg-10">
                          <input type="text" id="tgl1" data-rule-date="true" name="exp_stnk" value="<?=$data_edit->exp_stnk;?>" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="pjg_bak" class="control-label col-lg-2">pjg_bak</label>
                        <div class="col-lg-10">
                          <input type="text" name="pjg_bak" value="<?=$data_edit->pjg_bak;?>" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="tinggi_bak" class="control-label col-lg-2">tinggi_bak</label>
                        <div class="col-lg-10">
                          <input type="text" name="tinggi_bak" value="<?=$data_edit->tinggi_bak;?>" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="lbr_bak" class="control-label col-lg-2">lbr_bak</label>
                        <div class="col-lg-10">
                          <input type="text" name="lbr_bak" value="<?=$data_edit->lbr_bak;?>" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="volume" class="control-label col-lg-2">volume</label>
                        <div class="col-lg-10">
                          <input type="text" name="volume" value="<?=$data_edit->volume;?>" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="kapasitas" class="control-label col-lg-2">kapasitas</label>
                        <div class="col-lg-10">
                          <input type="text" name="kapasitas" value="<?=$data_edit->kapasitas;?>" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="no_tarif" class="control-label col-lg-2">no_tarif</label>
                        <div class="col-lg-10">
                          <input type="text" name="no_tarif" value="<?=$data_edit->no_tarif;?>" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="tgl_penawaran" class="control-label col-lg-2">tgl_penawaran</label>
                        <div class="col-lg-10">
                          <input type="text" id="tgl2" data-rule-date="true" name="tgl_penawaran" value="<?=$data_edit->tgl_penawaran;?>" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="periode" class="control-label col-lg-2">periode</label>
                        <div class="col-lg-10">
                          <input type="text" name="periode" value="<?=$data_edit->periode;?>" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="tmp_bayar" class="control-label col-lg-2">tmp_bayar</label>
                        <div class="col-lg-10">
                          <input type="text" id="tgl3" data-rule-date="true" name="tmp_bayar" value="<?=$data_edit->tmp_bayar;?>" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="pelanggan" class="control-label col-lg-2">pelanggan</label>
                        <div class="col-lg-10">
                          <input type="text" name="pelanggan" value="<?=$data_edit->pelanggan;?>" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="dari" class="control-label col-lg-2">dari</label>
                        <div class="col-lg-10">
                          <input type="text" name="dari" value="<?=$data_edit->dari;?>" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="tujuan" class="control-label col-lg-2">tujuan</label>
                        <div class="col-lg-10">
                          <input type="text" name="tujuan" value="<?=$data_edit->tujuan;?>" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="satuan" class="control-label col-lg-2">satuan</label>
                        <div class="col-lg-10">
                          <input type="text" name="satuan" value="<?=$data_edit->satuan;?>" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="nilai" class="control-label col-lg-2">nilai</label>
                        <div class="col-lg-10">
                          <input type="text" name="nilai" value="<?=$data_edit->nilai;?>" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="satuan_pajak" class="control-label col-lg-2">satuan_pajak</label>
                        <div class="col-lg-10">
                          <input type="text" name="satuan_pajak" value="<?=$data_edit->satuan_pajak;?>" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="satuan_penawaran" class="control-label col-lg-2">satuan_penawaran</label>
                        <div class="col-lg-10">
                          <input type="text" name="satuan_penawaran" value="<?=$data_edit->satuan_penawaran;?>" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->

                      <input type="hidden" name="id" value="<?=$data_edit->id;?>">
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
        
 