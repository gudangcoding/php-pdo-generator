

                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                     Jenis Truk
                    </h1>
                   <ol class="breadcrumb">
                        <li><a href="<?=base_index();?>"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="<?=base_index();?>jenis-truk">Jenis Truk</a></li>
                        <li class="active">Detail Jenis Truk</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
<div class="row">
    <div class="col-lg-12">
        <div class="box box-solid box-primary">
                                   <div class="box-header">
                                    <h3 class="box-title">Detail Jenis Truk</h3>
                                    <div class="box-tools pull-right">
                                        <button class="btn btn-info btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                        <button class="btn btn-info btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>

                  <div class="box-body">
                   <form class="form-horizontal">
                      <div class="form-group">
                        <label for="Kode Jenis Truk" class="control-label col-lg-2">Kode Jenis Truk</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->Kode_Jenis_Truk;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Nama Jenis Truk" class="control-label col-lg-2">Nama Jenis Truk</label>
                        <div class="col-lg-10">
                          <input type="text" disabled="" value="<?=$data_edit->Nama_Jenis_Truk;?>" class="form-control">
                        </div>
                      </div><!-- /.form-group -->

                   
                    </form>
                    <a href="<?=base_index();?>jenis-truk" class="btn btn-success btn-flat"><i class="fa fa-step-backward"></i> Kembali</a>
          
                  </div>
                  </div>
              </div>
</div>
                  
                </section><!-- /.content -->
        
