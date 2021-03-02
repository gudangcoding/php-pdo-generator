

                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                     Biaya
                    </h1>
                   <ol class="breadcrumb">
                        <li><a href="<?=base_index();?>"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="<?=base_index();?>biaya">Biaya</a></li>
                        <li class="active">Detail Biaya</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
<div class="row">
    <div class="col-lg-12">
        <div class="box box-solid box-primary">
                                   <div class="box-header">
                                    <h3 class="box-title">Detail Biaya</h3>
                                    <div class="box-tools pull-right">
                                        <button class="btn btn-info btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                        <button class="btn btn-info btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>

                  <div class="box-body">
                   <form class="form-horizontal">
                      <div class="form-group">
                        <label for="Menu" class="control-label col-lg-2">Menu</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->Menu;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Nama Biaya" class="control-label col-lg-2">Nama Biaya</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->Nama_Biaya;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Deskripsi" class="control-label col-lg-2">Deskripsi</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->Deskripsi;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Layanan Berlangganan" class="control-label col-lg-2">Layanan Berlangganan</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->Layanan_Berlangganan;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->

                   
                    </form>
                    <a href="<?=base_index();?>biaya" class="btn btn-success btn-flat"><i class="fa fa-step-backward"></i> Kembali</a>
          
                  </div>
                  </div>
              </div>
</div>
                  
                </section><!-- /.content -->
        
