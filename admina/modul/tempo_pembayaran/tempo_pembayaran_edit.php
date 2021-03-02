

                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                      Tempo Pembayaran
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="<?=base_index();?>"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="<?=base_index();?>tempo-pembayaran">Tempo Pembayaran</a></li>
                        <li class="active">Edit Tempo Pembayaran</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
<div class="row">
    <div class="col-lg-12">
        <div class="box box-solid box-primary">
                                   <div class="box-header">
                                    <h3 class="box-title">Edit Tempo Pembayaran</h3>
                                    <div class="box-tools pull-right">
                                        <button class="btn btn-info btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                        <button class="btn btn-info btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>

                  <div class="box-body">
                     <form id="update" method="post" class="form-horizontal" action="<?=base_admin();?>modul/tempo_pembayaran/tempo_pembayaran_action.php?act=up">
                      <div class="form-group">
                        <label for="Tempo Pembayaran" class="control-label col-lg-2">Tempo Pembayaran</label>
                        <div class="col-lg-10">
                          <input type="text" name="tempo" id="jumlah_hari" value="<?=$data_edit->tempo;?>" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Jumlah Hari" class="control-label col-lg-2">Jumlah Hari</label>
                        <div class="col-lg-10">
                          <input type="text" name="jumlah_hari" id="jumlah_hari" value="<?=$data_edit->jumlah_hari;?>" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
                      <div class="form-group">
                        <label for="Keterangan" class="control-label col-lg-2">Keterangan</label>
                        <div class="col-lg-10">
                          <input type="text" name="keterangan" id="keterangan" value="<?=$data_edit->keterangan;?>" class="form-control" required> 
                        </div>
                      </div>

                      <input type="hidden" name="id" value="<?=$data_edit->id;?>">
                      <div class="form-group">
                        <label for="tags" class="control-label col-lg-2">&nbsp;</label>
                        <div class="col-lg-10">
                          <input type="submit" class="btn btn-primary btn-flat" value="submit">
                        </div>
                      </div><!-- /.form-group -->
                    </form>
                    <a href="<?=base_index();?>tempo-pembayaran" class="btn btn-success btn-flat"><i class="fa fa-step-backward"></i> Kembali</a>
          
                  </div>
                  </div>
              </div>
</div>
                  
                </section><!-- /.content -->
        
 