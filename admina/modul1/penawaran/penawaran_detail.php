

                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                     Penawaran
                    </h1>
                   <ol class="breadcrumb">
                        <li><a href="<?=base_index();?>"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="<?=base_index();?>penawaran">Penawaran</a></li>
                        <li class="active">Detail Penawaran</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
<div class="row">
    <div class="col-lg-12">
        <div class="box box-solid box-primary">
                                   <div class="box-header">
                                    <h3 class="box-title">Detail Penawaran</h3>
                                    <div class="box-tools pull-right">
                                        <button class="btn btn-info btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                        <button class="btn btn-info btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>

                  <div class="box-body">
                   <form class="form-horizontal">
                      <div class="form-group">
                        <label for="legal" class="control-label col-lg-2">legal</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->legal;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="jns_penawaran" class="control-label col-lg-2">jns_penawaran</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->jns_penawaran;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="nm_perusahaan" class="control-label col-lg-2">nm_perusahaan</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->nm_perusahaan;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="no_penawaran" class="control-label col-lg-2">no_penawaran</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->no_penawaran;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="tgl_penawaran" class="control-label col-lg-2">tgl_penawaran</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=tgl_indo($data_edit->tgl_penawaran);?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="prd_penawaran" class="control-label col-lg-2">prd_penawaran</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->prd_penawaran;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="layanan" class="control-label col-lg-2">layanan</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->layanan;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="sts_pajak" class="control-label col-lg-2">sts_pajak</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->sts_pajak;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="dari" class="control-label col-lg-2">dari</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->dari;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="tujuan" class="control-label col-lg-2">tujuan</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->tujuan;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="satuan" class="control-label col-lg-2">satuan</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->satuan;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="jns_truk" class="control-label col-lg-2">jns_truk</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->jns_truk;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="nominal" class="control-label col-lg-2">nominal</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->nominal;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="wkt_tempuh" class="control-label col-lg-2">wkt_tempuh</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->wkt_tempuh;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->

                   
                    </form>
                    <a href="<?=base_index();?>penawaran" class="btn btn-success btn-flat"><i class="fa fa-step-backward"></i> Kembali</a>
          
                  </div>
                  </div>
              </div>
</div>
                  
                </section><!-- /.content -->
        
