
           
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                     Tempo Pembayaran
                    </h1>
                           <ol class="breadcrumb">
                        <li><a href="<?=base_index();?>"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="<?=base_index();?>tempo-pembayaran">Tempo Pembayaran</a></li>
                        <li class="active">Tambah Tempo Pembayaran</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
<div class="row">
    <div class="col-lg-12"> 
        <div class="box box-solid box-primary">
                                 <div class="box-header">
                                    <h3 class="box-title">Tambah Tempo Pembayaran</h3>
                                    <div class="box-tools pull-right">
                                        <button class="btn btn-info btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                        <button class="btn btn-info btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>

                  <div class="box-body">
                     <form id="input" method="post" class="form-horizontal foto_banyak" action="<?=base_admin();?>modul/tempo_pembayaran/tempo_pembayaran_action.php?act=in">
                      <div class="form-group">
                        <label for="Nama Tempo Pembayaran" class="control-label col-lg-2">Nama Tempo Pembayaran</label>
                        <div class="col-lg-10">
                          <input type="text" name="Nama_Tempo_Pembayaran" placeholder="Nama Tempo Pembayaran" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Jumlah Hari" class="control-label col-lg-2">Jumlah Hari</label>
                        <div class="col-lg-10">
                          <input type="text" name="Jumlah_Hari" placeholder="Jumlah Hari" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->

                      
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
        
            