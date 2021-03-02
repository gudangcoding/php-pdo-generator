

                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                     Tempo Pembayaran
                    </h1>
                   <ol class="breadcrumb">
                        <li><a href="<?=base_index();?>"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="<?=base_index();?>tempo-pembayaran">Tempo Pembayaran</a></li>
                        <li class="active">Detail Tempo Pembayaran</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
<div class="row">
    <div class="col-lg-12">
        <div class="box box-solid box-primary">
                                   <div class="box-header">
                                    <h3 class="box-title">Detail Tempo Pembayaran</h3>
                                    <div class="box-tools pull-right">
                                        <button class="btn btn-info btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                        <button class="btn btn-info btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>

                  <div class="box-body">
                   <form class="form-horizontal">
                      <div class="form-group">
                        <label for="Nama Tempo Pembayaran" class="control-label col-lg-2">Nama Tempo Pembayaran</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->Nama_Tempo_Pembayaran;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Jumlah Hari" class="control-label col-lg-2">Jumlah Hari</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->Jumlah_Hari;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->

                   
                    </form>
                    <a href="<?=base_index();?>tempo-pembayaran" class="btn btn-success btn-flat"><i class="fa fa-step-backward"></i> Kembali</a>
          
                  </div>
                  </div>
              </div>
</div>
                  
                </section><!-- /.content -->
        
