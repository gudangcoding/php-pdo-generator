

                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                     Informasi Bank
                    </h1>
                   <ol class="breadcrumb">
                        <li><a href="<?=base_index();?>"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="<?=base_index();?>informasi-bank">Informasi Bank</a></li>
                        <li class="active">Detail Informasi Bank</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
<div class="row">
    <div class="col-lg-12">
        <div class="box box-solid box-primary">
                                   <div class="box-header">
                                    <h3 class="box-title">Detail Informasi Bank</h3>
                                    <div class="box-tools pull-right">
                                        <button class="btn btn-info btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                        <button class="btn btn-info btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>

                  <div class="box-body">
                   <form class="form-horizontal">
                      <div class="form-group">
                        <label for="Nama Lengkap" class="control-label col-lg-2">Nama Lengkap</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->nama_lengkap;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Nama Bank" class="control-label col-lg-2">Nama Bank</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->nama_bank;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Nomor Rekening" class="control-label col-lg-2">Nomor Rekening</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->nomor_rek;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->

                   
                    </form>
                    <a href="<?=base_index();?>informasi-bank" class="btn btn-success btn-flat"><i class="fa fa-step-backward"></i> Kembali</a>
          
                  </div>
                  </div>
              </div>
</div>
                  
                </section><!-- /.content -->
        
